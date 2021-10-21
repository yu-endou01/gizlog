<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Socialite;

class AuthenticateController extends Controller
{
    protected $users;

    public function __construct(User $users)
    {
        $this->users = $users;
    }

    /**
     * @return mixed
     */
    public function callSlackApi()
    {
        return Socialite::with('slack')->scopes([
            'identity.basic',
            'identity.email',
            'identity.avatar',
        ])->redirect();
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function loginBySlackUserInfo()
    {
        if (array_key_exists('error', $_GET)) {
            return redirect('/');
        };

        $slackUserInfos = Socialite::with('slack')->stateless()->user();
        $userInstance = $this->users->createUserInstance($slackUserInfos->id);

        if ($userInstance['deleted_at'] !== null) {
            $this->users->restoreDeletedUser($slackUserInfos->id);
        }
        $this->users->saveUserInfos($userInstance, $slackUserInfos);

        $loginUser = $this->users
                          ->where('slack_user_id', $slackUserInfos->id)
                          ->first();
        Auth::login($loginUser);
        return redirect('/');
    }
}


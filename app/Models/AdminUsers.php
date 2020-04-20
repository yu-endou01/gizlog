<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
class AdminUsers     extends Authenticatable {
    use SoftDeletes;

 protected $fillable = [
        'name', 
        'password', 
        'user_info_id', 
        'privileges', 
    ];

    protected $hidden = [
        'password',
    ];

    protected $dates = ['deleted_at'];

    public function getUsersBasedOnTheConditions($inputs){
        return $this->whereHas('stores');
    }

    public   function getAdminUser($adminUserId)
    {
        return $this->when($adminUserId, 
            function($query)use($adminUserId) {
            return $query->where('id',$adminUserId);
        });

    }

    public function     getAdminUsersByPositionCode($adminUserInfoId)
    {
            $adminUserInfo = $this->when($adminUserInfoId, function ($query) use ( $adminUserInfoId ) {
                return $query->where('id', $adminUserInfoId);
            });

            return $this->filterByPositionCode($adminUserInfo['position_code'])
                    ->get();
    }

}


<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DailyReport;
use Illuminate\Support\Facades\Auth;

class DailyReportController extends Controller
{
    private $dailyReport;

    public function __construct(DailyReport $dailyReport)
    {
        $this->dailyReport = $dailyReport;
    }

    public function index()
    {
        $dailyReports = $this->dailyReport->all();
        return view('user.daily_report.index', compact('dailyReports'));
    }

    public function create()
    {
        return view('user.daily_report.create');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $this->dailyReport->user_id = Auth::id();
        $this->dailyReport->fill($inputs)->save();
        return redirect()->route('report.index');
    }

    public function show($id)
    {
        $dailyReport = $this->dailyReport->find($id);
        return view('user.daily_report.show', compact('dailyReport'));
    }

    public function delete($id)
    {
        $this->dailyReport->find($id)->delete();
        return redirect()->route('report.index');
    }
}

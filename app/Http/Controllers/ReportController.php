<?php

namespace App\Http\Controllers;
use App\Abstractions\IReportService;
use App\Models\Trash;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ReportController extends Controller
{
    private $reportService;

    public function __construct(IReportService $service)
    {
        $this->reportService = $service;
    }

    public function allTrash()
    {
        dd($this->reportService->trashYear(2019));
        //dd($this->reportService->trashMonthly(2019, 5));
        //dd($this->reportService->topCurrentMonth());
        //dd(Carbon::today()->month);
        //dd(Trash::first()->created_at);
        //dd($this->reportService->getTrashAll());
        $count = $this->reportService->getTrashAll();
        return view('trash.first', compact('count'));
    }

    public function allUserTrash()
    {
        $count = $this->reportService->getAllTrashByUser(auth()->id());
        return view('trash.first', compact('count'));
    }
}

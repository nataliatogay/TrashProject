<?php
namespace App\Services;

use App\Abstractions\IReportService;
use App\Models\Trash;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class ReportService implements IReportService {

    public function getTrashAll(): int {
        return Trash::all()->count();
    }

    public function getAllTrashByUser($id): int {
        return Trash::all()->where('user_id', $id)->count();
    }

    // public function bestMonthUser(): User {
    //     $monthTrash = Trash::all()->where()
    // }

    public function topCurrentMonth() {
        return Trash::where('created_at', '>=', Carbon::now()->startOfMonth())->groupBy('user_id')->selectRaw('user_id, count(*) as total')->orderBy('total', 'desc')->get()->toArray();
         //Trash::where('created_at', '>=', Carbon::now()->startOfMonth())->groupBy('user_id')->get();

        // SELECT `user_id`, count(*) as total FROM `trashes` group by `user_id` order by total
       // DB::
    }

    public function topTotal() {
        return Trash::groupBy('user_id')->selectRaw('user_id, count(*) as total')->orderBy('total', 'desc')->get()->toArray();
    }

    public function allOrders(){
        return Order::all()->count();
    }

    public function topSpender() {

    }

    public function trashMonthly($year, $month) {
        return Trash::where('created_at', '>=', Carbon::create($year, $month))->where('created_at', '<', Carbon::create($year, $month + 1))->get()->count();
    }

    public function trashYear($year){
        $monthLast = 12;
        if($year == Carbon::now()->year) {
            $monthLast = Carbon::now()->month - 1;
        }
        $report = [];
        for($i = 0; $i < $monthLast; $i++) {
            $report[$i+1] = $this->trashMonthly($year, $i+1);
        }
        return $report;
    }


}

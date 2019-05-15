<?php

namespace App\Abstractions;

interface IReportService {
    public function getTrashAll(): int;
    public function getAllTrashByUser($id): int;
    public function topCurrentMonth();
    public function topTotal();
    public function allOrders();
    public function topSpender();
    public function trashMonthly($year, $month);
    public function trashYear($year);
    // public function bestMonthUser(): User;
}

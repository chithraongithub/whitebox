<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;

class QuestionController extends Controller
{
    public function firstQuestion()
    {
        $employees = $this->getEmployeesData();
        $mostValuableSale = $employees->map(function ($employee) {
            return collect($employee['sales'])->pluck('order_total')->max();
        })->max();
        $employeeWithMostValuableSale = $employees->first(function ($employee) use ($mostValuableSale) {
            return collect($employee['sales'])->pluck('order_total')->max() === $mostValuableSale;
        });
        return view('first_question', compact('employees', 'mostValuableSale','employeeWithMostValuableSale'));
    }

    public function getEmployeesData()
    {
        $employees = collect([
            [
                'name' => 'John',
                'email' => 'john3@example.com',
                'sales' => [
                    ['customer' => 'The Blue Rabbit Company', 'order_total' => 7444],
                    ['customer' => 'Black Melon', 'order_total' => 1445],
                    ['customer' => 'Foggy Toaster', 'order_total' => 700],
                ],
            ],
            [
                'name' => 'Jane',
                'email' => 'jane8@example.com',
                'sales' => [
                    ['customer' => 'The Grey Apple Company', 'order_total' => 203],
                    ['customer' => 'Yellow Cake', 'order_total' => 8730],
                    ['customer' => 'The Piping Bull Company', 'order_total' => 3337],
                    ['customer' => 'The Cloudy Dog Company', 'order_total' => 5310],
                ],
            ],
            [
                'name' => 'Dave',
                'email' => 'dave1@example.com',
                'sales' => [
                    ['customer' => 'The Acute Toaster Company', 'order_total' => 1091],
                    ['customer' => 'Green Mobile', 'order_total' => 2370],
                ],
            ],
        ]);
        return $employees;
    }

    public function secondQuestion(){
        $customerWithMoreMoneySpent = Order::withSum('orderDetails','priceEach')->with('customer')->latest('order_details_sum_price_each')->first();
        $customerWithHighestOrders = Customer::withCount('orders')->latest('orders_count')->first();
        return view('second_question', compact('customerWithHighestOrders', 'customerWithMoreMoneySpent'));
    }

    public function thirdQuestion(){
        $scores = collect ([
            ['score' => 76, 'team' => 'A'],
            ['score' => 62, 'team' => 'B'],
            ['score' => 82, 'team' => 'C'],
            ['score' => 86, 'team' => 'D'],
            ['score' => 91, 'team' => 'E'],
            ['score' => 67, 'team' => 'F'],
            ['score' => 67, 'team' => 'G'],
            ['score' => 82, 'team' => 'H'],
        ]);
        $ranks = $scores->sortByDesc('score')->values()->map(function ($item, $key) {
                return ['rank' => $key + 1, 'team' => $item['team'], 'score' => $item['score']];
            })->groupBy('score')->flatMap(function ($item) {
                return $item->map(function ($subItem, $key) use ($item) {
                    return ['rank' => $item->first()['rank'], 'team' => $subItem['team'], 'score' => $subItem['score']];
                });
            })->sortBy('rank');
        return view('third_question', compact('scores', 'ranks'));
    }
}

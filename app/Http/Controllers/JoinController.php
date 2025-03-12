<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinController extends Controller
{
    public function index() {
        $usersWithOrders = DB::table('users')->join('orders', 'users.id', '=', 'orders.user_id')->select('users.name', 'orders.product_name')->get();

        return response()->json([
            'success' => true,
            'message' => 'Successfully retrieved users with their orders',
            'data' => $usersWithOrders,
        ]);
    }
}

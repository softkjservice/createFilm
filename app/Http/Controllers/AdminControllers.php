<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminControllers extends Controller
{
    /**
     *
     *
     * @return View
     */
    public function index(): view
    {
        $user = Auth::user();

        return view("admin.index", [
            'user' => $user
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function list(): View
    {
        return view("orders.index", [
            'orders' => Order::paginate(10),
            'user' =>  Auth::user()
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function listToDo(): View
    {
        return view("orders.index", [
            'orders' => Order::where('confirmed','1')->paginate(10),
            'user' =>  Auth::user()
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function listToDelete(): View
    {
        return view("orders.index", [
            'orders' => Order::where('confirmed','0')->paginate(10),
            'user' =>  Auth::user()
        ]);
    }
}

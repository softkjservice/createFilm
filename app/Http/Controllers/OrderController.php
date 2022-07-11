<?php

namespace App\Http\Controllers;



//use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpsertProductRequest;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): view
    {
        $user = Auth::user();
        $orders=$user->orders()->get();
        //$orders=Order::All();
        //$orders=Order::All()->where("user_id","$user->id")->get();
        //$orders = DB::table('orders')->where('user_id', '$user->id')->get();
        //dd($orders[0]->title);
        return view("orders.index", [
            'user' => $user,
            'orders' => $orders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): view
    {
        return view("orders.create", [
            'user' => 'K. Jaworski'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UpsertProductRequest  $request
     * @return RedirectResponse
     */
    public function store(UpsertProductRequest $request): RedirectResponse
    {
        $order=new Order($request->validated());
        $order->user_id=Auth::id();
        $order->save();
        return redirect(route('pictures.index'))->with('status', 'Udało się');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id) : view
    {
        $order=Order::findOrFail($id);
        $user=$order->user;
        $pictures=$order->pictures()->orderBy('index')->get();
        return view("orders.show", [
            'pictures' => $pictures,
            'order' => $order,
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit($id) : view
    {
        $order=Order::findOrFail($id);

        return view("orders.edit", [
            'order' => $order
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpsertProductRequest  $request
     * @param  Order $order
     * @return RedirectResponse
     */
    public function update(UpsertProductRequest $request, Order $order): RedirectResponse
    {
        $order->fill($request->validated());
        $order->confirmed=true;
        $order->save();
        //return redirect()->route('orders.index');
        return redirect(route('pictures.index'))->with('status', 'Udało się');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

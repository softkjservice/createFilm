<?php

namespace App\Http\Controllers;



//use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpsertProductRequest;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
        return view("orders.index", [
            'user' => 'K. Jaworski'
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
        //dd($request);
        //dd($order);
        $order->user_id=Auth::id();
        //dd($order);
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
        return view("pictures.show", [
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

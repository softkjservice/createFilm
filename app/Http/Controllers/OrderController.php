<?php

namespace App\Http\Controllers;



//use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpsertProductRequest;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use PDF;
use Symfony\Component\HttpFoundation\StreamedResponse;
use App\Classis\Utilities;

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
        $orders=$user->orders()->where('editable','1')->where('confirmed','1')->paginate(10);
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
        //$order->confirmed=true;
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
        //dd($order);
        $order->fill($request->validated());
        //$order->confirmed=true;
        $order->save();
        //return redirect()->route('orders.index');
        return redirect(route('pictures.index'))->with('status', 'Udało się');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse|StreamedResponse
     */
    public function destroy($id): RedirectResponse|StreamedResponse
    {
       // dd($id);
        Utilities::orderPicturesDelete($id);
        $order=Order::findOrFail($id);
        $order->pictures()->delete();
        //Storage::deleteDirectory('xtestx');
        $order->delete();
        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function downloadPDF($id)
    {
        $order=Order::findOrFail($id);
        $user=$order->user;
        $pictures=$order->pictures()->orderBy('index')->get();
        $pdf = PDF::loadView('orders.pdf', compact('order','user','pictures'));
        return $pdf->download('order.pdf');
        /*return redirect(route('orders.index'))->with('status', 'Udało się');*/
        //dd($id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UpsertProductRequest  $request
     * @return RedirectResponse
     */
    public function confirm($id): RedirectResponse
    {
        //dd($id);
        $order=Order::findOrFail($id);
        $order->confirmed=true;
        $order->save();
        return redirect(route('orders.index'))->with('status', 'Udało się');
    }
}

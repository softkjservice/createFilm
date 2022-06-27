<?php

namespace App\Http\Controllers;

use App\Classis\PictureIndexAdd;
use App\Http\Requests\UpsertPictureRequest;
use App\Models\Order;
use App\Models\Picture;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PictureControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index() : view
    {
        //dd(Auth::user());
        $orderId=Auth::user()->latestOrder->id;
        $order=Order::findOrFail($orderId);
        $pictures=$order->pictures()->orderBy('index')->get();
        return view("pictures.index", [
            'pictures' => $pictures,
            'orderId' => $orderId,
            'user' => 'K. Jaworski'
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pictures.create', ['user'=>'Krzysztof Jaworski']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpsertPictureRequest $request)
    {
        $picture = new Picture($request->validated());
        $picture->order_id=Auth::user()->latestOrder->id;
        if ($request->hasFile('image')) {
            $picture->image_path = $request->file('image')->store($picture->order_id);  //dla każdego zamówienia tworzy nowy katalog o nazwie takiej jak numer zamówienia
        }

        $indexAdd=new PictureIndexAdd($picture->order_id);
        $picture->index=$indexAdd->indexAdd();
        $picture->oryginal_name=$request->file('image')->getClientOriginalName();
        $picture->image_size=$request->file('image')->getSize();
        $picture->save();
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
     * @return RedirectResponse
     */
    public function destroy(Request $request,$id): RedirectResponse
    {
       // dd($id);
        $picture = Picture::findOrFail($id);


        //$this->authorize($post);

        $picture->delete();

        // BlogPost::destroy($id);

        $request->session()->flash('status', 'Blog post was deleted!');

        return redirect()->route('pictures.index');
    }
}

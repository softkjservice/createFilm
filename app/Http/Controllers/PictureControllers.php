<?php

namespace App\Http\Controllers;

use App\Classis\PictureIndexAdd;
use App\Http\Requests\UpsertPictureRequest;
use App\Models\Order;
use App\Models\Picture;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
       $orderId=session('order_id');
       if (is_null($orderId)){
           return view("home");
       }
        $order=Order::findOrFail($orderId);
        //$order=Order::findOrFail(session('order_id'));
        //dd($order);
       $pictures=$order->pictures()->orderBy('index')->get();

       //d($pictures);
       //pictures=Picture::all();
        return view("pictures.index", [
            'pictures' => $pictures,
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
        //dd($request);
        $picture = new Picture($request->validated());
        if ($request->hasFile('image')) {
            $picture->image_path = $request->file('image')->store('pic_01');
            //$cos = $request->file('image');
        }
        //dd($cos);
        $picture->order_id=session('order_id');
        $indexAdd=new PictureIndexAdd($picture->order_id);
        $picture->index=$indexAdd->indexAdd();
        $picture->oryginal_name=$request->file('image')->getClientOriginalName();
        //dd(session('order_id'));
        $picture->image_size=$request->file('image')->getSize();
        $picture->save();
//dd($picture->id);
        return redirect(route('pictures.index'))->with('status', 'Udało się');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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

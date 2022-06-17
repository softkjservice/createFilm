<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpsertPictureRequest;
use App\Models\Picture;
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
        $pictures=Picture::all();
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
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

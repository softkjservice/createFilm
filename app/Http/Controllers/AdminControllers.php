<?php

namespace App\Http\Controllers;

use App\Classis\Utilities;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Madnest\Madzipper\Facades\Madzipper;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;


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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse|StreamedResponse
     */
    public function download($id): RedirectResponse|StreamedResponse
    {
        //dd($id);
        //Utilities::orderPicturesDownload($id);
       // Utilities::filesend('kj01.gif');
        //return Redirect::back();
        //response()->download('storage\kj01.gif');
        //return Storage::download('kj01.gif');
        //return Redirect::back();
        $files = glob('storage\82\*');
        //dd($files);
        Madzipper::make('storage\test.zip')->add($files)->close();
        return Utilities::filesend('test.zip');
        //return Storage::download('test.zip');
        //return  response()->download('storage\test.zip');
    }
}

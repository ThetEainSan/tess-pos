<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $foods = Inventory::where('FOD', 'foods')->get();
        $drinks = Inventory::where('FOD', 'drinks')->get();
        return view('index', ['foods' => $foods, 'drinks' => $drinks]);
    }

    public function categorySearch(Request $request){
        $datas = Inventory::where('FOD', $request->category)->get();

        return view('searchCategory', ['datas' => $datas]);
    }

    public function typeSearch(Request $request){
        $datas = Inventory::where('type', $request->type)->get();

        return view('searchType', ['datas' => $datas]);
    }
}

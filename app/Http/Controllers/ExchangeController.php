<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeRequest;
use Illuminate\Http\Request;

class ExchangeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function changeCurrency(ChangeRequest $request)
    {
        $currency = $request->input('number') * $request->input('change-from') . ' ' . $request->input('change-to');
        return view('welcome', compact('currency'));
    }
}

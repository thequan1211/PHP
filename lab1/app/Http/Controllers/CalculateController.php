<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    function index()
    {
        return view('calculate');
    }
    function addCal(Request $request)
    {
        // Assuming you want to handle the addition logic here
        $number1 = $request->input('num1');
        $number2 = $request->input('num2');
        $sum = $number1 + $number2;
        return view('calculate' , compact('sum'));
    }
}

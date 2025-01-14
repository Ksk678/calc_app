<?php

namespace App\Http\Controllers;

use Brick\Math\Exception\DivisionByZeroException;
use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result($num1, $ope, $num2)
    {
        if ($ope == 'addition') {
            $result = $num1 + $num2;
        } elseif (
            $ope == 'subtraction'
        ) {
            $result = $num1 - $num2;
        } elseif (
            $ope == 'multiplication'
        ) {
            $result = $num1 * $num2;
        } elseif (
            $ope == 'division'
        ) {
            $result = $num1 / $num2;
        }
        return view('calcs.calc', ['result' => $result]);
    }
}

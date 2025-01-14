<?php

namespace App\Http\Controllers;

use Brick\Math\Exception\DivisionByZeroException;
use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function hello()
    {
        return view('Calcs.hello');
    }

    public function result($A, $B, $C)
    {
        if ($B == 'addition') {
            $result = $A + $C;
        } elseif (
            $B == 'subtraction'
        ) {
            $result = $A - $C;
        } elseif (
            $B == 'multiplication'
        ) {
            $result = $A * $C;
        } elseif (
            $B == 'division'
        ) {
            $result = $A / $C;
        }
        return view('Calcs.calc', ['result' => $result]);
    }
}

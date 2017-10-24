<?php

namespace App\Http\Controllers;

use App\Departure;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function allQuery(Request $request) {
        if (!$request->ajax()) return redirect('/');
        return [
            'departures'=>Departure::all()
        ];
    }
}

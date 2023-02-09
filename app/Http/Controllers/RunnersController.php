<?php

namespace App\Http\Controllers;

use App\Models\Runners;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RunnersController extends Controller
{
    public function __invoke()
    {
        $runners= Runners::get();
        return view('Runners.index',[
            'runners' => $runners,
        ]);
    }

    public function create()
    {
        return view('Runners.create');
    }

    public function store(Request $request, Runners $runners)
    {
        $runnersDataValidated= $request->validate($runners->validationRules());

        $runners->create($runnersDataValidated);

        return view('Runners.create');
    }
}

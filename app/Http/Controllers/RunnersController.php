<?php

namespace App\Http\Controllers;

use App\Models\Runners;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

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

        return redirect()->route('runners');
    }

    public function edit($id)
    {
        $runner= Runners::where('id', $id)->first();
        
        return redirect()->route('runners.edit', ['id' => $id]);
    }

    public function update(Request $request, Runners $runners, $id)
    {
        $runnersDataValidated= $request->validate($runners->validationRules());

        Runners::where('id', $id)->update($runnersDataValidated);

        return redirect()->route('runners');

    }

    public function delete(Request $request, Runners $courses, $id,$active)
    {   
        if($active == 0) {
            Runners::where('id', $id)->update(['active' => '1']);
            $runners= Runners::get();
            return redirect()->route('runners');

        }
        Runners::where('id', $id)->update(['active' => '0']);
        $runners= Runners::get();
        return redirect()->route('runners');

        
    }
}

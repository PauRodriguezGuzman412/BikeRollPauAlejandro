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

        return view('Runners.edit', [
            'runner' => $runner,
        ]);
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

    public function search(Request $request)
    {

        $filter = $request->input('filter');
        $searchText = $request->input('searchText');
        $runners= Runners::where($filter,'LIKE', '%'.$searchText.'%')->get();

        return view('Runners.index', [
            'runners' => $runners,
        ]);
    }

    public function lookInto(Request $request)
    {

        $filter = $request->input('filter');
        $searchText = $request->input('searchText');
        $runners= Runners::where($filter,'LIKE', '%'.$searchText.'%')->get();

        return view('Runners.rankingMain', [
            'runners' => $runners,
        ]);
    }

    public function rankingMain()
    {
        $runners= Runners::get();
        return view('Runners.rankingMain',[
            'runners' => $runners,
        ]);
    }

    public function ranking20()
    {   
        $today= date("Y-m-d");
        $date = strtotime('-20 year',strtotime($today));
        $date = date("Y-m-d", $date);
        $runners= Runners::where('date_of_birth', '>=', $date)->get();

        return view('Runners.ranking20', [
            'runners' => $runners,
        ]);
    }
    public function ranking30()
    {   
        $today= date("Y-m-d");
        $date = strtotime('-30 year',strtotime($today));
        $date = date("Y-m-d", $date);
        $runners= Runners::where('date_of_birth' , '>=', $date)->get();
        
        return view('Runners.ranking30', [
            'runners' => $runners,
        ]);
    }
    public function ranking40()
    {   
        $today= date("Y-m-d");
        $date = strtotime('-40 year',strtotime($today));
        $date = date("Y-m-d", $date);
        $runners= Runners::where('date_of_birth' , '>=', $date)->get();

        return view('Runners.ranking40', [
            'runners' => $runners,
        ]);
    }
    public function ranking50()
    {   
        $today= date("Y-m-d");
        $date = strtotime('-50 year',strtotime($today));
        $date = date("Y-m-d", $date);
        $runners= Runners::where('date_of_birth', '>=',$date)->get();

        return view('Runners.ranking50', [
            'runners' => $runners,
        ]);
    }
    public function ranking60()
    {   
        $today= date("Y-m-d");
        $date = strtotime('-60 year',strtotime($today));
        $date = date("Y-m-d", $date);
        $runners= Runners::where('date_of_birth', '>=',$date)->get();

        return view('Runners.ranking60', [
            'runners' => $runners,
        ]);
    }
}

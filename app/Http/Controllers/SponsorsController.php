<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sponsors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SponsorsController extends Controller
{
    public function __invoke()
    {
        $sponsors= Sponsors::get();
        return view('Sponsors.index',[
            'sponsors' => $sponsors,
        ]);
    }

    public function create()
    {
        return view('Sponsors.create');
    }

    public function store(Request $request, Sponsors $sponsor)
    {
        $sponsorStored = $request->validate($sponsor->validationSponsor());

        $path = Storage::putFile('sponsorsImg', $request->file('logo'));
        $sponsorStored['logo'] = $path;

        if($sponsorStored['principal_page']=='on'){
            $sponsorStored['principal_page']=true;
        }
        else{
            $sponsorStored['principal_page']=false;
        }
        $sponsor->create($sponsorStored);

        return redirect()->route('sponsors');

    }
    public function edit($id)
    {
        $sponsor= Sponsors::where('id', $id)->first();

        return view('Sponsors.edit', [
            'sponsor' => $sponsor,
        ]);
    }

    public function update(Request $request, Sponsors $sponsors, $id)
    {
        var_dump($request['principal_page']);
        if($request['principal_page']== "on"){
            $request['principal_page']= true;
        }else{
            $request['principal_page']= false;
        }
        $sponsorStored = $request->validate($sponsors->validationSponsor());

        $path = Storage::putFile('sponsorsImg', $request->file('logo'));
        $sponsorStored['logo'] = $path;

        Sponsors::where('id', $id)->update($sponsorStored);

        return redirect()->route('sponsors');
    }

    public function delete(Request $request, Sponsors $sponsor, $id,$active)
    {
        if($active == 0) {
            Sponsors::where('id', $id)->update(['active' => '1']);
            return redirect()->route('sponsors');

        }
        Sponsors::where('id', $id)->update(['active' => '0']);
        return redirect()->route('sponsors');

    }
}

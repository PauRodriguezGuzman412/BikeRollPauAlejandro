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

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sponsors;
use Illuminate\Http\Request;

class SponsorsController extends Controller
{
    public function __invoke()
    {
        return view('Sponsors.index');
    }

    public function create()
    {
        return view('Sponsor.create');
    }

    public function storeSponsors(Request $request, Sponsors $sponsor)
    {
        // $data = $request->validate([
        //     'CIF'                => 'required',
        //     'logo'               => 'required',
        //     'address'            => 'required',
        //     'principal_page'     => 'required',
        //     ]);
        $sponsorStored = $request->validate($sponsor->validationSponsor());

        $sponsor->create($sponsorStored);

        return view('Sponsors.create');

    }
    public function edit($id)
    {
        $sponsor= Sponsors::where('id', $id)->first();

        return view('Sponsors.edit', [
            'course' => $sponsor,
        ]);
    }

    public function update(Request $request, Sponsors $sponsor, $id)
    {
        $sponsorStored = $request->validate($sponsor->validationSponsor());

        Sponsors::where('id', $id)->update($sponsorStored);

        $sponsor= Sponsors::get();
        return view('Sponsors.index',[
            'courses' => $sponsor,
        ]);
    }

    public function delete(Request $request, Sponsors $sponsor, $id)
    {
        Sponsors::where('id', $id)->delete();
        
        $sponsor= Sponsors::get();
        return view('Sponsors.index',[
            'sponsor' => $sponsor,
        ]);
    }
}

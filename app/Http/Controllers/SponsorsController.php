<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sponsors;
use Illuminate\Http\Request;

class SponsorsController extends Controller
{
    public function indexSponsors()
    {
        return view('adminSponsors');
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

        return view('adminSponsors');

    }
}

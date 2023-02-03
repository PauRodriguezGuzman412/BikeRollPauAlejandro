<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sponsors;
use Illuminate\Http\Request;

class SponsorsController extends Controller
{
    public function __invoke()
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
    public function edit()
    {
        return view('edit');
    }

    public function update(Request $request, Sponsors $sponsor)
    {
        
    }

    public function delete(Request $request, Sponsors $sponsor)
    {

    }
}

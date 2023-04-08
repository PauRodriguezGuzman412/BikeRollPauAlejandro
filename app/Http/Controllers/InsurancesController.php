<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Insurances;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InsurancesController extends Controller
{
    public function __invoke()
    {
        $insurances= Insurances::get();
        return view('Insurances.index',[
            'insurances' => $insurances,
        ]);
    }

    public function create()
    {
        $insurances = Insurances::get();
        return view('Insurances.create', ['insurances' => $insurances]);
    }

    public function store(Request $request, Insurances $insurances)
    {
        $insuranceStored = $request->validate($insurances->validationInsurances());

        $insurances->create($insuranceStored);

        return redirect()->route('insurances');
    }
    public function edit($id)
    {
        $insurances= Insurances::where('id', $id)->first();
        return view('Insurances.edit', [
            'insurances' => $insurances,
        ]);
    }

    public function update(Request $request, Insurances $insurances, $id)
    {
        $insuranceStored = $request->validate($insurances->validationInsurances());

        Insurances::where('id', $id)->update($insuranceStored);

        return redirect()->route('insurances');
    }

    public function delete(Request $request, Insurances $insurances, $id, $active)
    {
        if($active == 0) {
            Insurances::where('id', $id)->update(['active' => '1']);
            return redirect()->route('insurances');

        }
        Insurances::where('id', $id)->update(['active' => '0']);
        return redirect()->route('insurances');

    }
}

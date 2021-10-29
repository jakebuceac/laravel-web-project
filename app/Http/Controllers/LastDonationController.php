<?php

namespace App\Http\Controllers;

use App\Models\LastDonation;
use Illuminate\Http\Request;

class LastDonationController extends Controller
{
    public function create(Request $request)
    {
        return view('last_donation_create');
    }

    public function store(Request $request)
    {
        $lastDonation = new LastDonation();
        $lastDonation->pressure = $request->pressure;
        $lastDonation->hemoglobin = $request->hemoglobin;
        $lastDonation->pulse = $request->pulse;
        $lastDonation->covid_test_result = $request->covid;
        $lastDonation->sickle_cell_test = $request->sickle;
        $lastDonation->saveOrFail();

        return redirect('/last_donation/' . $lastDonation->id);
    }

    public function show(Request $request, LastDonation $lastDonation)
    {
        return view('last_donation_show', [
            'created' => $lastDonation->created_at,
            'pressure' => $lastDonation->pressure,
            'pulse' => $lastDonation->pulse,
            'hemoglobin' => $lastDonation->hemoglobin,
            'covid' => $lastDonation->covid_test_result,
            'sickle' => $lastDonation->sickle_cell_test,
        ]);
    }
}

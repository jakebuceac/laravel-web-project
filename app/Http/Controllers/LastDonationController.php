<?php

namespace App\Http\Controllers;

use App\Models\LastDonation;
use Illuminate\Http\Request;

class LastDonationController extends Controller
{
    public function show(Request $request, LastDonation $lastDonation)
    {
        return view('last_donation', [
            'created' => $lastDonation->created_at,
            'pressure' => $lastDonation->pressure,
            'pulse' => $lastDonation->pulse,
            'hemoglobin' => $lastDonation->hemoglobin,
            'covid' => $lastDonation->covid_test_result,
            'sickle' => $lastDonation->sickle_cell_test,
        ]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LastDonation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'pressure',
        'hemoglobin',
        'pulse',
        'covid_test_result',
        'sickle_cell_test',
    ];

    protected $table = 'last_donation';
}

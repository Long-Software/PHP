<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $table = 'loan_packages';
    protected $primaryKey = 'package_id';
    protected $fillable = [
        'full_texts',
        'loan_name',
        'loan_plan',
        'loan_amount',
        'loan_min',
        'loan_max',
        'loan_date',
        'loan_rate',
        'loan_rate_per',
        'loan_duration',
        'loan_duration_in',
        'lender_id',
        'is_active',
        'payment_cycle',
        'num_of_cycle',
        'processing_fees',
        'loan_description',
        'insurance_fees'
    ];
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrower;
use Illuminate\Support\Facades\DB;

class BorrowerController extends Controller
{
    //
    public function index()
    {
        $borrower = DB::table('borrowers')->get();
        return view('bank_v2.borrower_list', ['borrower' => $borrower]);
    }

    public function getBorrower()
    {
        $borrower = DB::select('
        SELECT distinct
            loan_packages.package_id AS package_id,
            users.user_name AS user_name,
            loan_name,
            loan_history.loan_amount AS loan_amount,
            loan_rate,
            loan_duration,
            loan_duration_in,
            payment_cycle,
            num_of_cycle
        FROM
            loan_history
        INNER JOIN
            borrowers ON borrowers.borrower_id = loan_history.borrower_id
        INNER JOIN
            users ON users.user_id = borrowers.user_id
        INNER JOIN
            loan_packages ON loan_history.package_id = loan_packages.package_id
    ');
        return view('bank_v2.borrower_list', compact('borrower'));
    }
}

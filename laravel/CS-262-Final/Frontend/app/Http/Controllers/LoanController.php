<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\User;
use App\Models\LoanHistory;
use Illuminate\Support\Facades\DB;


class LoanController extends Controller
{
    //
    public function index()
    {
        $loan = DB::table('loan_packages')->get();
        return view('bank_v2.active_loan', ['loan' => $loan]);
    }

    public function createLoan()
    {
        return view('bank_v2.make_loan');
    }

    public function storeLoan(Request $request)
    {
        $user_id = Auth::id();

        $bank_id = DB::table('banks')->where('user_id', '=', $user_id)->get();

        $request->validate([
            'bank_id' => 'bank_id',
            'loan_name' => 'required',
            'loan_plan' => 'required',
            'package_id' => 'required',
            'loan_amount' => 'required',
            'loan_min' => 'required',
            'loan_max' => 'required',
            'loan_rate' => 'required',
            'loan_rate_per' => 'required',
            'loan_duration' => 'required',
            'loan_duration_in' => 'required',
            'payment_cycle' => 'required',
            'num_of_cycle' => 'required',
        ]);

        $post = new Loan();

        $post->bank_id = $bank_id[0]->bank_id;
        $post->loan_name = $request->loan_name;
        $post->loan_plan = $request->loan_plan;
        $post->package_id = $request->package_id;
        $post->loan_amount = $request->loan_amount;
        $post->loan_min = $request->loan_min;
        $post->loan_max = $request->loan_max;
        $post->loan_rate = $request->loan_rate;
        $post->loan_rate_per = $request->loan_rate_per;
        $post->loan_duration = $request->loan_duration;
        $post->loan_duration_in = $request->loan_duration_in;
        $post->payment_cycle = $request->payment_cycle;
        $post->num_of_cycle = $request->num_of_cycle;
        $post->processing_fees = $request->processing_fees;
        $post->insurance_fees = $request->insurance_fees;
        $post->loan_description = $request->loan_description;

        $post->save();
        return redirect('/loan');
    }

    public function editLoan($package_id)
    {
        $loan = Loan::findOrFail($package_id);
        return view('bank_v2.edit_loan', ['loan' => $loan]);
    }

    public function deleteLoan($package_id)
    {

        $loan = Loan::where('package_id', $package_id)->delete();
        if (!$loan) {
            return response()->json(["Error" => "Loan not found"]);
        }
        return redirect('/loan');
    }

    public function updateLoan($package_id, Request $request)
    {
        $loan = Loan::where('package_id', $package_id)->first();
        if (!$loan) {
            return response()->json(["Error" => "Loan not found"]);
        }
        $loan = Loan::find($package_id);

        $loan->loan_name = $request->loan_name ?? $request->loan_name;
        $loan->loan_plan = $request->loan_plan ?? $request->loan_plan;
        $loan->package_id = $request->package_id ?? $request->package_id;
        $loan->loan_amount = $request->loan_amount ?? $request->loan_amount;
        $loan->loan_min = $request->loan_min ?? $request->loan_min;
        $loan->loan_max = $request->loan_max ?? $request->loan_max;
        $loan->loan_date = $request->loan_date ?? $request->loan_date;
        $loan->loan_rate = $request->loan_rate ?? $request->loan_rate;
        $loan->loan_rate_per = $request->loan_rate_per ?? $request->loan_rate_per;
        $loan->loan_duration = $request->loan_duration ?? $request->loan_duration;
        $loan->loan_duration_in = $request->loan_duration_in ?? $request->loan_duration_in;
        $loan->payment_cycle = $request->payment_cycle ?? $request->payment_cycle;
        $loan->num_of_cycle = $request->num_of_cycle ?? $request->num_of_cycle;
        $loan->processing_fees = $request->processing_fees ?? $request->processing_fees;
        $loan->insurance_fees = $request->insurance_fees ?? $request->insurance_fees;
        $loan->loan_description = $request->loan_description ?? $request->loan_description;

        $loan->save();
        // return response()->json(["Update Successful" => $loan]);
        return redirect('/loan');
    }
    // show available loans to borrowers
    public function showLoan()
    {
        $loan = DB::table('loan_packages')->get();
        return view('user_v2.loan_packages', compact('loan'));
    }
    //User confirm loan
    public function confirmLoan($package_id)
    {
        $loan = Loan::find($package_id);
        return view('user_v2.loan_confirm', compact('loan'));
    }
    //store confirmed to loan_history
    public function storeLoanHistory(Request $request)
    {
        // $package_id = 1; // Set the package_id to 1
        $user_id = Auth::id();

        // Set the borrower_id to 1
        $loan_amount = $request->input('desired_loan_amount');
        $borrower_id = DB::table('borrowers')->where('user_id', '=', $user_id)->get();

        $loanHistory = new LoanHistory();
        $loanHistory->package_id = $request->package_id;
        $loanHistory->borrower_id = $borrower_id[0]->borrower_id;
        $loanHistory->loan_amount = $loan_amount;
        $loanHistory->save();
        // Add any other necessary logic or redirect the user

        // return redirect()->back()->with('success', 'Loan amount stored successfully in loan history.');
        // return redirect('/loan/history');
        return redirect()->route('storeLoanHistory');
    }

    public function showLoanHistory()
    {
        $loanHistory = DB::select('SELECT distinct
                                    loan_history_id AS history_id,
                                    bank_name,
                                    loan_name,
                                    loan_history.loan_amount AS loan_amount,
                                    loan_rate,
                                    loan_rate_per,
                                    loan_duration,
                                    loan_duration_in
                                    FROM loan_history
                                    INNER JOIN
                                        loan_packages ON loan_history.package_id = loan_packages.package_id
                                    INNER JOIN
                                        banks ON loan_packages.bank_id = banks.bank_id;');
        return view('user_v2.loan_history', compact('loanHistory'));
    }
}

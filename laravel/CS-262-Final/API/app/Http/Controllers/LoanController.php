<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\LoanHistory;
use Illuminate\Support\Facades\DB;

class LoanController extends Controller
{
    //
    public function index(){
        $loan = DB::table('loan_packages')->get();
        return response()->json($loan);
        // return view('bank_v2.active_loan', ['loan' => $loan]);
    }

    public function storeLoan(Request $request){
        $request->validate([
            // 'package_id' => 'required',
            'loan_name' => 'required',
            'loan_plan' => 'required',
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
        
        // $post->package_id = $request->package_id;
        $post->loan_name = $request->loan_name;
        $post->loan_plan = $request->loan_plan;
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
        
        return response()->json(["message" => "Loan Successfully Created!"]);
    }

    public function deleteLoan($package_id){
        $loan = Loan::where('package_id', $package_id)->delete();
        if (!$loan) { return response()->json(["Error" => "Loan not found"]);}
        return response()->json(["message" => "Loan Successfully Deleted!"]);
    }

    public function updateLoan($id, Request $request){
        $loan = Loan::where('package_id', $id)->first();
        if (!$loan) { return response()->json(["Error" => "Loan not found"]);}

        $loan = Loan::find($id);
        $loan->update($request->all());
        return response()->json(["Update Successful" => $loan]);
    }
    
    public function showLoan($id){
        $loan = Loan::findOrFile($id);
        return response()->json($loan)->with('success', 'Show Loan Successfully');
    }

    public function storeLoanHistory(Request $request){
        // $package_id = 1; // Set the package_id to 1
        //$borrower_id = 1; // Set the borrower_id to 1
        // $loan_amount = $request->input('loan_amount');

        $loanHistory = new LoanHistory();
        $loanHistory->package_id = $request->package_id;
        $loanHistory->borrower_id =  $request->borrower_id;
        $loanHistory->loan_amount = $request->loan_amount;
        $loanHistory->save();

        // Add any other necessary logic or redirect the user
        // return redirect()->back()->with('success', 'Loan amount stored successfully in loan history.');
        return response()->with('success', 'Loan amount stored successfully in loan history.');
    }
}
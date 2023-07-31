<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $user = DB::table('users')->get();
        return view('user_v2.master', ['user' => $user]);
    }
    public function login(Request $request) {
        $user = DB::select('select * from users where email = ? and password = ? limit 1;', [$request->email,$request->password ]);
        if($user) {
            if($user[0]->account_type == 'u') {
                return redirect('/user');
            } else {
                return redirect('/bank');
            }
        } else {   
            return redirect()->route('index.login');
        }
    }
    public function createUser()
    {
        return view('signup');
    }
    public function storeUser(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'user_username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'account_type' => 'required',
        ]);
        $post = new User();

        $post->user_name = $request->user_name;
        $post->user_username = $request->user_username;
        $post->email = $request->email;
        $post->password = $request->password;
        $post->account_type = $request->account_type;
        $post->save();
        
        if ($request->account_type == 'u') {
            return view('user_v2.borrower_signup',[
                'post' => $post->user_id
            ]);
        } else {
            return view('bank_v2.bank_signup',[
                'post' => $post->user_id
            ]);
        }
    }
    public function storeBorrower(Request $request) {
        DB::select('insert into borrowers (user_id, borrower_phone_num, borrower_address) values (?, ?, ?)', [$request->user_id, $request->borrower_phone_num, $request->borrower_address]);
        return redirect()->route('index.borrower');
    }
    public function storeBank(Request $request) {
        DB::select('insert into banks (user_id, bank_name, bank_address, bank_capital) values (?, ?, ?, ?)', [$request->user_id, $request->bank_name, $request->bank_address, $request->bank_capital]);
        return redirect()->route('index.bank');
    }
    
}

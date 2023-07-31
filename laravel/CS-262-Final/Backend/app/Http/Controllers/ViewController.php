<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function index()
    {
        $user = DB::select('select 
                                ip_addresses.address_id as ip_id,
                                users.user_id as user_id,
                                user_name as name,
                                ip_address as ip,
                                ip_addresses.created_at as created_at,
                                users.updated_at as updated_at
                            from 
                                users
                            inner join 
                                ip_addresses
                            on 
                                users.user_id = ip_addresses.user_id
                            order by
                                ip_addresses.updated_at desc;');
        return view('index', compact('user'));
    }
    public function get_admin()
    {
        $user = DB::select('select 
                                users.user_id as user_id,
                                user_name,
                                admin_level.level_description as admin_description,
                                user_verified,
                                email,
                                (select users.user_name from users, admins where admins.created_by = users.user_id LIMIT 1) as created_by
                            from 
                                users 
                            inner join 
                                admins
                            inner join 
                                admin_level
                            on 
                                users.user_id = admins.user_id and 
                                admins.level_id = admin_level.level_id;');
        return view('adminList', compact('user'));
    }
    public function get_borrower()
    {
        $user = DB::select("select 
                                user_id, 
                                user_name, 
                                user_username, 
                                email, 
                                created_at, 
                                user_verified
                            from 
                                users
                            where 
                                account_type = 'u' and 
                                user_verified = true;");
        return view('borrowerList', compact('user'));
    }
    public function get_bank()
    {
        $user = DB::select('select 
                                banks.user_id,
                                banks.bank_id,
                                banks.bank_name,
                                banks.bank_address,
                                banks.bank_capital,
                                banks.created_at
                            from 
                                banks 
                            inner join 
                                users
                            on 
                                users.user_id = banks.user_id
                            where 
                                user_verified = true;');
        return view('bankList', compact('user'));
    }
    public function get_loan()
    {
        $loan = DB::select("select 
                                package_id, 
                                loan_name, 
                                loan_rate, 
                                loan_amount, 
                                created_at, 
                                updated_at
                            from 
                                loan_packages 
                            where 
                                is_active = true;");
        return view('loanList', compact('loan'));
    }

    public function get_map(Request $request) {
        $ip = DB::select("select
                            users.user_name as user_name,
                            users.profile_image,
                            lng,
                            lat,
                            ip_address
                        from 
                            ip_addresses
                        inner join 
                            users
                        on users.user_id = ip_addresses.user_id
                        where
                            ip_addresses.address_id = ?;",
                        [$request->address_id]
        );
        // dd($ip);
        return view('admin-info',compact('ip'));
    }
}

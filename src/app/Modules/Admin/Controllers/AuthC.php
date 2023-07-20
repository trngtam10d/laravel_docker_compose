<?php

namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthC extends Controller {

    public function login()
    {
        if (Auth::guard("admin")->check()) {
            return redirect()->route("admin.index");
        }
        return view("Admin::auth.login");
    }
}

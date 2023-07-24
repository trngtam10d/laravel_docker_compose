<?php

namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Admin\Models\AdminModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Login extends Controller {

    /**
     * Check admin login.
     * @method GET
     */
    public function login()
    {
        if (Auth::guard("admin")->check()) {
            return redirect()->route("admin.index");
        }
        return view("Admin::auth.login");
    }

    /**
     * Authentication requires login.
     * @return void|string|array
     */
    public function login_request(Request $request)
    {
        $this->validate($request, [
            "email" => "required",
            "password" => "required",
        ], [
            "email.required" => "Please enter your email",
            "password.required" => "Please enter your password",
        ]);

        $auth = array(
            'email' => $request->email,
            'password' => $request->password,
        );

        if (Auth::guard("admin")->attempt($auth)) {
            return redirect()->route("admin.index");
        } else {
            return redirect()->route("admin.login")->with(["type" => "danger", "flash_message" => "Email or password is wrong"]);
        }
    }

    /**
     * Authentication requires logout.
     * @return void
     */
    public function logout() {
        Auth::guard("admin")->logout();
        if (!Auth::guard("admin")->check()) {
            return redirect()->route("admin.login");
        }
    }
}

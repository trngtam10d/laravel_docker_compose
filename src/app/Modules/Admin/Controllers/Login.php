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

        $where = array(
            'email' => $request->email
        );
        $admin = AdminModel::where($where)->first();
        if (!$admin) {
            abort(404);
        }

        $auth = new \stdClass();
        $auth->admin_user_id = $admin->id;
        $auth->staff_name = $admin->staff_name;

        session(['auth' => $auth]);
        return redirect()->route('admin.index');
    }
}

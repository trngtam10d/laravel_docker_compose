<?php
/**
 *
 * Module Admin handle inside information services.
 * Create Date: 20/07/2023.
 * @author: Tran Ngoc Tam
 *
*/
namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;

class Admin extends Controller {

    /**
     * View Dashboard
     * @return void|string
     */
    public function index() {
        return view("Admin::admin.index");
    }
}

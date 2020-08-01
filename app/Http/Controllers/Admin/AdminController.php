<?php
namespace App\Http\Controllers\Admin;

Use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
Use App\Admin;

class AdminController extends Controller {

    public function index() {
        return view('admin.index');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class DashboardController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('dashboard/dashboard');
    }
    public function menu()
    {
        return view('dashboard/menu');
    }

    public function browse()
    {
        $store_list = DB::table('store_list')->get();

        return view('dashboard/browse', ['stores' => $store_list]);
    }
}

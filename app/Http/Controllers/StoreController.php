<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function showStoreItems($id)
    {
        $menu = DB::table('food_items')->where('store_id', $id)->get();

        return view('dashboard/menu', ['menu' => $menu]);
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

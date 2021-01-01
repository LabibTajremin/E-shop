<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Desktop;

class CatalogController extends Controller {

    //
    public function catalogshowdesktop(Request $request) {



        $item = DB::table('desktop')->get();

        $view = 1;

        if ($request->session()->has('username')) {
            $username = $request->session()->get('username');
            return view('cataloglist', compact('item', 'view', 'username'));
        } else {
            return view('cataloglist', compact('item', 'view'));
        }
    }

    public function catalogshowlaptop(Request $request) {


        $brand = $request->brand;

        $item = DB::table('laptop')->where('Brand', $brand)->get();
        $view = 0;
        if ($request->session()->has('username')) {
            $username = $request->session()->get('username');
            return view('cataloglist', compact('item', 'view', 'username'));
        } else {
            return view('cataloglist', compact('item', 'view'));
        }
    }

    public function catalogshowlaptopall(Request $request) {

        $item = DB::table('laptop')->get();
        $view = 0;
        if ($request->session()->has('username')) {
            $username = $request->session()->get('username');
            return view('cataloglist', compact('item', 'view', 'username'));
        } else {
            return view('cataloglist', compact('item', 'view'));
        }
    }

    public function productshow(Request $request) {
        $id = $request->id;
        $view = $request->view;

        if ($view == 0) {
            $item = DB::table('laptop')->where('id', $id)->first();

            $view = 0;

            if ($request->session()->has('username')) {
                $username = $request->session()->get('username');
                return view('cataloglist', compact('item', 'view', 'username'));
            } else {
                return view('cataloglist', compact('item', 'view'));
            }
        } else {
            $item = DB::table('desktop')->where('id', $id)->first();

            $view = 1;

            if ($request->session()->has('username')) {
                $username = $request->session()->get('username');
                return view('cataloglist', compact('item', 'view', 'username'));
            } else {
                return view('cataloglist', compact('item', 'view'));
            }
        }
    }

}

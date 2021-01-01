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

class CartController extends Controller {

    //
    public function pageshow(Request $request) {
        $item=$request->session()->get('items');
        $username=$request->session()->get('username');
        return view('cart', compact('item','username'));
    }

    public function addToCart(Request $request) {

        $id = $request->id;
        $view = $request->view;
        if ($view == 0) {
            $product = DB::table('laptop')->where('id', $id)->first();
            $view = 0;
            $type = 0;
        } else {
            $product = DB::table('desktop')->where('id', $id)->first();
            $view = 1;
            $type = 1;
        }
        if ($request->session()->has('items')) {
            $items = $request->session()->get('items');
            $request->session()->forget('items');
            $flag = 0;
            foreach ($items as $row) {

                if ($row['name'] == $product->Name) {
                    $flag = 1;
                    $row['qty'] = $row['qty'] + 1;
                    $row['price'] = $product->Price * $row['qty'];
                    $request->session()->push('items', $row);
                } else {
                    $request->session()->push('items', $row);
                }
            }
            if ($flag == 0) {
               
                $item['name'] = $product->Name;
                $item['qty'] = 1;
                $item['price'] = $product->Price;
                $item['id'] = $product->id;
                $item['type'] = $type;
                $item['image']= $product->Image;
                $request->session()->push('items', $item);
            }
            $count = $request->session()->get('cart_count');
            $request->session()->forget('cart_count');
            $count = $count + 1;
            $request->session()->put('cart_count', $count);
            
        } else {
            $item['name'] = $product->Name;
            $item['qty'] = 1;
            $item['price'] = $product->Price;
            $item['id'] = $product->id;
            $item['type'] = $type;
            $item['image']= $product->Image;
            $count = $request->session()->get('cart_count');
            $request->session()->forget('cart_count');
            $count = $count + 1;
            $request->session()->put('cart_count', $count);
            $request->session()->push('items', $item);
        }
        
        $count = $request->session()->get('cart_count');
        return back()->withErrors([$count]);
    }

}

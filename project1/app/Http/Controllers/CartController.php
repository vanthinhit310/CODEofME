<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function getOneProductInCart($cart, $id)
    {
        foreach ($cart as $dssp) {
            if ($dssp->product->id == $id) {
                return $dssp;
            }
        }
        return null;
    }

    public function getTotal($cart, $id)
    {
        $total = 0;
        foreach ($cart as $sptgh) {
            if ($sptgh->product->id == $id) {
                $total = ($sptgh->product->gia * $sptgh->count);
            }
        }
        return $total;
    }

    public function addToCart($id)
    {
        $cart = Session::get('cart');
        $sp = $this->getOneProductInCart($cart, $id);
        if ($sp != null) {
            $sp->count = $sp->count + 1;
            $sp->toal = $this->getTotal($cart, $id);
        } else {
            $product = Product::where('id', $id)->first();
            $sptgh = new Cart($product, $this->getTotal($cart, $id), 1);
            array_push($cart, $sptgh);
            Session::put('cart', $cart);
        }
    }

    public function themSanPhamVaoGioHang(Request $request)
    {
        $id = $request->id;
        $this->addToCart($id);
        $cart = Session::get('cart');

        return response()->json([
            'data' => 'success',
            'total' => $this->getCount($cart),
            'alltotal' => $this->getTotalAll($cart)
        ]);
    }

    public function xoa($cart, $id)
    {
        $cartnew = [];
        foreach ($cart as $sptgh) {
            if ($sptgh->product->id != $id) {
                array_push($cartnew, $sptgh);
            }
        }
        return $cartnew;
    }

    public function deleteProduct(Request $request)
    {
        $id = $request->id;
        $cart = Session::get('cart');
        $cartnew = $this->xoa($cart, $id);
        Session::put('cart', $cartnew);
        return response()->json([
            'data' => 'success',
            'count' => $this->getCount($cartnew),
            'length' => count($cartnew),
            'at' => $this->getTotalAll($cartnew)
        ]);
    }

    public function updateQuantity(Request $request)
    {
        $id = $request->id;
        $q = $request->q;
        $cart = Session::get('cart');
        $product = Product::where('id', $id)->first();
        $cart = $this->xoa($cart, $id);
        $sl = $q;
        $total = (int)$sl * $product->gia;

        $sptgh = new Cart($product, $total, $sl);
        array_push($cart, $sptgh);
        Session::put('cart', $cart);

        return response()->json([
            'data' => 'success',
            'totalCount' => $this->getCount($cart),
            'alltotal' => $this->getTotalAll($cart)
        ]);
    }

    public function getCount($cart)
    {
        $aCount = 0;
        foreach ($cart as $dssp) {
            $aCount = $aCount + $dssp->count;
        }
        return $aCount;
    }

    public function getTotalAll($cart)
    {
        $to = 0;
        foreach ($cart as $product) {
            $to = $to + $product->total;
        }
        return $to;
    }


}

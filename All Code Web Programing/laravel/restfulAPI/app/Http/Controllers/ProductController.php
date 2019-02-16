<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
date_default_timezone_set('Asia/Ho_Chi_Minh');
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dsProduct = Product::all();
        return response($dsProduct,201);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $dsProduct = Product::all();
        return response()->json(json_decode($dsProduct));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $sanpham = new Product();
       $sanpham->id = round(microtime(true));
       $sanpham->tensanpham = $request->ten;
       $sanpham->hinhanhsanpham = $request->hinhanh;
       $sanpham->gia = $request->gia;
       $sanpham->soluongconlai = $request->soluong;

       $sanpham->save();
       return response()->json([
          'data'=> 'success'
       ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $sanpham = Product::find($id);
        return $sanpham;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        echo "edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        echo "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        echo "destroy";
    }
}

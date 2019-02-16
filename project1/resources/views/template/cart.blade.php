@extends('template/template')
@section('title')

    <title>Giỏ hàng</title>
@endsection
@php
    function getCountSec($cart)
        {
            $aCount = 0;
            foreach ($cart as $dssp) {
                $aCount = $aCount + $dssp->count;
            }
            return $aCount;
        }

function totalAll($cart)
    {
        $to = 0;
        foreach ($cart as $dsgh) {
            $to = $to +$dsgh->product->gia * $dsgh->count;
        }
        return $to;
    }
@endphp
@section('content')

    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="box">
                        <div class="box-head">
                            <h3 class="head-title">My Cart</h3>
                        </div>
                        <!-- cart-table-section -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <div class="cart">
                                    <table class="table table-bordered ">
                                        <thead>
                                        <tr>
                                            <th>
                                                <span>Item</span></th>
                                            <th>
                                                <span>Price</span></th>
                                            <th>
                                                <span>Quantity</span></th>
                                            <th>
                                                <span>Total</span></th>
                                            <th>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($cart as $dsgh)
                                            <tr id="dong{{$dsgh->product->id}}">
                                                <td><a href="#"><img style="width: 10%"
                                                                     src="{{$dsgh->product->hinhanhsanpham}}"
                                                                     alt=""></a>
                                                    <span><a href="#"
                                                             style="font-size: 10px">{{$dsgh->product->tensanpham}}</a></span>
                                                </td>
                                                <td id="gia{{$dsgh->product->id}}">{{number_format($dsgh->product->gia,0,',',',')}}
                                                    đ
                                                </td>
                                                <td>
                                                    <div class="product-quantity">
                                                        <div class="quantity">
                                                            <input id="{{$dsgh->product->id}}" style="width: 70px"
                                                                   type="number"
                                                                   class="input-text qty text qtt" step="1"
                                                                   min="1" max="100" name="quantity"
                                                                   value="{{$dsgh->count}}" title="Qty"
                                                                   size="3" pattern="[1-9]*">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td id="total{{$dsgh->product->id}}">{{number_format($dsgh->product->gia * $dsgh->count,0,',',',')}}
                                                    đ
                                                </td>
                                                <th scope="row">
                                                    <button id="{{$dsgh->product->id}}" class="btnRemove"
                                                            class="btn-close"><i
                                                            class="fa fa-remove"></i></button>
                                                </th>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    <h5 style="color: blue"><strong id="thongbao"></strong></h5>


                                </div>
                                <!-- /.cart-table-section -->
                            </div>
                        </div>
                    </div>
                    <a href="/" class="btn-link"><i class="fa fa-angle-left"></i> back to shopping</a>
                </div>
                <!-- cart-total -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box mb30">
                        <div class="box-head">
                            <h3 class="head-title">Price Details</h3>
                        </div>
                        <div class="box-body">
                            <div class=" table-responsive">
                                <div class="pay-amount ">
                                    <table class="table mb20">
                                        <tbody>
                                        <tr>
                                            <th class="row">
                                                <span>Thành tiền (<strong
                                                        id="items">{{getCountSec(Session::get('cart'))}}</strong> items)</span>
                                            </th>
                                            <td ><p id="totalall">{{number_format(totalAll($cart),'0',',',',')}}</p></td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <span>Delivery Charges</span></th>
                                            <td><strong class="text-green">Free</strong></td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <span class="mb0" style="font-weight: 700;">Amount Payable</span></th>
                                            <td style="font-weight: 700; color: #1c1e1e; ">$2400</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <button class="btn btn-primary btn-block">Proceed To Checkout</button>
                            </div>
                        </div>
                    </div>
                    <!-- coupon-section -->
                    <div class="box mb30">
                        <div class="box-head">
                            <h3 class="head-title">Coupons &amp; Offers</h3>
                        </div>
                        <div class="box-body">
                            <form>
                                <div class="coupon-form">
                                    <input type="text" name="coupon_code" class="form-control" id="coupon_code" value=""
                                           placeholder="Coupon code">
                                    <input type="submit" class="btn btn-primary btn-block" name="apply_coupon"
                                           value="Apply coupon">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.coupon-section -->
                </div>
            </div>
            <!-- /.cart-total -->
        </div>
    </div>
@endsection

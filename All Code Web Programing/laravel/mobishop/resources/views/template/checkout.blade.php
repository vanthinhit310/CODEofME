@extends('template/template')
@section('title')
    <title>Thanh toán</title>
@endsection
@section('content')

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="box checkout-form">
                        <!-- checkout - form -->
                        <div class="box-head">
                            <h2 class="head-title">Your Detail</h2>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <form>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="name"></label>
                                            <input name="name" type="text" class="form-control"
                                                   placeholder="Enter Your First NAme" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="name"></label>
                                            <input id="name" name="name" type="text" class="form-control"
                                                   placeholder="Enter Your last NAme" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="email">Email</label>
                                            <input id="email" name="email" type="text" class="form-control"
                                                   placeholder="Enter Email Address" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="phone"></label>
                                            <input id="phone" name="phone" type="text" class="form-control"
                                                   placeholder="Enter Mobile Number" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only"> </label>
                                            <select name="country name" class="form-control" required>
                                                <option value="">India</option>
                                                <option value="1">United Kingdom</option>
                                                <option value="2">United States of America</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only"></label>
                                            <input name="phone" type="text" class="form-control"
                                                   placeholder="street Address" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only"> </label>
                                            <select name="city name" class="form-control" required>
                                                <option value="">Ahmedabad</option>
                                                <option value="1">Mumbai</option>
                                                <option value="2">Surat</option>
                                                <option value="3">Banglore</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only "></label>
                                            <select name="state name" class="form-control" required>
                                                <option value="">Gujarat</option>
                                                <option value="1">Maharashtra</option>
                                                <option value="2">Rajasthan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only"></label>
                                            <input name="postcode" type="text" class="form-control"
                                                   placeholder="Enter Your zipcode" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="textarea"></label>
                                            <textarea class="form-control" id="textarea" name="textarea" rows="4"
                                                      placeholder="Notes About Your Order"></textarea>
                                        </div>
                                        <button class="btn btn-primary ">Procced to Payment</button>
                                        <div class="checkbox alignright mt20">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span>Create An Account?</span>
                                            </label>
                                        </div>
                                    </div>
                                </form>
                                <!-- /.checkout-form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product total -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box mb30">
                        <div class="box-head">
                            <h3 class="head-title">Your Order</h3>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <!-- product total -->

                                <div class="pay-amount ">
                                    <table class="table mb20">
                                        <thead class=""
                                               style="border-bottom: 1px solid #e8ecf0;  text-transform: uppercase;">
                                        <tr>
                                            <th>
                                                <span>Product</span></th>
                                            <th>
                                                <span>Total</span></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th>
                                                <span>Google Pixle X 1</span></th>
                                            <td>$2400</td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <span>Apple iPhone 6S X 1 </span></th>
                                            <td>$1300</td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <span>Sub Total </span></th>
                                            <td>$2400</td>
                                        </tr>
                                        </tbody>
                                        <tbody>
                                        <tr>
                                            <th>
                                                <span>Amount Payable</span></th>
                                            <td>$2400</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.product total -->
                            </div>
                        </div>
                    </div>
                    <!-- place order -->
                    <div class="box">
                        <div class="box-head">
                            <h3 class="head-title">Check Payment</h3>
                        </div>
                        <div class="box-body">
                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store
                                Postcode.</p>
                            <button class="btn btn-default btn-block">Place Order</button>
                        </div>
                    </div>
                    <!-- /.place order -->
                </div>
            </div>
        </div>
    </div>

@endsection

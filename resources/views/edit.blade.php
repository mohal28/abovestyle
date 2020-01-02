<!-- Scripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('js/order.js') }}"></script>

@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Edit the Order</h1>
    <form method="POST" action="/order/{{ $order->id }}">

        <!--Order form -->

        <div class="form-group row">
            <!--Empty row-->
        </div>

        <div class="card w-75">
            <h4 class="card-header">Customer information</h4>
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputName" class="col-sm-3 col-form-label col-form-label-lg">Name</label>
                    <div class="col-sm-7">
                        <input name="description" type="text" class="form-control" id="inputName" value="{{$order->description }}" placeholder="Above Style">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPhone" class="col-sm-3 col-form-label col-form-label-lg">Phone Number</label>
                    <div class="col-sm-7">
                        <input type="tel" class="form-control" id="inputPhone" placeholder="01111-222222">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-3 col-form-label col-form-label-lg">Email</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" id="inputEmail" placeholder="abovestyle.bd@gmail.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputAddress" class="col-sm-3 col-form-label col-form-label-lg">Address</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputAddress" placeholder="House no 11, Floor no 2, Road no 333, Gulshan 2">
                    </div>
                </div>
            </div>
        </div>

        
        <div class="form-group row">
            <!--Empty row-->
        </div>

        <div class="card w-75">
            <h4 class="card-header">Product information</h4>
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputCategory" class="col-sm-3 col-form-label col-form-label-lg">Category</label>
                    <div class="col-sm-7">
                        <select class="form-control" id="inputCategory">
                            <option value="" disabled selected>Select Category</option>
                            <option value="1">Hijab</option>
                            <option value="2">Cosmetics</option>
                            <option value="3">Skin Care</option>
                            <option value="4">Decor</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputProductName" class="col-sm-3 col-form-label col-form-label-lg">Product name</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputProductName" placeholder="Chiffon Hijab">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputQuantity" class="col-sm-3 col-form-label col-form-label-lg">Quantity</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="number" value="3" id="inputQuantity">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPrice" class="col-sm-3 col-form-label col-form-label-lg">Price</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="number" value="350" id="inputPrice" aria-describedby="priceHelp">
                        <small id="priceHelp" class="form-text text-muted">Price shown in BDT (Bangladeshi Taka).</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <!--Empty row-->
        </div>

        <div class="card w-75">
            <h4 class="card-header">Additional charge</h4>
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputWeightCharge" class="col-sm-3 col-form-label col-form-label-lg">Weight Charge</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="number" value="200" id="inputWeightCharge" aria-describedby="wChargeHelp">
                        <small id="wChargeHelp" class="form-text text-muted">Charge shown in BDT (Bangladeshi Taka).</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputDeliveryCharge" class="col-sm-3 col-form-label col-form-label-lg">Delivery Charge</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="number" value="70" id="inputDeliveryCharge" aria-describedby="dChargeHelp">
                        <small id="dChargeHelp" class="form-text text-muted">Charge shown in BDT (Bangladeshi Taka).</small>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="form-group row">
            <!--Empty row-->
        </div>

        <div class="card w-75">
            <h4 class="card-header">Additional charge</h4>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label col-form-label">Poduct price</label>
                    <label class="col-sm-2 col-form-label col-form-label" id="displayPrice">BDT 0</label>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label col-form-label">Additional charges</label>
                    <label class="col-sm-2 col-form-label col-form-label" id="displayCharge">BDT 0</label>
                </div>

                <!--Total amount-->
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label col-form-label-lg"><b>Amount</b></label>
                    <label class="col-sm-2 col-form-label col-form-label-lg" id="displayAmount"><b>BDT 0</b></label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <!--Empty row-->
        </div>

        <!--Submit button-->
        <div class="form-group row">
            <div class="col-sm-9 d-flex flex-row-reverse">
                <button type="submit" name="update" class="btn btn-primary btn-lg">Update order</button>
            </div>
        </div>
    {{ csrf_field() }}
    </form>
</div>

@stop
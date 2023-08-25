@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
<div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="{{route('shop.show',$product->id)}}">
                    <img src="{{asset($product->image)}}" class="img-fluid product-thumbnail">
                    <h3 class="product-title">{{$product->title}}</h3>
                    <strong class="product-price">${{$product->price}}.00</strong>

                    <span class="icon-cross">
                        <img src="{{asset('assets/images/cross.svg')}}" class="img-fluid">
                    </span>
                </a>
            </div>
</div>
</div>

@endsection
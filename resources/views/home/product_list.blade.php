@extends('layout.master')
@section('slide')
<div class="">
    <img src="https://www.mbageas.life/uploads/6DxT0DEeoY6up19p1CfcD/1605587383324_original.jpg" alt="image_header" style="min-height:400px;width:100%;object-fit:cover;object-position:70%">
</div>

@endsection
@section('content')
<div class="container py-5">
    @foreach ($products as $product)
    <div class="product_row--item row mt-5" style="background-color: rgb(255, 233, 239);">
        <div class="col-md-8 " >
            <div class="col-md-12 ">
                <h4 class="py-3 ">{{$product->name}}</h4>
                <p>{!!$product->title!!}</p>
                <div class="icon__moreinfo ">
                    <span class="more-infor">Tìm hiểu thêm</span>
                    <i class="fas fa-chevron-circle-right more-infor__icon " ></i>
                </div>    
            </div>
        </div>
        <div class="col-md-4 product_image ">
            <img src="{{$product->image}}" alt="ảnh" width="100%" height="300px">
        </div>
    </div>
    
    @endforeach

</div>
@endsection
@section('product')

@endsection



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
              <a href="{{route('getProductById',$product->id )}}"><h4 class="py-3">{{$product->name}}</h4></a>  
                <p>{!!$product->title!!}</p>
                <div class="icon__moreinfo ">
                  <a href="{{route('getProductById',$product->id )}}">
                     <span class="more-infor">Tìm hiểu thêm</span>
                    <i class="fas fa-chevron-circle-right more-infor__icon " ></i>
                  </a> 
                </div>    
            </div>
        </div>
        <div class="col-md-4 product_image ">
            <img src="{{str_replace("\\", "\/", asset($product->image))}}" alt="ảnh" width="100%" height="300px">
        </div>
    </div>
    
    @endforeach

</div>
@endsection
@section('product')

@endsection



@section('contact')
     <!-- contact -form     -->
     <div class="py-6 home-consultant container">
      <div class="col-md-4 home-consultant__left">
        <div class="sub-title">
          <div class="sub-title__line"></div>
          <h5>Liên hệ</h5>
        </div>
        <h4>
          Để được tư vấn bởi đội ngũ chuyên gia
        </h4>
      </div>
      <div class="col-md-8 home-consultant__right"> 
      <form action="{{route('save_consultation')}}" method="post">
        @csrf
        <div class="contact-form">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Họ và tên  <span class="text-required">*</span></label>
              <input type="text" class="form-control" id="" name="name" aria-describedby="texthelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="">Email <span class="text-required">*</span></label>
              <input type="email" class="form-control" id="" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            
          </div>
 
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Số điện thoại <span class="text-required">*</span></label>
              <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="phone" placeholder="Enter phone">
            </div>
            <div class="form-group">
              <label for="">Tỉnh thành phố <span class="text-required">*</span></label>
              <select class="custom-select" name="calc_shipping_provinces" required="">
                <option value="">Tỉnh / Thành phố</option>
              </select>
              
              <input class="billing_address_1" name="" type="hidden" value="">
            </div>
            
          </div>
          
        </div>
        <div class="col-md-12"> 
          <div class="form-group">
              <input class="billing_address_1" name="" type="hidden" value="">
          </div>
          
        </div>
        <div class="col-md-12 contact-checkbox">
          <div class="col-md-12 form-check">
            <div class="custom-control custom-checkbox">  
              <input type="checkbox" class="custom-control-input" id="customCheck1">  
              <label class="custom-control-label" for="customCheck1">Sử dụng e-mail để đăng ký nhận thông tin mới từ MB Ageas Life</label>  
            </div>
          </div>
        </div>
      
        <div class="col-md-12 contatc-policy">
          <span>Bằng việc click nút "Gửi thông tin", bạn đã đồng ý với các</span>
          <a href="" class="policy_link_text">điều khoản và điều kiện</a>
          <span>của chúng tôi</span>
        </div>

          {{-- <div class="btn-submit">
            <a href="javascript:void(0)" type="submit" class="btn">Gởi thông tin</a>
          </div> --}}
          <div>
            <button class="btn button-submit btn-submit" type="submit" > Gởi thông tin</button>
          </div>
    
      </form>
        
       
      </div>
   
    </div>
@endsection 

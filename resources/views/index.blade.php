
@extends('layout.master')
    @section('head')
        
    @endsection
    @section('slide')
          <section class="py-0">
          <div
            id="carouselExampleIndicators"
            class="carousel slide"
            data-ride="carousel"
          >
            <ol class="carousel-indicators">
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="0"
                class="active"
              ></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
             
              <div class="carousel-item active">
                <img
                  class="d-block w-100"
                  src="https://www.mbageas.life/uploads/WRS-bynprm7WZpzd3xp2j/1618476771510_original.jpg"
                  alt="First slide"
                />
              </div>
              <div class="carousel-item">
                <img
                  class="d-block w-100"
                  src="https://www.mbageas.life/uploads/JpCfjYDkMSFtO_0xa2cWo/1615351388732_original.jpg"
                  alt="Second slide"
                />
              </div>
              <div class="carousel-item">
                <img
                  class="d-block w-100"
                  src="https://www.mbageas.life/uploads/1poeaAEdU_6PFXYWapsAS/1615351283621_original.jpg"
                  alt="Third slide"
                />
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="prev"
            >
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="next"
            >
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <!-- end Slide -->
        </section>
    @endsection
      
    @section('content')
    <div class="py-3 container heading-block">
      <div class="sub-title">
        <div class="sub-title__line"></div>
        <h5>Sản phẩm</h5>
      </div>
      
      <div class="heading-row">
        <div class="heading-block heading-block__left">
          <h2>Nổi bật nhất</h2>
        </div>
        <div class="heading-block heading-block__right">
        <a href="/product"><h4>Xem sản phẩm <i class="fas fa-chevron-circle-right more-infor__icon " ></i></h4></a>  
        </div>
      </div>
    </div>
    <div class="py-5 container">
      <div class="product-lists">
        @foreach ($products as $product)
        <div class="col-md-5 col-xs-5 product-item" style="background: url('{{str_replace("\\", "\/", asset($product->image))}}'); background-size:cover">
         
          <div class="product-item_content">
            <p>{{$product->category->category_name}}</p>
            <h4 class="product_name" >{{$product->name}}</h4>
          </div>
          <div class="product-item-hover">
            <a href="/product/{{$product->id}}">
              <p>{{$product->category->category_name}}</p>
              <h4 class="product_name" >{{$product->name}}</h4>
              <p class="content-product">
                {!!$product->title!!}
              </p>
            </a>
            
          </div>
        </div>
        @endforeach

      </div>
    </div>
    @endsection
      
    
    @section('service')
    <div class="py-1 container heading-block">
      <div class="sub-title">
        <div class="sub-title__line"></div>
        <h5>DỊCH VỤ KHÁCH HÀNG</h5>
      </div>
      @if ( Session::has('flash_message') )
             
              <div class="alert {{ Session::get('flash_type') }}">
                <script> M.toast({html: '{{ Session::get('flash_message') }}', displayLegth: 1000, timeRemaining: 2000}) </script>
                  <h3></h3>
              </div>
              @endif
      <div class="heading-row">
        <div class="heading-block heading-block__left">
          <h2>THÔNG TIN KHÁCH HÀNG</h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row customer-block">
        <div class="col-md-4 customer-block-item">
          <a href="" class="feature-item_link">
            <div class="feature-item_icon">
              <img
                src="https://www.mbageas.life/home/images/refund.svg"
                alt="ImageSeo"
                class="refund-icon"
                style="opacity: 1"
              />
            </div>
            <div class="refund-content">
              <h4 class="">Giải quyết quyền lợi bảo hiểm</h4>
              <p class="">
                Cách thức nhanh chóng để yêu cầu Giải quyết quyền lợi bảo hiểm
              </p>
            </div>
            <div class="icon__moreinfo">
              <span class="more-infor">Tìm hiểu thêm</span>
              <i class="fas fa-chevron-circle-right more-infor__icon " ></i>
            </div>
          </a>
        </div>
        <div class="col-md-4 customer-block-item">
          <a href="" class="feature-item_link">
            <div class="feature-item_icon">
              <img
                src="https://www.mbageas.life/home/images/card.svg"
                alt="ImageSeo"
                class="refund-icon"
                style="opacity: 1"
              />
            </div>
            <div class="refund-content">
              <h4 class="">Phương thức đóng phí </h4>
              <p class="">
                Hướng dẫn hình thức thanh toán bằng tiền mặt hoặc trực tuyến
              </p>
            </div>
            <div class="icon__moreinfo">
              <span class="more-infor">Tìm hiểu thêm</span>
              <i class="fas fa-chevron-circle-right more-infor__icon " ></i>
            </div>
          </a>
        </div>
        <div class="col-md-4 customer-block-item">
          <a href="" class="feature-item_link">
            <div class="feature-item_icon">
              <img
                src="https://www.mbageas.life/home/images/shipping.svg"
                alt="ImageSeo"
                class="refund-icon"
                style="opacity: 1"
              />
            </div>
            <div class="refund-content">
              <h4 class="">Thay đổi thông tin hợp đồng</h4>
              <p class="">
                Cách thức liên hệ với chúng tôi để yêu cầu thay đổi thông tin trên Hợp đồng bảo hiểm
              </p>
            </div>
            <div class="icon__moreinfo">
              <span class="more-infor">Tìm hiểu thêm</span>
              <i class="fas fa-chevron-circle-right more-infor__icon " ></i>
            </div>
          </a>
        </div>
      </div>
    </div>
    <!-- about -->
    @endsection    <!-- {{-- products --}} -->
       
    
       
    @section('aboutcompany')
    <div class="home-about">
          <img
            src="https://www.mbageas.life/uploads/lh9r7jWfOnSe3ldIMna89/1615517617110_original.jpg"
            alt=""
            style="opacity: 1; width: 100%; z-index: 10"
          />
          <div class="home-about__content">
            <div class="container">
              <div class="row home-about__container">
                <div class="col-md-6">
                  <h6 class="about-text">VỀ MB AGEAS</h6>
                  <h3 class="about-text__title">
                    Đồng hành cùng Bạn dựng xây hạnh phúc
                  </h3>
                </div>
                <div class="col-md-6">
                  <p class="about-text">
                    Sở hữu tiềm lực tài chính vững mạnh, nguồn lực nhân sự dồi dào
                    cùng hệ thống phân phối rộng khắp, MB Ageas Life đang tiến đến
                    rất gần tầm nhìn dài hạn - Trở thành Công ty bảo hiểm nhân thọ
                    hàng đầu được tin yêu nhất tại Việt Nam.
                  </p>
                  <a href="" class="more-infor"> Xem chi tiết</a>
                  <i class="fas fa-chevron-circle-right more-infor__icon--about " ></i>
                </div>
              </div>
            </div>
          </div>
        </div>
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
              <input type="text" class="form-control" id="" name="name" aria-describedby="texthelp" placeholder="Enter full name">
            </div>
            <div class="form-group">
              <label for="">Email <span class="text-required">*</span></label>
              <input type="email" class="form-control" id="" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            
          </div>
 
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Số điện thoại <span class="text-required">*</span></label>
              <input type="tel" class="form-control" id="" aria-describedby="emailHelp" name="phone" placeholder="Enter phone">
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
       
        
      
         

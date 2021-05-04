<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MB ageas life</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.gstatic.com" />
         <link
           href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,700;1,600&display=swap"
           rel="stylesheet"
         />
         {{-- fontawsome --}}
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

         <!-- Styles -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('css/client.css') }}" rel="stylesheet">
        
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
    
        <nav class="navbar navbar-expand-lg py-3 shadow-sm">
          <button
            type="button"
            data-toggle="collapse"
            data-target="#navbarContent"
            aria-controls="navbars"
            aria-expanded="false"
            aria-label="Toggle navigation"
            class="navbar-toggler"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div id="navbarContent" class="collapse navbar-collapse">
            <ul class="navbar-nav nav-brand">
              <a href="{{route('index')}}"><img
                src="https://www.mbageas.life/uploads/X-ak5M5lFNEvGXGUzSMkZ/1598613473300_original.png"
                alt=""
              /></a>
              
            </ul>
            <ul class="navbar-nav mx-auto">
              <!-- Megamenu-->
              <li class="nav-item dropdown megamenu">
                <a
                  id="megamneu"
                  href=""
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  class="nav-link dropdown-toggle font-weight-bold text-uppercase"
                  >Sản phẩm</a
                >
                <div
                  aria-labelledby="megamneu"
                  class="dropdown-menu border-0 p-0 m-0"
                >
                  <div class="container">
                    <div class="row bg-white rounded-0 m-0 shadow-sm">
                      <div class="col-lg-12 col-md-12">
                        <div class="p-4">
                          <div class="row">
                            <div class="col-md-6 sub-nav">
                              <h6 class="font-weight-bold text-uppercase">
                                Nhu cầu của bạn
                              </h6>
                              <ul class="list-unstyled">
                                <li class="nav-item">
                                  <a href="" class="nav-link text-small pb-0">
                                    <img
                                      src="https://www.mbageas.life/uploads/iyXWHnJRauXgZ4mfZwaNC/1598930878743_original.png"
                                      alt=""
                                      class="icon-menu"
                                    />
                                    <span> Bảo vệ toàn vẹn </span>
                                  </a>
                                </li>
    
                                <li class="nav-item">
                                  <a href="" class="nav-link text-small pb-0">
                                    <img
                                      src="https://www.mbageas.life/uploads/Cx6PryQ43ECGNPgQiVH3H/1598930878651_original.png"
                                      alt=""
                                      class="icon-menu"
                                    />
                                    <span> Sống khỏe vẹn tròn </span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="" class="nav-link text-small pb-0">
                                    <img
                                      src="https://www.mbageas.life/images/menu-money1.svg"
                                      alt=""
                                      class="icon-menu"
                                    />
                                    <span> Hưu trí an toàn </span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="" class="nav-link text-small pb-0">
                                    <img
                                      src="https://www.mbageas.life/uploads/on33W8YcaPC2Af-h1sSET/1598930878504_original.png"
                                      alt=""
                                      class="icon-menu"
                                    />
                                    <span> Tích lũy tương lai </span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="" class="nav-link text-small pb-0">
                                    <img
                                      src="https://www.mbageas.life/uploads/TwPyplk4T5CIIGtiaJVun/1598930878636_original.png"
                                      alt=""
                                      class="icon-menu"
                                    />
                                    <span> Đầu tư thông thái </span>
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-md-6 mb-4">
                              <h6 class="font-weight-bold text-uppercase">
                                Sản phẩm của chúng tôi
                              </h6>
                              <a href="/product/category/1" class="nav-link sub-menu--item btn">
                                <img
                                  src=" https://www.mbageas.life/uploads/mvQLNHZoFzeMVW9J9NoBs/1598930878724_original.png "
                                  alt=" "
                                  class="menu-item-img"
                                />
                                <span class="sub-menu--name text-small"
                                  >Sản phẩm chính</span
                                >
                              </a>
                              <a href="/product/category/2" class="nav-link sub-menu--item btn">
                                <img
                                  src="https://www.mbageas.life/uploads/YNZlFDNu66-l89LGhLElT/1598930878633_original.png "
                                  alt=" "
                                  class="menu-item-img"
                                />
                                <span class="nav-link--name text-small">Sản phẩm bổ trợ</span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link font-weight-bold text-uppercase"
                  >About</a
                >
              </li>
              <li class="nav-item">
                <a href="{{route('home.contract')}}" class="nav-link font-weight-bold text-uppercase"
                  >Tra cứu thông tin hợp đồng</a
                >
              </li>
              <li class="nav-item">
                <a href="{{route('home.contact')}}" class="nav-link font-weight-bold text-uppercase"
                  >Liên hệ tư vấn</a
                >
              </li>
            </ul>
            <ul class="navbar-nav mx-2">
    
              @if ((session('customer_name')))
              <li class="nav-item">Hi {{session('customer_name')}}</li>
              <li class="nav-item">
                <a href="{{route('user.logout')}}" class="nav-link font-weight-bold text-uppercase"
                >Đăng xuất</a
              >
                 </li>
              @else 
              <li class="nav-item">
                <a href="{{route('userlogin')}}" class="nav-link font-weight-bold text-uppercase"
                  >Đăng nhập
                </a>
              </li>
              
              
              @endif
             
            </ul>
          </div>
        </nav>
        
        @yield('slide')
        @yield('content')
        @yield('service')
        @yield('aboutcompany')
        @yield('contact')
        
        <div class="contact-footer">
            <div class="col-md-4 contact-item contact-item__left">
              <div class="col-md-3 contact-item__icon">
                 <i class="fas fa-chevron-circle-right more-infor__icon " ></i>
              </div>
              <div class="col-md-6 contact-item__content">
               <p>Gọi cho chúng tôi</p>
               <p>02422298888</p>
              </div>
            </div> 
            <div class="col-md-4 contact-item contact-item__center">
             <div class="col-md-3 contact-item__icon">
                <i class="fas fa-chevron-circle-right more-infor__icon " ></i>
             </div>
             <div class="col-md-6 contact-item__content">
              <p>Gọi cho chúng tôi</p>
              <p>02422298888</p>
             </div>
           </div> 
           <div class="col-md-4 contact-item contact-item__right">
             <div class="col-md-3 contact-item__icon">
                <i class="fas fa-chevron-circle-right more-infor__icon " ></i>
             </div>
             <div class="col-md-6 contact-item__content">
              <p>Gọi cho chúng tôi</p>
              <p>02422298888</p>
             </div>
           </div> 
            
        
     
          </div>
       
     
         <!-- footer -->
         <div id="footer">
             <div class="main-footer">
               <div class="footer-content">
                 <div class="col-md-3 footer-left">
                   <a href="/" class="footer-logo"
                     ><img
                     src="https://www.mbageas.life/uploads/X-ak5M5lFNEvGXGUzSMkZ/1598613473300_original.png"
                       alt=""
                       style="height: 90px"
                     />
                   </a>
                   <div class="footer-title">
                     <p>Liên hệ</p>
                   </div>
                   <ul>
                     <li> <a href=""></a>Tầng 15, Tòa nhà 21 Cát Linh, phường Cát Linh, quận Đống Đa, Hà Nội </li>
                     <li> <a href=""></a>024 2229 8888 </li>
                     <li> <a href=""></a>dvkh@mbageas.life </li>
                   </ul>
                   <p>Theo dõi MB Ageas Life</p>
                   <div class="footer-social ml-5">
                     <a href="#"><i class="fab fa-facebook-square"></i></a>
                     <a href="#"> <i class="fab fa-instagram"></i></a>
                     <a href="#"> <i class="fab fa-youtube"></i></a>
                     <a href="#"><i class="fab fa-twitter-square"></i></a>
                   </div>
                 </div>
                 <div class="col-md-2 footer-center">
                   <div class="footer-title">
                     <p>Sản phẩm</p>
                   </div>
                   <ul>
                     <li><a href="#">Sản phẩm chính</a></li>
                     <li><a href="#">Sản phẩm bổ trợ</a></li>
                     <li><a href="#">Sản phẩm theo nhu cầu</a></li>
                     <li><a href="#">Chương trình khuyến mãi</a></li>            
                   </ul>
                 </div>
                 <div class="col-md-2 footer-center">
                   <div class="footer-title">
                     <p>Chăm sóc khách hàng </p>
                   </div>
                   <ul>
                     <li><a href="#">Thanh toán</a></li>
                     <li><a href="#">Yêu cầu bồi thường</a></li>
                     <li><a href="#">Thay đổi thông tin hợp đồng</a></li>
                     <li><a href="#">Câu hỏi thường gặp</a></li>            
                   </ul>
                 </div>
                 <div class="col-md-2 footer-center">
                   <div class="footer-title">
                     <p>Về chúng tôi</p>
                   </div>
                   <ul>
                     <li><a href="#">Khởi nguồn </a></li>
                     <li><a href="#">Đội ngũ</a></li>
                     <li><a href="#">Báo cáo tài chính</a></li>
                     <li><a href="#">Thương hiệu</a></li> 
                     <li><a href="#">Tuyển dụng</a></li>           
                   </ul>
                 </div>
                 <div class="col-md-3 footer-rigt">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d956.5234668414207!2d107.59410882914834!3d16.47078399928962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a12326cdb531%3A0x442ee302689a70d4!2zODYgTMOqIEzhu6NpLCBQaMO6IEjhu5lpLCBUaMOgbmggcGjhu5EgSHXhur8sIFRo4burYSBUaGnDqm4gSHXhur8gNTMwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1620055315733!5m2!1svi!2s" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                 </div>
               </div>
          
            
           </div>
          
         <script
           src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
           integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
           crossorigin="anonymous"
         ></script>
         <script
           src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
           integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
           crossorigin="anonymous"
         ></script>
         <script
           src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
           integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
           crossorigin="anonymous"
         ></script>
     
        
       <script src='https://cdn.jsdelivr.net/gh/vietblogdao/js/districts.min.js'></script>
     
     <script>//<![CDATA[
     if (address_2 = localStorage.getItem('address_2_saved')) {
       $('select[name="calc_shipping_district"] option').each(function() {
         if ($(this).text() == address_2) {
           $(this).attr('selected', '')
         }
       })
       $('input.billing_address_2').attr('value', address_2)
     }
     if (district = localStorage.getItem('district')) {
       $('select[name="calc_shipping_district"]').html(district)
       $('select[name="calc_shipping_district"]').on('change', function() {
         var target = $(this).children('option:selected')
         target.attr('selected', '')
         $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
         address_2 = target.text()
         $('input.billing_address_2').attr('value', address_2)
         district = $('select[name="calc_shipping_district"]').html()
         localStorage.setItem('district', district)
         localStorage.setItem('address_2_saved', address_2)
       })
     }
     $('select[name="calc_shipping_provinces"]').each(function() {
       var $this = $(this),
         stc = ''
       c.forEach(function(i, e) {
         e += +1
         stc += '<option value=' + e + '>' + i + '</option>'
         $this.html('<option value="">Tỉnh / Thành phố</option>' + stc)
         if (address_1 = localStorage.getItem('address_1_saved')) {
           $('select[name="calc_shipping_provinces"] option').each(function() {
             if ($(this).text() == address_1) {
               $(this).attr('selected', '')
             }
           })
           $('input.billing_address_1').attr('value', address_1)
         }
         $this.on('change', function(i) {
           i = $this.children('option:selected').index() - 1
           var str = '',
             r = $this.val()
           if (r != '') {
             arr[i].forEach(function(el) {
               str += '<option value="' + el + '">' + el + '</option>'
               $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>' + str)
             })
             var address_1 = $this.children('option:selected').text()
             var district = $('select[name="calc_shipping_district"]').html()
             localStorage.setItem('address_1_saved', address_1)
             localStorage.setItem('district', district)
             $('select[name="calc_shipping_district"]').on('change', function() {
               var target = $(this).children('option:selected')
               target.attr('selected', '')
               $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
               var address_2 = target.text()
               $('input.billing_address_2').attr('value', address_2)
               district = $('select[name="calc_shipping_district"]').html()
               localStorage.setItem('district', district)
               localStorage.setItem('address_2_saved', address_2)
             })
           } else {
             $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>')
             district = $('select[name="calc_shipping_district"]').html()
             localStorage.setItem('district', district)
             localStorage.removeItem('address_1_saved', address_1)
           }
         })
       })
     })
         </script>
       </body>
        
   
 </html>
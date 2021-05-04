 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <link rel="icon" type="image/png" href="{{asset('img/favicon.ico')}}" />
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Lobster&display=swap" rel="stylesheet"/>
    
     <link
       href="{{asset('css/light-bootstrap-dashboard.css?v=2.0.0')}}"       rel="stylesheet"
     />
     <!-- CSS Just for demo purpose, don't include it in your project -->
     <link href="{{asset('css/demo.css')}}" rel="stylesheet" />

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>

    {{-- summernote --}}
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
   <title>MB ageas dashboard</title>
 
</head>
 
   <body>
       <div class="wrapper">
        @include('layout/core/dashboard/sidebar')

        <div class="main-panel">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg" color-on-scroll="500">
            <div class="container-fluid">
              <a class="navbar-brand" href="#pablo"> Dashboard </a>
              <button
                href=""
                class="navbar-toggler navbar-toggler-right"
                type="button"
                data-toggle="collapse"
                aria-controls="navigation-index"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
              </button>
              <div
                class="collapse navbar-collapse justify-content-end"
                id="navigation"
              >
                <ul class="nav navbar-nav mr-auto">
                  <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                      <i class="nc-icon nc-palette"></i>
                      <span class="d-lg-none">Dashboard</span>
                    </a>
                  </li>
               
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nc-icon nc-zoom-split"></i>
                      <span class="d-lg-block">&nbsp;Tìm kiếm</span>
                    </a>
                  </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#pablo">
                      <span class="no-icon">Tài khoản</span>
                    </a>
                  </li>
                  
                  <li class="nav-item " >
                    @if (!empty(Auth::user()))
                    <span style="color:blue">Chào {{Auth::user()->name}} </span>
                    <a class="nav-link" href="{{route('logout')}}">
                     
                      <span class="no-icon">Đăng xuất</span>
                    </a>

                    @endif
                    
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          {{-- end-navbar --}}
         @yield('content_dashboard')
          
         
      </div>
        @include('layout/core/dashboard/footer')
        
       
       </div>
   </body>
   <!--   Core JS Files   -->
   
 </html>
 
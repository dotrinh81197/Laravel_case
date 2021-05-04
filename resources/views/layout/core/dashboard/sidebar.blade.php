<div class="sidebar" data-color="purple">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="" class="simple-text">
                <img
                src="https://www.mbageas.life/uploads/X-ak5M5lFNEvGXGUzSMkZ/1598613473300_original.png"
                alt="" height="70px"
              />
            </a>
        </div>
        <ul class="nav">
            <li>
                <a class="nav-link" href="dashboard.html">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('user.index')}}">
                    <i class="nc-icon nc-circle-09"></i>
                    <p>Tư vấn viên</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('product.index')}}">
                    <i class="nc-icon nc-notes"></i>
                    <p>Sản phẩm</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('category.index')}}">
                    <i class="nc-icon nc-notes"></i>
                    <p>Thể loại</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('contract.index')}}">
                    <i class="nc-icon nc-notes"></i>
                    <p>TẠO HỢP ĐỒNG</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('contract.list')}}">
                    <i class="nc-icon nc-notes"></i>
                    <p> HỢP ĐỒNG</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('consultation.index')}}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>TƯ VẤN</p>
                </a>
            </li>
            {{-- blog     --}}
            {{-- <li>
                <a class="nav-link" href="{{route('blog.index')}}">
                    <i class="nc-icon nc-atom"></i>
                    <p>BLog Products</p>
                </a>
            </li> --}}
            {{-- <li>
                <a class="nav-link" href="">
                    <i class="nc-icon nc-atom"></i>                    <p>Maps</p>
                </a>
            </li> --}}
            {{-- <li>
                <a class="nav-link" href="./notifications.html">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Notifications</p>
                </a>
            </li>
            <li class="nav-item active active-pro">
                <a class="nav-link active" href="upgrade.html">
                    <i class="nc-icon nc-alien-33"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
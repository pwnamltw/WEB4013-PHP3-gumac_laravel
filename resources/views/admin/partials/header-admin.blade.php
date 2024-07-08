
        <div class="admin-container">
            <header class="d-flex justify-content-between ">
                <div class="logo-side-bar">
                    <img src="{{asset('img/logoft.png')}}" alt="" style="width: 110px; height: 70px;">
                </div>
                <div class="header-admin-content ">
                    <h2>Quản Trị Viên</h2>
                    <div class="info-admin">
                        <div class="avt">
                            <img src="{{asset('img/avatar.jpg')}}" alt="">
                        </div>
                        <div class="name">
                            <span>Phương Nam</span>
                            <span>pwnam@gmail.com</span>
                        </div>
                    </div>
                </div>
            </header>
            <div class="admin-side-bar">
                <ul class="admin-main-menu">
                    <li style="list-style: none;"><a style="text-decoration: none;" href="{{route('admin')}}">Trang Chủ</a></li>
                    <li style="list-style: none;"><a style="text-decoration: none;" href="{{ route('product-list') }}">Sản Phẩm</a></li>
                    <li style="list-style: none;"><a style="text-decoration: none;" href="{{ route('category-list') }}">Danh Mục</a></li>
                    <li style="list-style: none;"><a style="text-decoration: none;" href="{{ route('user-list') }}">Khách Hàng</a></li>
                    <li style="list-style: none;"><a style="text-decoration: none;" href="{{ route('donhang') }}">Đơn Hàng</a></li>
                    
                </ul>
            </div>
        </div>
  
    
<header>
            
                <div class="text-bg-dark " style="height: 60px;">
                  <div class="container d-flex justify-content-between align-items-center">
                    <span class=" fs-6 pt-2"><i class="fa-solid fa-phone fa-lg "> </i> Hotline đặt hàng 18006013</span>
                    <div class="d-flex gap-5 pt-2">
                      <span class="fs-6 pt-2"><i class="fa-solid fa-map-location-dot"></i> Tra Cứu tình trạng đơn
                        hàng</span>
                      <span class="fs-6 pt-2"><i class="fa-solid fa-location-dot"></i> Hệ thống showroom</span>
                      <form class="d-flex" action="{{ route('product') }}"  >
                    <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="txtKeyword" value="{{ request('txtKeyword') }}">
                    
                    <button type="submit" class="btn btn-outline-dark" ><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                    </div>
                  </div>
                </div>
                <div class="container">
                  <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <a  href="{{ route('home') }}">
                      <img class="header-logo" src="{{asset('img/Logo-cong-ty-gumac.vn-removebg-preview.png')}}"
                        alt="" >
                    </a>
                    <div class="container-fluid">
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                         <li class="nav-item">
                            <a class="nav-link active fs-5 fw-medium " aria-current="page" href="{{route('home')}}">TRANG CHỦ</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active fs-5 fw-medium " aria-current="page" href="{{ route('product') }}">HÀNG MỚI</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active fs-5 fw-medium " aria-current="page" href="#">DANH MỤC</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active fs-5 fw-medium " aria-current="page" href="#">DANH MỤC</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active fs-5 fw-bold text-danger" aria-current="page" href="#sale">SALE
                              OFF</a>
                          </li>
                          
                        </ul>
                      </div>
                    </div>
                    <div>
                      <ul class="navbar-nav gap-3">
                        <div class="action">
                        @if(Auth::check())
                          <details class="text-white">
                            <summary class="nav-link" style="list-style: none;">
                            <img class="avatar" src="{{ asset(Auth::user()->avatar ? 'uploaded/' . Auth::user()->avatar : 'img/default-avatar.png') }}" alt="Ảnh đại diện">
                            </summary>
                            <ul style="
                              margin: 0;
                              padding: 0;
                              background-color: #1884ba;
                              position: absolute;
                              right: 80px;
                              z-index: 1000;
                            ">
                            <li class="nav-link"><a class="nav-link text-light " href="{{route('info')}}">Thông Tin Cá Nhân</a></li>
                            <li class="nav-link"><a class="nav-link text-light" href="{{ route('lichsu') }}">Lịch Sữ</a></li>
                            <li class="nav-link"><a class="nav-link text-light" href="{{ route('logout')}}">Đăng Xuất</a></li>
                            </ul>
                          </details>
                          @else
                          <details class="text-white">
                            <summary class="nav-link" style="list-style: none;">
                              <img class="avatar" src="{{ asset('img/default-avatar.png') }}" alt="">
                            </summary>
                            <ul style="
                              margin: 0;
                              padding: 0;
                              background-color: #1884ba;
                              position: absolute;
                              right: 80px;
                              z-index: 1000;
                            ">
                              <li class="nav-link" style="padding: 8px 16px">
                                <a class="nav-link text-light" href="{{ route('login') }}">Đăng nhập</a>
                              </li>
                              <li class="nav-link" style="padding: 8px 16px">
                                <a class="nav-link text-light" href="{{ route('dangky') }}">Đăng ký</a>
                              </li>
                            </ul>
                          </details>
                        @endif

                        </div>
                        <a href="{{ route('product-favorite') }}" class="nav-link">
                          <li class="nav-item"><i class="fa-regular fa-heart fa-2xl"></i></li>
                        </a>
                        <a href="{{ route('cart') }}" class="nav-link">
                          <li class="nav-item"><i class="fa-solid fa-bag-shopping fa-2xl"></i></li>
                        </a>
                      </ul>
                    </div>
                  </nav>
                </div>
            
    
        </header> 
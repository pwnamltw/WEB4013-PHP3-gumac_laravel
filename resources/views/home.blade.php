    
@extends('layout')
@section('content',)
 <main class="mb-5">
       <!-- CAROSEL SLIDE -->
   <div class="container-fluid">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/slide1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/slide2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/slide3.jpg" class="d-block w-100" alt="...">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>

    </div>

    <!-- VOUCHER -->
    <div class="container mt-5">
    <div class="row">
        <div class="col-4">
        <a href="">
            <img class="img-fluid img-hover" src="img/voucher1.jpg" alt="">
        </a>
        </div>
        <div class="col-4">
        <a href="">
            <img class="img-fluid img-hover" src="img/voucher2.jpg" alt="">
        </a>
        </div>
        <div class="col-4">
        <a href="">
            <img class="img-fluid img-hover" src="img/voucher3.jpg" alt="">
        </a>
        </div>
    </div>
    </div>
    
    <div class="container mt-5">
    <div class="row">
        <div class="col-3">
        <img src="img/1-3.png" alt="" width="30%">
        <h5>FREESHIP</h5>
        <p class="">Miễn Phí Vận Chuyển Cho Đơn Hàng Từ 500K</p>
        </div>
        <div class="col-3">
        <img src="img/2-3.png" alt="" width="30%">
        <h5>ĐỔI HÀNG TRONG VÒNG 15 NGÀY</h5>
        <p class="">Miễn Phí Vận Chuyển Cho Đơn Hàng Từ 500K</p>
        </div>
        <div class="col-3">
        <img src="img/3-5.png" alt="" width="30%">
        <h5>CHÍNH SÁCH TÍCH ĐIỂM</h5>
        <p>Áp Dụng Tích Điểm Cho Tất Cả Đơn Hàng</p>
        </div>
        <div class="col-3">
        <img src="img/4-2.png" alt="" width="30%">
        <h5>TƯ VẤN LỰA CHỌN VÀ MẶC ĐỒ</h5>
        <p class="">Đội Ngũ Tư Vấn Tận Tình</p>
        </div>
    </div>
    </div>
    <div class="container mt-5">
    <img src="img/slide.jpg" alt="" width="100%">
    </div>
    <!-- voucher -->
    <!-- <div class="container mt-5">
        <h1 class="sale-title text-center fw-bold mb-3"> SIÊU SALE SẬP SÀN</h1>
    <div class="row">
        
        <div class="col-3">
        <img src="img/hinh1.jpg" alt="" class="img-hover" width="100%">
        </div>
        <div class="col-3 ">
        <img src="img/hinh2.jpg" alt="" class="img-hover " width="100%">
        </div>
        <div class="col-3">
        <img src="img/hinh3.jpg" alt="" class="img-hover" width="100%">
        </div>
        <div class="col-3">
        <img src="img/hinh3.jpg" alt="" class="img-hover" width="100%">
        </div>
    </div>
    </div> -->
    <div class="container mt-5">
    <div class="row">
        <div class="col-5">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="img/product1.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h4 class="card-title fw-bold">Áo thun lai cuốn biên ATE01066</h4>
                <p class="fw-light fs-4">Áo Kiểu</p>
                <p class="card-text fs-3 fw-semibold">200$</p>
                <div class="d-flex align-items-center" style="gap:30px ;">
                    <button type="button" class="btn btn-outline-info">MUA NGAY</button>
                    <i class="fa-regular fa-heart fa-2xl" style="color: #74C0FC;"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="card mt-5" style="max-width: 540px;">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="img/product2.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h4 class="card-title fw-bold">Áo thun lai cuốn biên ATE01066</h4>
                <p class="fw-light fs-4">Áo Kiểu</p>
                <p class="card-text fs-3 fw-semibold">200$</p>
                <div class="d-flex align-items-center" style="gap:30px ;">
                    <button type="button" class="btn btn-outline-info">MUA NGAY</button>
                    <i class="fa-regular fa-heart fa-2xl" style="color: #74C0FC;"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-7">
        <div class="row">
            <div class="col-5 ">
            <a href="" style="margin-top: 190px;" class="nav-link d-flex gap-3 align-items-center">
                <img src="img/icon.svg" alt="" width="52px" height="52px">
                <h2>XEM NGAY BỘ SƯU TẬP  </h2>
            </a>
            </div>
            <div class="col-7">
            <img src="img/collection1.png" alt="" width="100%" style="height:600px;">
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- sản phẩm nổi bậc -->
    <div class="container mt-5">
        <h2 class="text-center mb-3">Sản Phẩm Nỗi Bậc</h2>
    <div class="row">
        <!-- sản phẩm 1 -->
        @foreach($productshome as $item)
        <div class="col-3">
          
            <div class="card" style="width: 18rem">
                <a
                    class="nav-link"
                    href=""
                >
                    <img
                        class="thumb"
                        src="img/{{ $item-> img}}"
                        alt=""
                        style="
                            border-radius: 8px;
                            width: 287px;
                            height: 430px;
                        "
                    />
                </a>
                <div class="card-body">
                    <h4 class="card-title mt-3" style="height: 60px;">
                    {{ $item-> name}}
                    </h4>
                    <p class="card-text fw-light fs-5">
                    {{ $item-> name}}
                    </p>
                    <div class="mt-4">
                        <div
                            class="group-icon-color d-flex gap-4 mt-3"
                        >
                            <div
                                class="icon-color"
                                data-img="img/2-TRANG-AE05095.jpg"
                            >
                                <img
                                    src="img/icon-trang.png"
                                    alt=""
                                />
                            </div>
                            <div
                                class="icon-color"
                                data-img="img/2-VANG-AE05095.jpg"
                            >
                                <img
                                    src="img/icon-vang.png"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                    <div
                        class="d-flex justify-content-between mt-3"
                    >
                        <p
                            class="card-text text-danger fw-normal fs-5"
                        >
                            {{ number_format($item-> sale) }} đ
                        </p>
                        <del class="fw-normal fs-5"
                            >{{ number_format($item-> price) }} đ</del
                        >
                    </div>
                    <button
                        class="btn btn-info text-light w-100"
                    >
                        Thêm Vào Giỏ
                    </button>
                </div>
            </div>
           
        </div>
        @endforeach
            
       
    </div>
    </div>
    </div>
    </div>
 </main>
@endsection

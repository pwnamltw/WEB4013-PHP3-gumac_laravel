@extends('layout') @section('content')
<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                <div class="d-flex gap-3">
                    <img
                        src="img/avt-df.png"
                        alt=""
                        width="70px"
                        height="70px"
                        style="border: 1px solid; border-radius: 50px"
                    />
                    <div>
                        <p>Xin Chao!</p>
                        <span class="fw-bold fs-4">Do Phuong Nam</span>
                    </div>
                </div>
                <ul class="list-group mt-5">
                    <a href="#user" class="nav-link"
                        ><li
                            class="list-group-item fs-4 list-hover"
                            style="height: 60px"
                        >
                            <i
                                class="fa-solid fa-clipboard-user fa-xl"
                                style="color: #bebebe"
                            ></i>
                            Thông tin tài khoản
                        </li></a
                    >
                    <a href="" class="nav-link"
                        ><li
                            class="list-group-item fs-4 list-hover"
                            style="height: 60px"
                        >
                            <i class="fa-solid fa-truck" style="color: #bebebe">
                            </i
                            >Theo dõi đơn hàng
                        </li></a
                    >
                    <a href="" class="nav-link"
                        ><li
                            class="list-group-item list-group-item-info fs-4"
                            style="height: 60px"
                        >
                            <i
                                class="fa-solid fa-heart"
                                style="color: #bebebe"
                            ></i>
                            Sản phẩm yêu thích
                        </li></a
                    >
                    <a href="" class="nav-link"
                        ><li
                            class="list-group-item fs-4 list-hover"
                            style="height: 60px"
                        >
                            <i
                                class="fa-solid fa-clock-rotate-left"
                                style="color: #bebebe"
                            ></i>
                            Lịch sữ mua hàng
                        </li></a
                    >
                    <a href="" class="nav-link"
                        ><li
                            class="list-group-item fs-4 list-hover"
                            style="height: 60px"
                        >
                            <i
                                class="fa-solid fa-map-location-dot"
                                style="color: #bebebe"
                            ></i>
                            Địa chỉ giao hàng
                        </li></a
                    >
                    <a href="" class="nav-link"
                        ><li
                            class="list-group-item fs-4 list-hover"
                            style="height: 60px"
                        >
                            <i
                                class="fa-solid fa-right-from-bracket"
                                style="color: #bebebe"
                            ></i>
                            Đăng xuất
                        </li></a
                    >
                </ul>
            </div>
            <div class="col-9">
                <h1 class="fw-bold">SẢN PHẢM YÊU THÍCH</h1>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-3">
                            <div class="card" style="width: 18rem">
                                <a
                                    class="nav-link"
                                    href=""
                                >
                                    <img
                                        class="thumb"
                                        src="img/2-TRANG-AE05095.jpg"
                                        alt=""
                                        style="
                                            border-radius: 8px;
                                            width: 287px;
                                            height: 430px;
                                        "
                                    />
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title mt-3">
                                        Quần suông đính phụ kiện
                                    </h4>
                                    <p class="card-text fw-light fs-5">
                                        QE05016
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
                                            327.500 đ
                                        </p>
                                        <del class="fw-normal fs-5"
                                            >427.500 đ</del
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

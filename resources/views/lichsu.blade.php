@extends('layout') @section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-3">
            <div class="d-flex gap-3">
                <img
                    src="{{ asset('uploaded/'.Auth::user()->avatar) }}"
                    alt=""
                    width="70px"
                    height="70px"
                    style="border: 1px solid; border-radius: 50px"
                />
                <div>
                    <p>Xin Chao!</p>
                    <span class="fw-bold fs-4">{{ Auth::user()->name }}</span>
                </div>
            </div>
            <ul class="list-group mt-5">
                <a href="index.php?act=info" class="nav-link"
                    ><li
                        class="list-group-item  fs-4"
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
                        <i class="fa-solid fa-truck" style="color: #bebebe"> </i
                        >Theo dõi đơn hàng
                    </li></a
                >
                <a href="" class="nav-link"
                    ><li
                        class="list-group-item list-group-item-info fs-4 list-hover"
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
                <a href="{{ route('logout') }}" class="nav-link"
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
            <h1 class="fw-bold">LỊCH SỮ MUA HÀNG</h1>
            <div class="d-flex gap-2">
                @foreach($orderDetails as $detail)
                <div class="col-4 d-flex flex-column card-hover card">
                    <a class="w-100" href="{{route('productdetail',$detail->product->id )}}">
                        <img src="{{ asset('uploaded/'.$detail->product->img ) }}" alt="{{ $detail->product->name }}" width="100%">
                    </a>
                    <span class="fw-bold text-center mt-3">{{ $detail->product->name }}</span>
                </div>
                @endforeach
            </div>
            

</div>
@endsection
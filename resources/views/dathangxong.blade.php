<?php use App\Models\products;?>
@extends('layout')
@section('content')
<div class="container mt-5">
    <div class="text-center d-flex flex-column gap-2">
        <img
            src="./asset-user/asset/img/logo.png"
            alt=""
            style="width: 150px"
            class="m-auto mb-3"
        />
        <h5>GUMAC</h5>
        <span class=""
            >Cảm ơn bạn đã mua sắm tại GUMAC. Đơn hàng 
          
        </span>
        <span class=""
            >Tổng giá trị là {{$order->total_money}}đ dự kiến giao hàng ​​trong vòng 2-7 ngày đối
            với hàng có sẵn tại khu vực. Cần thêm thông tin Quý khách vui lòng
            liên hệ Hotline: 18007200
           
        </span>
    </div>
    <div class="mt-5 d-flex justify-content-center">
        <div class="m-auto">
            <a href=""
                ><button class="btn btn-outline-dark me-2">
                    TIẾP TỤC MUA HÀNG
                </button></a
            >
            <button type="button" class="btn btn-dark" id="toggleDetails">
                XEM ĐƠN HÀNG
            </button>
        </div>
    </div>
    <div class="mt-5" id="detailsContainer" style="display: none">
        <div class="row">
            <div class="col-7">
                <h4>CHI TIẾT ĐƠN HÀNG</h4>
                <div class="product mb-3">
                @foreach($orderDetails as $detail)
                    @php
                        $product = products::find($detail->product_id);
                    @endphp
                    <div class="d-flex align-items-center justify-content-between border-bottom mb-3">
                        <img class="cart-img" width="110px" height="80px" src="{{ asset('uploaded/'.$product->img) }}"  />
                        <span>{{ $product->name }}</span>
                        <span>{{ $detail->price }} đ</span>
                    </div>
                @endforeach
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="fw-bold fs-6">Thành tiền:</span>
                    <span> {{ $order->total_money}}  đ</span>
                </div>
            </div>
            <div class="col-5">
                <span class="fs-5 text-center d-block m-auto mb-3"
                    >Cảm ơn đơn hàng của bạn đã được tiếp nhận</span
                >
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <ul class="list-group list-group-numbered">
                                <li class="list-group-item">
                                    <span class="fw-bold fs-6"
                                        >Số đơn hàng:</span
                                    >
                                    {{ $order->total_money }}
                                </li>
                                <li class="list-group-item">
                                    <span class="fw-bold fs-6">Email:</span>
                                    {{ $order->user_email }}
                                </li>
                                <li class="list-group-item">
                                    <span class="fw-bold fs-6">Họ Tên:</span>
                                    {{ $order->user_fullname }}
                                </li>
                                <li class="list-group-item">
                                    <span class="fw-bold fs-6">Tổng Cộng:</span>
                                    {{ $order->total_money }} đ
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('viewFunction')
<script>
    document.getElementById("toggleDetails").addEventListener("click", function() {
        var detailsContainer = document.getElementById("detailsContainer");
        if (detailsContainer.style.display === "none") {
            detailsContainer.style.display = "block";
        } else {
            detailsContainer.style.display = "none";
        }
    });
</script>
@endsection
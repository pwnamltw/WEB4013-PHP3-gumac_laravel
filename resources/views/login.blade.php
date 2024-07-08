@extends('layout')
@section('content')
<main  >
    <div  class="p-5">
        <form action="{{route('postlogin')}}" method="POST" id="FormDangky"  class="m-auto" style="width:600px;">
            @csrf
            <h1 class="text-center">Đăng nhập</h1>
            <div class="d-flex gap-2">
                <span class="fs-5">Trở thành thành viên của Gumac </span><a href="{{route('dangky')}}"
                    class="nav-link fs-5">Đăng ký
                    ngay</a>
            </div>
            <div class="mb-3 mt-4">
                <label for="exampleInputEmail1" class="form-label fs-5 fw-light">Email/số điện thoại</label>
                <input type="text" class="form-control email" id="email" name="email" placeholder="Tài khoản"
                   required>
            </div>
            <div class="form-group mt-3">
                <input type="password" class="form-control password" id="password" name="password"
                    placeholder="********"  required autocomplete="required">
            </div>
            <input type="checkbox" name="remember_token" id="" class="mt-2" >
            <label for="">Nhớ mật khẩu</label>
            @if(Session::has('message'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('message')}}
                </div>
                @php
                    Session::forget('message');
                @endphp
            @endif
            <div class="d-flex align-items-center justify-content-between mt-3">
                <div class="form-login-button">
                    <button type="submit" class="btn btn-sign-up btn-login"
                        data-bs-dismiss="modal">Đăng
                        nhập
                    </button>
                </div>
                <a href="" class="nav-link"> <span class="text-primary">Quên mật khẩu</span></a>
            </div>
           
            <br>
            <hr>
            <div class="d-flex justify-content-around">
                <div>
                    <img src="img/facebook.png" alt="" width="24px" height="24px">
                    <span class="fs-5">facebook</span>
                </div>
                <div>
                    <img src="img/search.png" alt="" width="24px" height="24px">
                    <span class="fs-5">google</span>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection
@extends('layout')
@section('content')
    <main>
        <div class="p-5">
            <form action="{{ route('postdangky')}}" id="FormDangky"  class="m-auto" method="POST">
                @csrf
                <h1 class="text-center">Đăng Ký</h1>
                <div class="form-group mt-3">
                    <label for="">Email</label>
                    <input type="email" class="form-control username" name="email" id="email_signup" placeholder="Email"
                         pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" required>
                </div>
                <div class="form-group mt-3">
                <label for="">Mật khẩu</label>
                    <input type="password" class="form-control password" name="password" id="password_signup"
                        placeholder="********" ng-model="user.password" minlength="6" required autocomplete="required">
                
                </div>
                <div class="form-group mt-3">
                <label for="">Nhập Lại Mật Khẩu</label>
                    <input type="password" class="form-control password" name="password_cf" id="confirm_password"
                        placeholder="********" >
                </div>
                @if(Session::has('message'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('message')}}
                    </div>
                    @php
                        Session::forget('message');
                    @endphp
                @endif
                <div class="form-login-button">
                    <button class="btn btn-sign-up form-control mt-3 fw-bold" data-bs-dismiss="modal"  
                        >Đăng
                        ký</button>
                </div>
            </form>
        </div>
    </main>
    @endsection
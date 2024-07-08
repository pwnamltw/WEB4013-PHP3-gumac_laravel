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
                <a href="index.php?act=info" class="nav-link"><li
                        class="list-group-item list-group-item-info fs-4"
                        style="height: 60px"
                    >
                        <i
                            class="fa-solid fa-clipboard-user fa-xl"
                            style="color: #bebebe"
                        ></i>
                        Thông tin tài khoản
                </li></a>
                <a href="" class="nav-link"><li
                        class="list-group-item fs-4 list-hover"
                        style="height: 60px">
                        <i class="fa-solid fa-truck" style="color: #bebebe"> </i
                        >Theo dõi đơn hàng
                </li></a>
                <a href="" class="nav-link"><li
                        class="list-group-item fs-4 list-hover"
                        style="height: 60px">
                        <i
                            class="fa-solid fa-clock-rotate-left"
                            style="color: #bebebe"
                        ></i>
                        Lịch sữ mua hàng
                </li></a>
                <a href="" class="nav-link"><li
                        class="list-group-item fs-4 list-hover"
                        style="height: 60px">
                        <i
                            class="fa-solid fa-map-location-dot"
                            style="color: #bebebe"
                        ></i>
                        Địa chỉ giao hàng
                </li></a>
                <a href="{{ route('logout') }}" class="nav-link"><li
                        class="list-group-item fs-4 list-hover"
                        style="height: 60px" >
                        <i
                            class="fa-solid fa-right-from-bracket"
                            style="color: #bebebe"
                        ></i>
                        Đăng xuất
                </li></a>
            </ul>
        </div>
        <div class="col-9">
            <h1 class="fw-bold">THÔNG TIN TÀI KHOẢN</h1>
            <div class="d-flex">
                <h5 class="w-25">Họ Tên</h5>
                <span class="fs-5 text-info">{{ Auth::user()->name }}</span>
            </div>
            <hr />
            <div class="d-flex">
                <h5 class="w-25">Số Điện Thoại</h5>
                <span class="fs-5 text-info">{{ Auth::user()->sdt }}</span>
            </div>
            <hr />
            <div class="d-flex">
                <h5 class="w-25">Email</h5>
                <span class="fs-5 text-info">{{ Auth::user()->email }}</span>
            </div>
            <hr />
            <div class="d-flex">
                <h5 class="w-25">Giới Tính</h5>
                <span class="fs-5 text-info">{{ Auth::user()->gioitinh }}</span>
            </div>
            <hr />
            <div class="d-flex">
                <h5 class="w-25">Ngày Sinh</h5>
                <span class="fs-5 text-info">{{ Auth::user()->ngaysinh }}</span>
            </div>
            <hr />
            <div class="d-flex">
                <h5 class="w-25">Địa Chỉ</h5>
                <span class="fs-5 text-info">{{ Auth::user()->diachi }}</span>
            </div>

            <button
                type="button"
                class="btn btn-dark mt-5 btn-info fs-5 mb-2"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
            >
                Chỉnh Sửa
            </button>
            <!-- Modal -->
            <div
                class="modal fade"
                id="exampleModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog">
                    <form
                        action="{{route('postinfo')}}"
                        method="post"
                        enctype="multipart/form-data"
                    >
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="fs-4" id="exampleModalLabel">
                                    Thay Đổi Thông Tin
                                </h2>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                            </div>
                            <div class="modal-body">
                                <label class="mb-2" for="">Họ Và Tên:</label>
                                <input
                                    class="form-control mb-4"
                                    name="name"
                                    value="{{ Auth::user()->name }}"
                                />
                                <label class="mb-2" for="">Ảnh Đại Diện:</label>
                                <input
                                    type="file"
                                    class="form-control mb-4"
                                    name="avatar"
                                />
                                <div class="row">
                                    <div class="col-6">
                                        <label class="mb-2" for=""
                                            >Ngày Sinh:</label
                                        >
                                        <input
                                            class="form-control mb-4"
                                            name="ngaysinh"
                                            value="{{ Auth::user()->ngaysinh }}"
                                            placeholder="22/10/2003"
                                        />
                                    </div>
                                    <div class="col-6">
                                        <label class="mb-2" for=""
                                            >Giới Tính:</label
                                        >
                                        <input
                                            class="form-control mb-4"
                                            name="gioitinh"
                                            value="{{ Auth::user()->gioitinh }}"
                                        />
                                    </div>
                                </div>

                                <label class="mb-2" for="">Email:</label>
                                <input
                                    type="email"
                                    class="form-control mb-4"
                                    name="email"
                                    value="{{ Auth::user()->email }}"
                                />
                                <label class="mb-2" for=""
                                    >Số Điện Thoại:</label
                                >
                                <input
                                    class="form-control mb-4"
                                    name="sdt"
                                    value="{{ Auth::user()->sdt }}"
                                />
                                <label class="mb-2" for="">Địa Chỉ:</label>
                                <input
                                    class="form-control mb-4"
                                    name="diachi"
                                    value="{{ Auth::user()->diachi }}"
                                />
                            </div>
                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal"
                                >
                                    Close
                                </button>
                                <input
                                    type="submit"
                                    class="btn btn-primary"
                                    value="Thay đổi"
                                />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br />
            <a class="fs-5" href="index.php?act=editpassword">Đổi mật khẩu</a>
        </div>
    </div>
</div>
@endsection

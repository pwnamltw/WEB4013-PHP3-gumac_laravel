@extends('admin.layout') @section('content',)

<div class="admin-content m-3">
    <div class="grid">
        <div class="card">
            <h2>Doanh số bán hàng</h2>
            <div
                id="myChart"
                style="width: 100%; max-width: 600px; height: 500px"
            ></div>
        </div>
        

        <div class="card">
            <h2>Sản phẩm bán chạy</h2>
            <div class="m-2">
                <div class="card mb-3" style="max-width: 540px">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img
                                src="img/2-TRANG-AE05095.jpg"
                                class="img-fluid rounded-start"
                                alt="..."
                            />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Quần suông đính phụ kiện (54)
                                </h5>
                                <p class="card-text d-flex">
                                    <span class="text-danger fw-bolder me-2"
                                        >327.500 đ</span
                                    >

                                    <del class="fw-light fw-bolder"
                                        >427.500 đ</del
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <h2>Khách hàng mới</h2>
            <div class="m-2">
                <div class="card mb-3" style="max-width: 540px">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img
                                src="img/2-TRANG-AE05095.jpg"
                                class="img-fluid-design"
                                alt="..."
                            />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">ĐỖ PHƯƠNG NAM</h6>
                                <p class="card-text d-flex">pwnam@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid">
        <div class="card">
            <h2>Danh sách sản phẩm mới</h2>
            <table>
                <td><span class="fs-4">Áo kiểu cổ V</span></td>
                <td>
                    <img
                        style="width: 100px"
                        src="img/2-TRANG-AE05095.jpg"
                        alt=""
                    />
                </td>
                <td><span class="text-danger">315.000 đ</span></td>
                <td><del class="">415.000 đ</del></td>
                <td>8/5/2024</td>
            </table>
        </div>
        <div class="card">
            <h2>Bình luận</h2>
            <p>100</p>
        </div>
        <div class="card">
            <h2>Đơn hàng mới</h2>
            <p>100</p>
        </div>
    </div>
</div>

@endsection

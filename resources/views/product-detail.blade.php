
@extends('layout')
@section('content')
    <main class="mb-5">
      <div class="container">
        <div class="row flex-nowrap">
          <div class="col-5">
            <!-- tab img -->
            <img class="thumb" src="{{ asset('uploaded/'.$product->img) }}" alt="" width="100%" height="800px">
          </div>
          <div class="col-7 ms-4">
            <h2 class="fw-bold">{{ $product->name }}</h2>
            
            <p class="fw-light fs-5">QE05016</p>
            <div class="d-flex gap-5">
              <span class="text-danger fs-3 fw-bolder me-2"
                >{{ $product->sale }}đ</span
              >
              <del class="fw-light fs-3 fw-bolder">{{ $product->price }}đ</del>
            </div>
            <p class="fw-light fs-5 mt-3">Kích Thước</p>
            <div class="d-flex gap-4 mt-3">
              <div class="product-size" id="prd-size">
                <span class="product-size-title">S</span>
              </div>
              <div class="product-size" id="prd-size">
                <span class="product-size-title">M</span>
              </div>
              <div class="product-size" id="prd-size">
                <span class="product-size-title">L</span>
              </div>
              <div class="product-size" id="prd-size">
                <span class="product-size-title">XL</span>
              </div>
            </div>
            <!-- màu sắc -->
            <div class="mt-4">
              <span class="fw-lighter fs-5">Màu sắc:</span>
              <div class="group-icon-color d-flex gap-4 mt-3">
                <div class="icon-color" data-img="img/2-TRANG-AE05095.jpg" >
                 <img  src="http://127.0.0.1:8000/img/icon-trang.png" alt="">
                </div>
                <div class="icon-color" data-img="img/2-VANG-AE05095.jpg" >
                  <img  src="http://127.0.0.1:8000/img/icon-vang.png" alt="">
                </div>
                
              </div>
            </div>
            <!-- thêm số lượng  -->
            <div class="d-flex align-items-center mt-4" style="gap: 100px">
              <div class="product-count">
                <form
                  action="#"
                  class="count-inlineflex"
                  style="margin-top: 20px"
                >
                  <div class="qtyminus">-</div>
                  <input type="number"  value="1" min="1" class="qty" ng-model="soluong"/>
                  <div class="qtyplus">+</div>
                </form>
              </div>
            </div>
            <div class="d-flex mt-4" style="gap: 100px">
              <button
                type="button"
                class="btn btn-danger w-100"
                style="height: 55px; border-radius: 30px"
              >
                MUA NGAY
              </button>
              <button 
              ng-click="addToCart({{$product->id}}, soluong)" 
                type="button"
                class="btn btn-dark w-100"
                style="height: 55px; border-radius: 30px"
              >
                THÊM VÀO GIỎ
              </button>
            </div>
            <!-- danh muc -->
            <div class="d-flex mt-3">
              <span class="fw-light fs-5">Danh mục: </span>
              <a href="" class="nav-link">
                <p class="text-primary fs-5">Áo thun,áo thun nữs</p>
              </a>
            </div>
            <hr />
            <div class="container">
              <div class="tab-content" id="myTabContent">
                <!-- Tab thông ti
                                n vận chuyển -->
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link active"
                      id="pills-home-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-home"
                      type="button"
                      role="tab"
                      aria-controls="pills-home"
                      aria-selected="false"
                    >
                      GUMAC
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                 
                    <button
                      class="nav-link"
                      id="pills-profile-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-profile"
                      type="button"
                      role="tab"
                      aria-selected="true"
                      aria-controls="pills-profile"
                    >
                     ĐÁNH GIÁ
                    </button>
               
                  </li>
                  @auth
                  <button class="btn btn-primary" style="    position: absolute; right: 90px;">Bình luận</button>
                  @endauth
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div
                    class="tab-pane fade"
                    id="pills-profile"
                    role="tabpanel"
                    aria-labelledby="pills-profile-tab"
                    tabindex="0"
                  >
                   
                      hhh
                    </div>
                   
                  </div>
                  <div
                    class="tab-pane fade show active"
                    id="pills-home"
                    role="tabpanel"
                    aria-labelledby="pills-home-tab"
                    tabindex="0"
                  >
                    <div class="row">
                      <div class="col-4">
                        <img
                          class="wh-icon"
                          src="http://127.0.0.1:8000/img/product-icon.png"
                          alt=""
                        />
                        <br />
                        <span class="fw-light fs-5"
                          >Miễn phí vận chuyển cho đơn hàng trên 500k</span
                        >
                      </div>
                      <div class="col-4">
                        <img
                          class="wh-icon"
                          src="http://127.0.0.1:8000/img/product-icon1.png"
                          alt=""
                        />
                        <br />
                        <span class="fw-light fs-5"
                          >Đổi trả cực dễ chỉ yêu cầu số điện thoại</span
                        >
                      </div>
                      <div class="col-4">
                        <img
                          class="wh-icon"
                          src="http://127.0.0.1:8000/img/producticon2.png"
                          alt=""
                        />
                        <br />
                        <span class="fw-light fs-5"
                          >Hotline 18006013 hỗ trợ từ 8h00 - 20h mỗi ngày</span
                        >
                      </div>
                      <div class="col-4 pt-5">
                        <img
                          class="wh-icon"
                          src="http://127.0.0.1:8000/img/producticon3.png"
                          alt=""
                        />
                        <br />
                        <span class="fw-light fs-5">Giao hàng toàn quốc</span>
                      </div>
                      <div class="col-4 pt-5">
                        <img
                          class="wh-icon"
                          src="http://127.0.0.1:8000/img/producticon4.png"
                          alt=""
                        />
                        <br />
                        <span class="fw-light fs-5"
                          >15 ngày đổi hàng với bất kỳ lý do gì</span
                        >
                      </div>
                      <div class="col-4 pt-5">
                        <img
                          class="wh-icon"
                          src="http://127.0.0.1:8000/img/producticon5.png"
                          alt=""
                          width="100%"
                         />
                        <br />
                        <span class="fw-light fs-5">Tích lũy điểm dễ dàng</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="container mt-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item a-tabbtn" role="presentation">
            <button
              class="nav-link active"
              id="home-tab"
              data-bs-toggle="tab"
              data-bs-target="#prd-info"
              type="button"
              role="tab"
              aria-controls="prd-info"
              aria-selected="true"
            >
              Thông tin sản phẩm
            </button>
          </li>
          <li class="nav-item a-tabbtn" role="presentation">
            <button
              class="nav-link"
              id="profile-tab"
              data-bs-toggle="tab"
              data-bs-target="#prd-shipping"
              type="button"
              role="tab"
              aria-controls="prd-shipping"
              aria-selected="false"
            >
              Đỗi hàng Vận chuyển
            </button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <!-- Tab thông tin vận chuyển -->
          <div
            class="tab-pane fade show active"
            id="prd-info"
            role="tabpanel"
            aria-labelledby="home-tab"
            tabindex="0"
          >
            <div class="row mt-3">
              <div class="col-6">
                <h4 class="pb-3">Thông tin sản phẩm</h4>
                <table class="custom-table">
                  <tr class="" style="height: 60px">
                    <td class="col-6 w-100 fs-5 fw-bold">Mã Sản phẩm</td>
                    <td class="col-6 w-100 fs-5" style="padding-right: 120px">
                      ATE03031_BE_M
                    </td>
                  </tr>
                  <tr class="" style="height: 60px">
                    <td class="col-6 w-100 fs-5 fw-bold">Form Dáng Sản Phẩm</td>
                    <td class="col-6 w-100 fs-5" style="padding-right: 120px">
                      Mảnh khảnh
                    </td>
                  </tr>
                  <tr class="" style="height: 60px">
                    <td class="col-6 w-100 fs-5 fw-bold">Số Đo Vòng Ngực</td>
                    <td class="col-6 w-100 fs-5" style="padding-right: 120px">
                      86CM
                    </td>
                  </tr>
                  <tr class="" style="height: 60px">
                    <td class="col-6 w-100 fs-5 fw-bold">Số Đo Lai</td>
                    <td class="col-6 w-100 fs-5" style="padding-right: 120px">
                      86CM
                    </td>
                  </tr>
                  <tr class="" style="height: 60px">
                    <td class="col-6 w-100 fs-5 fw-bold">Số Đo Vai</td>
                    <td class="col-6 w-100 fs-5" style="padding-right: 120px">
                      36cm
                    </td>
                  </tr>
                  <tr class="" style="height: 60px">
                    <td class="col-6 w-100 fs-5 fw-bold">Số Đo Cửa Tay</td>
                    <td class="col-6 w-100 fs-5" style="padding-right: 120px">
                      28cm
                    </td>
                  </tr>
                  <tr class="" style="height: 60px">
                    <td class="col-6 w-100 fs-5 fw-bold">Số Đo Dài Tay</td>
                    <td class="col-6 w-100 fs-5" style="padding-right: 120px">
                      15 CM
                    </td>
                  </tr>
                  <tr class="" style="height: 60px">
                    <td class="col-6 w-100 fs-5 fw-bold">Số Đo Dài Áo</td>
                    <td class="col-6 w-100 fs-5" style="padding-right: 120px">
                      55cm
                    </td>
                  </tr>
                  <tr class="" style="height: 60px">
                    <td class="col-6 w-100 fs-5 fw-bold">Chất Liệu</td>
                    <td class="col-6 w-100 fs-5" style="padding-right: 120px">
                      BÔNG 4C
                    </td>
                  </tr>
                  <tr class="" style="height: 60px">
                    <td class="col-6 w-100 fs-5 fw-bold">Độ Co Giãn</td>
                    <td class="col-6 w-100 fs-5" style="padding-right: 120px">
                      TRUNG BÌNH
                    </td>
                  </tr>
                </table>
              </div>
              <div class="col-6">
                <img src="img/ctsp.jpg" alt="" class="img-fluid" />
              </div>
            </div>
          </div>
          <!-- tab giao hàng -->
          <div
            class="tab-pane fade"
            id="prd-shipping"
            role="tabpanel"
            aria-labelledby="profile-tab"
            tabindex="0"
          >
            <div class="mt-5">
              <h3>Đổi kiện đổi hàng</h3>
              <ul>
                <li class="fw-light fs-5">
                  Hàng còn nguyên tem mác, hóa đơn, không bị dơ bẩn, hư hỏng,
                  chưa qua sử dụng hoặc sửa chữa, giặt tẩy...
                </li>
                <li class="fw-light fs-5">
                  Sản phẩm đã nhận không quá 15 ngày.
                </li>
                <li class="fw-light fs-5">
                  Chi tiết chính sách đổi hàng:
                  https://gumac.vn/chinh-sach-doi-tra
                </li>
                <li class="fw-light fs-5">Hotline miễn phí: 18006013</li>
              </ul>
            </div>
            <div class="mt-5">
              <h3>Lưu ý</h3>
              <ul>
                <li class="fw-light fs-5">
                  Quý khách lưu ý giúp GU không tự ý gửi hàng về khi chưa liên
                  hệ bộ phận CSKH của GUMAC.
                </li>
                <li class="fw-light fs-5">
                  Trường hợp khách đổi hàng, GUMAC hỗ trợ giao sản phẩm đổi mới
                  và thu sản phẩm cũ về từ tận nhà (trừ một vài khu vực đơn vị
                  vận chuyển không hỗ trợ được, GUMAC xin phép hướng dẫn quý
                  khách hàng gửi qua đường bưu điện).
                </li>
              </ul>
            </div>
          </div>
          
          
        </div>
      </div>
    </main>
@endsection
@section('viewFunction')
  <script>
    var viewFunction = function($scope){
      $scope.soluong = 1;
    }
  </script>
@endsection

  
@extends('layout')
@section('content')
<main class="mb-5" ng-if="cart.length>0">
  <div class="container mt-2">
    <h1 class="fw-bold fs-1">Giỏ hàng</h1>
    <div class="row">
      <div class="col-9">
        <table class="container">
          <thead>
            <th class="col-5">
              <span class="fs-5">Thông tin sản phẩm</span>
            </th>
            <th class="col-2">
              <span class="fs-5">Đơn giá</span>
            </th>
            <th class="col-2">
              <span class="fs-5">Số lượng</span>
            </th>
            <th class="col-2">
              <span class="fs-5"> Tổng cộng</span>
            </th>
            <th class="col-2">
              <span class="fs-5"> </span>
            </th>
          </thead>

          <tbody>
            <tr ng-repeat="item in cart">
              <td>
                <div class="row">
                  <div class="col-6">
                    <a href="/product/@{{item.id}}">
                    <img
                      src="{{asset('uploaded')}}/@{{item.img}}"
                      alt=""
                      height="200px"
                      style="border-radius: 20px"
                    />
                    </a>
                    
                  </div>
                  <div class="col-6">
                    <span class="fs-6 fw-bold">@{{item.name}}</span><br/><br/>
                                       <!-- hiện rating -->
                  </div>
                </div>
              </td>
              <td >
                <div class="d-flex flex-column">
                    <span class="fs-6 fw-bolder">@{{item.price|number}}đ</span><br/>
                    <del class="fw-light fs-6" ng-if="item.sale">@{{ item.sale|number }}đ</del>
                </div>
              </td>
              <td>
                <div class="product-count">
                    <form action="#" class="count-inlineflex" style="margin-top: 20px">
                        <div class="qtyminus">-</div>
                         <input type="number" min="1" class="qty" ng-model="item.soluong" ng-change="updatesl(item.id, item.soluong)"/>
                        <div class="qtyplus">+</div>
                    </form>
                </div>
              </td>
              <td>
              <span class="fs-6 fw-bolder">@{{ (item.sale != null ? item.soluong * item.sale : item.soluong * item.price) }} đ</span>
              </td>
               <td>
               <button ng-click="removeCart($index)" class="btn btn-danger">
                      xóa
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-3">
        <div style="background-color: #dbeaf8; border-radius: 0 0 10px 10px">
          <h5 class="thongtin-title p-4">Thông Tin Đơn Hàng</h5>
          <div class="pb-5">
            <div class="d-flex justify-content-between p-4">
              <span class="fs-6">Tổng TIền Sản Phẩm</span>
              <span class="fs-6"> @{{totalCart()|number}} đ</span>
            </div>
            <div class="d-flex justify-content-between p-4">
              <span class="fs-6">Giảm Giá</span>
              <span class="fs-6 text-danger"> @{{sale()|number}}đ </span>
            </div>
            <hr />

            <div class="d-flex justify-content-between p-4">
              <span class="fs-6">Tổng Thanh Toán</span>
              <span class="fs-6"> @{{total()|number}}đ</span>
            </div>

            <!-- Button trigger modal -->
            <button
              type="button"
              class="btn btn-secondary btn-login fs-4 w-100"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
            >
              Đặt hàng ngay
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
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                      Thông tin giao hàng
                    </h1>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="{{route('postcart')}}">
                    @csrf
                      <div class="mb-3">
                        <label for="name" class="form-label">Họ Tên</label>
                        <input type="text"  class="form-control" name="fullname" value="{{ Auth::check() ? Auth::user()->name : '' }}" required/>
                      </div>
                      <div class="mb-3">
                        <label for="sdt" class="form-label">SDT</label>
                        <input type="text"  class="form-control" name="phone" value="{{ Auth::check() ? Auth::user()->sdt : '' }}" required/>
                      </div>
                      <div class="mb-3">
                        <label for="address" class="form-label">Email</label>
                        <input type="text"  class="form-control" name="email" value="{{ Auth::check() ? Auth::user()->email : '' }}" required/>
                       

                      </div>
                      <div class="mb-3">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" name="address" value="{{ Auth::check() ? Auth::user()->diachi : '' }}" required/>
                    
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-bs-dismiss="modal"
                    >
                      Kiểm tra lại
                    </button>
                    <button
                      type="submit"
                      class="btn btn-success"
                    >
                      Xác nhận
                    </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button
       
          type="button"
          class="btn btn-danger w-100 btn-login fs-4 mt-3"
        >
          Xóa hết giỏ hàng
        </button>
      </div>
    </div>
  </div>
  
</main>
<div ng-if="cart.length==0" class="d-flex justify-content-center align-items-center mt-5 mb-5">
  không có sản phẩm trong giỏ hàng
  <a href="{{route('product')}}" class="btn">Tiếp tục mua sắm</a>
</div>
@endsection
@section('viewFunction')
  <script>
    viewFunction = function($scope,$http){

      $scope.updatesl= function(id,soluong){
        $http.patch('/api/cart/'+id,{
          soluong:soluong
        }).then(function(res){
          // $scope.$parent.cart = res.data.data;
        });
      }
    }
  </script>
@endsection
@extends ('admin.layout')
@section('content')
<div class="admin-content">
   <div class="container-fluid mt-3">
      <h4>Quản Lý Đơn Hàng</h4>
      <table class="container">
         <thead>
            <tr class="table">
               <th class="col-1">Mã Đơn</th>
               <th class="col-2">Tên Khách Hàng</th>
               <th class="col-2">Total</th>
               <th class="col-2">Trạng thái</th>
               <th class="col-3">Ngày</th>
               <th class="col-1">Hành động</th>
            </tr>
         </thead>
         <tbody >
            @foreach($orders as $orders)
           <tr class="shadow" style="height: 45px;">
                <td class="col-1">{{$orders->id}}</td>
               <td class="col-2">{{$orders->user_fullname}}</td>
               <td class="col-2">{{$orders->total_money}} đ</td>
               <td class="col-2">{{$orders->status}}</td>
               <td class="col-3">{{$orders->created_at}}</td>
               <td class="col-1">
                 
                              <button type="submit" class="btn btn-dark">Chi tiết</button>
                  
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mt-1" data-bs-toggle="modal"
                        data-bs-target="#exampleModal{{$orders->id}}">
                        cập nhật
                    </button>
                    <!--  -->
                    <div class="modal fade"id="exampleModal{{$orders->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <form action="index.php?act=listdh" method="post">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Cập nhật trạng thái
                                        
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class="modal-body">

                                    <select class="form-select" aria-label="Default select example" name="trangthai">
                                       
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <input type="submit" name="btn-updatett" value="Cập nhật" class="btn btn-primary">
                                    <input type="hidden" name="id" value="{{$orders->id}}">
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
               </td>
           </tr>
           @endforeach
      </table>
   </div>
</div>
@endsection
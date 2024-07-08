@extends('admin.layout')
@section('content',)
<main class="admin-container">
<div class="admin-content">
        <div class="container-fluid">
            <div class="mb-3 mt-3 d-flex justify-content-between ">
                <h4>Quản Lý Tài Khoản</h4>
                <a href="index.php?act=addquantri">
                <!-- <button  type="button" class="btn  btn-dark me-5">
                    Thêm Quản Trị
                </button>  -->
                </a>
            </div>
            <table  >
                <thead >
                    <tr class="table">
                        <th class="col-3">Họ Tên</th>
                        <th class="col-2">Ảnh</th>
                        <th class="col-2">Email</th>
                        <th class="col-1">Số điện thoại</th>
                        <th class="col-2">Địa chỉ</th>
                        <th class="col-1">Quyền</th>
                        <th class="col-1">Hành động</th>

                    </tr>
                </thead>
                <tbody>
                   @foreach($listuser as $item)
                    <tr class="shadow" style="height:120px;">
                        <td>{{$item->name}}</td>
                        <td> <img src="{{ asset('uploaded/'.$item->avatar) }}" style="width:100px ;" alt=""></td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->sdt}}</td>
                        <td>{{$item->diachi}}</td>
                        <td>
                               @if($item->role == 1)
                                  <span class="text-bg-dark p-2">admin</span>
                                @else
                                   <span class="text-bg-info p-2">user</span>
                                @endif    
                        </td>
                        <td class="">
                            <a href="{{route('userdelele',$item->id)}}">
                                <input type="button" value="Xóa" class="btn btn-danger">
                            </a>
                        </td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>

@endsection
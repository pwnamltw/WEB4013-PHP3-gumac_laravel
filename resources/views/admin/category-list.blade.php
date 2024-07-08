@extends('admin.layout') 
@section('content')   
<main class="admin-content">
  <div class="container-fluid">
      <div class="mb-3 mt-3 d-flex justify-content-between ">
          <h4>Quản Lý Danh Mục</h4>
          <a href="{{ route('category-add')}}">
          <button  type="button" class="btn  btn-dark me-5">
              Thêm Danh Mục
          </button> 
          </a>
      </div>
      <table>
          <thead>
              <tr class="table">
                  <th class="col-1">ID</th>
                  <th class="col-5">TÊN DANH MỤC</th>
                  <th class="col-2">SỐ LƯỢNG</th>
                  <th class="col-1">Hành Động</th>
              </tr>
          </thead>
          <tbody>
          @foreach($show_categories as $categories)
          <tr style="height: 50px; " class="shadow">
              <td>{{ $categories->id }}</td>
              <td>{{ $categories->name }}</td>
              <td>{{ $categories->productCount }}</td> 
              <td class="d-flex gap-1">
                  <a href="{{ route('categoryupdate',$categories->id) }}">
                      <input type="button" value="Sửa" class="btn btn-secondary">
                  </a>
                  <a href="{{ route('categorydelete',$categories->id) }}">
                      <input type="submit" value="Xóa" class="btn btn-danger">
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
@extends ('admin.layout')
@section('content')
<div class="admin-content">
  <div class="container-fluid">
    <div class="mb-3 mt-3 d-flex justify-content-between">

      <h4>Quản Lý Sản Phẩm</h4>
      <a href="{{route('add-product') }}">
        <button type="button" class="btn btn-dark me-5">Thêm Sản Phẩm</button>
      </a>
    </div>
    <form class="d-flex mb-5" action="{{ route('product-list') }}"  style="width: 250px;">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="txtKeyword" value="{{ request('txtKeyword') }}">
        
        <button type="submit" class="btn btn-outline-dark" ><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
    <table style="width: 100%;">
      <thead>
        <tr  class=" header-table table">
        <th class="col-1">ID</th>
          <th class="col-2">Tên Sản Phẩm</th>
          <th class="col-2">Ảnh</th>
          <th class="col-1">Giá</th>
          <th class="col-1">Ngày Nhập</th>
          <th class="col-1">Danh Mục</th>
          <th class="col-1">Số Lượng</th>
          <th class="col-1">Lượt Xem</th>
          <th class="col-1">Lượt Bán</th>
          
          <th class="col-1">Hành Động</th>
        </tr>
      </thead>
      <tbody >
        @foreach($products as $product)
        <tr class="shadow" style="height: 120px">
            <td> {{ $product->id }}</td>
            <td> {{ $product->name }}</td>
            <td>
              <img
                style="width: 100px"
                src="{{ asset('uploaded/'.$product->img) }}"
                alt=""
              />
            </td>
            <td>{{ number_format($product->price) }}đ </td>
            <td>8/5/2024</td>
            <td>{{ $product->category_name }}</td>

            <td>{{ $product->soluong }}</td>
            <td>{{ $product->view }}</td>
            <td>{{ $product->sold }}</td>
            <td class=" ">
              <a href="{{ route('productupdate',$product->id) }}">
                <input type="submit" value="Sửa" class="btn btn-secondary" />
              </a>
            
              <a href="{{ route('productdelete',$product->id) }}" >
                <input  type="submit" value="Xóa" class="btn btn-danger mt-1" />
              </a>
            </td>
          </tr>
        @endforeach
      
      </tbody>
    </table>
    <div>
      <nav class="mt-3 " aria-label="Page navigation example">
        {{ $products->appends(request()->input())->links() }}
      </nav> 
    </div>
  </div>
  
</div>

@endsection
@extends('admin.layout')
@section('content',)
  
<main class="admin-content">
            <div class="container-fluid">
                <!-- form add sp -->
                 <div class="mb-3 mt-3 d-flex justify-content-between ">
                    <h4>Thêm Sản Phẩm Mới </h4>
                    <a href="{{route('product-list')}}">
                    <button  type="button" class="btn  btn-dark me-5">
                        Trở lại
                    </button> 
                    </a>
                </div>
            <div class="d-flex">
                 <form action="{{ route('productpostupdate') }}" enctype="multipart/form-data" method="POST" class="m-5 row w-75">
                     @csrf
                    <div class="col ">
                        <label class="mb-2" for="">ID</label>
                        <input class="form-control mb-4" disabled>
                        <!-- giá Bán -->
                        <label class="mb-2" for="">Giá Bán</label>
                        <div class="input-group mb-4">
                            <span class="input-group-text">
                                <i class="fa-solid fa-dollar-sign"></i>
                            </span>
                            <input type="text" class="form-control" name="price" value="{{ $product->price}}">
                        </div>
                    </div>
                    <div class="col">
                        <label class="mb-2" for="">Tên Sản Phẩm</label>
                        <input type="text" class="form-control mb-4 @error('name') is-invalid @enderror" name="name" value="{{ $product->name}}">
                        @error('name')
                            <div id="nameError" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <!-- Giá Giảm -->
                        <label class="mb-2" for="">Giá Giảm</label>
                        <div class="input-group mb-4">
                            <span class="input-group-text">
                                <i class="fa-solid fa-dollar-sign"></i>
                            </span>
                            <input type="text" class="form-control" name="sale" value="{{ $product->sale}}">
                        </div>
                    </div>

                    <div class="row ">
                        <!-- Trạng Thái -->
                        <div class=" row mb-3">
                                <div class="col-4">
                                    <label for="" class="form-label">Ảnh sản phẩm</label>
                                    <input class="form-control" type="file" name="img" >
                                </div>
                                <div class="col-4">
                                    <label class="mb-2" for="">Số lượng</label>
                                    <input type="text" class="form-control mb-4" name="soluong" value="{{ $product->soluong}}">
                                 </div>
                            <!-- select id danh mục -->
                                <div class="col-4">
                                    <label class="mb-2" for="">Danh Mục</label>
                                    <select class="form-select" aria-label="Default select example" name="category_id" >
                                            @foreach($show_categories as $categories)
                                                <option value="{{ $categories->id }}" @if($categories->id == $product->category_id) selected @endif>{{ $categories->name }}</option>
                                            @endforeach 
                                    </select>
                                </div>
                          </div>
                        <!-- Số Lượng -->
                        
                    </div>
                    <div class="col">

                        <!-- Tên Sản phẩm -->
                        <label class="mb-2" for="">Mô Tả</label>
                        <input type="text" class="form-control mb-4" name="description" value="{{ $product->description}}">
                        
                    </div>
                    <div class="d-flex gap-3 align-items-end mt-2">
                       <input type="hidden" name="id" value="{{ $product->id}}">
                        <input type="submit" class="btn btn-dark"  value="Cập nhât">
                    </div>   
                </form>
                <img class="mt-5" src="{{ asset('uploaded/'.$product->img) }}" alt="" style="width: 150px; height: 150px;">
                </div>
            </div>

</main>
   
@endsection
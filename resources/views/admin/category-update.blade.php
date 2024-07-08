

@extends('admin.layout') 
@section('content')  
<div class="admin-content">
    <div class="container-fluid">
        <!-- form add sp -->
        <div class="mb-3 mt-3 d-flex justify-content-between ">
            <h4>Thêm Danh Mục Mới</h4>
            <a href="{{ route('category-list') }} ">
            <button  type="button" class="btn  btn-dark me-5">
                Trở lại
            </button> 
            </a>
        </div>
        <form action="{{ route('categorypostupdate') }}" method="post" class="m-5 row w-75">
            @csrf
            <div class="col ">
                <!-- id danh muc -->
                <label class="mb-2" >ID</label>
                <input class="form-control mb-4 " value="{{ $categories->id }}" disabled>
                <select class="form-select" aria-label="Default select example" name="sethome" >
                  <option value="0" {{ $categories->sethome == 0 ? 'selected' : '' }}>default</option>
                  <option value="1" {{ $categories->sethome == 1 ? 'selected' : '' }}>Home</option>
                </select> 
            </div>
            <div class="col">
                <!-- Tên danh mục -->
                <label class="mb-2" >Tên Danh Mục</label>
                <input class="form-control mb-4" name="name" value="{{ $categories->name }}">
                <div class="d-flex gap-3 align-items-end">
                    <input class="btn btn-dark " type="submit" value="cập nhật " >
                    <input type="hidden" name="category_id" value="{{ $categories->id }}">
                </div>           
            </div>
        </form>
    </div>
</div>
   
@endsection
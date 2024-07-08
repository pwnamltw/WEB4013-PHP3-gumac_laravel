

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
        <form action="{{ route('category-post') }}" method="post" class="m-5 row w-75">
            @csrf
            <div class="col ">
                <!-- id danh muc -->
                <label class="mb-2" >ID</label>
                <input class="form-control mb-4 " disabled>
            </div>
            <div class="col">
                <!-- Tên danh mục -->
                <label class="mb-2" >Tên Danh Mục</label>
                <input class="form-control mb-4" name="name">
                <div class="d-flex gap-3 align-items-end">
                    <input class="btn btn-dark mt-3" type="submit" value="Thêm mới" >
                </div>           
            </div>
        </form>
    </div>
</div>
   
@endsection
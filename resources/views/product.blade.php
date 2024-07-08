@extends('layout')
 @section('content')

<main class="mb-5 mt-5">

    <div class="container">
        <div class="row">
             <div class="col-3 ">
                <form class="d-flex" action="{{ route('product') }}"  >
                    <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="txtKeyword" value="{{ request('txtKeyword') }}">
                    
                    <button type="submit" class="btn btn-outline-dark" ><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <ul class="list-group mt-3">
                <li class="list-group-item text-bg-dark" aria-current="true">Danh mục</li>
                    @foreach($show_categories as $categories)
                        
                        <a class="nav-link" href="{{route ('category', $categories->id )}}">
                            <li class="list-group-item">  {{ $categories->name }}</li>
                        </a>
                    @endforeach
                </ul>
         
             </div>
          
            <div class="col-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="nav-link text-dark" href="#">SẢN PHẨM</a></li>
                    @foreach($show_categories as $category)
                    
                        @if($category_id == $category->id)
                            <li class="breadcrumb-item"><a class="nav-link text-dark " style="width: 100px;" href="#">DANH MỤC</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
                        @endif
                    @endforeach

                </ol>
            </nav>
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-4 mb-3">
                            <div class="card" style="width: 18rem">
                                <a class="nav-link" href="{{route('productdetail',$product->id  )}}">
                                    <img
                                        class="thumb"
                                        src="{{ asset('uploaded/'.$product->img) }}"
                                        alt=""
                                        style="
                                            border-radius: 8px;
                                            width: 287px;
                                            height: 430px;
                                        "
                                    />
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title mt-3"  style="height: 60px;">
                                    {{ $product->name }}
                                    </h4>
                                    <div class="mt-4">
                                        <div class="group-icon-color d-flex gap-4 mt-3">
                                            <div
                                                class="icon-color"
                                                data-img="img/2-TRANG-AE05095.jpg"
                                            >
                                                <img src="http://127.0.0.1:8000/img/icon-trang.png" alt="" />
                                            </div>
                                            <div
                                                class="icon-color"
                                                data-img="img/2-VANG-AE05095.jpg"
                                            >
                                                <img src="http://127.0.0.1:8000/img/icon-vang.png" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-3">
                                        <p class="card-text text-danger fw-normal fs-5">
                                             {{ number_format( $product->price )}} đ
                                        </p>
                                        <del class="fw-normal fs-5"> {{ number_format( $product->price )}} đ</del>
                                    </div>
                                    <button class="btn btn-info text-light w-100 addToCartBtn"  ng-click="addToCart({{$product->id}},1)"  >
                                        Thêm Vào Giỏ
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div >
                        <nav aria-label="Page navigation example">
                        {{ $products->appends(request()->input())->links() }}
                        </nav>
                    </div>
                </div>
                
           
        </div>
</main>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let addToCartButtons = document.querySelectorAll('.addToCartBtn');

        addToCartButtons.forEach(function (button) {
            button.addEventListener('click', function () {
               
                alert(`Đã thêm vào giỏ hàng!`);
            });
        });
    });
</script>
@endsection

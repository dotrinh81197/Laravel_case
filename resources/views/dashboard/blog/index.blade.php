@extends('layout.admin')

@section('content_dashboard')
<div class='container'>
    <div class="row">
        <h1>QUẢN LÝ BÀI VIẾT CỦA SẢN PHẨM</h1>

    </div>
    <div class="row">
        <div class="card-body table-full-width table-responsive">
            <table class="table table-hover table-striped" id="productTable">
              
                   <thead>
                       <tr>
                           <td>Tên sản phẩm</td>
                           <td>Thêm bài viết</td>   
                           <td>Chỉnh sửa</td>
                           <td></td>
                       </tr>
                      
                   </thead>
                   
             
                <tbody>
             
               @if ($products)
               @foreach ($products as $product)
                
               <tr id="{{$product->id}}">
                  @csrf
                   <td>{{$product->name}}</td>
                   <td><a href="{{ route('blog.create', $product->id) }}" class="btn btn-primary" id=""  >Tạo bài viết</a></td>
                   <td><a href="{{ route('blog.create', $product->id) }}" class="btn btn-primary" >Chỉnh sửa</a></td>
                   <td>
                      <a class="btn btn-warning" href="{{ route('product.edit', $product->id) }}">sửa</a></td> 
                    <td>
                    <a href="javascript:void(0)" class="btn btn-danger" type="button" class="text-danger" onclick="deleteProduct({{$product->id}})" > Xóa
                    </td>
                  
                   
               </tr>
           
               @endforeach
               @endif 
                </tbody>
                <tfoot>
                    
                </tfoot>
            </table>
        </div>
    </div>


</div>
@endsection
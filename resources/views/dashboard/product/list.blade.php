<table class="table table-hover table-striped " id="productTable">
                               
    <thead>
        <tr>
            <td>Tên sản phẩm</td>
            <td>Thể loại</td>   
            <td>Quyền lợi</td>
            <td>Ví dụ minh họa</td>
            <td></td>
            <td></td>
        </tr>
       
    </thead>
    

 <tbody>

@if ($products)
@foreach ($products as $product)
 
<tr id="{{$product->id}}">
   
    <td>{{$product->name}}</td>
    <td>{{$product->category->name}}</td>
    <td><a href="" class="btn btn-primary" id="btn_benefit"  onclick="showBenefit({{$product->id}})">Quyền lợi</a></td>
    <td><a href="" class="btn btn-primary">Ví dụ minh họa</a></td>
    <td>
       <a class="btn btn-warning" href="{{ route('product.edit', $product->id) }}">sửa</a></td> 
     <td>
     <a href="{{ route('product.destroy', $product->id) }}" class="btn btn-danger" type="submit" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')" > Xóa
     </td>
   
    
</tr>

@endforeach
@endif 
 </tbody>
 <tfoot>
     <td>
         <a href="{{route('product.create')}}" class="btn btn-primary" >Thêm sản phẩm</a>
     </td>
 </tfoot>
</table>
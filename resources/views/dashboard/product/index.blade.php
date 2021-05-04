@extends('layout.admin')

@section('content_dashboard')


         <div class="container-fluid content_dashboard font-size-large">
             <div class="row">
                 <div class="col-md-12">

                     <div class="card strpied-tabled-with-hover">
                         <div class="card-header ">
                             <h4 class="card-title">DANH SÁCH SẢN PHẨM</h4>
                             <p class="card-product"></p>
                         </div>
                     
                         <div class="card-body table-full-width table-responsive">
                             <table class="table table-hover table-striped" id="productTable">
                               
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
                                   @csrf
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td><a href="javascript:void(0)" class="btn btn-primary" id="btn_benefit"  onclick="showBenefit({{$product->id}})">Quyền lợi</a></td>
                                    <td><a href="javascript:void(0)" class="btn btn-primary" onclick="showIllustration({{$product->id}})">Ví dụ minh họa</a></td>
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
                                     <td>
                                         <a href="{{route('product.create')}}" class="btn btn-primary btn-lg" >Thêm sản phẩm</a>
                                     </td>
                                 </tfoot>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     
{{-- show benefit modal       --}}
         <div class="modal" id="showBenefitModal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
            
              <!-- Modal body -->
              <div class="modal-body">
                <input type="hidden" id="id" name="id" >
                {{-- <div id="benefit_content">

                </div> --}}
              </div>
              
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
              
            </div>
          </div>
        </div>
        
          <!-- The Modal -->
          {{-- show illustration --}}
          <div class="modal" id="showIllustrationModal">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
              
                <!-- Modal body -->
                <div class="modal-body">
                  <input type="hidden" id="id" name="id" >
                 
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                
              </div>
            </div>
          </div>

<div class="pagination float-right mr-5 ">
  {{ $products->links() }}
</div>   



<script type="text/javascript">
function showBenefit(idProduct) {
  $('#showBenefitModal').modal();
  let url = `/admin/product/${idProduct}/showbenefit`;
  $.ajax({
    url :url,
    success: function(xml){
      document.querySelector('#showBenefitModal .modal-body').innerHTML = xml;
 
      // $('#showModal .modal-body').innerHTML = xml;

    }

  })

}

function showIllustration(idProduct) {
 
  $('#showIllustrationModal').modal();
  let url = `/admin/product/${idProduct}/showillustration`;
  console.log(url)

  $.ajax({
    url :url,
    
    success: function(data){
      document.querySelector('#showIllustrationModal .modal-body').innerHTML = data;
 
      // $('#showModal .modal-body').innerHTML = xml;

    }

  })

  
}
   
function deleteProduct(idProduct) {
    let  _token=$("input[name=_token]").val()
    let  url =  `/admin/product/${idProduct}`;
    
    if (confirm('Bạn có chắc chắn muốn xóa?')) {
      
        $.ajax({
            url: `/admin/product/${idProduct}`,
            type:'DELETE',
            data:{
               _token:_token
            },
            success:function(response){
              
              $('#'+idProduct).remove();
             
              
            }
            
        })
    }
    
  }

</script>


@endsection



@extends('layout.admin')

@section('content_dashboard')

<div class="container content_dashboard font-size-large">
    <h1> HỒ SƠ YÊU CẦU HỢP ĐỒNG BẢO HIỂM ĐIỆN TỬ</h1>
   @if (!empty($consultation))
     <form action="{{route('contract.storebyConsultation',$consultation[0]->id)}}" method="post">
         @csrf
        <div class="py-3">
        <h3>Thông tin Sản phẩm và Hợp đồng bảo hiểm</h3>
        </div>
    
        <div class="py-5">
            <h3>Thông tin BMBH</h3>
        
        
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">HỌ VÀ TÊN</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="" value="{{$consultation->name}}" name="full_name" readonly>
                </div>
            </div>
            <div class="form-group row">
                 <label for="" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-6">
                     <input type="email" class="form-control" id="" value="{{$consultation->email}}" name="email" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="tel" class="form-control" id="" value="{{$consultation->phone}}" name="phone" readonly>
                </div>
            </div>
                 
    @else
        <form action="{{route('contract.store')}}" method="post">
            @csrf
            <div class="py-3">
                <h3>Thông tin Sản phẩm và Hợp đồng bảo hiểm</h3>
               
            </div>
           
            
            <div class="py-5">
                <h3>Thông tin BMBH</h3>
                 <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">HỌ VÀ TÊN</label>
                 <div class="col-sm-6">
              <input type="text" class="form-control" id="" value="" name="full_name">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
              <input type="email" class="form-control" id="" value="" name="email">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-6">
              <input type="tel" class="form-control" id="" value="" name="phone">
            </div>
        </div>
            
    @endif
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Giới tính</label>
            <div class="col-sm-6">
                <div class="form-check form-check-inline">

                    <label class="form-check-label" for="inlineradio1">Nữ</label>

                    <input class="form-check-input" type="radio" id="inlineradio1" name="gender" value="0">
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label" for="inlineradio1">Nam</label>

                    <input class="form-check-input" type="radio" id="inlineradio1" name="gender" value="1">
                </div> 
            </div>
        </div>
        <div class="form-group row">
            <label for="exampleFormControlTextarea1"  class="col-sm-2 col-form-label">Địa chỉ</label>
            <div class="col-md-6">
               
                <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
        </div>
        <div class="form-group row">
           
            <label for="" class="col-sm-2 col-form-label">Ngày sinh</label>
            <div class="col-sm-6">
                <input class="form-control" type="date" value="" id="" name="dob">
            </div>
        </div>
        <div class="form-group row">
           
            <label for="" class="col-sm-2 col-form-label">Số giấy tờ tùy thân</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" value="" id="" name="cmnd">
            </div>
        </div>
        <div class="form-group row">
           
            <label for="" class="col-sm-2 col-form-label">Nghề nghiệp</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" value="" id="" name="job">
            </div>
        </div>
        
    </div>
    <div class="py-5">
        <h3>THÔNG TIN HỢP ĐỒNG</h3>
        <div class="form-row">
            <div class="form-group col-md-8">
              <label for="">Sản phẩm</label>
              <select class="custom-select custom-select-lg" name="products[]">
 
                  @foreach ($products_main as $product_main)
                  <option value="{{$product_main->id}}">{{$product_main->name}}</option>
                  @endforeach
              </select>
            </div>
          </div>
        
        <div class="form-group row">
           
            <label for="" class="col-sm-2 col-form-label">Thời hạn hợp đồng/Thời hạn đóng phí</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" value="" id="" name="term[][]" min="5" max="25">
                 
            </div>
        </div>

        <div class="form-group row">
           
            <label for="" class="col-sm-2 col-form-label">Định kỳ đóng phí</label>
            <div class="col-sm-6">
                <select class="custom-select custom-select-lg" name="periodic_product[][]">
 
                    @foreach ($periodics as $periodic)
                    <option value="{{$periodic->id}}">{{$periodic->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
           
            <label for="" class="col-sm-2 col-form-label">Phí bảo  hiểm định kỳ</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" value="" id="" name="fee_recurring[][]">
            </div>
        </div>
        <div class="form-group row">
           
            <label for="" class="col-sm-2 col-form-label">Số tiền bảo hiểm</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" value="" id="" name="insurance_money[][]">
            </div>
        </div>
        </div>

    {{-- <div class="py-5 submit_product_main">
        <button type="submit" class="btn btn-success btn-lg btn-submit btn-create btn-submit-product-main" >Submit</button>
    
    </div>
    </form> --}}
    {{-- <form action="">
        @csrf --}}
        <div class="py-3 container">
            <h3>Chọn sản phẩm bổ trợ</h3>
              
              <div class="form-row">
                <table class="table" id="table_product_sub">
                    <thead>
                        <tr>
                            <td>Tên sản phẩm</td>
                            <td>Thời hạn đóng phí</td>
                            <td>Số tiền bảo hiểm</td>
                            <td>Định kì đóng phí</td>
                            <td>Phí định kì</td>
                            <td><a href="javascript:void(0)" onclick="insertProduct_subRow()"><i class="far fa-plus-square"></i></a></td>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="0">
                            <td>
                                <select class="custom-select"  name="products[]" style="width:3">
                                    @foreach ($products_sub as $product_sub)
                                       <option value="{{$product_sub->id}}">{{$product_sub->name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input class="form-control" type="number" value="" id="" name="term[][]" min="5" max="25">
                                  {{-- 5 <= term <= 25 --}}
                            </td>
                            <td>
                                <input class="form-control" type="number" value="" id="" name="insurance_money[][]">
        
                            </td>
                            <td>
                                <div class="col-sm-12">
                                    <select class="custom-select " name="periodic_product[][]">
                     
                                        @foreach ($periodics as $periodic)
                                        <option value="{{$periodic->id}}">{{$periodic->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
        
                            </td>
                            <td>
                                <input class="form-control" type="number" value="" id="" name="fee_recurring[][]">
        
                            </td>
                            
                            {{-- <td>
                                <a href="javascript:void(0)" class="btn btn-danger" type="button" onclick="deleteProductSubRow()"> Xóa   
                                </a>
    
                            </td> --}}
                           
                            
                        </tr>
                    </tbody>
                   
                </table>
            </div>  
        </div>
        <div class="py-5 submit">
            <button type="submit" class="btn btn-success btn-lg btn-submit btn-create" >Submit</button>
    
        </div>
    </form>
    
    
    

  



</div>
<script>
  function insertProduct_subRow() {
          var url = `/admin/contract/list_product_sub`;
    console.log(url);
          $.ajax({
              url: url,
              
              success: function(xml) {
                console.log(xml);

                  $('#table_product_sub tbody').append(xml);
              },
              error: function(error) {
                  console.log("Xảy ra lỗi: " + error.message)
              }
          })
      }

function deleteProductSubRow(idRow) {
    let  _token=$("input[name=_token]").val()
      
    if (confirm('Bạn có chắc chắn muốn xóa?')) {
      
        $.ajax({
            success:function(response){
              
              $('#'+idRow).remove();
             
              
            }
            
        })
    }
    
}
</script>
@endsection

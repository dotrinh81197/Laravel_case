@extends('layout.admin')

@section('content_dashboard')

<div class="container content_dashboard font-size-large">
    <h1>CHỈNH SỬA HỒ SƠ YÊU CẦU HỢP ĐỒNG BẢO HIỂM ĐIỆN TỬ</h1>
 
        <form action="{{route('contract.update', $contract[0]->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="py-3">
                <h3>Thông tin Sản phẩm và Hợp đồng bảo hiểm</h3>
               
            </div>
           
            
            <div class="py-5">
                <h3>Thông tin BMBH</h3>
                 <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">HỌ VÀ TÊN</label>
                 <div class="col-sm-6">
              <input type="text" class="form-control" id="" value="{{$contract[0]->full_name}}" name="full_name">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
              <input type="email" class="form-control" id="" value="{{$contract[0]->email}}" name="email">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-6">
              <input type="tel" class="form-control" id="" value="{{$contract[0]->phone}}" name="phone">
            </div>
        </div>
            
    
        <div class="form-group row">
            <label for="exampleFormControlTextarea1"  class="col-sm-2 col-form-label">Địa chỉ</label>
            <div class="col-md-6">
               
                <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3">{{$contract[0]->address}}</textarea>
              </div>
        </div>
        <div class="form-group row">
           
            <label for="" class="col-sm-2 col-form-label">Ngày sinh</label>
            <div class="col-sm-6">
                <input class="form-control" type="date" value="{{$contract[0]->dob}}" id="" name="dob">
            </div>
        </div>
        <div class="form-group row">
           
            <label for="" class="col-sm-2 col-form-label">Số giấy tờ tùy thân</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" value="{{$contract[0]->cmnd}}" id="" name="cmnd">
            </div>
        </div>
        <div class="form-group row">
           
            <label for="" class="col-sm-2 col-form-label">Nghề nghiệp</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" value="{{$contract[0]->job}}" id="" name="job">
            </div>
        </div>
        
    </div>
    <div class="py-5">
        <h3>THÔNG TIN HỢP ĐỒNG</h3>
        <div class="form-row">
            <div class="form-group col-md-8">
              <label for="">Sản phẩm</label>
              <select class="custom-select custom-select-lg" name="products[]">
 
                  @foreach ($products_main as $key => $product_main)
                     @foreach ($contract_products as $contract_product)
                         @if ($product_main->id == $contract_product->product_id)
                              <option value="{{$product_main->id}}">{{$product_main->name}}
                              </option>
                         @endif
                     @endforeach
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
        <div class="py-3">
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
                        <tr >
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
                            
                            <td>
                                <a href="javascript:void(0)" class="btn btn-danger" type="button" onclick="deleteProductSubRow()"> Xóa   
                                </a>
    
                            </td>
                           
                            
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

function deleteProductSubRow(params) {
    
    
}
</script>
@endsection

<tr id="product_sub">
    <td>
        <select class="custom-select"  name="products[]" style="width:3">

            @foreach ($products_sub as $product_sub)
            <option value="{{$product_sub->id}}">{{$product_sub->name}}</option>
            @endforeach
        </select>
    </td>
    <td>
        <input class="form-control" type="number" value="" id="" name="term[]" min="5" max="25">
         
    </td>
    <td>
        <input class="form-control" type="number" value="" id="" name="insurance_money[][]">

    </td>
    <td>
        <div class="col-sm-12">
            <select class="custom-select" name="periodic_product[][]">

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
    </td> --}}
    
</tr>
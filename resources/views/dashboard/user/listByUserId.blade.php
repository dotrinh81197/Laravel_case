

<form action="">
  @csrf
  <div class="content_dashboard container-fluid">
    <div class="row">

      
      <div class="col-md-6 ">
          <div class="card-header ">
              <h4 class="card-title">DANH SÁCH TƯ VẤN </h4>
          </div>
          @if ($errors->any())
          @foreach($errors->all() as $nameError)
              <p style="color:red">{{ $nameError }}</p>
          @endforeach
          @endif
      </div> 
     
</div> 
   
   </div>    
        <table class="table table-hover table-striped" id="conslutationTable">
             
           <thead>
               <tr>
                   <td>#</td>
                   <td>Tên khách hàng</td>   
                   <td>Ngày đăng ký</td>
                   <td></td>
                   <td></td>
                   <td></td>
               </tr>
           </thead>
           
     
           <tbody>
     
                   @foreach ($consultations as $key => $consultation)
                   <tr id="{{$consultation->id}}">
                     <td>{{++$key}}</td>
                    <td>{{$consultation->name}}</td>
                    <td>{{$consultation->created_at}}</td>
                    <td>
                       <a class="btn btn-pink" id="btn-info" href="{{route('consultation.showcreatecontract',$consultation->id)}}" >Tạo hợp đồng</a>
                    </td> 
                    <td>
                      <a href="javascript:void(0)" class="btn btn-danger"  class="text-danger" onclick="deleteConsultation({{$consultation->id}})" > Xóa
                      </a>

                    </td>
                    <td>
                   <a href="javascript:void(0)" class="btn btn-yellow" onclick="openDetailForm({{$consultation->id}})">Chi tiêt</a>
                    </td>
                   
                    
                   </tr>
                   @endforeach                      
           </tbody>

    
      </table>
  </div>
</div>

</form>




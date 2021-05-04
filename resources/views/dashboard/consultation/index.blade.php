@extends('layout.admin')

@section('content_dashboard')

<form action="">
  @csrf
  <div class="content_dashboard container-fluid"> 
        
    <div class="row">

        <div class="col-md-12">
            <div class="card strpied-tabled-with-hover">
                <div class="card-header ">
                    <h4 class="card-title">DANH SÁCH CUỘC HẸN TƯ VẤN</h4>
                </div>
                
            </div> 
        </div>
    </div>

   <div>
   </div>    
        <table class="table table-hover table-striped" id="conslutationTable">
             
           <thead>
               <tr>
                   <td>#</td>
                   <td>Tên khách hàng</td>   
                   <td>Nhận tư vấn</td>
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
                    <td>
                      <label class="switch">
                        <input data-id="{{$consultation->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $consultation->status ? 'checked' : '' }}>
                        <span class="slider round"></span>
                      </label>
                     
                    </td>  
                   
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

   


<div class="modal fade" id="categoriesModal" tabindex="-1" role="dialog" aria-labelledby="categoriesModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="categoriesModalLabel">Thêm thể loại sản phẩm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <form id="categoryFrom" >
            @csrf
          <div class="form-group">
            <label for="category_name" class="col-form-label">Tên thể loại</label>
            <input type="text" class="form-control" id="category_name" >
          </div>
          @if ($errors->any())
          @foreach($errors->all() as $nameError)
              <p style="color:red">{{ $nameError }}</p>
          @endforeach
          @endif
          
    
        <button type="submit" class="btn btn-primary" id="btn-submit" > Thêm </button>

        </form>
      </div>
      
    </div>
  </div>
</div>


{{-- detail consultation --}}
<div class="modal fade bd-example-modal-lg" id="consultationDetailMoal" tabindex="-1" role="dialog" aria-labelledby="consultationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="categoriesModalLabel">Thông tin chi tiết </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      
    </div>
  </div>
</div>
<script>
  window.onload=loadList
  

  
 function openDetailForm(idConsultation) {
        $("#consultationDetailMoal").modal();
       let url = `/admin/consultation/${idConsultation}/showdetail`;
        console.log(url);

        $.ajax({

            url:url,
          
            success: function(xml) {
            
                document.querySelector('#consultationDetailMoal .modal-body').innerHTML = xml;
            }
           
        })
    }

  //   function submitEdit(idConsultation) {
     
  //     let category_name = $("#category_name1").val();
  //    let _token = $("input[name=_token]").val();
       
  //       $.ajax({
  //           url: `/admin/category/${idConsultation}/edit-form`,
  //           type: 'PUT',
  //           data: {
  //             category_name:category_name,
  //             _token:_token
              
  //           },
           
  //           success: function() {
  //               // Alert success
  //               alert("Edit successfully")

  //               // Close Modal
  //               $("#consultationDetailMoal").modal("hide");

  //               // Reload List
  //               loadList();
  //           },
  //           error: function() {
  //               alert("Edit Failed")
  //           }
  //       })
       
  //   }

    // function loadList() {
    //     var url = `/admin/category/list`;

    //     $.ajax({
    //         url: url,

    //         success: function(xml) {
              
    //             const categoryListElement = document.querySelector('#category_list');

    //             categoryListElement.innerHTML = xml;
    //         },
    //         error: function(error) {
    //             console.log("Xảy ra lỗi: " + error.message)
    //         }
    //     })
    // }

  function deleteConsultation(idConsultation) {
    let  _token=$("input[name=_token]").val()
    let  url =  `/admin/consultation/${idConsultation}`;
   
    console.log( _token);
    if (confirm('Bạn có chắc chắn muốn xóa?')) {
      
        $.ajax({
            url:url,
            type:'DELETE',
            data:{
               _token:_token
            },
            success:function(response){
              $('#'+idConsultation).remove();
            }
        })
    }
    
  }
</script>

<script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var consultation_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/admin/consultation/set-employee',
            data: {'status': status, 'consultation_id': consultation_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>
  


@endsection



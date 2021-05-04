@extends('layout.admin')

@section('content_dashboard')

<form action="">
  @csrf
  <div class="content_dashboard container-fluid"> 
        
    <div class="row">

      
            <div class="col-md-6 ">
                <div class="card-header ">
                    <h4 class="card-title">DANH SÁCH TƯ VẤN VIÊN</h4>
                </div>
                
            </div> 
            <div class="col-md-6">
                <a href="javascript:void(0)" class="btn btn-lg btn-success" onclick="showRegisterForm()"> TẠO TÀI KHOẢN TƯ VẤN </a>
            </div>
    </div>

     <div>
     
        <table class="table table-hover table-striped" id="conslutationTable">
             
           <thead>
               <tr>
                   <td>#</td>
                   {{-- <td>Mã số</td>    --}}
                   <td>Tên tư vấn</td>
                   <td>Danh sách cuộc tư vấn</td>
                   <td>Danh sách hợp đồng </td>
               </tr>
           </thead>
           
     
           <tbody>
     
                   @foreach ($employees as $key => $employee)
                   <tr id="{{$employee->id}}">
                     <td>{{++$key}}</td>
                    <td>{{$employee->name}}</td>
                   
                    <td>
                      <a href="javascript:void(0)" onclick="showListConsultationByUserId({{$employee->id}})" class="btn btn-primary" >
                      Danh sách cuộc tư vấn
                      </a>
                    </td>
                    <td>
                        <a href="" class="btn btn-pink">
                            Danh sách hợp đồng chăm sóc
                        </a>    
                    </td>
                    
                    <td>
                      <a href="javascript:void(0)" class="btn btn-danger"  class="text-danger" onclick="" > hủy
                      </a>

                    </td>
                    <td>
                        <a href="javascript:void(0)" class="btn btn-orange" onclick="openEditForm({{$employee->id}})">Chỉnh sửa</a>
                    </td>
                   
                    
                   </tr>
                   @endforeach                      
           </tbody>

    
        </table>
    </div>
</div>

</form>
<div id="listConsultation">

</div>
   

<div class="modal fade bd-example-modal-lg" id="userModal" tabindex="-1" role="dialog" aria-labelledby="consultationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
      </div>
      
    </div>
  </div>
</div>
<script>
  window.onload=loadList
  
function showListConsultationByUserId(IdEmployee) {
  let url = `/admin/user/${IdEmployee}/show-list-consultation`;
        console.log(url);

        $.ajax({
            url:url,
            success: function(xml) {
                document.querySelector('#listConsultation').innerHTML = xml;
            }
           
        })
}
  
 function openDetailForm(idConsultation) {
        $("#userModal").modal();
       let url = `/admin/consultation/${idConsultation}/showdetail`;
        console.log(url);

        $.ajax({

            url:url,
          
            success: function(xml) {
            
                document.querySelector('#userModal .modal-body').innerHTML = xml;
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
  //               $("#userModal").modal("hide");

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

  function showRegisterForm() {

        $("#userModal").modal();
       let url = `/admin/user/show-register-form`;
        
        $.ajax({
            url:url,
            success: function(xml) {
            
                document.querySelector('#userModal .modal-body').innerHTML = xml;
            }
           
        })
    }
    function submitRegister() {
           let user_name = $("#user_name").val();
           let user_email = $("#user_email").val();
           let user_password = $("#user_password").val();
           let user_roles = $('#user_roles').val();
           let _token = $("input[name=_token]").val(); 
      console.log(_token);
      console.log(user_name);
      console.log(user_email);
      console.log(user_password);
      console.log(user_roles);
      $.ajax({
        url: `/admin/user/create`,
        type: "POST",
        data: {
          user_name:user_name,
          user_email: user_email,
          user_password:user_password,
          user_roles : user_roles,
          _token:_token
        },
           
        success:function () {
          $("#userModal").modal('hide');
          alert("ĐĂNG KÝ TÀI KHOẢN TƯ VẤN VIÊN THÀNH CÔNG")

        },
        error:function(){
          alert("Có lỗi xảy ra")
        }

          
      })
  
}
</script>
  


@endsection



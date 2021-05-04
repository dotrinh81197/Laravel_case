@extends('layout.admin')

@section('content_dashboard')


  <div class="content_dashboard container-fluid"> 
        
    <div class="row">

      
            <div class="col-md-6 ">
                <div class="card-header ">
                    <h4 class="card-title">DANH SÁCH HỢP ĐỒNG </h4>
                </div>
                @if ($errors->any())
                @foreach($errors->all() as $nameError)
                    <p style="color:red">{{ $nameError }}</p>
                @endforeach
                @endif
            </div> 
           
    </div>

     <div class="py-5">
     
        <table class="table table-hover table-striped" id="conslutationTable">
             
           <thead>
               <tr>
                  
                   <td>Mã số hợp đồng</td>
                   <td>Tên khách hàng</td>
                   <td>Tên tư vấn</td>
                   <td></td>
                   <td></td>
                   <td></td>
               </tr>
           </thead>
           
     
           <tbody>
     
                   @foreach ($contracts as $key => $contract)
                   <tr id="{{$contract->id}}">
                    
                    <td>{{$contract->id}}</td>
                   
                    <td>
                     {{$contract->full_name}}
                    </td>
                    <td>
                       {{$contract->user->name}}  
                    </td>
                    @csrf
                    <td>
                      <a href="javascript:void(0)" class="btn btn-danger"  class="text-danger" onclick="deleteContract({{$contract->id}})" > hủy
                      </a>

                    </td>
                    <td>
                        <a href="{{route('contract.edit', $contract->id)}}" class="btn btn-orange" >Chỉnh sửa</a>
                    </td>
                    <td>
                      {{-- @php
                          var_dump($users)
                      @endphp
                      @if (isset($users) && $users->contract_id !='NULL'))
                      <a href="javascript:void(0)" class="btn btn-success">Đã tạo tài khoản</a>

                      @endif --}}
                        <a href="javascript:void(0)" class="btn btn-success" onclick="openRegisterForm({{$contract->id}})">Tạo tài khoản khách hàng</a>

                    </td>
                   
                    
                   </tr>
                   @endforeach                      
           </tbody>

    
        </table>
    </div>
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
  // window.onload=loadList
  

  
 function openRegisterForm(idContract) {
        $("#userModal").modal();
       let url = `/admin/contract/${idContract}/show-register-form`;
      
        console.log(url);

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
           let user_contract_id = $("#contract_id").val();
           let user_roles = $('#user_roles').val();
           let _token = $("input[name=_token]").val(); 

        
      
      $.ajax({
        url: `/admin/contract/create/submitRegister`,

        type: "POST",
        data: {
          user_name:user_name,
          user_email: user_email,
          user_password:user_password,
          user_contract_id: user_contract_id,
          user_roles : user_roles,
          _token:_token
        },
           
        success:function () {
          $("#userModal").modal('hide');
          alert("ĐĂNG KÝ TÀI KHOẢN KHÁCH HÀNG THÀNH CÔNG")

        },
        error:function(){
        alert("Có lỗi xảy ra")
        }

          
      })
  
}


  //   function submitEdit(idContract) {
     
  //     let category_name = $("#category_name1").val();
  //    let _token = $("input[name=_token]").val();
       
  //       $.ajax({
  //           url: `/admin/category/${idContract}/edit-form`,
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

  function deleteContract(idContract) {
    let  _token=$("input[name=_token]").val()
    let  url =  `/admin/contract/${idContract}`;
   
    console.log( _token);
    if (confirm('Bạn có chắc chắn muốn xóa?')) {
      
        $.ajax({
            url:url,
            type:'DELETE',
            data:{
               _token:_token
            },
            success:function(response){
              $('#'+idContract).remove();
            }
        })
    }
    
  }

 
  
</script>
  


@endsection



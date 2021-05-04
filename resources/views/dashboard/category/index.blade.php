@extends('layout.admin')

@section('content_dashboard')



    <div class="content_dashboard font-size-large"> 
        <div class="content">
         <div class="container-fluid">
             <div class="row">
            
          
                 <div class="col-md-12">
                     <div class="card strpied-tabled-with-hover">
                         <div class="card-header ">
                             <h4 class="card-title">THỂ LOẠI SẢN PHẨM</h4>
                             <p class="card-category"></p>
                         </div>
                         <div class="card-body table-full-width table-responsive">
                            
                             <div id="category_list"></div>
                             <a href="" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#categoriesModal">Thêm thể loại sản phẩm</a>

                         </div>
                     </div> 
                 </div>

     </div>



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
          
    
        <button type="submit" class="btn btn-primary btn-lg" id="btn-submit" > Thêm </button>

        </form>
      </div>
      
    </div>
  </div>
</div>


{{-- editCategory --}}
<div class="modal fade" id="editCategoriesModal" tabindex="-1" role="dialog" aria-labelledby="categoriesModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="categoriesModalLabel">Sửa thể loại sản phẩm</h5>
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
  
$("#btn-submit").click(function(e){
  e.preventDefault();
   
  let category_name = $("#category_name").val();
  let _token = $("input[name=_token]").val();

  $.ajax({
      url:"{{route('category.store')}}",
      type: "POST",
      data:{
          category_name : category_name,
          _token : _token
      },
      
      success:function(response){
          
          
          if(response){
              
              // category = response.name;
              
              $("#categoriesModal").modal('hide');    
              
               $("#categoryFrom").trigger("reset");
               $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
              loadList();
              

          }
      }
      
      
  });
});

  
 function openEditForm(idCategory) {
        $("#editCategoriesModal").modal();

        $.ajax({
            url: `/admin/category/${idCategory}/edit`,
            success: function(xml) {
                document.querySelector('#editCategoriesModal .modal-body').innerHTML = xml;
            }
           
        })
    }

    function submitEdit(idCategory) {
     
      let category_name = $("#category_name1").val();
     let _token = $("input[name=_token]").val();
       
        $.ajax({
            url: `/admin/category/${idCategory}/edit-form`,
            type: 'PUT',
            data: {
              category_name:category_name,
              _token:_token
              
            },
           
            success: function() {
                // Alert success
                alert("Edit successfully")

                // Close Modal
                $("#editCategoriesModal").modal("hide");
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();

                // Reload List
                loadList();
            },
            error: function() {
                alert("Edit Failed")
            }
        })
       
    }

      function loadList() {
          var url = `/admin/category/list`;

          $.ajax({
              url: url,

              success: function(xml) {
                
                  const categoryListElement = document.querySelector('#category_list');

                  categoryListElement.innerHTML = xml;
              },
              error: function(error) {
                  console.log("Xảy ra lỗi: " + error.message)
              }
          })
      }

  function deleteCategory(idCategory) {
    let  _token=$("input[name=_token]").val()
    let  url =  `/admin/category/${idCategory}`;
    
    if (confirm('Bạn có chắc chắn muốn xóa?')) {
      
        $.ajax({
            url: `/admin/category/${idCategory}`,
            type:'DELETE',
            data:{
               _token:_token
            },
            success:function(response){
              loadList();
            }
        })
    }
    
  }
</script>
  


@endsection



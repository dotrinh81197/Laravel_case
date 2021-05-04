@extends('layout.admin')

@section('content_dashboard')
<div class="container content_dashboard">
    <h1>TẠO MỚI SẢN PHẨM</h1>
  <form action="{{route('product.store')}}"  method="post" enctype="multipart/form-data" style="font-size: 15px;">
    @csrf
    <div class="row">
        @if ($errors->any())
        <div class="alert alert-danger col-md-6">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    
  
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="">Tên sản phẩm</label>
        <input type="text" class="form-control" name="product_name" id=""  >
        
      </div>
      
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="">Thể loại sản phẩm</label>
            <select class="custom-select custom-select-lg" name="category">
                <option  selected>Chọn thể loại</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-row">
        <label for="inputAddress2">Giới thiệu sản phẩm</label>
    </div>
    <div>
          <textarea name="title" id="summernote" cols="100" rows="10" ></textarea>      
    </div>
    <div class="form-row">
      <label for="inputAddress2">Quyền lợi</label>
    </div>
     <div>
        <textarea name="content_benefit" id="summernote1" cols="100" rows="10" ></textarea>      
     </div>
     <div class="form-row">
        <label for="inputAddress2">Thông tin chung</label>
     </div>
     <div>
          <textarea name="info" id="summernote2" cols="100" rows="10" ></textarea>      
     </div>
      
    
    <div class="form-row">
     
        <div class="form-group col-md-12 mb-2 ml-3">
            <h3>Ví dụ minh họa</h3>
           
            <img id="image_preview_container" src=""
                alt="preview image" style="max-height: 350px;">
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="file" name="illustration_image" placeholder="Choose image" id="image">
               
            </div>
        </div>
          
    </div>    
    <div class="form-row">
     
        <div class="form-group col-md-12 mb-2 ml-3">
            <h3>Hình ảnh sản phẩm</h3>
           
            <img id="image_preview_container2" src=""
                alt="preview image" style="max-height: 350px;">
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="file" name="product_image" placeholder="Choose image" id="image2">
               
            </div>
        </div>
          
    </div>   
    <button type="submit" class="btn btn-success btn-lg btn-submit">HOÀN THÀNH</button>

    </form> 

</div>

<script>
    $('#summernote').summernote({
      placeholder: '',
      tabsize: 2,
      height: 100
    });
    $('#summernote1').summernote({
      placeholder: '',
      tabsize: 2,
      height: 100
    });
    $('#summernote2').summernote({
      placeholder: '',
      tabsize: 2,
      height: 100
    });
    
    
</script>
<script type="text/javascript">
     
    $(document).ready(function (e) {
  
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
 
        $('#image').change(function(){
          
            let reader = new FileReader();
            reader.onload = (e) => { 
              $('#image_preview_container').attr('src', e.target.result); 
            }
            reader.readAsDataURL(this.files[0]); 
 
        });

        $('#image2').change(function(){
          
          let reader = new FileReader();
          reader.onload = (e) => { 
            $('#image_preview_container2').attr('src', e.target.result); 
          }
          reader.readAsDataURL(this.files[0]); 

      });
 
        $('#upload_image_form').submit(function(e) {
            e.preventDefault();
 
            var formData = new FormData(this);
 
            $.ajax({
                type:'POST',
                url: "{{ url('save-photo')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    this.reset();
                    alert('Image has been uploaded successfully');
                },
                error: function(data){
                    // console.log(data);
                }
            });
        });
    });

     
    
 
</script>
@endsection

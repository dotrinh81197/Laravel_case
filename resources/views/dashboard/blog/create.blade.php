@extends('layout.admin')

@section('content_dashboard')
<div class="container content_dashboard">
    <h1>TẠO BÀI VIẾT SẢN PHẨM :  {{$product->name}}</h1>
  <form action="{{route('blog.store', $product->id )}}"  method="post" enctype="multipart/form-data" style="font-size: 15px;">
    @csrf
    <input type="hidden"  name="product_id" value="{{$product->id}}">
    <div class="form-row">
      <label for="inputAddress2">Giới thiệu sản phẩm</label>
    </div>
     <div>
        <textarea name="title" id="summernote" cols="100" rows="10" ></textarea>      
     </div>
    
    <div class="form-row">
     
        <label for="inputAddress2">Nội dung bài viết</label>
    </div>
     <div>
        <textarea name="content" id="summernote2" cols="100" rows="50" ></textarea>      
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

    $('#summernote2').summernote({
      placeholder: 'Nội dung bài viết',
      tabsize: 2,
      height: 100
    });
    
</script>
{{-- <script type="text/javascript">
     
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
 
</script> --}}
@endsection

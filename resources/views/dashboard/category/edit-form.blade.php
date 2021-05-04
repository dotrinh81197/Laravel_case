<form id="categoryEditFrom" >
    @csrf
    @method('PUT')
  <div class="form-groupfont-size-large ">
    <input type="hidden" id="id" name="id" >
    <label for="category_name" class="col-form-label">Tên thể loại</label>
    <input type="text" class="form-control" id="category_name1" name="category_name" value="{{$category->name}}" >
  </div>
  
<button type="button" onclick="submitEdit({{$category->id}})" class="btn btn-primary"  > Hoàn tất </button>

</form>
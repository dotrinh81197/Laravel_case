<div class="py-6 home-consultant container">
      <div class="col-md-8 home-consultant__right"> 
    <form action="{{route('save_consultation')}}" method="post">
      @csrf
      <div class="contact-form">
        <div class="col-md-6">
          <div class="form-group">
            <label for="">Họ và tên  <span class="text-required">*</span></label>
            <input type="text" class="form-control" id="" name="name" aria-describedby="texthelp" value="{{$consultation->name}}">
          </div>
          <div class="form-group">
            <label for="">Email <span class="text-required">*</span></label>
            <input type="email" class="form-control" id="" name="email" aria-describedby="emailHelp" value="{{$consultation->email}}">
          </div>
          
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="">Số điện thoại <span class="text-required">*</span></label>
            <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="phone" value="{{$consultation->phone}}">
          </div>
          <div class="form-group">
            <label for=""> Mã Tỉnh/thành phố <span class="text-required">*</span></label>
            <select class="custom-select" name="calc_shipping_provinces" required="">
              <option value="{{$consultation->province}}">{{$consultation->province}}</option>
            </select>
            
            <input class="billing_address_1" name="" type="hidden" value="">
          </div>
          
        </div>
        
      </div> 



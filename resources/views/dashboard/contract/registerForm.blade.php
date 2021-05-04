 <h1>FORM ĐĂNG KÝ </h1>
    <form action="">

        @csrf
       
        <div class="form">
       
        <div class="form-content">
            <input type="hidden" id="contract_id" name="contract_id" value="{{$contract_id}}">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" id="user_name" class="form-control" name="user_name" placeholder="Your Name *" value=""/>
                    </div>
                   
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="email"  id="user_email" class="form-control" name="user_email" placeholder="Your Email*" value=""/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="password" id="user_password" class="form-control" name="user_password" placeholder="Your Password *" value=""/>
                    </div>
                   <input type="hidden" id="user_roles" value="3">
                </div>
            </div>
           
            <button type="button" onclick="submitRegister()" class="btnSubmit">Submit</button>
        </div>
    </div>
    </form> 
    



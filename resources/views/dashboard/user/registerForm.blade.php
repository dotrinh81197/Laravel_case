<div class="container register-form">
    <form >
        @csrf
        <div class="form">
       
        <div class="form-content">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="user_name"  placeholder="Your Name *" value=""/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="user_email" placeholder="Your Email*" value=""/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="password" class="form-control" id="user_password"  placeholder="Your Password *" value=""/>
                    </div>
                    <input type="hidden" id="user_roles" value="1">
                </div>
            </div>
            @if ($errors->any())
            @foreach($errors->all() as $nameError)
                <p style="color:red">{{ $nameError }}</p>
            @endforeach
            @endif
            <button type="button" onclick="submitRegister()" class="btnSubmit">Submit</button>
        </div>
    </div>
    </form>
    
</div>
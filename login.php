<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 mx-auto shadow-lg p-3">
    <h3 class="text-center">Login Form</h3>
    <hr class="border w-50 border-dark mx-auto">
    

    <form method="post" name="frm" 
    onsubmit="return validation(this.value)">
        <div class="form-group mt-3">
        <label>Email</label>
        <input type="email" name="txt_email" placeholder="Enter email *" class="form-control" required>
        </div> 
        <div class="text-danger" id="em-error"></div>
        

        
        <div class="form-group mx-auto mt-3">
        <label>Password</label>
        <input type="password" name="txt_pass" placeholder="Enter Password *" class="form-control" required>
        </div> 
        <div class="text-danger" id="pass-error"></div>
        
       

       <div class="form-group mt-3">
        <input type="submit" name="log" value="login" class="btn btn-success btn-sm px-3 mx-2"/>
        <a class="forget" href="<?php echo $mainurl;?>forgetpassword">Forget Password ?</a>
       </div>

       
       <div class="form-group text-center mx-auto mt-3">
        <b>Dont have an account ?<a href="<?php echo $mainurl;?>register">Create your account</a></b>
       </div>
       </div>
    </form>
    </div>
 
</div>

<script>
    function book()
    {
        alert('login first for booked your table')
        window.location='login';
    }
</script>
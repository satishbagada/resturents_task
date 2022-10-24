<style>
    .form-control
    {
        border: none;
        border-radius:1px ;
        border-bottom: 1px solid blue;
    }
</style>
<div class="container mt-5">
    <h3 class="text-center">Register Form</h3>
    <hr class="border w-25 border-dark mx-auto">
    
    
    <form method="post" name="frm" 
    onsubmit="return validation(this.value)">
    <div class="col-md-4 mx-auto mt-3">    
        <div class="form-group">
        <label>FirstName</label>
        <input type="text" name="txt_fname" placeholder="Enter Firstname *" class="form-control">
        </div> 
        <div class="text-danger" id="error"></div>
        </div>

        <div class="col-md-4 mx-auto mt-3">    
        <div class="form-group">
        <label>LastName</label>
        <input type="text" name="txt_lname" placeholder="Enter lastname *" class="form-control">
        </div> 
        <div class="text-danger" id="lerror"></div>
        </div>

        <div class="col-md-4 mx-auto mt-3">    
        <div class="form-input mx-3">
        <label class="me-2" style="font-weight: bold;">select Gender</label>
        male<input type="radio" name="txt_radio" class="form-input-check mx-2" value="Male">
        female<input type="radio" name="txt_radio" class="form-input-check mx-2" value="female">
        </div> 
        </div>


        <div class="col-md-4 mx-auto mt-3">    
        <div class="form-group">
        <label>Email</label>
        <input type="text" name="txt_email" placeholder="Enter email *" class="form-control">
        </div> 
        <div class="text-danger" id="em-error"></div>
        </div>

        <div class="col-md-4 mx-auto mt-3">    
        <div class="form-group">
        <label>Password</label>
        <input type="password" name="txt_pass" placeholder="Enter Password *" class="form-control">
        </div> 
        <div class="text-danger" id="pass-error"></div>
        </div>
       

       <div class="form-group text-center mx-auto mt-3">
        <button type="submit" name="reg"  class="btn btn-success btn-sm">Register</button>
        <button type="reset" name="res"  class="btn btn-danger btn-sm">Reset</button>
        
       </div>

       
       <div class="form-group text-center mx-auto mt-3">
        <b>Dont have an account ?<a href="<?php echo $mainurl;?>login">Login here</a></b>
       </div>
    </form>
 
</div>

<script>
    function book()
    {
        alert('login first for booked your table')
        window.location='login';
    }
</script>
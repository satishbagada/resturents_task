<section>
    <div class="container-fluid mt-5">
        <h2 class="text-success">Update Your profile <i class="bi bi-person"></i></h2>
        <hr class="border border-2 border-success">
        <div class="row">
            <div class="col-md-5">
                <img src="<?php echo $baseurl?>profile.gif" class="img-fluid" alt="not found">
            </div>
            <div class="col-md-5">
                <form method="post">
                    <div class="form-group mt-3">
                        
                        <input type="text" name="fname" placeholder="enter your firstname" value="<?php echo $show[0]['text_fname'];?>" class="form-control">
                    </div>

                    <div class="form-group mt-3">
                        <input type="text" name="lname" placeholder="enter Your lastname" value="<?php echo $show[0]['text_lname'];?>" class="form-control">
                    </div>

                    <div class="form-input mt-3 d-flex">
                        male<input type="radio" name='gander' class="form-input-check mx-3" value="male">
                        female<input type="radio" name='gander' class="form-input-check mx-3" value="female">
                    </div>

                    <div class="form-group mt-3">
                        <input type="email" name="em" placeholder="enter your email address" value="<?php echo $show[0]['text_email'];?>" class="form-control">
                    </div>

                <div class="form-group mt-3">
                    <input type="submit" name="update_btn" value="Update" class="btn btn-success">
                </div>      

                </form>
            </div>
        </div>
    </div>
</section>
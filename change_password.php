<section>
    <div class="container-fluid mt-5  mx-auto">
    <h3 class="text-success">change your password !</h3>
                 <hr class="border border-2 border-success mx-auto">
        <div class="row">
             <!-- <div class="col-md-3">
                <img src="" alt="not found" class="img-fluid" style="border-right:2px solid gray;height:auto">
            </div> -->
            <div class="col-md-4 mx-auto">
                <div class="card px-2 shadow-lg">
                    <div class="card-title mx-auto my-0">
                    <img src="<?php echo $baseurl;?>change.gif" alt="not fouund" class="text-center" style="height:100px;width:100%">
                    </div>
                    <div class="card-body">
                <form method="post">
                    <div class="form-group mt-3">
                        <input type="text" name="txt_opass" class="form-control" placeholder="old password" required>
                    </div>

                    <div class="form-group mt-3">
                        <input type="text" name="txt_npass" class="form-control" placeholder="new password" required>
                    </div>

                    <div class="form-group mt-3">
                        <input type="text" name="txt_cpass" class="form-control" placeholder="confirm password" required>
                    </div>

                    <div class="form-group mt-3">
                        <input type="submit" value="Submit" name="change_btn" class="btn  btn-danger">
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
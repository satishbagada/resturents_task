
    <div class="container mt-5">
    <h3 class="text-center">Book Your table</h3>
    <hr class="border w-25 border-dark mx-auto">
    
    <form method="post" name="frm">
       <div class="row">
        <div class="col-md-3 mx-auto mt-3">    
        <div class="form-group">
        <label>Select option</label>
        <select id="book_option" name="book-option" class="form-select"
        onchange="return ">
       <option value="">-select option-</option>
       <?php 
       foreach($book as $book1){?>
       <option value="<?php echo $book1['id'];?>"><?php echo $book1['days_type'];?></option>
        <?php
       }
       ?>
        </select>
        </div> 
        </div>

        <div class="col-md-3 mx-auto mt-3">    
            <div class="form-group">
            <label id="daytime">- Date & time-
            </label>            
            </div> 
            </div>
       
       <?php 
       if(isset($_SESSION['registration_id'])){
       ?>
       <div class="form-group text-center mx-auto mt-3">
        <input type="submit" name='sub' id="submit" class="btn btn-success btn-sm" value='Book Your table now >>'>
      <?php }else{?>
        <div class="form-group text-center mx-auto mt-3">
        <button type="button" value="Book your table now >>" class="btn btn-success" onclick="return book()">Book Your table now >></button>
        </div>
        <?php }?>
    
       </div>
       </div>
    </form>
<script>
    function book(){
        alert('login first for booked your table');
        window.location='login';
    }
   
</script> 
</div>


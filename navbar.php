<?php
$mainurl="http://localhost/function/resturents-task/";
$baseurl="http://localhost/function/resturents-task/assets/"; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Resturents booking systems</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo $baseurl;?>css/style.css" rel="stylesheet">
     <!-- ----------icon cdn----------------- -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo $baseurl;?>js/valid.js"></script>
    <!-- ------jquery cdn link------------------- -->
    <script
			  src="https://code.jquery.com/jquery-3.6.1.min.js"
			  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
			  crossorigin="anonymous"></script>
<script>
    // function myfunction(){
    // var d=document.getElementById("book_option");
    //     var distext=d.options[d.selectedIndex].text;
    //     document.getElementById('daytime').value=distext;
</script>
    <script>
   $(document).ready(function () {
    $("#submit").click(function(){
        var sp=$("#book_option");
        if(sp.val()===""){
          alert("plese select any one option");
          return false;
        }
      });
    function show(){
    $("#book_option").change(function () {
        var val = $(this).val();
           if (val == "1") {
            $("#daytime").html("<select class='form-select' name='names'><?php foreach($half as $half1){?><option value='<?php echo $half1['hid'];?>'><?php echo $half1['day_name'];?></option><?php }?></select>");
        } else if (val == "2") {
            $("#daytime").html("<input type='date' name='names' class='form-control' style='border:1px solid gray;border-radius:4px;width:225px'>");

        } else if (val == "3") {
            $("#daytime").html("<input type='datetime-local' name='names' class='form-control' style='border:1px solid gray;border-radius:4px;width:225px'>");
        } 
    });
  }
  show();
});

</script>
</head>
<body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white p-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo $mainurl;?>">Resturants Booking</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-pills  ">
              <li class="nav-item">
                <a class="nav-link active bg-danger" aria-current="page" href="<?php echo $mainurl;?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $mainurl;?>">AboutUs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"
               href="<?php echo $mainurl;?>booking-order">Booking Table</a>
              </li>
              <?php 
              if(!isset($_SESSION["registration_id"]))
              {
?>        
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  MyAccount
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a  href="<?php echo $mainurl;?>register">SignUp</a></li>
                  <li><a  href="<?php echo $mainurl;?>login">SignIn</a></li>
             
                </ul>
              </li>
              <?php
              }else
              {
                ?>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                  welcome:&nbsp&nbsp<?php echo $_SESSION["fname"];?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                  <li><a class="nav-link" href="<?php echo $mainurl;?>my_order">my order</a></li>
                  <li><a class="nav-link" href="<?php echo $mainurl;?>change-password">change password</a></li>

                  <li><a  class="btn btn-sm btn-danger text-center"
                  href="<?php echo $mainurl;?>?logout" onclick="return confirm('Are you sure to logout as Customer ')">
                  logout<i class="bi bi-power"></i></a></li>
                 </ul>
              </li>


                <?php
              }
              ?>
            
            </ul>
          
          </div>
        </div>
      </nav>
</body>
</html>
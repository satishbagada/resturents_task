<?php 
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {

        parent:: __construct();

        //create account in customer
        if(isset($_POST['reg'])){
            $fname=$_POST['txt_fname'];
            $lname=$_POST['txt_lname'];
            $gen=$_POST['txt_radio'];
            $email=$_POST['txt_email'];
            $pass=base64_encode($_POST['txt_pass']);
            $data=array("text_fname"=>$fname,"text_lname"=>$lname,"text_gander"=>$gen,"text_email"=>$email,"text_password"=>$pass);
            $chk=$this->insert_data('register_tbl',$data);
            if($chk){
                echo "<script>
                confirm('You are register successfully')
                window.location='login'
                </script>";
            }
        }
        //login as register customer here
        if(isset($_POST['log'])){
            $em=$_POST['txt_email'];
            $pass=base64_encode($_POST['txt_pass']);
            $chk=$this->login_customer('register_tbl',$em,$pass);
            if($chk){
                echo "<script>
                alert('you are logged in successfully')
                window.location='./'
                </script>";
            }else
            {
                echo "<script>
                alert('your email and password does not match try again');
                window.location='login'
                </script>";
            }
        }
        //logout here
        if(isset($_GET['logout'])){
        
            $log=$this->logout();
            if($log){
                $rid=$_SESSION['registration_id'];
                $this->deletedata('register_tbl',$rid);
                echo "<script>
                alert('Your logged out successfully')
                window.location='./'
                </script>";
            }
        }
        //forget password
        if(isset($_POST['frg'])){
            $email=$_POST['txt_email'];
            $chk=$this->forget_password('register_tbl',$email);
            if($chk){
                echo "<script>
                alert('your password is '+' '+'$chk');
                window.location='login'
                </script>";
            }else
            {
                echo "<script>
                alert('your email address does not exit with us try again');
                window.location='forgetpassword'
                </script>";
            }
        }
        
        //change password here
        if(isset($_POST['change_btn'])){
            $reg_id=$_SESSION['registration_id'];
            $opass=base64_encode($_POST['txt_opass']);
            $npass=base64_encode($_POST['txt_npass']);
            $cpass=base64_encode($_POST['txt_cpass']);
            $chk=$this->change_password('register_tbl',$opass,$npass,$cpass,$reg_id);
            if($chk){
                echo "<script>
                alert('Your change password successfully.')
                window.location='./'
                </script>";
            }else
            {
                echo "<script>
                alert('Your old password new password and confirm password does note match try again.')
                window.location='change-password'
                </script>";
            }
        }

        //selectdata in book_table here
        
        $book=$this->select_data("book_table");
        $half=$this->half_selectdata('half_day');

        //show data in book table here
        if(isset($_SESSION['registration_id'])){
            $show=$this->selectalldata('register_tbl','book_table','register_tbl.hid=book_table.id');
        }

        //detete account here
        // if(isset($_SESSION['registration_id'])){
        //     $regi=$_SESSION['registration_id'];
        //     $chk=$this->delete_account('register_tbl',$regi);
        //     if($chk){
        //       echo "<script>
        //       confirm('your sure to delete account')
              
        //       </script>";
        //     }
        //   }


        
        if(isset($_POST['sub'])){
            $sid=$_SESSION['registration_id'];
            $option=$_POST['book-option'];
            $daytime=$_POST['names'];
            $rdate=date("d/m/Y");
            // $data=array("hid"=>$option,"bid"=>$daytime);
        $chk=$this->insertalldata('register_tbl',$option,$daytime,$rdate,$sid);
            if($chk){
                echo "<script>
                confirm('Your book table successfully')
                </script>";
            }
        }
        //update data in booking order here
        if(isset($_POST['update_btn'])){
            $rid=$_SESSION['registration_id'];
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $em=$_POST['em'];
            $gen=$_POST['gander'];
            //$data=array("text_fname"=>$fname,"text_lname"=>$lname,"text_email"=>$em,"text_gander"=>$gen);
            $chk=$this->updateprofile('register_tbl',$fname,$lname,$em,$gen,$rid);
            if($chk){
                echo "<script>
                alert('Your profile updated successfully');
                window.location='booking-order'
                </script>";
            }
        }
        // load your ui or design here
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("content.php");
                    require_once("footer.php");
                    break;
                case '/login':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("login.php");
                    require_once("footer.php");
                    break;
                case '/register':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("register.php");
                    require_once("footer.php");
                    break;

                    case '/forgetpassword':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("forgetpassword.php");
                    require_once("footer.php");
                    break;

                    case '/change-password':
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("change_password.php");
                        require_once("footer.php");
                        break;

                    case '/booking-order':
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("book_order.php");
                        require_once("footer.php");
                        break;

                    case '/manage-profile':
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("manage_profile.php");
                        require_once("footer.php");
                        break;

                  default:
                  require_once("index.php");
                  require_once("navbar.php");
                  require_once("404.php");
                  require_once("footer.php");
                  break;
            }
        }
    }
}
$obj=new controller;
?>
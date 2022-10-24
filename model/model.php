<?php 
class model 
{
    public $connection="";
    public function __construct()
    {
        session_start();
        try 
        {
            $this->connection=new mysqli("localhost","root","","resturents_task");
            // echo "database connect successfully";
        }
        catch(Exception $e)
        {
            die(mysqli_error($this->connection,$e));
        }
    }
    //member function in register account
    public function insert_data($table,$peram){
        $arr=array_keys($peram);
        $key=implode(",",$arr);

        $arr1=array_values($peram);
        $value=implode("','",$arr1);
        $query="INSERT INTO $table($key) value('$value')";
        $exe=mysqli_query($this->connection,$query);
        return $exe;

    }
    //member function in booke table here
    public function insertalldata($table,$option,$daytime,$rdate,$sid){
        // $key=array_keys($data);
        // $key1=implode(",",$key);
        // $value=array_values($data);
        // $value1=implode("','",$value);
        $up="UPDATE $table SET hid='$option',date='$daytime',time='$rdate' WHERE regi_id='$sid'";
        $exe=mysqli_query($this->connection,$up);
        return $exe;

    }
    //member function of login customer here
    public function login_customer($table,$em,$pass){

        $query="SELECT * from $table WHERE text_email='$em' AND text_password='$pass'";
        
        $exe=mysqli_query($this->connection,$query);
        $fetch=mysqli_fetch_array($exe);
        $tot=mysqli_num_rows($exe);
        if($tot==1){
            $_SESSION['fname']=$fetch['text_fname'];
            $_SESSION['registration_id']=$fetch['regi_id'];
            $_SESSION['email_id']=$fetch['text_email'];
            return true;
        }else
        {
            return false;
        }
    }

    //member function of forgate password here
    public function change_password($table,$opass,$npass,$cpass,$rid){

        $query="SELECT * FROM $table where regi_id='$rid'";
        $exe=mysqli_query($this->connection,$query);
        // $tot=mysqli_num_rows($exe);
        $fetch=mysqli_fetch_array($exe);

            $pass=$fetch['text_password'];
            if($pass==$opass && $npass==$cpass){
                $query1="UPDATE $table SET text_password='$npass' WHERE regi_id='$rid'";
                mysqli_query($this->connection,$query1);
                return true;

            }else{
                return false;
            }
  }
    //member function of change password password here
    public function forget_password($table,$em){
        $query="SELECT text_password FROM $table where text_email='$em'";
        $exe=mysqli_query($this->connection,$query);
        $fetch=mysqli_fetch_array($exe);
        $tot_row=mysqli_num_rows($exe);
        if($tot_row==1){
            $pass= base64_decode($fetch['text_password']);
            return $pass;
        }else
        {
            return false;
        }
        
        
    }
    //member function of logout the customer here
    public function logout(){
        unset($_SESSION['registration_id']);
        unset($_SESSION['fname_id']);
        unset($_SESSION['email_id']);
        session_destroy();
    }
    //meber function in select order
    public function select_data($table){
        $query="SELECT * FROM $table";
        $exe=mysqli_query($this->connection,$query);
        while($row=mysqli_fetch_array($exe)){
            $arr[]=$row;
            }
        return $arr;
        
    }
    public function selectalldata($table,$table1,$where){
        $sel="SELECT * FROM $table join $table1 on $where";
        $exe=mysqli_query($this->connection,$sel);
        $fetch=mysqli_fetch_array($exe);
        $arr[]=$fetch;
        return $arr;
    }

    //half day select
    public function half_selectdata($table)
    {
        $query ="select * from $table";
        $exe=mysqli_query($this->connection,$query);
        while($row=mysqli_fetch_array($exe))
        {
            $arr[]=$row;
        }
        return $arr;
    }

    //update profile here
    public function updateprofile($table,$fname,$lname,$em,$gen,$rid){
    $up="UPDATE $table SET text_fname='$fname',text_lname='$lname',text_email='$em',text_gander='$gen' where regi_id='$rid'";
    // exit();
        $exe=mysqli_query($this->connection,$up);
        return $exe;
    }

    //member function of delete account in custome
    public function deletedata($table,$regi){
        $query="DELETE FROM $table where regi_id='$regi'";
        
        $exe=mysqli_query($this->connection,$query);
        return true;
      }
        
}
?>
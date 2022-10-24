function validation(){
    if(document.frm.txt_fname.value==""){
        document.getElementById("error").innerHTML="plese fill your firstname";
        document.frm.txt_fname.focus();
        return false;
    }else{
        document.getElementById("error").innerHTML="";
    }
    var f=/^[A-Za-z]+$/;
    if(!f.test(document.frm.txt_fname.value)){
        document.getElementById("error").innerHTML="plese fill your firstname alphabetic character Only";
        document.frm.txt_fname.focus();
        return false;
    }
    else{
        document.getElementById("error").innerHTML="";
    }
    
//lastname validation here....
    if(document.frm.txt_lname.value==""){
        document.getElementById("lerror").innerHTML="plese fill your lastname";
        document.frm.txt_lname.focus();
        return false;
    }
    else{
        document.getElementById("lerror").innerHTML="";
    }

    if(!f.test(document.frm.txt_lname.value)){
        document.getElementById("lerror").innerHTML="plese fill your lastname alphabetic character Only";
        document.frm.txt_lname.focus();
        return false;
    }
    else{
        document.getElementById("lerror").innerHTML="";
    }

    if(document.frm.txt_email.value==""){
        document.getElementById("em-error").innerHTML="plese fill your email";
        document.frm.txt_email.focus();
        return false;
    }
    else{
        document.getElementById("em-error").innerHTML="";
    }

    var em=/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    if(!em.test(frm.txt_email.value)){
    document.getElementById("em-error").innerHTML="plse enter valid email address";
    document.frm.txt_email.focus();
    return false;
 }
 else{
    document.getElementById("em-error").innerHTML="";
 }

 if(document.frm.txt_pass.value==""){
    document.getElementById("pass-error").innerHTML="plese fill your password";
    document.frm.txt_pass.focus();
    return false;
}
else{
    document.getElementById("pass-error").innerHTML="";
}

 var red=document.frm.txt_radio;
  for(i=0;i<2;i++){
     if(red[i].checked==true){
         return true;
     }else
     {
         alert('plese select any one persion');
         return false;
     }
  }

 
}
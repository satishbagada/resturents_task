<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script
			  src="https://code.jquery.com/jquery-3.6.1.min.js"
			  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
			  crossorigin="anonymous"></script>
              <script>
                function myfunction(){
                    var a=document.getElementById("select_option");
                    
                }
        </script>
		

</head>
<body>
    <div class="container">
        <div class="row">
            <form name="frm" method="post">
            <div class="col form-group mt-3">
                <select name="select_option" id="select_option" class="form-select w-50" onchange="return myfunction(this.value);">
                    <option value="123">-select option-</option>
                    <option value="1">-half option-</option>
                    <option value="2">-full day-</option>
                    <option value="3">-custom day-</option>
                </select>
            </div>

            <div class="col form-group mt-3">
                <select name="day_time" id="day_time" class="form-select w-50">
                    <option value="123">-select option-</option>
                </select>
            </div>
                
            </form>
        </div>
    </div>
    <script>
       function afunction(){
        // var d=document.getElementById("select_option");
        // var distext=d.options[d.selectedIndex].text;
        // document.getElementById('day_time').innerHTML=distext;

        // document.getElementById("day_time").innerHTML=
        // frm.select_option[frm.select_option.selectedIndex].text;

        var a=document.getElementById("select_option").value;
        document.getElementById("day_time").value=a;
        

    }
    </script>
</body>
</html>
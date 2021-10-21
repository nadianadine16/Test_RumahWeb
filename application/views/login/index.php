<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$judul?></title>    
</head>
<body>
    <form action="<?=base_url('Admin/index')?>" style="margin-top : 10%" name="form1" onsubmit="return validasi_input(this)">
    <div class="form-group col-md-12">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">        
    </div>
    <div class="form-group col-md-12">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password" autocomplete="off">
    </div>
    <div class="form-group col-md-12">
        <label class="control-label" for="date">Date</label>
        <input class="form-control" id="datepicker" name="datepicker" placeholder="MM/DD/YYY" type="text"autocomplete="off">
    </div>
    <Center><button type="submit" class="btn btn-primary">Submit</button></center>
    </form>
</body>
</html>
<!-- ------ -->

<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- ----- -->
<script>
    $( function() {
        $("#datepicker").datepicker({
            
    });
    });    
</script>

<script type="text/javascript">
function validasi_input(form){
    var mailformat = /([a-zA-Z0-9]+)([\.{1}])?([a-zA-Z0-9]+)\@rumahweb([\.])co([\.])id/g;  
    var str = document.getElementById('password').value;
    var count = (str.match(/\d/g) || []).length;    

    var date = document.getElementById('datepicker').value;
 	
		var today = new Date();
		var birthday = new Date(date);
		var year = 0;
		if (today.getMonth() < birthday.getMonth()) {
			year = 1;
		} else if ((today.getMonth() == birthday.getMonth()) && today.getDate() < birthday.getDate()) {
			year = 1;
		}
		var age = today.getFullYear() - birthday.getFullYear() - year;
 
		if(age < 0){
			age = 0;
		}
	var hasil = age;

    if(!document.form1.email.value.match(mailformat))
    {
        alert("You have entered an invalid email address!");
        document.form1.email.focus();
        return false;
    }
    else if(document.form1.password.value.length < 12){
        alert("Panjang password minimal 12");
        document.form1.password.focus();
        return false;
    }
    else if (str.search(/\d/) == -1) {
        alert("Password harus memiliki angka");
        document.form1.password.focus();
        return false;
    }
    else if(!/[a-z]/.test(document.form1.password.value)){
        alert("Password harus setidaknya 1 huruf kecil");
        document.form1.password.focus();
        return false;
    }
    if(!/[A-Z]/.test(document.form1.password.value)){
        alert("Password harus setidaknya 1 huruf besar");
        document.form1.password.focus();
        return false;
    }
    else if (count < 2) {
        alert("Password harus memiliki minimal 2 angka");
        document.form1.password.focus();
        return false;
    }   
    else if(hasil < 17){
        alert("Umur minimal 17");        
        return false;
    }
    alert("Lolos");    
    return true;
}
</script>
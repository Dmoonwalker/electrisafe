<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bootstrap Template Atlas</title>
    <meta name="description" content="Free bootstrap template Atlas">
    <link rel="icon" href="img/logo.png" sizes="32x32" type="image/png">
    <!-- custom.css -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- font-awesome -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    
    <!-- AOS -->
    <link rel="stylesheet" href="css/aos.css">
</head>

<body>
    <!-- banner -->
    <div class="jumbotron jumbotron-fluid" id="banner" style="background-image: url(img/pole.jpg);">
        <div class="container text-center text-md-left">
            <header>
                <div class="row justify-content-between">
                    <div class="col-2">
                        <img src="img/logo.png" alt="logo">
                    </div>
                    <div class="col-6 align-self-center text-right">
                        <a href="#contact" class="text-white lead">Get Early Access</a>
                    </div>
                </div>
            </header>
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 text-white font-weight-bold my-5">
            	A New Way<br>
            	To Secure Electric Grid
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white my-4">
              
            </p>
            <a href="#contact" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">Get Started</a>
        </div>
    </div>
    <!-- three-blcok -->
    <div class="container my-5 py-2">
        <h2 class="text-center font-weight-bold my-5">Smartest protection for your Electric Pole</h2>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="img/smart-protect-1.jpg" alt="Anti-spam" class="mx-auto">
                <h4>Manufacturer Tracking</h4>
                <p>Track and Identify Poles on any Grid</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="img/smart-protect-2.jpg" alt="Phishing Detect" class="mx-auto">
                <h4>Bad Poles Detection</h4>
                <p>Identify Manufacturers of bad poles</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="img/smart-protect-3.jpg" alt="Smart Scan" class="mx-auto">
                <h4>Smart Scan</h4>
                <p>Real Time Scanning</p>
            </div>
        </div>
    </div>
  <!-- feature (green background) -->
    <div class="spinner" id="success" hidden>
    <div class="success-text center-block d-flex align-items-center justify-content-center" id="success-text"> </div>
    <div class="success-checkmark">
    
  <div class="check-icon" style="margin-bottom : 10px; z-index:-9999">
 
    <span class="icon-line line-tip"></span>
    <span class="icon-line line-long"></span>
    <div class="icon-circle"></div>
    <div class="icon-fix"></div>
    
    </div>
</div>


</div>
    <!-- contact -->
    <div class="jumbotron jumbotron-fluid" id="contact" style="background-image: url(img/contact-bk.jpg);">
        <div class="container my-5">
            <div class="row justify-content-between">
                <div class="col-md-6 text-white">
                    <h2 class="font-weight-bold">Register with  Us</h2>
                    <p class="my-4">
                        Please fill this Form to Join our Communnity
                        <br>
                    </p>
                    you can reach us out at
                    <ul class="list-unstyled">
                        <li>Email : company_email@com</li>
                        <li>Phone : 080-361-688-58</li>
                        <li>Address : Innov8 Hub airport Road, Abuja</li>
                    </ul>
                </div>
               <style>
/**
 * Extracted from: SweetAlert
 * Modified by: Istiak Tridip
 */
@media (min-width: 100px) and (max-width: 750.98px) {

    .success-text{
     
     top:75%;


     position: relative;
     color: #4CAF50;
     
    
}
.check-icon {
      
        top:30%;
}
}
   .success-text{
     
        top:60%;
 
   
        position: relative;
        color: #4CAF50;
        
       
   }
    .check-icon {
        width: 80px;
        height: 80px;
        top:50%;
        left: 45%;
        position: fixed;
        border-radius: 50%;
        box-sizing: content-box;
        border: 4px solid #4CAF50;
        
        &::before {
            top: 3px;
            left: -2px;
            width: 30px;
            transform-origin: 100% 50%;
            border-radius: 100px 0 0 100px;
        }
        
        &::after {
            top: 0;
            left: 30px;
            width: 60px;
            transform-origin: 0 50%;
            border-radius: 0 100px 100px 0;
            animation: rotate-circle 4.25s ease-in;
        }
        
        &::before, &::after {
            content: '';
            height: 100px;
            position: absolute;
            background: #FFFFFF;
            transform: rotate(-45deg);
        }
        
        .icon-line {
            height: 5px;
            background-color: #4CAF50;
            display: block;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            
            &.line-tip {
                top: 46px;
                left: 14px;
                width: 25px;
                transform: rotate(45deg);
                animation: icon-line-tip 0.75s;
            }
            
            &.line-long {
                top: 38px;
                right: 8px;
                width: 47px;
                transform: rotate(-45deg);
                animation: icon-line-long 1.0s;
            }
        }
        
        .icon-circle {
            top: -4px;
            left: -4px;
            z-index: 10;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            position: absolute;
            box-sizing: content-box;
            border: 4px solid rgba(76, 175, 80, .5);
        }
        
        .icon-fix {
            top: 8px;
            width: 5px;
            left: 26px;
            z-index: 1;
            height: 85px;
            position: absolute;
            transform: rotate(-45deg);
            background-color: #FFFFFF;
        }
    }


@keyframes rotate-circle {
    0% {
        transform: rotate(-45deg);
    }
    5% {
        transform: rotate(-45deg);
    }
    12% {
        transform: rotate(-405deg);
    }
    100% {
        transform: rotate(-405deg);
    }
}

@keyframes icon-line-tip {
    0% {
        width: 0;
        left: 1px;
        top: 19px;
    }
    54% {
        width: 0;
        left: 1px;
        top: 19px;
    }
    70% {
        width: 50px;
        left: -8px;
        top: 37px;
    }
    84% {
        width: 17px;
        left: 21px;
        top: 48px;
    }
    100% {
        width: 25px;
        left: 14px;
        top: 45px;
    }
}

@keyframes icon-line-long {
    0% {
        width: 0;
        right: 46px;
        top: 54px;
    }
    65% {
        width: 0;
        right: 46px;
        top: 54px;
    }
    84% {
        width: 55px;
        right: 0px;
        top: 35px;
    }
    100% {
        width: 47px;
        right: 8px;
        top: 38px;
    }
}
.spinner{
    position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  opacity: 0.9;
  background:  
              50% 50% no-repeat rgb(249,249,249);
}
         

.lds-ring {
  display: inline-block;
 margin-bottom: 50px;;
  width: 150px;
  height: 150px;
  position: fixed;
  color : #04aa6d;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    transform: -webkit-translate(-50%, -50%);
    transform: -moz-translate(-50%, -50%);
    transform: -ms-translate(-50%, -50%);
   
}
.lds-ring div {
  box-sizing: border-box;
  display: block;
  position: absolute;
  width: 64px;
  height: 64px;
  margin: 8px;
  border: 8px solid #04aa6d;
  border-radius: 50%;
  animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  border-color: #04aa6d transparent transparent transparent;
}
.lds-ring div:nth-child(1) {
  animation-delay: -0.45s;
}
.lds-ring div:nth-child(2) {
  animation-delay: -0.3s;
}
.lds-ring div:nth-child(3) {
  animation-delay: -0.15s;
}
@keyframes lds-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@media (min-width: 100px) and (max-width: 750.98px) {

.success-text{
 
 top:55%;


 position: relative;
 color: #4CAF50;
 

}
.check-icon {
    left: 40%;
    top:30%;
}
}

</style>
                <div class="col-md-6">
                    <form  id="registerForm">
                    	<div class="row">
                        <div class="lds-ripple"><div></div><div></div></div>
	                        <div class="form-group col-md-6">
	                            <label for="name">Your Company Name</label>
	                            <input type="name" class="form-control" id="companyName" name="companyName" required>
	                        </div>
	                        <div class="form-group col-md-6">
	                            <label for="Email">RC Number</label>
	                            <input type="text" class="form-control" name="rcNumber" id="rcNumber" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="message">Company Adress</label>
	                        <textarea class="form-control" id="companyAddress" name="companyAddress"  rows="2" required></textarea>
	                    </div>
                        <div class="form-group">
	                        <label for="message">ISO </label>
	                        <textarea class="form-control" id="iso" name="iso" rows="1" required></textarea>
	                    </div>
                        <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                        <button type="submit" id="registerSubmit"  class="btn font-weight-bold atlas-cta atlas-cta-wide cta-green my-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

	<!-- copyright -->
	<div class="jumbotron jumbotron-fluid" id="copyright">
        <div class="container">
            <div class="row justify-content-between">
            	<div class="col-md-6 text-white align-self-center text-center text-md-left my-2">
                    Copyright © 2024
                </div>
                <div class="col-md-6 align-self-center text-center text-md-right my-2" id="social-media">
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-medium" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- AOS -->
    <script src="js/aos.js"></script>
    <script src="js/jquery.js"></script>
    <script>
            let spinner = $('#spinner');
            let success = $('#success');
      AOS.init({
      });

      $(document).ready(function() {

       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                   });
               
        $('#registerForm').submit(function(e) {
        e.preventDefault();
       
        let form = $('#registerForm')[0];
        let formData = new FormData(form);
        var object = {};
        formData.forEach(function(value, key){
        object[key] = value;
        console.log(value);
        });
        var data = JSON.stringify(object);
        var delayInMilliseconds = 300; //1 second

setTimeout(function() {

    $.ajax({
                url:  '{{ env('ENDPOINT') }}',
                method: "post",
                data : data,
                processData : false,
                contentType:false,
                headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
                
        
            success: function(response) {
                let element = document.getElementById("success");
                let successText = document.getElementById("success-text");
                message = JSON.parse(response);
                successText.innerHTML = message.message;
                element.removeAttribute("hidden");
                success.show();    
          
           setTimeout(() => {
            
            success.hide();
           }, 5000);
               
                }
                        
            ,
            error: function(xhr, status, error) {
            
                alert('an error occured ' + error +  status);
            }
        
            });
    
    
}, delayInMilliseconds);

        });
 });

    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>E-Waste Management System </title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style type="text/css">
		label{color: white}
	</style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
            <img src="images/logo.jpg" alt="logo" style="height: 100px;width: 100px"/>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link active" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="about.html">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="services.html">Services</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Login
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="adminlog.php">ADMIN</a>
                        <a class="dropdown-item" href="faq.php">USER</a>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="contact.html">Contact</a>
                  </li>
               </ul>
            </div>
        </div>
    </nav>

	<!-- full Title -->
	<div class="full-title" style="height: 300px">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">
				<small></small>
			</h1>
		</div>
	</div>
	
    <!-- Page Content -->
    <div class="container">
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.html">Home</a>
				</li>
				<li class="breadcrumb-item active">FAQ</li>
			</ol>
		</div>

		<div class="faq-main" style="padding-left: 400px">
			<div class="" id="accordion" role="tablist" aria-multiselectable="true">
				
				   <form name="sentMessage" id="contactForm"  action="#" method="POST">
            <div class="control-group form-group">
              <div class="controls">
                <label>User Name:</label>
                <input type="email" class="form-inline" id="email_log" name="email_log">
                <p class="help-block"></p>
              </div>
            </div>
            
            <div class="control-group form-group">
              <div class="controls">
                <label>Password:</label>
                <input type="text" class="form-inline" id="password_log"  name="password_log'">
                <p id="log" style="color: red"></p>
              </div>
            </div>
            <input type="button" class="btn btn-primary" id="submit" value="Login" name="login">
          </form>

			</div>
		</div>

    </div>
    <!-- /.container -->

    <!--footer starts from here-->
    <footer class="footer">
        <div class="container bottom_border">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
					<!--headin5_amrc-->
					<p class="mb10">E-waste Recycling Solution is a social impact-oriented sustainable waste management company. Celebrating 5 years of Social Impact & Innovation for Sustainable E-Waste Management.</p>
					<p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
					<p><i class="fa fa-phone"></i> +91-9999878398 </p>
					<p><i class="fa fa fa-envelope"></i>info@e-wasterecycling.com</p>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
					<!--headin5_amrc ends here-->
					<ul class="footer_ul2_amrc">
						<li>
							<a href="#"><i class="fab fa-instagram fleft padding-right"></i> </a>
							<p>E-waste Recycling Solutions...<a href="#">https://www.e-wasterecycling.com/</a></p>
						</li>
						<li>
							<a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
							<p>E-waste Recycling Solutions...<a href="#">https://www.e-wasterecycling.com/</a></p>
						</li>
						<li>
							<a href="#"><i class="fab fa-facebook-f fleft padding-right"></i> </a>
							<p>E-waste Recycling Solutions...<a href="#">https://www.e-wasterecycling.com/</a></p>
						</li>
					</ul>
					<!--footer_ul2_amrc ends here-->
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
					<!--headin5_amrc-->
					<ul class="footer_ul_amrc">
						
						<li><a href="#">Our Team </a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Our Services</a></li>
						
					</ul>
					<!--footer_ul_amrc ends here-->
				</div>
				
			</div>
		</div>


        <div class="container">
            <div class="footer-logo" >
				<a href="#"><img src="images/logo.JPg" alt="" style="height: 50px;width: 50px" /></a>
			</div>
            <!--foote_bottom_ul_amrc ends here-->
            <p class="copyright text-center">All Rights Reserved. &copy; 2021 <a href="#">Technoesis IT Solutions</a> Design By : 
				<a href="https://html.design/">html design</a>
            </p>
            <ul class="social_footer_ul">
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
            <!--social_footer_ul ends here-->
        </div>
    </footer>
	  
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
$(document).ready(function() {
	
	$('#submit').on('click', function() {
		var email = $('#email_log').val();

		var password = $('#password_log').val();

		if(email!="" && password!="" )
		{
			$.ajax({
				url: "login.php",
				type: "POST",
				data: {
					type:2,
					email: email,
					password: password						
				},
				cache: false,
				success: function(dataResult)
				{
					var dataResult = JSON.parse(dataResult);
					 // document.write(dataResult.statusCode);
					
					if(dataResult.statusCode==200)
					{
						$('#email_log').val("");
						$('#password_log').val("");

						location.href = "services.php";

					}
					else if(dataResult.statusCode==201)
					{
											
						$("#log").html("Invalid EmailId or Password !");
						$('#email_log').val("");
						$('#password_log').val("");

					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
			}
	});
});
</script>

</body>
</html>


<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home Loan Application Form Responsive Widget Template :: w3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Home Loan Application Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="{{ asset('css/styleAddProduct.css') }}" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}" />
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=GFS+Neohellenic:400,400i,700,700i&amp;subset=greek" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
	<div class="center-container">
		<!--header-->
		<div class="header-w3l">
			<h1><a href="http://localhost:8080/project1">UPDATE STUDENT</a> </h1>
					</div>
		<!--//header-->
		<!--main-->
	<div class="agileits-register">
			{!! Form::open(['route'=>['student.update',$student->id],'method'=>'PUT']) !!}
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Họ tên :</span>
					<input type="text" name="name"  required="" value="{{ $student->hoten }}"/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Điểm toán :</span>
					<input type="number" name="toan" required="" value="{{ $student->toan }}"/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Điểm lý :</span>
					<input type="number" name="ly" required="" value="{{ $student->ly }}"/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Điểm hóa :</span>
					<input type="number" name="hoa" required="" value="{{ $student->hoa }}"/>
					<div class="clear"> </div>
				</div>
				<input type="submit" value="OK" />
				{!! Form::close() !!}
			</div>
		
		<!--//main-->
		
	</div>
	<!--footer-->
		<div class="footer">
			<h2>&copy; 2018 Home Loan Application Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></h2>
		</div>
		<!--//footer-->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- Calendar -->


</body>
</html>

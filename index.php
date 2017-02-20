<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Exchange Money</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="color.css" type="text/css" rel="stylesheet" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	</head>
	<body>
		<div class="container" style="padding-top:10px;">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingOne">
			      <h4 class="panel-title">
			        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			          THB -> USD
			        </a>
			      </h4>
			    </div>
			    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
			      <div class="panel-body">
			      	<form action="" method="POST" id="formUSD" name="formUSD" class="num">
			      		<div class="col-md-6">
			      			<input type="text" class="form-control USD num" name="USD" placeholder="กรอกจำนวนเงิน (บาท)" >
			      		</div>
			      		<div class="col-md-6">
			      			<div class="col-md-12 form-control" name="calculateUSD" id="calculateUSD" >ผลลัพธ์</div>
			      		</div>
			      		<div class="col-md-12" style="margin-top:15px;">
			      			<button id="btn" type="submit" name="submit">คำนวณ</button>
			      		</div>
			      	</form>
			      </div>
			    </div>
			  </div>
			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingTwo">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			          THB -> EUR
			        </a>
			      </h4>
			    </div>
			    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
			      <div class="panel-body">
			      	<form action="" method="POST" id="formEUR" name="formEUR" class="num">
			      		<div class="col-md-6">
			      			<input type="text" class="form-control EUR num" name="EUR" placeholder="กรอกจำนวนเงิน (บาท)" >
			      		</div>
			      		<div class="col-md-6">
			      			<div class="col-md-12 form-control" name="calculateEUR" id="calculateEUR">ผลลัพธ์</div>
			      		</div>
			      		<div class="col-md-12" style="margin-top:15px;">
			      			<button id="btn" type="submit" name="submit">คำนวณ</button>
			      		</div>
			      	</form>
			      </div>
			    </div>
			  </div>
			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingThree">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
			          THB -> JPY
			        </a>
			      </h4>
			    </div>
			    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			      <div class="panel-body">
			      	<form action="" method="POST" id="formJPY" name="formJPY" class="num">
			      		<div class="col-md-6">
			      			<input type="text" class="form-control JPY num" name="JPY" placeholder="กรอกจำนวนเงิน (บาท)" >
			      		</div>
			      		<div class="col-md-6">
			      			<div class="col-md-12 form-control" name="calculateJPY" id="calculateJPY">ผลลัพธ์</div>
			      		</div>
			      		<div class="col-md-12" style="margin-top:15px;">
			      			<button id="btn" type="submit" name="submit">คำนวณ</button>
			      		</div>
			      	</form>
			      </div>
			    </div>
			  </div>
			</div>
		</div>

		

		<script>
			//ฟังก์ชั่นให้พิมพ์ได้แต่เลข 0-9
			$(function() {
			  $('.num').on('keydown', '.num', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
			})
		</script>

		<script>
			//ฟังก์ชั่นคำนวณ
			$(document).ready(function()
			    {
					$('#formUSD').on('submit',function(e)
						{
							$.ajax(
								{
									url:'calculate.php',
									data:$(this).serialize(),
									type:'POST',
									success:function(data)
										{
											console.log(data);
											$('#calculateUSD').html(data);
										},
									
								});
							e.preventDefault();
						});
				});
			$(document).ready(function()
			    {
					$('#formEUR').on('submit',function(e)
						{
							$.ajax(
								{
									url:'calculate.php',
									data:$(this).serialize(),
									type:'POST',
									success:function(data)
										{
											console.log(data);
											$('#calculateEUR').html(data);
										},
									
								});
							e.preventDefault();
						});
				});
			$(document).ready(function()
			    {
					$('#formJPY').on('submit',function(e)
						{
							$.ajax(
								{
									url:'calculate.php',
									data:$(this).serialize(),
									type:'POST',
									success:function(data)
										{
											console.log(data);
											$('#calculateJPY').html(data);
										},
									
								});
							e.preventDefault();
						});
				});
			</script>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>
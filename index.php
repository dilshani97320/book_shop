 <html>
 <head><title>book shop</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<style>
	body{background-image: url("assets/img/front.jpg");background-size: cover};
</style>

 </head>
 <body>
 	


<div class="container">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

			<div class="card my-5">
				<div class="card-body">
			<h5 class="text-center mx-2">BOOK SHOP</h5>
			<form class="form" action="" role="form"
			method="post" >
			<div class="my-3">
			<input type="text" id="username" name="username" class="form-control" placeholder="username">
		</div><!--usename-->

		<div class="my-3">
			<input type="password" id="password" name="password" class="form-control" placeholder="password">
		</div><!--password-->

		<div class="my-3">
			<button id="buttonlogin" class="btn btn-success btn-block text-uppercase">Login</button>
		</div><!--button-->
			 <h6>Enter your username & password here..</h6>
				
			</form>

				</div><!--card-body-->
			</div><!--card-->

		</div><!--col-sm-9 col-md-7 col-lg-5 mx-auto-->
	</div><!--row-->



	
</div><!--container-->






 

 

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>
	//$('#username').val('hello world');
//button click
$('#buttonlogin').click(function()
{
	checkVlidation();

});
//end ofbutton click
	 function checkVlidation(callback){

	 	if($('#username').val().length==0){
	 		alert('username may not be empty');
	 		return false;
	 	}
	 	if($('#password').val().length==0){
	 		alert('password may not be empty');
	 		return false;
	 	}
	 } 

	 //end of validation


</script>

</body>


 </html>

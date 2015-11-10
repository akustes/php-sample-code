<?php
include_once('sample.php');
$info = new Sample();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sample</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

        <h1>Enter Name and Display Result</h1>
        <p class="lead">PHP ONLY</p>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div class="row">
			  <div class="col-lg-6">
			    <div class="input-group">
			      <input type="text" class="form-control" name="name" id="name" pattern="[a-zA-Z0-9 ]+" placeholder="Enter Name...">
			      <span class="input-group-btn">
			        <input type="submit" class="btn btn-primary" name="submit" value="Display" />
			      </span>
			    </div><!-- /input-group -->
			  </div><!-- /.col-lg-6 -->
		</div>
		</form>

		<!-- ==== PHP ONLY Result ===== -->
        <?php echo ($_POST) ? '<p class="lead">' . $_POST['name'] . '</p>' : ''; ?>
        
        <hr>

        <p class="lead">jQuery Ajax Post / PHP</p>
        <form id="nForm">
        <div class="row">
			  <div class="col-lg-6">
			    <div class="input-group">
			      <input type="text" class="form-control" name="ajax-name" id="ajax-name" pattern="[a-zA-Z0-9 ]+" placeholder="Enter Name...">
			      <span class="input-group-btn">
			        <button class="btn btn-success" type="button" id="submit-name" />Display</button>
			      </span>
			    </div><!-- /input-group -->
			  </div><!-- /.col-lg-6 -->
		</div>
		</form>

		<!-- ====== jQuery Ajax Post / PHP Result ===== -->
    	<p class="lead" id="display-name"></p>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>


     <script>
    	$( document ).ready(function(){

    		$('#submit-name').click(function() {

    			var form_data = $("#nForm").serialize();

		    		$.ajax({
				  	     type: 'POST',
				  	     url: 'ajax.php',
						 data: form_data,
				  	     success: function(response) {
				  			 $('#display-name').html(response);
				  	     }
			  	  	});
    		});

		});
    </script>


  </body>
</html>

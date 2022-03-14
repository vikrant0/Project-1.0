<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="normalize.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section>
	<div class="col-sm-12">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="contain-login">
				<!-- <div class="login-form"> -->
					<form id='form'>
						
						<div class="form-group">
							<label for="name">Email:</label>
							<input class="form-control" type="email" name="email" id="email">
						</div>
						<div class="form-group">
							<label for="name">Password:</label>
							<input class="form-control" type="password" name="password" id="password">
						</div>
					
						<div class="button" style="text-align: center;margin: 25px 0px;">
                                <input  class="button-submit btn btn-primary " type="submit" name="submit" style="background: rgb(177,4,0) !important; border:none !important; color: white !important;" onclick="login();">
                            </div>
					</form>
				<!-- </div> -->
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</body>
</html>

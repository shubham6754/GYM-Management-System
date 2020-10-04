
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
     integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <style type="text/css">

  </style>
  <body style="background:url('images/22.jpg'); background-size: cover;">
    <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7"></div>

        <div class="col-md-4">
          <div class="card">
            <img src="images/21.jpg" class="card-img-top">
            <div class="card-body">





					<form action="change_s_pwd.php" method="POST" id="bb">

						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
									<input type="text" class="form-control" name="login_id" placeholder="Your Login ID" data-rule-required="true" data-rule-minlength="6"/>
							</div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-key"></i>
								</div>
								<input type="text" name="login_key"  class="form-control" placeholder="Your secert key" data-rule-required="true" data-rule-minlength="6">
							</div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-key"></i>
								</div>
								<input type="password" name="pwfield" id="pwfield" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="Your new passowrd">
							</div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-key"></i>
								</div>
								<input type="password" name="confirmfield" id="confirmfield" class="form-control" data-rule-equalto="#pwfield" data-rule-required="true" data-rule-minlength="6" placeholder="Confirm Your new passowrd">
							</div>
						</div>

						<div class="form-group">
							<button type="Submit" name="btnLogin" class="btn btn-primary">
								Login In
								<i class="entypo-login"></i>
							</button>
							<a href="index.php"><button  type="button" class="btn btn-primary">Cancel</button></a>
						</div>
					</form>

				</div>

			</div>

		</div>
	</div>

    </body>
</html>

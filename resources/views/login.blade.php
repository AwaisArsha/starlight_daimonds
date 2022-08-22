<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Starlight Diamonds</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
	<link href="assets/css/fonts.css" rel="stylesheet">
	<link href="assets/css/font-awesome/all.min.css" rel="stylesheet">
</head>
<body>

<section class="login_sec">
	<em class="bg1"><img src="assets/images/shep_cc8.png" alt=""></em>
	<em class="bg2"><img src="assets/images/shep_cc7.png" alt=""></em>
	<div class="container">
		<div class="login_inr">
			<div class="login_bx">
				<em class="logo_img"><img src="assets/images/logo.jpg" alt=""></em>
				<div class="login_bx_tx">
					<h1>Welcome</h1>
					<p>Sign in to continue to Starlight Diamonds.</p>
				</div>
				<div class="log_frm">
					<form method="POST" action="{{ route('login') }}">
                        @csrf
						<div class="input_bx">
							<input id="email" name="email" type="text" placeholder="Enter Email" required>
						</div>
						<div class="input_bx">
							<input id="password" name="password" type="password" placeholder="Enter Password" required>
						</div>
						<div class="input_bx">
							<input id="chk1" type="checkbox" checked="" value="all" name="chk">
							<label for="chk1">Remember me</label>
						</div>
						<div class="for_pass">
							<button class="sub_btn" type="submit">Log In</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Bootstrap core JavaScript -->
<script src="assets/js/jquerymin.js"></script>
<script src="assets/js/bootstrap.js"></script>

</body>
</html>

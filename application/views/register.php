<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
</head>
<body>
	<div class="login">
		<div class="login-triangle"></div>

		<h2 class="login-header">Register</h2>
		<form class="login-container" method="post" action="">
			<?php echo validation_errors(); ?>
			<p><input type="text" name="nama" placeholder="nama"></p>
			<p><input type="text" name="alamat" placeholder="alamat"></p>
			<p><input type="text" name="notelp" placeholder="notelp"></p>

			<p><input type="text" name="username" placeholder="Username"></p>
			<p><input type="password" name="password" placeholder="Password"></p>
			<p><input type="submit" value="Register"></p>
			<a href="<?php echo base_url('Login/kustomer') ?>">Login</a>
		</form>
	</div>
</body>
</html>
<style>
	/**
 * 01/28/2016
 * This pen is years old, and watching at the code after all
 * those years made me fall from my chair, so I:
 * - changed all IDs to classes
 * - converted all units to pixels and em units
 * - changed all global elements to classes or children of
 *   .login
 * - cleaned the syntax to be more consistent
 * - added a lot of spaces that I so hard tried to avoid
 *   a few years ago
 *   (because it's cool to not use them)
 * - and probably something else that I can't remember anymore
 *
 * I sticked to the same philosophy, meaning:
 * - the design is almost the same
 * - only pure HTML and CSS
 * - no frameworks, preprocessors or resets
 */

 /* 'Open Sans' font from Google Fonts */
 @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

 body {
 	background: #456;
 	font-family: 'Open Sans', sans-serif;
 }

 .login {
 	width: 400px;
 	margin: 16px auto;
 	font-size: 16px;
 }

 /* Reset top and bottom margins from certain elements */
 .login-header,
 .login p {
 	margin-top: 0;
 	margin-bottom: 0;
 }

 /* The triangle form is achieved by a CSS hack */
 .login-triangle {
 	width: 0;
 	margin-right: auto;
 	margin-left: auto;
 	border: 12px solid transparent;
 	border-bottom-color: #28d;
 }

 .login-header {
 	background: #28d;
 	padding: 20px;
 	font-size: 1.4em;
 	font-weight: normal;
 	text-align: center;
 	text-transform: uppercase;
 	color: #fff;
 }

 .login-container {
 	background: #ebebeb;
 	padding: 12px;
 }

 /* Every row inside .login-container is defined with p tags */
 .login p {
 	padding: 12px;
 }

 .login input {
 	box-sizing: border-box;
 	display: block;
 	width: 100%;
 	border-width: 1px;
 	border-style: solid;
 	padding: 16px;
 	outline: 0;
 	font-family: inherit;
 	font-size: 0.95em;
 }

 .login input[type="text"],
 .login input[type="password"] {
 	background: #fff;
 	border-color: #bbb;
 	color: #555;
 }

 /* Text fields' focus effect */
 .login input[type="text"]:focus,
 .login input[type="password"]:focus {
 	border-color: #888;
 }

 .login input[type="submit"] {
 	background: #28d;
 	border-color: transparent;
 	color: #fff;
 	cursor: pointer;
 }

 .login input[type="submit"]:hover {
 	background: #17c;
 }

 /* Buttons' focus effect */
 .login input[type="submit"]:focus {
 	border-color: #05a;
 }
/* btn */

  .login a {
  	box-sizing: border-box;
 	display: block;
 	width: 90%;
 	border-width: 1px;
 	border-style: solid;
 	padding: 8px;
 	outline: 0;
 	margin-right: 5%;
 	margin-left: 5%;
 	text-align: center;
 	font-family: inherit;
 	font-size: 0.95em;
 	background: #6dff8f;
 	border-color: transparent;
 	color: #fff;
 	cursor: pointer;
 }

 .login a:hover {
 	background: #28ff5a;
 }

 /* Buttons' focus effect */
 .login a:focus {
 	border-color: #05a;
 }

</style>
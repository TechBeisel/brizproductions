<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/form.css" />
	</head>
	<body>
		<div class="fbody">
			<form method="POST" name="contact" action="/submit.php">
				<div class="row">
					<div class="col1">
						<label for="fname">First Name</label></br />
						<input type="text" name="fname" id="fname" />
						</div>
					<div class="col2">
						<label for="lname">Last Name</label></br />
						<input type="text" name="lname" id="lname" />
						</div>
					</div>
				<div class="row">
					<div class="col1">
						<label for="email">Email</label></br />
						<input type="email" name="email" id="email" />
						</div>
					<div class="col2">
						<label for="phone">Phone</label></br />
						<input type="tel" name="phone" id="phpne" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" />
						</div>
					</div>
				<div class="row">
					<div class="col">
						<label for="ename">Event name</label></br />
						<input type="text" name="ename" id="ename" />
						</div>
					</div>
				<div class="row">
					<div class="col">
						<label for="evenue">Event Venue</label></br />
						<input type="text" name="evenue" id="evenue" />
						</div>
					</div>
				<div class="row">
					<div class="col">
						<label for="vaddress">Venue Address</label></br />
						<input type="text" name="vaddress" id="vaddress" />
						</div>
					</div>
				<div class="row">
					<div class="col">
						<label for="position">Position Request</label></br />
						<select name="position" id="position">
							<option value="a1">Audio Engineer</option>
							<option value="v1">Video Engineer</option>
							<option value="l1">Lighting Engineer</option>
							<option value="me">Master Electrician</option>
							</select>
						</div>
					</div>
				<div class="row">
					<div class="col1">
						<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' />
						<input id="6_letters_code" name="6_letters_code" type="text" /><br>
						<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
						</div>
					</div>
				<div class="row">
					<div class="col">
						<input type="submit" value="SUBMIT" name="submit" />
						</div>
					</div>
				</form>
			</div>
	</body>
</html>
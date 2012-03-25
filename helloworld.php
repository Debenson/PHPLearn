<html>
	<head>
		<title>My First PHP Page</title>
	</head>
	<body>		
	<?php
		$name = "my_name";
		$$name = "Debenson";		
		
		if (isset($my_name)) {			
			print "My name is " . $my_name; 				
		} else {
			print "Sorry, I don't know your name.";
		}
		
		# print phpinfo();
	?>
	</body>
</html>
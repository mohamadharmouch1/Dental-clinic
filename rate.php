<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='css/rate.css' rel='stylesheet'>
    <link rel="icon" href="image/log.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>
		Form Reviews
	</title>
</head>
<body>
	<div class="wrapper">
		<h3>Rate your doctor</h3>
		<form action="#" method="post">
			<div class="rating">
				<input type="number" name="rating" hidden>
				<i class='bx bx-star star' style="--i: 0;"></i>
				<i class='bx bx-star star' style="--i: 1;"></i>
				<i class='bx bx-star star' style="--i: 2;"></i>
				<i class='bx bx-star star' style="--i: 3;"></i>
				<i class='bx bx-star star' style="--i: 4;"></i>
			</div>
			<textarea  cols="30" name="mesage" rows="5" placeholder="Your opinion..."></textarea>
			<div class="btn-group">
				<button type="submit" class="btn submit" name="submit">
					Submit
				</button>
				<button class="btn cancel">	
					Cancel
				</button>
			</div>
		</form>
	</div>
    <script src="js/rate.js">
	</script> 
</body>
</html>
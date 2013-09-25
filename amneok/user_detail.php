<?php

?>
<html>
	<head>
	</head>
	<body>
		<header>
		</header>
		<section>
			<form action="first.php" method="POST">
				<table>
					<tr>
						<td>Age</td>
						<td><input name="age"></input></td>
						
					</tr>
					<tr>
						<td>Gender</td>
						<td>
						Female:<input type="radio" name="gender" value="f"></input>
						Male:<input type="radio" name="gender" value="m"></input>
						</td>
					
					</tr>
					<tr>
						<td>Ethinicity/Race</td>
						<td><input name="race"></input></td>
						
					</tr>
					<tr>
						<td>Years of education</td>
						<td>
							<select name="yoe">
								<option value='tw'>12</option>
								<option value='th'>13</option>
								<option value='fo'>14</option>
								<option value='fi'>15</option>
								<option value='si'>16</option>
								<option value='se'>17</option>
								<option value='ei'>18+</option>
							</select> 
						</td>
					
					</tr>
					<tr>
						<td>Highest educational level</td>
						<td>
							<select name="hel">
								<option value='hs'>High School</option>
								<option value='ad'>Associate Degree</option>
								<option value='gr'>Garduate</option>
								<option value='ma'>Master's</option>
								<option value='doc'>Doctoral</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>How long have you been interested in diversity and inclusion?</td>
						<td><input type="number" name="year_int" min="0"></input></td>
					
						
					</tr>
					
					<tr>
						<td>Age you were aware of others race?</td>
						<td><input type="number" name="age_race" min="0"></input></td>
					
						
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="submit" ></input></td>
					
						
					</tr>
					<tr>
						
					</tr>
				</table>
			</form>
		</section>
		<footer>
		</footer>
	</body>
</html>

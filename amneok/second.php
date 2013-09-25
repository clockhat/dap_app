<?php 
session_start();

require('class.php');
require("connect.php");
$id=session_id();

?>
<html>
		<head>
	<link type="css/text" rel="stylesheet" href="my.css" />
	
	</head>
	<body>
		<header>
		</header>
		<section>
			<form name="form" action="second.php" method="POST">
				<table>
					<tr class="odd">
						<td>How often do i ,as an a individual </td>
						<td>1</td>
						<td>2</td>
						<td>3</td> 
						<td>4</td>
					</tr>
					<tr class="even">
						<?php $qes6=new question;
						$qes6->set_question("Check out reality before repeating or believing rumors or assumptions about anyone ?","q_6");?>
					</tr>
					<tr class="odd">
						<?php $qes7=new question;
						$qes7->set_question("Recognize and challenge the biases that affect my own thinking?","q_7");?>
					</tr>66
					<tr class="even">
						<?php $qes8=new question;
						$qes8->set_question("Avoid using language that reinforces negative stereotypes?","q_8");?>
					</tr>
					<tr class="odd">
						<?php $qes9=new question;
						$qes9->set_question("Assume and convey the message that protected class members are as skilled and competent as others?","q_9");?>
					</tr>
					<tr class="even">
						<?php $qes10=new question;
						$qes10->set_question("Get to know people from different cultures and groups  as individuals?","q_10");?>
					</tr>
					<tr class="odd">
					
						<td<input type="submit" value="Next"></input></td>
					
						
					</tr>
					<tr>
						<td><p onclick="document.form.submit();">submit</p> </td>
						<td><p id="next"><a href="third.php">Next</a></p></td>
						
					</tr>
				</table>
			</form>
			<?php
			
			
			
			
			
			
$qes6->set_response($_POST['q_6'],$id);
$qes7->set_response($_POST['q_7'],$id);
$qes8->set_response($_POST['q_8'],$id);
$qes9->set_response($_POST['q_9'],$id);
$qes10->set_response($_POST['q_10'],$id);
?>
		</section>
		<footer>
		</footer>
	</body>
</html>


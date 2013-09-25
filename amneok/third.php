<?php 
session_start();
$id=session_id();
require('class.php');
require("connect.php");

?>
<html>
	<head>
	<link type="css/text" rel="stylesheet" href="my.css" />
	


	</head>
	<body>

		
		<header>
		</header>
		<section>
			<form name="form" action="third.php"    method="POST">
				<table>
					<tr class="odd">
						<td>How often do i ,as an a individual </td>
						<td>1</td>
						<td>2</td>
						<td>3</td> 
						<td>4</td>
					</tr>
					
					<tr class="even">
						<?php $qes11=new question;
					          $qes11->set_question("Realize members of another culture have a need to socialize with and reinforce one another and connect as a group?","q_11");
							 //$qes11->printz();
							?>
					</tr>
					<tr class="odd">
						<?php $qes12=new question;
								$qes12-> set_question("Accept and reinforce the fact that not everyone has to act or look a certain way to be successful in or valuable to my organization?","q_12");
						 
							?>
					</tr>
					<tr class="even">
						<?php $qes13=new question;
						$qes13-> set_question("Take responsibility for helping new people in my organization, including women and people of various culture, ages and sizes to feel welcome and accepted?","q_13");
						//$qes2->printz();
						?>
					</tr>
					<tr class="odd">
						<?php $qes14=new question;
						$qes14-> set_question("Include protected-class members, including women in the informal networks and /or social events?","q_14");?>
					</tr>
					<tr class="even">
						<?php $qes15=new question;
						$qes15-> set_question("Lean about and appreciate the richness of other cultures","q_15");?>
					</tr>
					<tr >
						
						
					</tr>
					<tr>
						<td><p onclick="document.form.submit();">submit</p> </td>
						<td><p id="next"><a href="forth.php">Next</a></p></td>
						
					</tr>
				</table>
			</form>
			
			
			<?php
			echo $_POST[1];
$qes11->set_response($_POST['q_11'],$id);
$qes12->set_response($_POST['q_12'],$id);
$qes13->set_response($_POST['q_13'],$id);
$qes14->set_response($_POST['q_14'],$id);
$qes15->set_response($_POST['q_15'],$id);
?>
		</section>
		<footer>
		</footer>
	</body>
</html>

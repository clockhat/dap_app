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
			<form name="form"  action="fifth.php"    method="POST">
				<table>
					<tr class="odd">
						<td>How often do i ,as an a individual </td>
						<td>1</td>
						<td>2</td>
						<td>3</td> 
						<td>4</td>
					</tr>
					
					<tr class="even">
						<?php $qes21=new question;
					          $qes21->set_question("Empower protected-class members by handing over responsibility to them as often as I do to others?","q_21");
							 // $qes1->printz();
							?>
					</tr>
					<tr class="odd">
						<?php $qes22=new question;
								$qes22-> set_question("Provided straightforward and timely feedback to protected –class members, including women?","q_22");
						 
							?>
					</tr>
					<tr class="even">
						<?php $qes23=new question;
						$qes23-> set_question("Share the women and unwritten rules of my organization with those from different cultures?","q_23");
						//$qes2->printz();
						?>
					</tr>
					<tr class="odd">
						<?php $qes24=new question;
						$qes24-> set_question("Disregard Physical characteristics when interacting with others and when making decisions about competence or ability?","q_24");?>
					</tr>
					<tr class="even">
						<?php $qes25=new question;
						$qes25-> set_question("Take responsibilities for helping my organization meet legal (EEO/AA) guidelines?","q_25");?>
					</tr>
					<tr >
						
						
					</tr>
					<tr>
						<td><p onclick="document.form.submit();">submit</p> </td>
						<td><p id="next"><a href="sixth.php">Next</a></p></td>
						
					</tr>
				</table>
			</form>
			
			
			<?php
			echo $_POST[21];
$qes21->set_response($_POST['q_21'],$id);
$qes22->set_response($_POST['q_22'],$id);
$qes23->set_response($_POST['q_23'],$id);
$qes24->set_response($_POST['q_24'],$id);
$qes25->set_response($_POST['q_25'],$id);
?>
		</section>
		<footer>
		</footer>
	</body>
</html>

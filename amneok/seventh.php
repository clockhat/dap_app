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
			<form name="form"  action="seventh.php"    method="POST">
				<table>
					<tr class="odd">
						<td>How often do i ,as an a individual </td>
						<td>1</td>
						<td>2</td>
						<td>3</td> 
						<td>4</td>
					</tr>
					
					<tr class="even">
						<?php $qes31=new question;
					          $qes31->set_question("Make the extra effort to help my organization retain protected-class employees?	","q_31");
							 // $qes1->printz();
							?>
					</tr>
					<tr class="odd">
						<?php $qes32=new question;
								$qes32-> set_question("Reinforce others for behaviors that support cultural diversity?","q_32");
						 
							?>
					</tr>
					<tr class="even">
						<?php $qes33=new question;
						$qes33-> set_question("Confront organizational policies and procedures that lead to the exclusion of anyone?","q_33");
						//$qes2->printz();
						?>
					</tr>
					<tr class="odd">
						<?php $qes34=new question;
						$qes34-> set_question("Do all I can to help crate a work environment in which all employees and customers are respected and valued?","q_34");?>
					</tr>
					<tr class="even">
						<?php $qes35=new question;
						$qes35-> set_question("Make extra efforts to educate myself about other cultures? ","q_35");?>
					</tr>
					<tr >
						
						
					</tr>
					<tr>
						<td><p onclick="document.form.submit();">submit</p> </td>
						<td><p id="next"><a href="eighth.php">Next</a></p></td>
						
					</tr>
				</table>
			</form>
			
			
			<?php
			echo $_POST[31];
$qes31->set_response($_POST['q_31'],$id);
$qes32->set_response($_POST['q_32'],$id);
$qes33->set_response($_POST['q_33'],$id);
$qes34->set_response($_POST['q_34'],$id);
$qes35->set_response($_POST['q_35'],$id);
?>
		</section>
		<footer>
		</footer>
	</body>
</html>

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
			<form name="form"     action="forth.php" method="POST">
				<table>
					<tr class="odd">
						<td>How often do i ,as an a individual </td>
						<td>1</td>
						<td>2</td>
						<td>3</td> 
						<td>4</td>
					</tr>
					
					<tr class="even">
						<?php $qes16=new question;
					          $qes16->set_question("Ask for and social events in which all people are able to participate ?","q_16");
							 // $qes1->printz();
							?>
					</tr>
					<tr class="odd">
						<?php $qes17=new question;
								$qes17-> set_question("Encourage protected-class members to speak out on their issues and concerns and treat those issues as valid?","q_17");
						 
							?>
					</tr>
					<tr class="even">
						<?php $qes18=new question;
						$qes18-> set_question("Encourage protected-class members ,including women to take risks?","q_18");
						//$qes2->printz();
						?>
					</tr>
					<tr class="odd">
						<?php $qes19=new question;
						$qes19-> set_question("Listen to the ideas of protected-class members  and give them credit, both one on one and in group meetings?","q_19");?>
					</tr>
					<tr class="even">
						<?php $qes20=new question;
						$qes20-> set_question("Include protected –class members in decision-making processes that affect them? ","q_20");?>
					</tr>
					<tr >
						
						
					</tr>
					<tr>
						<td><p onclick="document.form.submit();">submit</p> </td>
						<td><p id="next"><a href="fifth.php">Next</a></p></td>
						
					</tr>
				</table>
			</form>
			
			
			<?php
			echo $_POST[16];
$qes16->set_response($_POST['q_16'],$id);
$qes17->set_response($_POST['q_17'],$id);
$qes18->set_response($_POST['q_18'],$id);
$qes19->set_response($_POST['q_19'],$id);
$qes20->set_response($_POST['q_20'],$id);
?>
		</section>
		<footer>
		</footer>
	</body>
</html>

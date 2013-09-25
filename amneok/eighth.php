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
			<form name="form"   action="eighth.php"   method="POST">
				<table>
					<tr class="odd">
						<td>How often do i ,as an a individual </td>
						<td>1</td>
						<td>2</td>
						<td>3</td> 
						<td>4</td>
					</tr>
					
					<tr class="even">
						<?php $qes36=new question;
					          $qes36->set_question("Call, wirte or in some way protest when a book, newspaper, television show or some branch of media perpetuates or reinforces a bias or prejudice? ","q_36");
							 // $qes1->printz();
							?>
					</tr>
					<tr class="odd">
						<?php $qes37=new question;
								$qes37-> set_question("Refuse to join or remain a member of associates or groups that allow or reinforce values or practices that are racist, biased or prejudiced? ","q_37");
						 
							?>
					</tr>
					<tr class="even">
						<?php $qes38=new question;
						$qes38-> set_question("Participate in volunteer or community activities that re change agent efforts?","q_38");
						//$qes2->printz();
						?>
					</tr>
					<tr class="odd">
						<?php $qes39=new question;
						$qes39-> set_question("Make extra efforts to get to know individuals from diverse backgrounds?","q_39");?>
					</tr>
					<tr class="even">
						<?php $qes40=new question;
						$qes40-> set_question("Say “I think that’s inappropriate, ” when I think something indicated prejudice?","q_40");?>
					</tr>
				
					<tr>
						<td><p onclick="document.form.submit();">submit</p> </td>
						<td><p id="next"><a href="result.php">Next</a></p></td>
						
					</tr>
				</table>
			</form>
			
			
			<?php
			echo $_POST[36];
$qes36->set_response($_POST['q_36'],$id);
$qes37->set_response($_POST['q_37'],$id);
$qes38->set_response($_POST['q_38'],$id);
$qes39->set_response($_POST['q_39'],$id);
$qes40->set_response($_POST['q_40'],$id);
?>
		</section>
		<footer>
		</footer>
	</body>
</html>

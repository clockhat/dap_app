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
			<form name="form"   action="sixth.php"   method="POST">
				<table>
					<tr class="odd">
						<td>How often do i ,as an a individual </td>
						<td>1</td>
						<td>2</td>
						<td>3</td> 
						<td>4</td>
					</tr>
					
					<tr class="even">
						<?php $qes26=new question;
					          $qes26->set_question("Follow and reinforce organizational policies regarding equal treatment, including confronting others who violate those policies ?","q_26");
							 // $qes1->printz();
							?>
					</tr>
					<tr class="odd">
						<?php $qes27=new question;
								$qes27-> set_question("Consider protected-class members ,including women, for all opportunities and positions I have influence over?","q_27");
						 
							?>
					</tr>
					<tr class="even">
						<?php $qes28=new question;
						$qes28-> set_question("Keep all others, including protected-class members ,in the information loops, both formal and informal?","q_28");
						//$qes2->printz();
						?>
					</tr>
					<tr class="odd">
						<?php $qes29=new question;
						$qes29-> set_question("Help provide all employees with ample training and education to succeed in their jobs and to grow?","q_29");?>
					</tr>
					<tr class="even">
						<?php $qes30=new question;
						$qes30-> set_question("Provide formal or informal mentoring to new employees, including protected-class members ,so they can 'learn the ropes?'","q_30");?>
					</tr>
					<tr >
						
						
					</tr>
					<tr>
				<td><p onclick="document.form.submit();">submit</p> </td>
						<td><p id="next"><a href="seventh.php">Next</a></p></td>
						
					</tr>
				</table>
			</form>
			
			
			<?php
			echo $_POST[1];
$qes26->set_response($_POST['q_26'],$id);
$qes27->set_response($_POST['q_27'],$id);
$qes28->set_response($_POST['q_28'],$id);
$qes29->set_response($_POST['q_29'],$id);
$qes30->set_response($_POST['q_30'],$id);
?>
		</section>
		<footer>
		</footer>
	</body>
</html>

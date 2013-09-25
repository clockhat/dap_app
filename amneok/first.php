<?php 
session_start();

require('class.php');
require("connect.php");
$id=session_id();
$age=$_POST['age'];
$gender=$_POST['gender'];
$race=$_POST['race'];
$yoe=$_POST['yoe'];
$hel=$_POST['hel'];
$year_int=$_POST['year_int'];
$age_race=$_POST['age_race'];

/*echo "fp ".$id;
echo $id=session_id()." ".
$age." ".
$gender." ".
$race." ".
$yoe." ".
$hel." ".
$year_int." ".
$age_race; */

$mysql->query("INSERT INTO `_dap_app`.`user` (`id`, `age`, `gender`, `race`, `year_education`, `highest_education`, `year_int`, `age_race`, `q_1`, `q_2`, `q_3`, `q_4`, `q_5`, `q_6`, `q_7`, `q_8`, `q_9`, `q_10`, `q_11`, `q_12`, `q_13`, `q_14`, `q_15`, `q_16`, `q_17`, `q_18`, `q_19`, `q_20`, `q_21`, `q_22`, `q_23`, `q_24`, `q_25`, `q_26`, `q_27`, `q_28`, `q_29`, `q_30`, `q_31`, `q_32`, `q_33`, `q_34`, `q_35`, `q_36`, `q_37`, `q_38`, `q_39`, `q_40`)
 VALUES ('$id', '$age', '$gender', '$race', '$yoe', '$hel', '$year_int', '$age_race', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2', '1');");

//INSERT INTO `_DAP_app`.`user` (`id`, `age`, `gender`, `race`, `year_education`, `highest_education`, `year_int`, `age_race`, `q_1`, `q_2`, `q_3`, `q_4`, `q_5`, `q_6`, `q_7`, `q_8`, `q_9`, `q_10`, `q_11`, `q_12`, `q_13`, `q_14`, `q_15`, `q_16`, `q_17`, `q_18`, `q_19`, `q_20`, `q_21`, `q_22`, `q_23`, `q_24`, `q_25`, `q_26`, `q_27`, `q_28`, `q_29`, `q_30`, `q_31`, `q_32`, `q_33`, `q_34`, `q_35`, `q_36`, `q_37`, `q_38`, `q_39`, `q_40`) VALUES ('selr5d5tsbe5jta9ob0qmb4ik1', '45', b'0', 'tamil', '7', 'doctoral', '12', '5', '4', '3', '2', '1', '4', '3', '2', '1', '4', '3', '2', '1', '4', '3', '2', '1', '4', '3', '2', '1', '4', '3', '2', '1', '4', '3', '2', '1', '4', '3', '2', '1', '4', '3', '2', '1', '4', '3', '2', '1');


?>


<html >
	<head>
	<link type="css/text" rel="stylesheet" href="my.css" />
	

	</head>
	<body>

		
		<header>
		</header>
		<section>
			<form  name="form" action="first.php"  method="POST">
				<table>
					<tr class="odd">
						<td>How often do i ,as an a individual </td>
						<td>1</td>
						<td>2</td>
						<td>3</td> 
						<td>4</td>
					</tr>
					
					<tr class="even">
						<?php $qes1=new question;
					          $qes1->set_question("Challenge others on racial / ethnic/sexually derogatory comments?","q_1");
							 //$qes1->printz();
							?>
					</tr>
					<tr class="odd">
						<?php $qes2=new question;
								$qes2-> set_question("Speak up when someone is humiliating another person or acting inappropriately?","q_2");
						 
							?>
					</tr>
					<tr class="even">
						<?php $qes3=new question;
						$qes3-> set_question("Think about the impact of my comments and action  before I speak or act?","q_3");
						//$qes2->printz();
						?>
					</tr>
					<tr class="odd">
						<?php $qes4=new question;
						$qes4-> set_question("Refuse to participate in jokes that are derogatory to any group ,culture or bias?","q_4");?>
					</tr>
					<tr class="even">
						<?php $qes5=new question;
						$qes5-> set_question("Refrain from repeating statements or rumors that reinforce prejudice or bias? ","q_5");?>
					</tr>
					
					<tr>
						<td><p onclick="document.form.submit();">submit</p> </td>
						<td><p id="next"><a href="second.php">Next</a></p></td>
						
					</tr>
				</table>
			</form>
			
			
			<?php
			echo $_POST['q_1'];
$qes1->set_response($_POST['q_1'],$id);
$qes2->set_response($_POST['q_2'],$id);
$qes3->set_response($_POST['q_3'],$id);
$qes4->set_response($_POST['q_4'],$id);
$qes5->set_response($_POST['q_5'],$id);
?>
		</section>
		<footer>
		</footer>
	</body>
</html>

<?php
if(isset($_POST['mail_list'])){
foreach($_POST['mail_list'] as $t)
	echo $t .'<br><br>';
}
?>

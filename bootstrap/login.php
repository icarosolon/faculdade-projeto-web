<?php
	echo "<meta charset='UTF-8'/>";
	

	if (!($_SESSION['tipo'] == "admin")) {
		echo "<script>alert('OPERAÇÃO NÃO PERMITIDA'); history.back();</script>";
   
	} 
	
	
	

?>
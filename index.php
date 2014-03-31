<?php
	require_once 'views/header.php';
?>

<div class="body-wrap">

<h1>Printer Plaza Framework</h1>


<?php

if (isset($_REQUEST['page'])) {
	switch ($_REQUEST['page']) {
		case 'form':
			include 'views/single-form.php';
			break;
		case 'table':
			include 'views/table.php';
			break;
	}
}


 ?>


</div><!--  end .body-wrap -->

<?php
	require_once 'views/footer.php';
?>

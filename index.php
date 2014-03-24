<?php
	require_once 'views/header.php';
?>

<div id="bodyWrap">


<?php

if (isset($_REQUEST['page'])) {
	switch ($_REQUEST['page']) {
		case 'form':
			include 'views/single-form.php';
			break;
	}
}


 ?>


</div><!--  end #bodyWrap  -->

<?php
	require_once 'views/footer.php';
?>

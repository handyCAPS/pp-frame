<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>PrinterPlaza</title>

	<!-- Font Awesome  -->
	<!-- <link rel="stylesheet" type="text/css" href="/stylesheets/font-awesome.min.css"> -->
	<!-- jQuery UI -->
	<!-- <link rel="stylesheet" type="text/css" href="/stylesheets/jquery-ui-1.10.3.custom.min.css"> -->
	<!-- Foundation and Printer Plaza -->
	<link rel="stylesheet" href="lib/css/normalize.dev.css">
	<link rel="stylesheet" href="lib/css/pp-frame.dev.css">

	<!-- Foundation Javascript  -->
  	<script src="lib/js/vendor/jquery1.11.min.js"></script>

  	<!-- jQuery UI  -->
  <!--	<script type="text/javascript" src="/js/vendor/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="/js/plaza.js"></script> -->
</head>


<body class="">

<div id="outerWrap">

	<header>
		<?php include 'views/navigation.php'; ?>
	</header>

	<div id="contentWrap" class="row body-wrap">

	<!-- <div id="stocWrap" class="row body-wrap"> -->

	<h1 class="large-12 columns">Voorraad lijst</h1>


	<div id="formNavWrap" class="">

		<div class="button">
			<a href="/Stock/Form/createnew">Nieuw</a>
		</div>

		<div class="button">
			<a href="/Stock/List/reserve">Reserveer</a>
		</div>

	</div><!--  end formNavWrap  -->

	<?php include 'views/pagination.php'; ?>

	<div id="tableWrap" class="large-8 columns">

		<table id="stoc">
			<thead>
				<tr class="total-row">
					<td class="total-cell" colspan="0">
						<div class='total'>Total <span class='total-number'>967</span></div>
					</td>
				</tr>
				<tr class="sortColumn">
					<th><input type="checkbox" value="" class="checkAll" onclick="checkAll('stoc')"></th>
					<th><a name="arti_name" href="#">Artikel</a></th>
					<th><a name="stoc_amount" href="#">Aantal</a></th>
					<th><a name="stoc_free" href="#">Vrij</a></th>
					<th><a name="stoc_backorder" href="#">Backorder</a></th>
					<th><a name="stoc_reserved" href="#">Gereserveerd</a></th>
					<th>Bewerk</th>
				</tr>
			</thead>
			<tbody>
				<tr id="stoc265">
					<td><input type="checkbox" value="" class="checkOne"></td>
					<td>Artikel 1 Een</td>
					<td>11</td>
					<td>9</td>
					<td></td>
					<td>2</td>
					<td class="center edit-icon"><a href="/Stock/Form/get/265"><i class="fa fa-edit icon-edit"></i></a></td>
				</tr>
				<tr id="stoc266">
					<td><input type="checkbox" value="" class="checkOne"></td>
					<td>Artikel 2 Twee</td>
					<td>7</td>
					<td>3</td>
					<td></td>
					<td>4</td>
					<td class="center edit-icon"><a href="/Stock/Form/get/266"><i class="fa fa-edit icon-edit"></i></a></td>
				</tr>
				<tr class="total-row">
					<td class="total-cell" colspan="0">
						<div class='total'>Total <span class='total-number'>2</span></div>
					</td>
				</tr>
			</tbody>
		</table>

	</div><!--  end tableWrap  -->


	<?php include 'views/pagination.php'; ?>

	<!-- </div> end stocWrap  -->

	</div><!--  end content  -->

</div><!--  end outerWrap  -->

</body>
</html>

<!DOCTYPE html>
<html lang="cn"> <!-- html lang declarition -->

<head>

<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- Fav and touch icons -->
	<link rel="shortcut icon" href="resource/img/icon_cn.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">

	<!-- Le styles -->
	<link  href="resource/css/uniform.css" rel="stylesheet" type="text/css" />
	<link  href="resource/css/docs.css" rel="stylesheet" type="text/css" />

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="resource/js/html5shiv.js"></script>
	<![endif]-->

	<script src="resource/js/jquery.min.js"></script>
	<script type="text/javascript">
		document.ready(function () {
			$(".btn").click(function (){
				$(".btn").addClass("disabled");
			});
		});
	</script>
</head>

<body>
<?php 
require_once("sunny_function.php");
$jsonurl = "http://weather.datamining.tw/uniform/school.json";
$json = file_get_contents($jsonurl,0,null,null);
$aData = json_decode($json);
?>
<div class="row-fluid">
	<ul class="thumbnails">
	<?php 
	foreach ($aData as $data) {
		$data = (array) $data;
	?>

		<li class="span2">
			<div class="thumbnail">
				<img src="<?php echo $data['img']?>" width="300" alt="图片下载失败">
				<div class="caption">
					<h3><?php echo $data['name'] ?></h3>
					<p>城市:<?php echo $data['location'] ?></p>
					<!--p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p -->
				</div>
			</div>
		</li>

	<?php 
	}
	?>
	</ul>
</div>

</body>



<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

	<script src="resource/js/bootstrap-transition.js"></script>
	<script src="resource/js/bootstrap-alert.js"></script>
	<script src="resource/js/bootstrap-modal.js"></script>
	<script src="resource/js/bootstrap-dropdown.js"></script>
	<script src="resource/js/bootstrap-scrollspy.js"></script>
	<script src="resource/js/bootstrap-tab.js"></script>
	<script src="resource/js/bootstrap-tooltip.js"></script>
	<script src="resource/js/bootstrap-popover.js"></script>
	<script src="resource/js/bootstrap-button.js"></script>
	<script src="resource/js/bootstrap-collapse.js"></script>
	<script src="resource/js/bootstrap-carousel.js"></script>
	<script src="resource/js/bootstrap-typeahead.js"></script>
	<!--[if lt IE 10]>
		<script src="resource/js/jquery-placeholder.min.js"></script>
		<script>$('input, text, textarea').placeholder();</script>
	<![endif]-->
	
	
	<!-- script src="resource/js/holder.js"></script> -->
	

<!DOCTYPE html>
<html>
<head>

			<?php include("includes/includecss.php"); ?>
			<?php
    foreach ($css_files as $css) {
    	?>
    	<link rel="stylesheet" type="text/css" href="<?php echo $css?>">
    	<?php
    }
    ?>
</head>
<body>
			<?php include("includes/menu.php"); ?>
	

    <div id="right-panel" class="right-panel">
			<?php include("includes/header.php"); ?>
			<?php include("includes/breadcumb.php"); ?>
			<div>
				<?php echo $tablacrud; ?>
				
			</div>
	</div>

			<?php include("includes/includejs.php"); ?>


<?php 
	foreach ($js_files as $js) {
		?>
		<script type="text/javascript" src="<?php echo $js?>"></script>
		<?php
	}
?>
</body>
</html>




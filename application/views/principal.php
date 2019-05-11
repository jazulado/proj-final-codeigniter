<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	</style>
			<?php
    foreach ($css_files as $css) {
    	?>
    	<link rel="stylesheet" type="text/css" href="<?php echo $css?>">
    	<?php
    }
    ?>
</head>
<body>
	<div class="container">
		<div class="p-4"></div>
		
			<?php echo $tablacrud; ?>
		

		</div>

<?php 
	foreach ($js_files as $js) {
		?>
		<script type="text/javascript" src="<?php echo $js?>"></script>
		<?php
	}
?>
</body>
</html>




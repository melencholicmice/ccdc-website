<?php include("header.php"); ?>
<div class="wrap">
	<div class="grid-container">
		<div class="grid-80">
			<div class="grid-block">					
				<script src="jbcore/juicebox.js"></script>
				<script>
				new juicebox({
				containerId : "juicebox-container",
				galleryWidth: "100%",
				galleryHeight: "85%",
				backgroundColor: "#FFFFFF"
				});
				</script>
				<div id="juicebox-container"></div>
			</div>
		</div>
		<div class="grid-20">
			<?php include("panel.php"); ?>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>

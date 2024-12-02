<?php include("header.php"); ?>
<div class="wrap">
	<div class="grid-container">
		<video loop muted autoplay preload="auto" style="max-width: 100vw">
			<source src="downloads/Drone_Shot.mp4" type="video/mp4" />
		</video>
		<!-- <div class="grid-con-2" style="width: 1000px; margin-bottom: 400px; margin-left:auto; margin-right:auto;">
			<div class="grid-block" style="width: 1000px; margin-left:auto; margin-right:auto;">					
				<script src="jbcore/juicebox.js"></script>
				<script>
				new juicebox({
				containerId : "juicebox-container",
				galleryWidth: "100%",
				galleryHeight: "85%",
				backgroundColor: "#FFFFFF"
				});
				</script>
				<div id="juicebox-container" style="width: 1000px; margin-left:auto; margin-right:auto;"></div>
			</div>
		</div> -->
	</div>
	<div class="grid-con-2">
		<?php include("panel.php"); ?>
	</div>
</div>
<?php include("footer.php"); ?>

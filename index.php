<?php
include_once('config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/index.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/index.'.$LANG_TAG.'.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<html>
<head>
	<title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<?php
	include_once($SERVER_ROOT . '/includes/head.php');
	include_once($SERVER_ROOT . '/includes/googleanalytics.php');
	?>
</head>
<body>
	<?php
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<div class="navpath"></div>
	<div id="innertext">
		<?php
		if($LANG_TAG == 'es'){
			?>
			<div>
				<h1 class="headline">Bienvenidos</h1>
				<p>Este portal de datos se ha establecido para albergar los datos de las colecciones del herbario Blanding/Four Corners.</p>
			</div>
			<?php
		}
		elseif($LANG_TAG == 'fr'){
			?>
			<div>
				<h1 class="headline">Bienvenue</h1>
				<p>Ce portail de données a été créé pour héberger les données des collections de l'herbier Blanding/Four Corners.</p>
			</div>
			<?php
		}
		else{
			//Default Language
			?>
			<div>
				<h1>Welcome to Four Corners Plants data portal!</h1>
				<p>This site provides and synthesizes information on the botanical diversity of the Four Corners Region
				specifically and including herbarium records from across the four corners states (UT, CO, NM, AR) more broadly.</p>

				<p>A particular focus of this portal is on the Indigenous knowledge of these plants: In conjunction with the Four Corners Herbarium (FCORN), the
				portal provides members of the Four Corners Region Indigenous communities with the opportunity to record culturally important information about
				the traditional uses of plants, while retaining community control of that information.</p>

				<p>The Four Corners Region is an area of epic landscapes centered on the junction of Utah, Colorado, Arizona, and New Mexico, approximately
				corresponding to the watershed of the San Juan River. Boasting over 2350 plant taxa, and with habitats ranging from the high alpine peaks of the
				San Juan Mountains to the iconic canyon “badlands”, this region is rich in plant life.</p>

				<p>The region is home to ancestral Puebloan, Ute, Paiute, Shosone, and Athabaskan tribal communities, where some date back to 10,000 years ago.
				The descendants of these historic tribal communities continue to inhabit the landscape today along with many new American settlers.</p>

			</div>
			<?php
		}
		?>
	</div>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>
</html>

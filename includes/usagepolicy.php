<?php
include_once('../config/symbini.php');
include_once ($SERVER_ROOT.'/classes/UtilityFunctions.php');
header("Content-Type: text/html; charset=" . $CHARSET);
$serverHost = UtilityFunctions::getDomain();
?>
<html>

<head>
	<title><?php echo $DEFAULT_TITLE; ?> Data Usage Guidelines</title>
	<?php

	include_once($SERVER_ROOT . '/includes/head.php');
	?>
</head>

<body>
	<?php
	$displayLeftMenu = true;
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<div class="navpath">
		<a href="<?php echo $CLIENT_ROOT; ?>/index.php">Home</a> &gt;&gt;
		<b>Data Usage Guidelines</b>
	</div>
	<!-- This is inner text! -->
	<div id="innertext">
		<h1>Guidelines for Acceptable Use of Data</h1>
		<h2>Recommended Citation Formats</h2>
		<p>Use one of the following formats to cite data retrieved from the <?php echo $DEFAULT_TITLE; ?> network:</p>
		<h3>General Citation</h3>
		<blockquote>
			<?php
			if (file_exists($SERVER_ROOT . '/includes/citationportal.php')) {
				include($SERVER_ROOT . '/includes/citationportal.php');
			}
			else {
				echo 'Biodiversity occurrence data published by: ';
				if ($DEFAULT_TITLE) {
					echo $DEFAULT_TITLE;
				}
				else {
					echo 'Name of people or institutional reponsible for maintaining the portal';
				};
				echo ' (accessed through the ';
				if ($DEFAULT_TITLE) {
					echo $DEFAULT_TITLE;
				}
				else {
					echo 'Name of people or institutional reponsible for maintaining the portal';
				};
				echo ', ' . $serverHost . $CLIENT_ROOT . ', ' . date('Y-m-d') . ').';
			};
			?>
		</blockquote>

		<h3>Usage of occurrence data from specific institutions</h3>
		<p>
		Biodiversity occurrence data published by: <List of Collections> (Accessed through Four Corners Plants Portal, https://fourcornersplants.org//index.php, YYYY-MM-DD)
		</p>
		<h4>For example</h4>
		<p>Biodiversity occurrence data published by: Intermountain Herbarium, Four Corners Herbarium, and Grand Canyon National Park (Accessed through Four Corners Plants Portal, https://fourcornersplants.org//index.php, 2024-05-17)
		</p>

		<h2>Occurrence Record Use Policy</h2>
		<p>While <?php echo $DEFAULT_TITLE; ?> will make every effort possible to control and document the quality
		of the data it publishes, the data are made available "as is". Any report of errors in the data should be
		directed to the appropriate curators and/or collections managers.
		</p>
		<p><?php echo $DEFAULT_TITLE; ?> cannot assume responsibility for damages resulting from mis-use or
		mis-interpretation of datasets or from errors or omissions that may exist in the data.
		</p>
		<p>It is considered a matter of professional ethics to cite and acknowledge the work of other scientists that
		has resulted in data used in subsequent research. We encourages users to
		contact the original investigator responsible for the data that they are accessing.
		</p>
		<p><?php echo $DEFAULT_TITLE; ?> asks that users not redistribute data obtained from this site without permission for data owners.
		However, links or references to this site may be freely posted.
		</p>

		<h2>Images</h2>
		<p>Images within this website have been generously contributed by their owners to promote education and research. These contributors retain the full copyright for their images.
		Unless stated otherwise, images are made available under the Creative Commons Attribution-ShareAlike
		(<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank">CC BY-SA</a>).
		Users are allowed to copy, transmit, reuse, and/or adapt content, as long as attribution regarding the source of the content is made. If the content is altered, transformed,
		or enhanced, it may be re-distributed only under the same or similar license by which it was acquired.
		</p>

		<h2>Notes on Specimen Records and Images</h2>
		<p>Specimens are used for scientific research and because of skilled preparation and careful use they may last for hundreds of years. Some collections have specimens that were
		collected over 100 years ago that are no longer occur within the area. By making these specimens available on the web as images, their availability and value improves without
		an increase in inadvertent damage caused by use. Note that if you are considering making specimens, remember collecting normally requires permission of the landowner and,
		in the case of rare and endangered plants, additional permits may be required. It is best to coordinate such efforts with a regional institution that manages a publically
		accessible collection.
		</p>

		<p><b>Disclaimer:</b> This data portal may contain specimens and historical records that are culturally sensitive. The collections include specimens dating back over 200 years
		collected from all around the world. Some records may also include offensive language. These records do not reflect the portal community's current viewpoint but rather the
		social attitudes and circumstances of the time period when specimens were collected or cataloged.
		</p>
	</div>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>

</html>
<?php
	require_once('lib/Parsedown.php');

	$Parsedown = new Parsedown();

	$text = file_get_contents($_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME']);
	$html = $Parsedown->text($text);

	$css = trim(file_get_contents('assets/github-markdown.min.css'), "\n");
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo basename($_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME']);?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
		<style><?php echo $css; ?></style>
<?php /*		<style><?php echo $prism_css; ?></style>
*/ ?>
		<style>
			body {
				min-width: 200px;
				max-width: 1200px;
				margin: 0 auto;
				padding: 30px;
			}
		</style>
	</head>

	<body>

<!-- generated -->
<?php echo $html; ?>

<!-- /generated -->

	</body>
</html>

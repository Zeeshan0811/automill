<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php if(!empty($title)){ echo $title." | " ; }?> Khalil Auto Flour Mill</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url('asset/images/favicon.jpg') ?>" />

    <?php
        if (!empty($customCSS)) {
            echo $customCSS;
        }
	?>

</head>
<body class="home">
	<!-- START HEADER SECTION -->
	<?php include 'application/views/frontend/includes/header.php';?>
	<?php
        if (!empty($mainContent)) {
            echo $mainContent;
        }
	?>
    <!-- START FOOTER -->
	<?php include 'application/views/frontend/includes/footer.php';?>
    <!-- END FOOTER -->

    <?php
        if (!empty($customJS)) {
            echo $customJS;
        }
	?>
</body>
</html>
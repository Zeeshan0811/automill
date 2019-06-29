<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php if(!empty($title)){ echo $title." | " ; }?> Khalil Auto Flour Mill</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url('assets/images/favicon.jpg') ?>" />

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo site_url('assets/css/icons/icomoon/styles.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo site_url('assets/css/bootstrap_limitless.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo site_url('assets/css/layout.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo site_url('assets/css/components.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo site_url('assets/css/colors.min.css'); ?>" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="<?php echo site_url('assets/js/main/jquery.min.js'); ?>"></script>
	<script src="<?php echo site_url('assets/js/main/bootstrap.bundle.min.js'); ?>"></script>
	<script src="<?php echo site_url('assets/js/plugins/loaders/blockui.min.js'); ?>"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="<?php echo site_url('assets/js/plugins/visualization/d3/d3.min.js'); ?>"></script>
	<script src="<?php echo site_url('assets/js/plugins/visualization/d3/d3_tooltip.js'); ?>"></script>
	<script src="<?php echo site_url('assets/js/plugins/forms/styling/switchery.min.js'); ?>"></script>
	<script src="<?php echo site_url('assets/js/plugins/forms/selects/bootstrap_multiselect.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/plugins/forms/selects/select2.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/plugins/forms/styling/uniform.min.js'); ?>"></script>
	<script src="<?php echo site_url('assets/js/plugins/ui/moment/moment.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/plugins/pickers/daterangepicker.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/plugins/notifications/bootbox.min.js'); ?>"></script>
    
	<script src="<?php echo site_url('assets/js/plugins/datatables/datatables.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/plugins/datatables/datatables_basic.js'); ?>"></script>
    
    <script src="<?php echo site_url('assets/js/plugins/pickers/daterangepicker.js'); ?>"></script>
	<script src="<?php echo site_url('assets/js/plugins/pickers/anytime.min.js'); ?>"></script>
	<script src="<?php echo site_url('assets/js/plugins/pickers/pickadate/picker.js'); ?>"></script>
	<script src="<?php echo site_url('assets/js/plugins/pickers/pickadate/picker.date.js'); ?>"></script>
	<script src="<?php echo site_url('assets/js/plugins/pickers/pickadate/picker.time.js'); ?>"></script>
	<script src="<?php echo site_url('assets/js/plugins/pickers/pickadate/legacy.js'); ?>"></script>

	<script src="<?php echo site_url('assets/js/app.js'); ?>"></script>
	<script src="<?php echo site_url('assets/js/pages/dashboard.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/pages/components_modals.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/pages/form_layouts.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/pages/picker_date.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/pages/datatables_advanced.js'); ?>"></script>
    

    <script src="<?php echo site_url('assets/js/custom.js'); ?>"></script>
    <script src="https://www.w3counter.com/tracker.js?id=126788"></script>
	<!-- /theme JS files -->

    <?php
        if (!empty($customCSS)) {
            echo $customCSS;
        }
	?>

</head>
<body class="home">
	<!-- START HEADER SECTION -->
    <?php include 'application/views/admin/includes/header.php';?>

    <!-- Page content -->
	<div class="page-content">
        <!-- START SIDEBAR SECTION -->
        <?php include 'application/views/admin/includes/sidebar.php';?>
        
        <!-- Main content -->
		<div class="content-wrapper">
            <?php include 'admin/includes/message.php'; ?>
            <?php
                if (!empty($mainContent)) {
                    echo $mainContent;
                }
            ?>


            <!-- START FOOTER -->
            <?php include 'application/views/admin/includes/footer.php';?>
            <!-- END FOOTER -->

            <?php
                if (!empty($customJS)) {
                    echo $customJS;
                }
            ?>
        </div>
        <!-- /main content -->

        <script>
            // $( document ).ready(function() {
            //     var url = "<?php echo current_url(); ?>";
            //     $( "p" ).find( "span" )

            //     console.log( url );
            // });

            jQuery(function($){
                var url = "<?php echo current_url(); ?>";
                console.log( url);
                $('.nav-sidebar a').filter(function(){
                return $(this).attr('href').toLowerCase() == url;
                }).addClass('active').closest('.nav-item-submenu').addClass('nav-item-open').find('.nav-group-sub').css({
                    'display':'block'
                });
            });
                
        </script>
        
        

        
    </div>
    <!-- /page content -->
</body>
</html>
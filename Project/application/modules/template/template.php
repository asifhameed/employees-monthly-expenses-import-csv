<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo _FAVICON_PATH;?>ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title><?php echo _PROJECT_NAME . _ADMINPANEL_TITLE_SPLATER2 . $title; ?></title>
    
    <link href="<?php echo _CSS_PATH;?>dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo _CSS_PATH;?>style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo _JS_PATH;?>html5shiv.js"></script>
    <script src="<?php echo _JS_PATH;?>respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div id="main-wrapper">
            <!-- header -->
            <?php $this->view('header');?>
            <!-- left sidebar -->
            <?php $this->view('leftsidebar');?>
            <!-- Main section -->
            <div class="page-wrapper">
                <!-- Middle section start -->
                <?php $this->view($main); ?>
                <!-- Middle section end --> 
                <?php $this->view('footer');?>
            </div>
        </div>
    </div>
    <script src="<?php echo _JS_PATH;?>jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo _PLUGIN_PATH;?>popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo _JS_PATH;?>bootstrap.min.js"></script>

    <script src="<?php echo _PLUGIN_PATH;?>perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo _PLUGIN_PATH;?>sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo _JS_PATH;?>waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo _JS_PATH;?>sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo _JS_PATH;?>custom.min.js"></script>

    <script src="<?php echo _PLUGIN_PATH;?>DataTables/datatables.min.js"></script>
    <script>
        $('#monthly_expenses').DataTable( {
            "ordering": false
        });


        $(document).ready(function() {
            $("#frmPSVImport").on("submit", function () {
                
                $("#response").attr("class", "");
                $("#response").html("");
                var fileType = ".psv";
                if($('input[type=file]').val() == "")
                {
                    $(".alert").hide();
                    $("#response").addClass("error");
                    $("#response").addClass("display-block");
                    $("#response").html("Please upload <b>" + fileType + "</b> Files.");
                    return false;
                }
                var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + fileType + ")$");
                if (!regex.test($("#file").val().toLowerCase())) {
                    $("#response").addClass("error");
                    $("#response").addClass("display-block");
                    $("#response").html("Invalid File. Upload : Please upload only <b>" + fileType + "</b> Files.");
                    $('input[type=file]').val('');
                    return false;
                }
                return true;
            });
        });
    </script>
</body>

</html>
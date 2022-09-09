<?php
    require_once "../lib/config.php";
    include "headercontent.php"; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--Google Analytics Tag-->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-6RVKJ50EW1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-6RVKJ50EW1');
        </script>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#d93337" />
        <meta content="standardsandbestpracticeslimited" name="author">
        
        <!-- shortcut icon -->
        <link rel="shortcut icon" href="./assets/pictures/sandbpicon.png" type="image/x-icon">

        <!-- WOW Animation -->
        <link href="./assets/styles/animate.css" rel="stylesheet" type="text/css">

        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- bootstrap css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <!-- Slick Slider -->
        <link href="./assets/styles/slick.css" rel="stylesheet" type="text/css">
        <meta name="keywords" content="<?= $metaContent['processAssessment']['keyword']; ?>">
        <meta name="description" content="<?= $metaContent['processAssessment']['desc']; ?>">
        <!-- open graph data for social media presentation -->
        <meta property="og:title" content="<?=$metaContent['processAssessment']['ogTitle']?>"/>
        <meta property="og:description" content="<?= $metaContent['processAssessment']['desc']; ?>"/>
        <meta property="og:url" content=<?= $canonicalTag['processAssessment']; ?>/>
        <meta property="og:type" content=<?= $metaContent['processAssessment']['ogType']; ?>/>
        <meta property="og:image:secure" content="<?= $metaContent['processAssessment']['ogImage']; ?>"/>
        <meta property="og:image:type" content="image/png">
        <!-- endof open graph data for social media presentation -->
        <!-- Main css File -->
        <link href="./assets/styles/style.css" rel="stylesheet" type="text/css" id="theme-default">
        <link href="./assets/styles/default-color.css" rel="stylesheet" type="text/css" id="theme-color">

        <!-- Canonical tag-url to set google to the right page of an information -->
        <link rel="canonical" href=<?= $canonicalTag['processAssessment']; ?> />
        <title><?=$titleContent['title']['processAssessment']; ?></title>
    </head>
    <body class="dc-six" data-new-gr-c-s-check-loaded="14.1021.0" data-gr-ext-installed="" style="overflow: hidden;">
        <!-- box-wrapper -->
        <div class="box-wrapper">
            <!-- Loader -->
            <?php include "../loader.php"; ?>
            <!-- End of Loader -->

            <!-- Nav Bar -->
            <?php include "../navigation.php"; ?>
            <!-- End of Nav Bar -->

            <!-- Main Wrapper -->
            <?php include "pa-contents.php"; ?>
            <!-- end of main page wrapper -->

            <!-- Main Footer Wrapper -->
            <?php include "../footer.php"; ?>
            <!-- endof footer -->
        </div>
        
        <!-- javascript -->
        <!-- jquery cdn -->
        <script src ="./assets/scripts/jquery-3.3.1.js" type = text/javascript></script>
                
        <!-- bootstrap js -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <!--  validation.js script  -->
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.0/jquery.validate.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js"></script>
        <!-- <script src="./assets/scripts/bootstrap.bundle.min.js.download"></script> -->
        <!-- <script src="./assets/scripts/jquery.easing.min.js.download"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="./assets/scripts/scrollspy.min.js.download"></script>
        <script src="./assets/scripts/appear.js.download"></script>
        <!-- WOW Animation -->
        <script src="./assets/scripts/wow.min.js.download"></script>
        <!-- Slick Slider -->
        <script src="./assets/scripts/slick.min.js.download"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> -->
        <!-- Main Js -->
        <script src="./assets/scripts/dcode.js"></script>
        <script src="./assets/scripts/header.js"></script>
    </body>
    <grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>
</html>
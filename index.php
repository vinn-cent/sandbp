<?php
require_once "lib/config.php";
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

        function gtag() {
            dataLayer.push(arguments);
        }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
   

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Slick Slider -->
    <link href="./assets/styles/slick.css" rel="stylesheet" type="text/css">
    <meta name="keywords" content="<?= $metaContent['index']['keyword']; ?>">
    <meta name="description" content="<?= $metaContent['index']['desc']; ?>">

    <meta property="og:title" content="<?= $metaContent['index']['ogTitle'] ?>" />
    <meta property="og:description" content="<?= $metaContent['index']['desc']; ?>" />
    <meta property="og:url" content=<?= $canonicalTag['index']; ?> />
    <meta property="og:type" content=<?= $metaContent['index']['ogType']; ?> />
    <meta property="og:image" content="<?= $metaContent['index']['ogImage']; ?>" />
    <!-- Main css File -->
    <link href="./assets/styles/style.css" rel="stylesheet" type="text/css" id="theme-default">
    <link href="./assets/styles/default-color.css" rel="stylesheet" type="text/css" id="theme-color">

    <!-- Canonical tag-url to set google to the right page of an information -->
    <link rel="canonical" href=<?= $canonicalTag['index']; ?> />

    <title><?= $titleContent['title']['index']; ?></title>
</head>

<body class="dc-six" data-new-gr-c-s-check-loaded="14.1021.0" data-gr-ext-installed="" style="overflow: hidden;">
    <!-- box-wrapper -->
    <div class="box-wrapper">
        <!-- Loader -->
        <?php include "loader.php"; ?>
        <!-- End of Loader -->

        <!-- Nav Bar -->
        <?php include "navigation.php"; ?>
        <!-- End of Nav Bar -->

        <!-- Main Wrapper -->
        <?php include "main.php"; ?>
        <!-- end of main page wrapper -->

        <!-- Main Footer Wrapper -->
        <?php include "footer.php"; ?>
        <!-- endof footer -->
    </div>

    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            smartSpeed: 1500,
            dots: false,
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    </script>
    <!-- bootstrap js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!--  validation.js script  -->
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.0/jquery.validate.min.js"></script>

    <!--migrate js-->
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
    <!-- <script src="./assets/scripts/header.js"></script> -->
    <script src="https://kit.fontawesome.com/cebba12cd7.js" crossorigin="anonymous"></script>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>
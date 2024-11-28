<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/download.css">
</head>
<body>
    <!-- php include -->
    <?php include 'include/header.php'?>
    
    <!-- home page condition -->
    <?php
    if(isset($pages)){
        if($pages == 'download'){
            include './pages/download_page.php';
        }
        if($pages == 'document'){
            include './pages/document_page.php';
        }
        if($pages == 'contact'){
            include './pages/contact_page.php';
        }
        if($pages == 'about'){
            include './pages/about_page.php';
        }
    } else{
        include 'pages/homepage.php';
    }
    ?>

    <?php include 'include/footer.php'?>
    <!-- php include end -->

    <!-- javaScript Link -->
    <script src="js/jahid.js"></script>
    <!-- javaScript link end-->
</body>
</html>
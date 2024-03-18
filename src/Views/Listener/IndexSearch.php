<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/css/Search.css">
    <!-- Postcast components -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/css/PostCard_component_style.css">
    <!-- Playlist2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/css/style2.css">
    <!-- Artist 2 -->
    <!-- Podcast -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/css/style_podscast.css">
    <!-- Top podcast -->
    <!-- <link rel="stylesheet" href="style_podscast_showall.css">
    <link rel="stylesheet" href="testCss.css"> -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/css/Global.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/css/Playing.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/css/Home.css">

    <link rel="stylesheet" href="<?php echo URLROOT ?>/css/songlist.scss">

    <!-- Search -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Spotify</title>
</head>

<body>
    <div id="mainHome">
        <div id="containerMainHome">
            <!-- >>>>> Sidebar <<<<< -->
            <div class="sideBarHome">
                <?php include_once "./src/Views/layouts/Sidebar.php" ?>
            </div>

            <div class="containercontentMainHome">

                <!-- >>>>> Navbar <<<<< -->
                <div class="navBarHome">
                    <?php include_once "./src/Views/layouts/NavbarSearch.php" ?>
                </div>

                <!-- >>>>> Content <<<<< -->
                <div id="contentMainHome" class="contentMainHome">
                    <?php require_once APPROOT . '/Views/pages/' . $data['Page'] . '.php' ?>
                </div>
            </div>
        </div>
        <?php include_once "./src/Views/Listener/Playing.php" ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="<?php echo URLROOT ?>/js/Playlist.js"></script>
    <script src="<?php echo URLROOT ?>/js/Sidebar.js"></script>
    <script src="<?php echo URLROOT ?>/utils/ColorIdentify.js"></script>
    <script src="<?php echo URLROOT ?>/js/Playing.js"></script>
    <script src="<?php echo URLROOT ?>/js/likesong.js"></script>

</body>

</html>
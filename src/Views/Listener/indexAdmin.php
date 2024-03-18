<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Sweetalert2 library-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">

    <!------------------------------ morris chart cdn ------------------------------>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/css/admin.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/css/Mng.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo URLROOT ?>/css/styles_Statistical.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="../../css/admin.css"> -->

    <title>Admin page manager</title>
</head>
<body>
    <div class="containerAdmin">
        <?php include_once "./src/Views/layouts/NavbarAdmin.php" ?>
        <div class="main">
            <?php include_once "./src/Views/layouts/TopbarAdmin.php" ?>
            <?php require_once './src/Views/pages/' .$data['Page']. '.php' ?>

                        <?php
            // Fix KhangProPlayer
            // require_once './src/Models/Song.php';
            // require_once './src/Controllers/AdminController.php';

            // $song = new SongModel();
            // $dataTableLikeSong = $song->GetDataTableSongLike();

            // $controller = new AdminController();
            // $controller->ShowdateTableSongLike($dataTableLikeSong);
            ?>


        </div>
    </div>
    <script>
        function toggleMenu() {
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');
            toggle.classList.toggle('active');
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }

        new Morris.Line({
            // ID of the element in which to draw the chart.
            element: 'myfirstchart',
            // Chart data records -- each entry in this array corresponds to a point on
            // the chart.
            data: [
                { year: '2008', value: 20 },
                { year: '2009', value: 10 },
                { year: '2010', value: 5 },
                { year: '2011', value: 5 },
                { year: '2012', value: 20 }
            ],
            // The name of the data record attribute that contains x-values.
            xkey: 'year',
            // A list of names of data record attributes that contain y-values.
            ykeys: ['value'],
            // Labels for the ykeys -- will be displayed when you hover over the
            // chart.
            hideHover: 'auto',
            stacked: true,
            parseTime: false,
            lineColors: ['Skyblue', 'Pink']
        });

        Morris.Donut({
            element: 'mysecondchart',
            data: [
                {label: "Download Sales", value: 12},
                {label: "In-Store Sales", value: 30},
                {label: "Mail-Order Sales", value: 20}
            ]
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/Spotify/src/js/scripts_ac.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="/Spotify/src/js/chart-area.js"></script>
    <script src="/Spotify/src/js/chart-bar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="/Spotify/src/js/datatables-simple.js"></script>
</body>
</html>
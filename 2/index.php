<?php
session_start();
// include("config/MySQL.php");
// include("config/date.php");
// include("config/functions.php");
if (isset($_GET['page']))
    $page = $_GET['page'];

if (isset($_SESSION["type"])) {
    $type = $_SESSION["type"];
    $idUser = $_SESSION["idUser"];
    $initial = "";
    $typeName = "";
    switch ($type) {
        case 1:
            $initial = "k";
            $typeName = "Koordinator";
            break;
        case 2:
            $initial = "d";
            $typeName = "Pembimbing";
            break;
        case 3:
            $initial = "m";
            $typeName = "Mahasiswa";
            break;
    }
}
?>

<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        Digital Library
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <style>
        body {
            background: url(img/cream_dust.png);
        }
    </style>

    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="js/jquery.autocomplete.css" />
    <link type="text/css" href="css/smoothness/jquery-ui-1.8.22.custom.css" rel="stylesheet" /> -->

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <body>
        <?php
        if (!isset($type))
            include("includes/nav_0.php");
        else
            include("includes/nav_" . $type . ".php");
        ?>

        <?php
        if (!isset($type))
            include("includes/home_1.php");
        else
            include("includes/home_" . $type . ".php");
        ?>
    </body>


    <script src="js/vendor/jquery-1.8.2.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.nivo.slider.js"></script>
    <script src='js/jquery.autocomplete.js'></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.22.custom.min.js"></script>
    <script src="js/datetimepicker/jquery-ui-timepicker-addon.js"></script>
    <script src="js/datetimepicker/jquery-ui-sliderAccess.js"></script>

    <script type="text/javascript">
        $(document).ready(
            function() {
                $token = 0;
                $('#autoc').autocomplete('search.php', {
                    parse: function(data) {
                        var parsed = [];
                        for (var i = 0; i < data.length; i++) {
                            parsed[i] = {
                                data: data[i],
                                value: data[i].nama // nama field yang dicari
                            };
                        }
                        return parsed;
                    },
                    formatItem: function(data, i, max) {
                        var str = '<div>' + data.nama + '</div>';
                        return str;
                    },
                    dataType: 'json'
                }).result(
                    function(event, data, formated) {
                        $('#autoc').text(data.nama);
                    }
                );
                $('.date').datepicker({
                    dateFormat: "yy/mm/dd"
                });
                $("#request").click(function() {
                    if ($token == 0) {
                        $('#show').show();
                        $('#request').val("Batal");
                        $token = 1;
                    } else {
                        $('#show').hide();
                        $('#request').val("Tambah Jadwal Bimbingan");
                        $token = 0;
                    }
                });
                $("#monitor").click(function() {
                    if ($token == 0) {
                        $('#show').show();
                        $('#monitor').val("Batal");
                        $token = 1;
                    } else {
                        $('#show').hide();
                        $('#monitor').val("Monitor Bimbingan");
                        $token = 0;
                    }
                });
                $("[rel=tooltip]").tooltip();
            }
        );
    </script>

</body>

</html>
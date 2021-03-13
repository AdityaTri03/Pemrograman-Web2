<html>

<head>
    <title>PenggunaanSwitch - Case</title>
</head>

<body>
    Hari ini :
    <?Php
    $nama_hari = date("l");
    switch ($nama_hari) {
        case "Sunday";
            print("Minggu");
            print "Istirahat dari E LEARNING";
            break;
        case "Monday";
            print("Senin <br>");
            print "Belajar";
            break;
        case "Tuesday";
            print("Selasa <br>");
            print "Belajar 2";
            break;
        case "Wednesday";
            print("Rabu <br>");
            print("Belajar 3");
            break;
        case "Thrusday";
            print("Kamis <br>");
            print "E LEARNING";
            break;
        case "Friday";
            print("Jum’at <br>");
            print "E LEARNING";
            break;
        default:
            print("Sabtu <br>");
            print "E LEARNING";
    }
    ?>
</body>

</html>
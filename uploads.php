<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
                include '../../config_db/config_db_cominfo.php';

                $uname = filter_input(INPUT_POST, "uname", FILTER_SANITIZE_STRING);
                $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
                $comtype = filter_input(INPUT_POST, "comtype", FILTER_SANITIZE_STRING);
                $comdetail = filter_input(INPUT_POST, "comdetail", FILTER_SANITIZE_STRING);
                $rushjob = filter_input(INPUT_POST, "rushjob", FILTER_SANITIZE_STRING);

                // Create connection
                $conn = new mysqli($hostname, $user, $password, $database);

                $comrush = ($rushjob) ? true : false;

                if ($uname && $email && $comtype && $comdetail) {

                    $sql = "INSERT INTO cominfo
                    (uname, email, comtype, comdetail, comrush) VALUES
                    ($uname, $email, $comtype, $comdetail, $comrush)";
                // Nu kör vi vår SQL
                $result = $conn->query($sql);

                // Gick det bra att köra SQL-kommandot?
                if (!$result) {
                    die("<p>Det blev något fel i databasfrågan</p>");
                }
                    else {
                        echo "<p>Submission successful!</p>";
                    }
                }
            $conn->close();
                ?>
</body>
</html>

<?
$link = @mysqli_connect('localhost',
                        'root',
                        '',
                        'homework');

mysqli_query($link, 'SET NAMES utf8');

    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $birth = $_POST["birth"];
    $course = $_POST["course"];
    $pmeter = $_POST["pmeter"];
    $tmeter = $_POST["tmeter"];
    $sport = $_POST["sport"];
    $ballsport = implode($sport);

mysqli_query($link, " INSERT INTO form(name, gender, phone, email, birth, course, person, team, ballsport) VALUES ('$name', '$gender', '$phone', '$email', '$birth', '$course', '$pmeter', '$tmeter', '$ballsport')");
?>

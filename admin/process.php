<?php
if (isset($_POST["create"])) {
    include("../connect.php");
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);

    $sqlInsert = "INSERT INTO posts(date,title,Summary, content) VALUES ('$date','$title', '$summary', '$content')";
    if (mysqli_query($conn, $sqlInsert)) {
        session_start();
        $_SESSION["create"] = "Post added Successfully";
        header("Location:index.php");
    } else {
        die("Data is not inserted");
    }
}
?>

<?php
if (isset($_POST["update"])) {
    include("../connect.php");
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);

    $sqlupdate = "UPDATE posts SET title='$title', Summary = '$summary', content = '$content', date= '$date' WHERE ID = $id";
    if (mysqli_query($conn, $sqlupdate)) {
        session_start();
        $_SESSION["update"] = "Post updated Successfully";
        header("Location:index.php");
    } else {
        die("Data is not updated");
    }
}
?>
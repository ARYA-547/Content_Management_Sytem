<?php
$id = $_GET["id"];
if ($id) {
    include("../connect.php");
    $sqlDelete = "DELETE FROM posts WHERE Id = $id";
    if (mysqli_query($conn, $sqlDelete)) {
        session_start();
        $_SESSION["delete"] = "Post deleted Successfully";
        header("Location:index.php");
    } else {
        die("Something is not right, Data is not deleted");
    }
} else {
    echo "Post not Found";
}
?>
#t
<?php
include("templates/header.php");
?>

<div class="post w-100 bg-light p-5">
    <?php
    $Id = $_GET["id"];
    if ($Id) {
        include("../connect.php");
        $sqlSelectPost = "SELECT * FROM posts WHERE Id= $Id";
        $result = mysqli_query($conn, $sqlSelectPost);
        while ($data = mysqli_fetch_array($result)) {
    ?>
            <h1><?php echo $data["title"]; ?></h1>
            <p><?php echo $data["date"]; ?> </p>
            <p><?php echo $data["content"]; ?> </p>

    <?php
        }
    } else {
        echo "Post Not Found";
    }
    ?>
</div>

<?php
include("templates/footer.php");
?>
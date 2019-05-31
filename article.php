<?php
    include 'includes/sdbh.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="search.css">
</head>
<body>


    <h1>Article Page</h1>

    <div class="article-container">
        <?php
            $title = mysqli_real_escape_string($conn, $_GET['title']);
            $date = mysqli_real_escape_string($conn, $_GET['date']);

            $sql = "SELECT * FROM article WHERE a_title='$title' AND a_date='$date'";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);

            if ($queryResults > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='article-box'>
                        <h3>".$row['a_title']."</h3>
                        <p>".$row['a_text']."</p>
                        <p>".$row['a_date']."</p>
                        <p>".$row['a_autori']."</p>
                    </div>";
                }
            }
        ?>
    
    </div>




</body>
</html>
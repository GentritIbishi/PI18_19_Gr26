<?php
    date_default_timezone_set('Europe/Tirane');
    include "includes/comment-dbh.inc.php";
    include 'includes/comments.inc.php';
?>
    <link rel="stylesheet" href="CSS/cstyle.css">
<body>
<?php    
echo "<form method='POST' action='".setComments($conn)."'>
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea><br>
    <button type='submit' name='commentSubmit'>Comment</button>

</form>";

getComments($conn);
?>    
</body>
</html>
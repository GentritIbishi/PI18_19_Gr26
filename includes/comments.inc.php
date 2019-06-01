<?php
function setComments($conn) {
    if (isset($_POST['commentSubmit'])) {
        $uid = $_POST['uid'];
        $date =  $_POST['date'];
        $message =  $_POST['message'];

        $sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
        $result = $conn->query($sql); 
    }
}

function getComments($conn) {
    $sql = "SELECT * FROM comments";
    $result = $conn->query($sql);
    while ( $row = $result->fetch_assoc()) {
        echo "<div class='comments-box'><p>";
        echo $row['uid']."<br>";
        echo $row['date']. "<br>";
        echo nl2br($row['message']);
        //Prej linjes 21 behet DELETE BUTTON
        echo "</p>
        <form class='delete-form' method='POST' action='".deleteComments($conn)."'>
        <input type='hidden' name='cid' value='".$row['cid']."'>
        <button name='commentDelete'>Delete</button>
        </form>
         <form class='edit-form' method='POST' action='commentEdit.php'>
                <input type='hidden' name='cid' value='".$row['cid']."'>
                <input type='hidden' name='uid' value='".$row['uid']."'>
                <input type='hidden' name='date' value='".$row['date']."'>
                <input type='hidden' name='message' value='".$row['message']."'>
                <button>Edit</button>
         </form>
        </div>";
        
    }
}
//Prej linjes 27 behet EDIT butoni

function editComments($conn) {
    if (isset($_POST['commentSubmit'])) {
        $cid = $_POST['cid'];
        $uid = $_POST['uid'];
        $date =  $_POST['date'];
        $message =  $_POST['message'];

        $sql = "UPDATE comments SET message='$message' WHERE cid='$cid'";
        $result = $conn->query($sql); 
        header("Location: ../comment-section.php");
    }
}
//prej linjes 40 behet EditComments

function deleteComments($conn) {
    if (isset($_POST['commentDelete'])) {
        $cid = $_POST['cid'];

        $sql = "DELETE FROM comments WHERE cid='$cid'";
        $result = $conn->query($sql); 
        header("Location: ../comment-section.php");
    }
}
<?php
if (isset($_POST['signup-submit'])) {

    require 'databasehandler.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];


    /**********ERROR HANDLING ***********/
    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
        /*nese user ka bere nje gabim edhe futet mbrenda if-loopit atehere 'exit' funksioni sherben qe kodi i cili shkruhet me poshte te mos inicohet(skripti te mos inicohet)*/
        exit();
    }
   
    /*FILTER_VALIDATE_EMAIL sherben per validimin e email-ave (Tregon se a eshte email valid)*/
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidmail&uid=".$username);
        exit(); 
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invaliduid&mail=".$email);
        exit();  
    }
    else if ($password !== $passwordRepeat) {
        header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
        exit();
    }
    else {
        /*SQL CODE */
        /*? = placeholder(Ne kete kod me poshte kemi perdor procedural programming sepse na vyn per me e mbrojt databazen prej intruders)*/
                $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();    
                }
                else {
                    /*'s' dmth se cfare datatype po dojme qe statement-i jon te jete | psh: s=String, i=Integer, d=Double*/
                    mysqli_stmt_bind_param($stmt, "s", $username);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    /*Kur po marrim informacine prej databazes atehere neve po na kthehen ato rezultate, psh nese kemi 2 rreshta ne databazen tone 'resultCheck' po na kthen se sa rreshta ka ne databaze*/
                    $resultCheck = mysqli_stmt_num_rows($stmt);
                    if ($resultCheck > 0) {
                        header("Location: ../signup.php?error=usertaken&mail=".$email);
                    exit();
                    }
                    else {
                        $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            header("Location: ../signup.php?error=sqlerror");
                            exit();    
                        }
                        else {
                            /*Hashing and dehashing*/
                            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
            
                            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                            mysqli_stmt_execute($stmt);
                            header("Location: ../signup.php?signup=success");
                                exit();
                        }               
                    }
                }
            }
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        }
        else {
            header("Location: ../signup.php");
            exit();
        }
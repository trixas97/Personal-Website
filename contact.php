<?php include "start.php";?>
<script>
    var menuitem = document.getElementById("item4");
    menuitem.classList.add("menu-ul-li-checked");
</script>

<div class="data-body" style="margin-top: 2%;">
    <div class="data">

        <h1 class="data-title">Φόρμα Επικοινωνίας</h1>
        <form style="margin-top: 5%;" method="post" action="">
            <label class="label-form">Επίθετο:</label><br>
            <input class="text-form" type="text" name="surname">
            <label class="label-form">Όνομα:</label><br>
            <input class="text-form" type="text" name="name">
            <label class="label-form">Email:</label><br>
            <input class="text-form" type="text" name="email">
            <label class="label-form">Μήνυμα:</label><br>
            <textarea class="text-form" id="" cols="30" rows="10" name="message"></textarea>
            <br><br>
            <?php 
                function opa(){
        
                    if($_POST['email'] == ""||$_POST["surname"]==""||$_POST["message"]==""){
                        echo '<div style="text-align: center; color: red;"><b>Συμπληρώστε όλα τα πεδία</b></div>';
                    }else {
                        $email = $_POST['email'];
                        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
                    if (!$email){
                        echo '<div style="text-align: center; color: red;"><b>Παρακαλώ εισάγετε ένα έγκυρο Email!</b></div>';
                    } else {
                        $to = "trixasmixas@gmail.com";
                        $subject = "mtrichakis.gr: " . $_POST['surname'];
                        $message = "Επίθετο: <b>" . $_POST['surname'] . "</b><br> Όνομα: <b>" . $_POST['name'] . "</b><br> Email: <b>" . $_POST['email'] . "</b><br>  Mήνυμα: <p><b>" . $_POST['message'] . "</p></b>";
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        $headers .= "From: mtrichakis@mtrichakis.gr" . "\r\n";
                        $success = mail($to,$subject,$message,$headers);
                        if(!$success){
                            $errorMessage = error_get_last()['message'];
                        } else{
                            echo '<div style="text-align: center; color: green;"><b>To μήνυμά σας καταχωρήθηκε σύντομα θα επικοινωνήσω μαζι σας!</b></div>';
                        }   
                    }
                }
        
            }

            if(isset($_POST['submit'])){
                opa();
            }
        ?>
            <br><br>
            <div id="container">
                <button class="email" name="submit">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Υποβολη</span>
                </button>
            </div>
        </form>
    </div>
</div>





<?php include "end.php" ?>
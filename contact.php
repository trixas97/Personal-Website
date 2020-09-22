<?php include "start.php";?>
<script>
    var menuitem = document.getElementById("item4");
    menuitem.classList.add("menu-ul-li-checked");
</script>

<div class="data-body">
    <div class="data">

        <h1 class="data-title">Φόρμα Επικοινωνίας</h1>
        <form style="margin-top: 5%;">
            <label class="label-form">Επίθετο:</label><br>
            <input class="text-form" type="text">
            <label class="label-form">Όνομα:</label><br>
            <input class="text-form" type="text">
            <label class="label-form">Email:</label><br>
            <input class="text-form" type="text">
            <label class="label-form">Μήνυμα:</label><br>
            <textarea class="text-form" name="" id="" cols="30" rows="10"></textarea>
            <br><br><br><br>
            <div id="container">
                <button class="learn-more" name="newwords">
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
<?php require("layout/header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12" style="margin:50px 0;">

            <?php
            session_start();
            echo '
                    <div class="form-group">
                        <input class="form-control" type="email" required placeholder="Email" name="emailFormResult" disabled value="' . $_SESSION["_adSoyadForm"] . '">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" required placeholder="Mesajınız" name="messageFormResult" disabled value="' . $_SESSION["_emailForm"] . '">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" required placeholder="Mesajınız" name="messageFormResult" disabled value="' . $_SESSION["_konuForm"] . '">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" required placeholder="Mesajınız" name="messageFormResult" disabled value="' . $_SESSION["_mesajForm"] . '">
                    </div>
                    ';
            ?>
            <a href="homepage.php">
                <button class="btn btn-sm btn-danger">Anasayfaya Dön</button>
            </a>

        </div>
    </div>
</div>
<?php require("layout/footer.php"); ?>
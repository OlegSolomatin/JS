<div class="reg-or-auth">
    <div class="but-reg-or-auth">
        <div class="reg-but" id="reg-but" onclick="checkblock(document.getElementById('forma-auth').style.display,document.getElementById('forma-registration').style.display)">
            Sign Up
        </div>
        <div class="auth-but" id="auth-but" onclick="checkblock()">
            Log In
        </div>
    </div>
    <?php
        require_once("form-registr.php");
    ?>
    <?php
        require_once("form-auth.php");
    ?>
</div>
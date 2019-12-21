<div class="reg-or-auth">
    <div class="but-reg-or-auth">
        <div class="reg-but" id="reg-but" onclick="regbut(document.getElementById('forma-registration').style.display, document.getElementById('forma-auth').style.display)">
            Sign Up
        </div>
        <div class="auth-but" id="auth-but" onclick="regbut(document.getElementById('forma-registration').style.display, document.getElementById('forma-auth').style.display)">
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
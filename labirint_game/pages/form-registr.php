<div class="block_for_massages">
    <?php
    //Если в сессии существуют сообщения об ошибках, то выводим их
    if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
        echo $_SESSION["error_messages"];

        //Уничтожаем чтобы не выводились заново при обновлении страницы
        unset($_SESSION["error_messages"]);
    }

    //Если в сессии существуют радостные сообщения, то выводим их
    if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
        echo $_SESSION["success_messages"];

        //Уничтожаем чтобы не выводились заново при обновлении страницы
        unset($_SESSION["success_messages"]);
    }
        ?>
</div>
<?php
//Проверяем, если пользователь не авторизован, то выводим форму регистрации,
//иначе выводим сообщение о том, что он уже зарегистрирован
if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){?>
<div class="forma-registration" id="forma-registration">
    <form class="forma-reg-newuser">
        <h1 class="title-form">Sign Up for Free</h1>
            <div class="forma-reg-input-cont">
                <label>
                    <input class="input-field" name="login" type="text" placeholder="Login" required="required">
                </label>
                <label>
                    <input class="input-field" name="pass" type="password" placeholder="Password" required="required">
                    <span id="valid_password_message" class="mesage_error"></span>
                </label>
                <label>
                    <input class="input-field" name="last-pass" type="password" placeholder="Confirm Password" required="required">
                </label>
                <label>
                    <input class="input-field" name="email" type="email" placeholder="Your E'mail" required="required">
                    <span id="valid_email_message" class="mesage_error"></span>
                </label>
                <label class="captcha-bloc">
                    <img src="../php/captcha.php" alt="Капча" />
                    <input class="input-field" type="text" name="captcha" placeholder="Captcha code" required="required">
                </label>
                <label class="custom-redemption-container">
                    <input class="checkbox" type="checkbox" required="required"><strong class="custom-redemption"><a class="mainButton" href="#modal">Redemption user</a></strong>
                </label>
                <label>
                    <input class="signin-btn" type="submit" name="btn_submit_register" value="Sign In">
                </label>
            </div>
    </form>
    <div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <div class="remodalBorder">
            <p class="logo-cont"><img class="logo-modal" src="../logo/logo_transparent.png"></p>
            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
            <p>Пользовательское Соглашение<br>
                Настоящее Пользовательское Соглашение (Далее Соглашение) регулирует отношения между владельцем pfumiko.ru (далее pfumiko.ru или Администрация) с одной стороны и пользователем сайта с другой.<br>
                Сайт pfumiko.ru не является средством массовой информации.</p>

            <p>Используя сайт, Вы соглашаетесь с условиями данного соглашения.<br>
                Если Вы не согласны с условиями данного соглашения, не используйте сайт pfumiko.ru!</p>

            <p>Права и обязанности сторон<br>
                Пользователь имеет право:<br>
                - получать информацию на сайте<br>
                - использовать информацию сайта в личных некоммерческих целях</p>

            <p>Администрация имеет право:<br>
                - по своему усмотрению и необходимости создавать, изменять, отменять правила<br>
                - ограничивать доступ к любой информации на сайте</p>

            <p>Пользователь обязуется:<br>
                - не распространять информацию, которая направлена на пропаганду войны, разжигание национальной, расовой или религиозной ненависти и вражды, а также иной информации, за распространение которой предусмотрена уголовная или административная ответственность<br>
                - не нарушать работоспособность сайта<br>
                - не создавать несколько учётных записей на Сайте, если фактически они принадлежат одному и тому же лицу<br>
                - не совершать действия, направленные на введение других Пользователей в заблуждение<br>
                - не передавать в пользование свою учетную запись и/или логин и пароль своей учетной записи третьим лицам<br>
                - не регистрировать учетную запись от имени или вместо другого лица за исключением случаев, предусмотренных законодательством РФ<br>
                - не использовать скрипты (программы) для автоматизированного сбора информации и/или взаимодействия с Сайтом и его Сервисами</p>

            <p>Администрация обязуется:<br>
                - поддерживать работоспособность сайта за исключением случаев, когда это невозможно по независящим от Администрации причинам.<br>
                - осуществлять разностороннюю защиту учетной записи Пользователя</p>

            <p>Ответственность сторон<br>
                - администрация не несёт ответственность за несовпадение ожидаемых Пользователем и реально полученных услуг<br>
                - администрация не несет никакой ответственности за услуги, предоставляемые третьими лицами<br>
                - в случае возникновения форс-мажорной ситуации (боевые действия, чрезвычайное положение, стихийное бедствие и т. д.) Администрация не гарантирует сохранность информации, размещённой Пользователем, а также бесперебойную работу информационного ресурса</p>

            <p>Условия действия Соглашения<br>
                Данное Соглашение вступает в силу при регистрации на сайте.<br>
                Соглашение перестает действовать при появлении его новой версии.<br>
                Администрация оставляет за собой право в одностороннем порядке изменять данное соглашение по своему усмотрению.<br>
                Администрация не оповещает пользователей об изменении в Соглашении.</p>

            <br>
            <p>Соглашение разработано на базе юридических документов сервиса Правилль</p>
        </div>
    </div>
</div>
    <?php
        }else {
    ?>
    <div id="authorized">
        <h2>Вы уже зарегистрированы</h2>
    </div>
    <?php
}
?>
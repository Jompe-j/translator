<?php

require_once 'Controller/Translator.php';

echo '
    <form method="post">
        <input type="input" name="message" />
        <input type="submit" />
    </form>
    <p>' . response() . '</p>
';
<?php
if (file_exists($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/include/functions.php"))
    require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/include/functions.php");

function my_dump($var) {
    global $USER;
    if ($USER->isAdmin()) {
    ?>
    <pre>
        <?php print_r($var) ?>
    </pre>
<?php
    }
}
?>
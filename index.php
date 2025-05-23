<?php
require_once "config.php";
require_once BASE_PATH . "/utils/Require.utils.php";
$pageTitle = "AD Task 2";
$cssFile = BASE_URL . "/assets/css/style.css";
headComponent($pageTitle, $cssFile);
?>

<body>
    <?php
    include "components/templates/header.component.php";
    include "components/templates/homePageMain.component.php";
    include "components/templates/footer.component.php"
    ?>
</body>
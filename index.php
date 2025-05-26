<?php
require_once __DIR__ . "/utils/Require.utils.php";
$pageTitle = "AD Task 2";
$cssFile = "/assets/css/style.css";
headComponent($pageTitle, $cssFile);
?>

<body>
    <?php
    include __DIR__ . "/components/templates/header.component.php";
    include __DIR__ . "/components/templates/homePageMain.component.php";
    include __DIR__ . "/components/templates/footer.component.php"
    ?>
</body>
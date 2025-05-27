<?php
$cssFile = __DIR__ . "/../components/cssComponents/card.component.css";
?>
<link rel="stylesheet" href="/components/cssComponents/card.component.css">

<?php
function displayCards($cardsList, $type = '') {
    foreach ($cardsList as $card) { ?>
        <a class="card" href="<?php echo $card['link']; ?>" target="_blank">
            <img src="<?php echo $card['image']; ?>" alt="<?php echo $card['title']; ?>" />
            <div class="text">
                <div class="title">
                    <p><strong><?php echo $card['title']; ?></strong></p>
                    <p><?php echo $card['alternative_title']; ?></p>
                </div>
                <div class="desc">
                    <p><strong>Status: </strong><?php echo $card['status']; ?></p>
                    <?php if ($type == "manga"): ?>
                        <p><strong>Authors: </strong><?php echo implode(",", $card['authors']); ?></p>
                        <p><strong>Artists: </strong><?php echo implode(",", $card['artists']); ?></p>
                    <?php elseif ($type == "anime"): ?>
                        <p><strong>Source: </strong><?php echo implode(",", $card['source']); ?></p>
                        <p><strong>Studio: </strong><?php echo implode(",", $card['studio']); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </a>
        <?php
    }
}

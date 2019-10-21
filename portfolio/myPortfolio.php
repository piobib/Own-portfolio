<?php
if (isset($_GET['project'])) {

    $ROOT = "/PB";
    include('../header.php');
    require_once '../config/connect.php';
    $cleanName = filter_input(INPUT_GET, 'project', FILTER_SANITIZE_STRING);
    $query = $db->prepare("SELECT * FROM projekty WHERE url=:url");
    $query->bindValue(':url', $cleanName, PDO::PARAM_STR);
    $query->execute();
    $project = $query->fetch();
    ?>
    <div style="background-color: black; width: 90%;">
        <div class="portfolio-main-div">
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="portfolio-details">
                        <div class="portfolio-name"><?= $project['name'] ?></div>
                        <div class='portfolio-technologies'>
                            <?= $project['technologies'] ?>
                        </div>
                        <div class='portfolio-year'>
                            <b>Rok realizacji:</b> <?= $project['year'] ?>
                        </div>
                        <div class="portfolio-description-long"><?php wdowki($project['description_long']) ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <?php
                    include_once('../fancy/fancy.php');
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php
} else {
    echo "Brak odpowiedniej zawartości do wyświetlenia.";
}
?>
</div>
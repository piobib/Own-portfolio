<?php
if (isset($_GET['id1'])) {
    $cleanName = filter_input(INPUT_GET, 'id1', FILTER_SANITIZE_STRING);
    $query = $db->prepare("SELECT * FROM projekty WHERE url=:url");
    $query->bindValue(':url', $cleanName, PDO::PARAM_STR);
    $query->execute();
    $project = $query->fetch();

    function wdowki($str)
    {
        $new = preg_replace('/ ([a-zA-Z]{1}) /', " $1&nbsp;", $str);
        echo $new;
    }

    ?>
    <div class="row mb-2" style="width: 100%;">
        <div class="col-md-2" style="color: white;">
            <ul class="portfolio-menu-ul">
                <?php
                $query = $db->query("SELECT short_name, url FROM projekty");
                $menu = $query->fetchAll();

                foreach ($menu AS $position) {
                    $class='';
                    if($cleanName==$position['url']){
                        $class='class="portfolio-menu-active"';
                    }
                    echo "<a href='./" . $position['url'] . "'><li ".$class.">" . $position['short_name'] . "</li></a>";

                }
                ?>
            </ul>
        </div>


        <div class="col-md-10">
            <div class="portfolio-main-div">
                <div class="row mb-2">
                    <div class="col-md-5">
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


                    <div class="col-md-7">
                        <?php
                        include_once('fancy/fancy.php');
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    print "<meta http-equiv='Refresh' content='0; url=../'>";
}
?>
</div>

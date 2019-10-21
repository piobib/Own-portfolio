<div style='width: 95%; margin: 0 auto; text-align: center;'>
    <h2 style='color: white; margin: 0 auto; margin-top: 20px; margin-bottom: 10px;'>WYBRANE PROJEKTY:</h2>
    <section style='padding: 30px;' id='portfolio'>
        <div class="row mb-2">
            <?php

            $query = $db->query("SELECT name, year, description_short, technologies, url, path, main_photo FROM projekty");
            $projects = $query->fetchAll();
            foreach ($projects AS $project) {
                ?>
                <div class="col-lg-4">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 h-md-250 position-relative hover-shadow">
                        <a href="<?php echo $project['url'] ?>" class="link-details">
                            <div class='portfolio-cover' style='background-image:
                                url("<?php echo $ROOT; ?>/portfolio/<?php echo $project['path'] ?>/midi/<?php echo $project['main_photo'] ?>");'>
                                <div class="details-hover-background">
                                </div>
                            </div>
                            <div style="min-height: 180px;">
                            <div class='portfolio-title'><?= $project['name'] ?>
                            </div>
                            <div class='portfolio-description'><?= $project['description_short'] ?>
                            </div>
                            </div>
                            <div class='portfolio-technologies'>
                                <?= $project['technologies'] ?>
                            </div>
                            <div class='portfolio-year'>
                                <b>Rok realizacji:</b> <?= $project['year'] ?>
                            </div>
                    </div>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    </section>

</div>               
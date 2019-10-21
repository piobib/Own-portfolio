<div class="row mb-2">
    <?php

    if ($project['video']) {

        ?>
        <iframe style="width: 99%; height: 400px; margin: 0 auto;" src="<?php echo $project['video'] ?>" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        <?php

    }

    $pliki = scandir("../portfolio/$project[path]/mini", 0);

    foreach ($pliki as $plik) {
        if ($plik != "." && $plik != "..") {
            ?>
            <div class="col-md-4" style="margin: 0; padding: 5px;">
                <div style="width: 99%; border: 1px solid grey; height: 140px; text-align: center; padding-top: 10px;">
                    <a data-fancybox="gallery"
                       href="<?php echo $ROOT; ?>/portfolio/<?php echo $project['path'] ?>/midi/<?php echo $plik ?>">
                        <div style="background-image: url('<?php echo $ROOT; ?>/portfolio/<?php echo $project['path'] ?>/midi/<?php echo $plik ?>')"
                             class="image-gallery-min"></div>
                    </a></div>
            </div>
            <?php
        }
    }
    ?>
</div>

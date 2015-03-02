<div class="block-services-7">
    <div class="grid-col grid-col-3">
        <div class="carousel">
            <div>
                <?php
                $i = 1;
                foreach ($rows as $id => $row):
                    ?>
                    <a href="#services<?php echo $i; ?>" <?php
                    if ($i == 1) {
                        echo "class='active'";
                    }
                    ?>>
                           <?php print $row; ?>
                    </a>
                    <?php if ($i == 4): ?>
                    </div>
                    <div>
                        <?php
                    endif;
                    $i++;
                endforeach;
                ?>
            </div>
        </div>
    </div>
</div>
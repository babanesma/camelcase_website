<div class="block block-catalog-grid">
    <div class="block-head"><?php print t('Latest Products'); ?></div>
    <div class="carousel">
        <div>
            <ul>
                <?php
                $i = 1;
                foreach ($rows as $id => $row):
                    print $row;
                    if ($i == 3 || $i == 6):
                        echo '</ul></div><div><ul>';
                    endif;
                    $i++;
                endforeach;
                ?>
            </ul>
        </div>
    </div>
</div>
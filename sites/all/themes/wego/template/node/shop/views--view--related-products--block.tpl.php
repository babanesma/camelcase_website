<div class="block block-catalog-list">
    <div class="block-head"><?php print t('Related Products'); ?></div>
    <div class="carousel">
        <div>
            <ul>
                <?php 
                    $i = 1;
                    foreach ($rows as $id => $row):
                        print $row;
                        if($i==2 || $i == 4):
                            echo '</ul></div><div><ul>';
                        endif;
                    endforeach;
                ?>
            </ul>
        </div>
    </div>
</div>
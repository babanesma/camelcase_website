<div class="block-services-7">
    <div class="grid-col grid-col-9">
        <?php
        $i = 1;
        foreach ($rows as $id => $row):
            ?>
            <div id="services<?php echo $i; ?>" class="info clearfix <?php
                 if ($i == 1) {
                     echo 'active';
                 }
                 ?>">
                     <?php print $row; ?>            
                     <?php $i++; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
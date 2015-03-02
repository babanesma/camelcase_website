<div class="grid-row">
    <div class="block block-team">
        <div class="carousel">
            <div>
                <ul>
                    <?php $i = 1; foreach ($rows as $id => $row): ?>
                               <?php print $row; ?>
                    <?php if($i==3): ?>
                </ul>
                    </div>
                    <div>
                <ul>
                    <?php endif; ?>
                   <?php $i++; endforeach; ?>
                </ul>
            </div>
        </div>       
    </div>
</div>
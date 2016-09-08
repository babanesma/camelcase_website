<div class="grid-row">
    <!-- team -->
    <div class="block block-team-2">
        <div class="carousel">
            <div>
                <ul>
                    <?php $i = 1; ?>
                    <?php foreach ($rows as $id => $row): ?>
                        <?php print $row; ?>

	                    <?php if ($i%4 == 0): ?>
	                        	</ul>
	                    	</div>
	                    	<?php if (isset($rows[$i+1])): ?>
		                	    <div>
		                    	    <ul>
	                        <?php endif; ?>
	                    <?php endif; ?>

                        <?php $i++; ?>
                    <?php endforeach; ?>     
                </ul>
            </div>
        </div>
    </div>
    <!--/ team -->
</div>

<li>
    <div class="knob">
        <input type="text" readonly value="<?php echo $node->field_skills_percent['und'][0]['value']; ?>" data-min="0" data-max="100">
        <span><?php echo $node->field_skills_percent['und'][0]['value']; ?><em>%</em></span>
    </div>
    <h3><?php echo $title; ?></h3>
    <p><?php print strip_tags($node->body['und'][0]['summary']); ?></p>
</li>
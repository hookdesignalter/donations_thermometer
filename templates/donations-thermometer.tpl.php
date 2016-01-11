  <div id="donations_thermometer-<?php print $block_id ?>">
      <div class="gauge-<?php print $size ?> <?php print $orientation ?> ">
      <div class="current-value" style="height: <?php print $percent; ?>%;">
        <p><?php print $percent; ?>% </p>
      </div>
    </div>
    <div id="donation-statistics">
    <p>
      <label><?php print t('Current:'); ?></label>
      <span class="donations_thermometer-amount"><?php print $prefix; ?><?php print number_format($current); ?><?php print $postfix; ?></span>
    </p>
    <p>
      <label><?php print t('Goal:'); ?></label>
      <span class="donations_thermometer-amount"><?php print $prefix; ?><?php print number_format($goal); ?><?php print $postfix; ?></span>
    </p>
  </div>
</div>
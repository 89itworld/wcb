<?php
        $alphabet = array("All","0-9", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
?>
<?php foreach($alphabet as $letter): ?>
        <?php if($letter != 'All'): ?>
<li> <?php echo link_to(Config::get('SITE_URL')."retailer/".$letter, $letter, []); ?></li>
        <?php else: ?>
                <li> <?php echo link_to(Config::get('SITE_URL')."retailer", $letter, []); ?></li>
        <?php endif; ?>
<?php endforeach; ?>

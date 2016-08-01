<div class="srightBlk row">
                  <h3>Select Category</h3>
    <?php   $categories=MyFuncs::getCategories(); ?>

    <ul>
                      <li><?php echo e(Html::link(Config::get('SITE_URL').'/retailer',"All Stores")); ?></li>
                      <?php foreach($categories as $category): ?>
                      <li> <?php echo link_to(Config::get('SITE_URL')."category/".$category->category_url, $category->name, []); ?></li>
                      <?php endforeach; ?>
                  </ul>
</div> <!-- srightBlk -->


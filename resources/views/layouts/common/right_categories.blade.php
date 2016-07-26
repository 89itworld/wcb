<div class="srightBlk row">
                  <h3>Select Category</h3>
    @var  $categories=MyFuncs::getCategories()

    <ul>
                      <li>{{ Html::link(Config::get('SITE_URL').'/retailer',"All Stores")}}</li>
                      @foreach($categories as $category)
                      <li> {!! link_to(Config::get('SITE_URL')."category/".$category->category_url, $category->name, []) !!}</li>
                      @endforeach
                  </ul>
</div> <!-- srightBlk -->


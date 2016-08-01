<?php $__env->startSection('content'); ?>
    <div id="innerPage">
        <div class="container">
            <div class="row innertitle">
                <h3>All Stores</h3>
            </div> <!-- innertitle -->
            <div class="row">
                <div class="store-left">
                    <div class="sorybyalpha">
                        <ul class="salpha">
                            <?php echo $__env->make('layouts.common.alph_search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </ul>
                    </div> <!-- sorybyalpha -->
                    <div class="sort-filter">
                        <?php echo Form::open(['url' => 'retailer', 'method' => 'get', 'role' => 'form', 'class' => '','id'=>'search_criteria','name'=>'search_criteria']); ?>

                        <div class="sortBy">
                            <label>Sort by</label>
                            <?php echo Input::old('sort_by'); ?>

                            <?php   $sort_by_sources=array('title'=>'Name','visits'=>'Popularity','added'=>'Newest','cashback'=>'Cashback'); ?>
                            <?php echo Form::select('sort_by', $sort_by_sources, Input::get('sort_by'), ['id' => 'sort_by', 'class' => 'form-control','onChange'=>'document.search_criteria.submit()']); ?>

                        </div> <!-- sortBy -->
                        <div class="sortBy">
                        <?php   $show_type_sources=array('ASC'=>'Ascending','DESC'=>'Descending');; ?>
                        <?php echo Form::select('show_type', $show_type_sources, Input::get('show_type'), ['id' => 'show_type', 'class' => 'form-control','onChange'=>'document.search_criteria.submit()']); ?>

                        </div>
                        <div class="sortBy">
                            <?php echo e(Form::Label('show','City:')); ?>

                            <?php   $show_sources=array('All'=>'All','12'=>'12','24'=>'24','52'=>'52','100'=>'100');; ?>
                            <?php echo Form::select('show', $show_sources, Input::get('show'), ['id' => 'show', 'class' => 'form-control','onChange'=>'document.search_criteria.submit()']); ?>

                        </div> <!-- sortBy -->
                        <div class="resultcount">
                            <?php echo Form::hidden('letter', isset($letter)?$letter:Input::get('letter'), ['id' => 'letter', 'class' => 'form-control']); ?>


                            <?php echo Form::hidden('cat', isset($cat)?$cat:Input::get('cat'), ['id' => 'cat', 'class' => 'form-control']); ?>



                            <label>Showing <?php echo $page_data['first_item']; ?>-<?php echo $page_data['last_item']; ?> of <?php echo $page_data['total_items']; ?></label>
                        </div> <!-- resultcount -->
                        <?php echo Form::close(); ?>

                    </div> <!-- sort-filter -->

                    <div class="storeResult scroll">
                        <?php foreach($retailers as $key=>$retailer): ?>
                            <div class="storeList">
                                <div class="storeImg">
                                    <?php echo Html::image("public/images/logos/".$retailer->image,$alt="whitecashback-".$retailer->slug); ?>

                                    <p>
                                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    </p>
                                </div> <!-- storeImg -->
                                <div class="storetxt">

                                    <h3><a href="<?php echo Config::get('SITE_URL')."view-retailer/".$retailer->slug; ?>"><?php echo $retailer->title; ?></a></h3>
                                    <p><?php echo $retailer->description; ?> </p>
                                    <ul>
                                        <li><a href="" class="like"><i class="fa fa-thumbs-up"></i><b>Like</b></a></li>
                                        <li><a href=""><i class="fa fa-file-text"></i><b>Cashback Terms</b></a></li>
                                    </ul>
                                </div> <!-- storetxt -->
                                <div class="storeBtn">
                                    <h3>Upto <b><i class="fa fa-rupee"></i>300</b> <br />Cashback</h3>
                                    <a href="">Grab Deal</a>
                                </div> <!-- storeBtn -->
                            </div> <!-- storeList -->
                    <?php endforeach; ?>

                    <?php echo e($retailers->links()); ?>

<?php /*
                     <?php echo $retailers->render(); ?>

*/ ?>
                    <!--
                            -->
                    </div> <!-- storeResult -->
                </div> <!-- store-left -->
                <div class="store-right">
                    <?php echo $__env->make('layouts.common.right_categories', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <div class="srightBlk row">
                        <h3>New Stores</h3>
                        <div class="newStore">
                            <img src="images/shoplogos/myntra.jpg" alt="" />
                            <h4>Get Cashback<br /> Rs 500</h4>
                        </div> <!-- newStore -->
                        <div class="newStore">
                            <img src="images/shoplogos/snapdeal.jpg" alt="" />
                            <h4>Get Cashback<br /> Rs 500</h4>
                        </div> <!-- newStore -->
                        <div class="newStore">
                            <img src="images/shoplogos/shopclues.jpg" alt="" />
                            <h4>Get Cashback<br /> Rs 500</h4>
                        </div> <!-- newStore -->
                    </div> <!-- srightBlk -->
                </div> <!-- store-right -->
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- innerPage -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
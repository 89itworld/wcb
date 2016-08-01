<?php $__env->startSection('content'); ?>
    <div class="content-box main-padding">
        <div class="up-links text-right">
            <h5 class="left">List Retailers</h5>
            <a href="http://103.205.244.10/cs/admin/importRetailers.php"><i class="fa fa-sign-in"></i> Import Retailers</a>
            <a href="http://103.205.244.10/cs/admin/updateImages.php"> <i class="fa fa-upload"></i> Update Images</a>
            <a href="retailers/add"><i class="fa fa-plus"></i>Add Retailer</a>
        </div>
        <hr>

        <div class="small-12 columns no-padding">
            <form method="get" name="sorting">
                <input type="hidden" id="page" name="page" value="0"/>				<div class="small-6 columns no-padding">
                    <div class="small-4 columns no-padding">
                        <div class="small-2 columns text-left no-padding">
                            <label for="" class="line-height-25">Sort</label>
                        </div>
                        <div class="small-10 columns">
                            <select class="select-box" name="sort" onchange="javascript:document.sorting.submit();">
                                <option value="retailer_id">ID</option>
                                <option value="title" >Title
                                </option>
                                <option value="featured" >Is Featured
                                </option>
                                <option value="status" >Status
                                </option>
                                <option value="added" >Created
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="small-3 columns no-padding ">
                        <select class="select-box" name="order" onchange="javascript:document.sorting.submit();">
                            <option value="ASC" >Ascending
                            </option>
                            <option value="DESC" >Descending
                            </option>
                        </select>
                    </div>
                    <div class="small-5 columns no-padding">
                        <div class="small-3 columns ">
                            <label for="" class="line-height-25">View</label>
                        </div>
                        <div class="small-9 columns ">
                            <select class="select-box" name="records_per_page"
                                    onchange="javascript:document.sorting.submit();">
                                <option value="10" >10 Records
                                </option>
                                <option value="20" >20 Records
                                </option>
                                <option value="30" >30 Records
                                </option>
                                <option value="40" >40 Records
                                </option>
                                <option value="50" >50 Records
                                </option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="small-6 columns no-padding">
                    <div class="small-8 columns">
                        <div class="row collapse">
                            <div class="small-10 columns">
                                <input style="height: 25px; padding: 0px 6px;" type="text" placeholder="Search" name="q"
                                       value="" required>
                            </div>
                            <div class="small-2 columns">
                                <button class="button postfix hit-search" type="submit" onclick="javascript:document.getElementById('page').value='0';">Go</button>
                            </div>
                        </div>
                    </div>
                    <div class="small-4 columns no-padding text-right">
                        <p class="font-11 showing-result">
                            <?php
                                $currentPage = $retailers->currentPage();
                                $perPage = $retailers->perPage();
                                $startFrom = ($currentPage * $perPage )-$perPage;
                                $end = $startFrom + $perPage;
                                if ( $end >= $retailers->total() ) $end = $retailers->total();
                            ?>
                           Showing <?php echo e($startFrom+1); ?> - <?php echo e($end); ?>						                                  of <?php echo e($retailers->total()); ?></p>
                    </div>
                </div>
            </form>
        </div>

        <div class="content-box-content">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <thead>
                <tr class="table-box gray">
                    <th width="5%" class="no-bottom-padding">
                        <div class="input checkbox">
                            <input class="rounded" id="check_all" value="1"
                                   type="checkbox">
                        </div>
                    </th>
                    <th class="font-12">ID</th>
                    <th width="10%" class="font-12">Title</th>
                    <th class="font-12">Affiliate Network</th>
                    <th width="10%" class="font-12">Cashback</th>
                    <th width="10%" class="font-12">Coupens</th>
                    <th width="10%" class="font-12">visits</th>
                    <th width="10%" class="font-12">Status</th>
                    <th width="10%" class="black-color font-12">Date Added</th>
                    <th class="black-color font-12" width="12%">Actions</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach( $retailers as $retailer ): ?>
                    <tr>
                        <td><Input type = 'checkbox' class = 'id_of_retailers'  name = 'ids[]' value = <?php echo e($retailer->retailer_id); ?>></td>
                        <td><?php echo e($retailer->retailer_id); ?></td>
                        <td><?php echo e($retailer->title); ?></td>
                        <td><?php echo e(isset($retailer->Affnetwork->network_name) ? $retailer->Affnetwork->network_name : '---'); ?></td>
                        <td><?php echo e($retailer->cashback); ?></td>
                        <td></td>
                        <td><?php echo e($retailer->visits); ?></td>

                        <td>
                            <?php if($retailer->status == 'active'): ?>
                                <h6 class="font-11 active  tip-top"><i class="fa fa-check-circle"></i> Active</h6>
                            <?php else: ?>
                                <h6 class="font-11 deactive tip-top"><i class="fa fa-check-circle"></i> Inactive</h6>
                            <?php endif; ?>
                        </td>
<!--                        --><?php //$d = new DateTime($retailer->added); ?>
                        <td><?php echo e(date('d M Y', strtotime($retailer->added))); ?></td>
                        <td>
                            <a href="view/retailers/<?php echo e($retailer->retailer_id); ?>" class = 'black-color font-13 action tip-top' title ='view'><?php echo '<i class ="fa fa-search"></i>'; ?></a>
                            <a href="edit/retailers?id=<?php echo e($retailer->retailer_id); ?>" class = "black-color font-13 action tip-top" title = 'edit'><?php echo '<i class="fa fa-pencil-square-o"></i>'; ?></a>

                            <form style="display:none;" name="post_tid<?php echo e($retailer->retailer_id); ?>" method="post" action="del/retailer"><input type='hidden' name='id' value='1' /><input type='hidden' name='action' value='deleteRetailer' /></form><a href='javascript:void(0);' onclick="if(confirm('Are you sure you want to delete this retailer?')){document.post_tid<?php echo e($retailer->retailer_id); ?>.submit();}else{return false;}" class='black-color font-13 action tip-top'  data-tooltip-title='Delete' ><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <!-- Active and Deactive Button -->
            <div class="left">
                <button type="submit" class="button tiny success" id="activate_button">Activate</button>
                <button type="submit" class="button tiny alert" id="deactivate_button">Deactivate</button>
            </div>

            <!-- Pagination  -->
            <div class = 'right'>
                <?php echo $retailers->render(); ?>

            </div>
            <!-- end pagination -->

            <div class="clearfix"></div>
            <div class="icon-lgnd">
                <span class="gray block padding-10 legend">Legend</span>
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>
                        <td width="10%" class="font-18 active"><i class="fa fa-check-circle "></i> Active</td>
                        <td width="10%" class="font-18 inactive"><i class="fa fa-check-circle"></i> Inactive</td>
                        <td width="10%" class="font-18 disable"><i class="fa fa-ban "></i> Disable</td>
                        <td width="10%" class="font-18"><i class="fa fa-search"></i> &nbsp;<span>View</span></td>
                        <td width="10%" class="font-18"><i class="fa fa-pencil-square-o "></i> Edit</td>
                        <td width="10%" class="font-18"><i class="fa fa-trash-o"></i> Delete</td>
                        <td width="10%" class="font-18 active"><i class="fa fa-star"></i> Marked</td>
                        <td width="20%" class="font-18 inactive"><i class="fa fa-star"></i> Unmarked</td>
                        <td width="40%">&nbsp;</td>
                    </tr>
                    </tbody>
                </table>
            </div>		</div>
    </div>
    <script type="text/javascript">
        function submitForm(data,action){
            var html='';
            $.each(data,function(k,v){
//			console.log(v);
                html+='<input type="hidden" name="'+v.name+'" value="'+v.value+'" />';
            });
            $('<form>', {
                "method":'post',
                "html": html+'<input type="hidden" name="action" value="' + action + '" />',
                "action": "http://103.205.244.10/cs/admin/actions.php"
            }).appendTo(document.body).submit();
        }
        $(document).ready(function(){
            $('#check_all').click(function(){
                if($(this).prop('checked')==true){
                    $('.id_of_retailers').prop('checked',true);
                }else{
                    $('.id_of_retailers').prop('checked',false);
                }
            });
            $('#activate_button').click(function(){
                var id=$('.id_of_retailers').serializeArray();
                if(id.length>0){
                    submitForm(id,'multipleActivateRetailers');
                }else{
                    alert('Please Select Atleast 1 Retailer.');
                }
            });
            $('#deactivate_button').click(function(){
                var id=$('.id_of_retailers').serializeArray();
                if(id.length>0){
                    submitForm(id,'multipleDeactivateRetailers');
                }else{
                    alert('Please Select Atleast 1 Retailer.');
                }
            });
            $('.id_of_retailers').click(function(){
                if($(this).prop('checked')==false){
                    $('#check_all').prop('checked',false);
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
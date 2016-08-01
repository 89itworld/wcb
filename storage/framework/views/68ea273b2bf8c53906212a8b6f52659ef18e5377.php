<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="small-12 columns">

            <div class="small-12 columns bottom-margin-20">
                <h5 class="left">Dashboard</h5>
                <h5 class="right"><a href="#" class="text-color"><i class="fa fa-cogs"></i> Settings</a></h5>
                <hr>
                <div class="dashboard-info">
                    <div class="small-6 columns no-padding">
                        <h6 class="font-11"><strong class="font-12 color-green">CashbackScript</strong> version: 	1.1</h6>
                    </div>
                    <div class="small-6 columns no-padding text-right">
                        <h6 class="font-11">License Key: 	4614-1687-4309-5974-3768</h6>
                    </div>
                </div>

            </div>

            <!--<div class="small-12 columns bottom-margin-10">
                <div class="db-wrap">
                    <h5 class="font-13 text-info-bar"><strong>Clicks information</strong></h5>
                    <table class="info-table" style="width:100%">
                        <tr>
                            <td>Clicks Today:</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Clicks Yesterday:</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Last 7 Days Clicks:</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Last 30 Days Clicks:</td>
                            <td>94</td>
                        </tr>

                    </table>
                </div>
            </div>-->

            <div class="small-12 columns bottom-margin-10">
                <div class="db-wrap">
                    <h5 class="font-13 text-info-bar"><strong>Most viewed</strong></h5>
                    <table class="info-table" style="width:100%">
                        <tr>
                            <td>Flipkart</td>
                            <td>50 times</td>
                        </tr>
                        <tr>
                            <td>Amazone</td>
                            <td>100 times</td>
                        </tr>
                        <tr>
                            <td>Snapdeal</td>
                            <td>45 times</td>
                        </tr>
                        <tr>
                            <td>ebay</td>
                            <td>100 times</td>
                        </tr>

                    </table>

                </div>
            </div>

            <!--<div class="small-12 columns bottom-margin-10">
                <div class="db-wrap">
                    <h5 class="font-13 text-info-bar"><strong>Summery</strong></h5>
                    <table class="info-table" style="width:100%">
                        <tr>
                            <td>Total Retailers:</td>
                            <td>3617</td>
                        </tr>
                        <tr>
                            <td>Total Cashback:</td>
                            <td>$43515.87</td>
                        </tr>
                    </table>
                </div>
            </div>-->
            <div class="small-12 columns bottom-margin-10">
                <div class="db-wrap">
                    <h5 class="font-13 text-info-bar"><strong>Update All Retailers</strong></h5>
                    <table class="info-table" style="width:100%">
                        <tr>
                            <td>Update:</td>
                            <td><a href="http://103.205.244.10/cs/admin/updateAll.php?id=1" target="_blank">
                                    <div class="update_retailers">Update All Retailers</div></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
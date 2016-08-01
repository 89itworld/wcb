<?php $__env->startSection('content'); ?>
<h2>Add Retailer</h2>

<script type="text/javascript">
    <!--
    function hiddenDiv(id,showid){
        if(document.getElementById(id).value != ""){
            document.getElementById(showid).style.display = "";
        }else{
            document.getElementById(showid).style.display = "none";
        }
    }
    -->
</script>


<form action="" method="post" name="form1">
    <?php echo e(csrf_field()); ?>

    <table bgcolor="#F9F9F9" width="100%" cellpadding="2" cellspacing="3"  border="0" align="center">
        <tr>
            <td colspan="2" align="right" valign="top"><font color="red">* denotes required field</font></td>
        </tr>
        <tr>
            <td width="30%" valign="middle" align="right" class="tb1"><span class="req">* </span>Title:</td>
            <td width="70%" valign="top"><input type="text" name="title" id="rname" value="" size="62" class="textbox" />
                <?php if($errors->first('title')): ?> <small class="error"><?php echo e($errors->first('title')); ?></small> <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td width = '30%' valign = 'middle' align = 'right' class = 'tb1'><span>Slug:</span></td>
            <td width = '70%' valign = 'top'><input type="text" name = 'slug' id = 'slug' value = '' class = 'textbox' />
                <?php if($errors->first('slug')): ?> <small class="error"><?php echo e($errors->first('slug')); ?></small> <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td nowrap="nowrap" width="30%" valign="middle" align="right" class="tb1">Affiliate Network:</td>
            <td width="70%" valign="top">
                <select class="textbox2" id="network_id" name="network_id" onchange="javascript:hiddenDiv('network_id','program_id')"  style="width: 130px;">
                    <option value="">-----------------------</option>
                    <option value="13">Admitad</option><option value="3">Affiliate Window</option><option value="4">AffiliateFuture</option><option value="14">Affilinet</option><option value="19">Bigrock</option><option value="5">Buy.at</option><option value="1">Commission Junction</option><option value="18">Cuelinks</option><option value="11">Daisycon</option><option value="10">Linkshare</option><option value="16">OMG optimisemedia</option><option value="17">Payoom</option><option value="8">Pepperjam Network</option><option value="9">ShareASale</option><option value="2">TradeDoubler</option><option value="12">Tradetracker</option><option value="20">Tyroo</option><option value="15">vCommission</option><option value="6">Webgains</option><option value="7">Zanox</option>			</select>
            </td>
        </tr>
        <tr id="program_id" style="display: none;" >
            <td valign="middle" align="right" class="tb1">Program ID:</td>
            <td valign="top"><input type="text" name="program_id" value="" size="21" class="textbox" /><span class="note">Merchant ID from affiliate network</span></td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Category:</td>
            <td valign="top">
                <div class="scrollbox">
                    <?php if($categories): ?>
                        <?php $i = 1;?>
                        <?php foreach($categories as $category): ?>
                            <?php
                                $class = ($i%2 == 0) ? 'odd'   :'even';
                                $i++;
                            ?>
                            <div class = <?php echo e($class); ?>>
                                <input name = 'category_id[]' value="<?php echo e($category->category_id); ?>" type ='checkbox'><?php echo e($category->name); ?>

                            </div>
                        <?php endforeach; ?>
                     <?php endif; ?>

                </div>
            </td>
        </tr>
        <tr>
            <td width="30%" valign="middle" align="right" class="tb1">Country:</td>
            <td width="70%" valign="top">
                <div class="scrollbox">

                    <?php if($countries): ?>
                        <?php $i = 1;?>
                        <?php foreach($countries as $country): ?>
                            <?php
                            $class = ($i%2 == 0) ? 'odd'   :'even';
                            $i++;
                            ?>
                            <div class = <?php echo e($class); ?>>
                                <input name = 'country_id[]' value="<?php echo e($country->country_id); ?>" type ='checkbox'><?php echo e($country->name); ?>

                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </div>
            </td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Image URL:</td>
            <td valign="top"><input type="text" name="image" class="textbox" value="" size="62" /> <input type="checkbox" class="checkbox" name="image_save" value="1"  /> <img src="images/icons/download.png" /> download image <sup title="you must have allow_url_fopen set to on">?<sup></td>
        </tr>
        <tr>
            <td width="30%" valign="top" align="right" class="tb1" style="padding-top: 7px;"><span class="req">* </span>URL:</td>
            <td nowrap="nowrap" width="70%" valign="top">
                <input type="text" name="url" id="url" value="http://" size="100" class="textbox" /> <a id="show_info" href="javascript:void(0)"><img src="images/icons/notice.png" align="absmiddle" /></a>
                <div id="info" style="display: none;">
                    <table bgcolor="#F7F7F7" style="border-radius: 7px; padding: 5px; margin: 5px 0;" width="100%" cellpadding="2" cellspacing="2" border="0" align="left">
                        <tr valign="top">
                            <td colspan="2" align="left">
                                <p>If you are working with affiliate network(s), then please don't forget to add '<font color="#E72085">{USERID}</font>' to your link to track members.</p>
                                Here are some link examples:
                            </td>
                        </tr>
                        <tr valign="middle">
                            <td nowrap="nowrap" align="right"><b>ShareASale</b>:</td>
                            <td nowrap="nowrap" align="left"><font color="#30AF08">http://www.shareasale.com/r.cfm?u=zzzzz&b=xxxxx&m=yyyyy</font><font color="#E72085">&afftrack=<b>{USERID}</b></font></td>
                        </tr>
                        <tr valign="middle">
                            <td nowrap="nowrap" align="right"><b>Commission Junction</b>:</td>
                            <td nowrap="nowrap" align="left"><font color="#30AF08">http://www.kqzyfj.com/click-2538644-10432491</font><font color="#E72085">?sid=<b>{USERID}</b></font></td>
                        </tr>
                        <tr valign="middle">
                            <td nowrap="nowrap" align="right"><b>LinkShare</b>:</td>
                            <td nowrap="nowrap" align="left"><font color="#30AF08">http://click.linksynergy.com/fs-bin/click?offerid=4.1&subid=0&type=4</font><font color="#E72085">&u1=<b>{USERID}</b></font></td>
                        </tr>
                        <tr valign="middle">
                            <td nowrap="nowrap" align="right"><b>Zanox</b>:</td>
                            <td nowrap="nowrap" align="left"><font color="#30AF08">http://ad.zanox.com/ppc/?142171430629117663T</font><font color="#E72085">&zpar0=<b>{USERID}</b></font></td>
                        </tr>
                        <tr>
                            <td align="left">&nbsp;</td>
                            <td align="left">where <b>afftrack</b>, <b>sid</b>, <b>u1</b> and <b>zpar0</b> - SubID parameters</td>
                        </tr>
                    </table>
                </div>
                <?php if($errors->first('url')): ?> <small class="error"><?php echo e($errors->first('url')); ?></small><?php endif; ?>
            </td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Old Cashback:</td>
            <td valign="top">
                <input type="text" name="old_cashback" id="old_cashback" value="" size="4" class="textbox" />
                <select name="old_cashback_sign" class="textbox2">
                    <option value="%" >%</option>
                    <option value="currency" >Rs.</option>
                    <option value="points" >points</option>
                </select>
            </td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Cashback:</td>
            <td valign="top">
                <input type="text" name="cashback" id="cashback" value="" size="4" class="textbox" />
                <select name="cashback_sign" class="textbox2">
                    <option value="%" >%</option>
                    <option value="currency" >Rs.</option>
                    <option value="points" >points</option>
                </select>
            </td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Description:</td>
            <td valign="top"><textarea name="description" id="editor1" cols="75" rows="8" class="textbox2"></textarea></td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Cashback Rates:</td>
            <td valign="top"><textarea name="cashback_rates" id="editor2" cols="75" rows="8" class="textbox2"></textarea></td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Guideline To Earn:</td>
            <td valign="top"><textarea name="guidelines_to_earn" id="editor3" cols="75" rows="8" class="textbox2"></textarea></td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Important:</td>
            <td valign="top"><textarea name="important" id="editor4" cols="75" rows="8" class="textbox2"></textarea></td>
        </tr>
        <?php /*<script type="text/javascript" src="./js/ckeditor/ckeditor.js"></script>*/ ?>

        <?php echo Html::script('public/js/ckeditor/ckeditor.js'); ?>


        <script>
            CKEDITOR.replace( 'editor1' );
            CKEDITOR.replace( 'editor2' );
            CKEDITOR.replace( 'editor3' );
            CKEDITOR.replace( 'editor4' );
        </script>
        <tr>
            <td valign="middle" align="right" class="tb1">Conditions:</td>
            <td valign="top"><textarea name="conditions" cols="112" rows="4" style="width:590px;" class="textbox2"></textarea></td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Tags:</td>
            <td valign="top"><input type="text" name="tags" id="tags" value="" size="115" style="width:590px;" class="textbox" /></td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Website:</td>
            <td valign="top"><input type="text" name="website" id="website" value="" size="40" class="textbox" /><span class="note">e.g. amazon.com</span></td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">SEO Title:</td>
            <td valign="top"><input type="text" name="seo_title" id="seo_title" value="" size="115" style="width:590px;" class="textbox" /></td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Meta Description:</td>
            <td valign="top"><textarea name="meta_description" cols="112" rows="2" style="width:590px;" class="textbox2"></textarea></td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Meta Keywords:</td>
            <td valign="top"><input type="text" name="meta_keywords" id="meta_keywords" value="" size="115" style="width:590px;" class="textbox" /></td>
        </tr>
        <script>
            $(function() {
                $('#end_date').calendricalDate();
                $('#end_time').calendricalTime({
                    minTime: {hour: 0, minute: 0},
                    maxTime: {hour: 23, minute: 59},
                    timeInterval: 30
                })
            });
        </script>
        <tr>
            <td valign="middle" align="right" class="tb1">Expiry Date:</td>
            <td valign="middle"><input type="text" name="end_date" id="end_date" value="" size="10"  maxlength="10" class="textbox" />&nbsp; <input type="text" name="end_time" id="end_time" value="" size="6" maxlength="8" class="textbox" /><span class="note">YYYY-MM-DD &nbsp; HH:MM</span></td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Featured?</td>
            <td valign="middle"><input type="checkbox" class="checkbox" name="featured" value="1"  />&nbsp;Yes!</td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Store of the Week?</td>
            <td valign="middle"><input type="checkbox" class="checkbox" name="deal_of_week" value="1"  />&nbsp;Yes!</td>
        </tr>
        <tr>
            <td valign="middle" align="right" class="tb1">Status:</td>
            <td valign="middle">
                <select name="status" class="textbox2">
                    <option value="active" >active</option>
                    <option value="inactive" >inactive</option>
                    <option value="expired" >expired</option>
                </select>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2" valign="bottom">
                <input type="hidden" name="action" id="action" value="add">
                <input type="submit" class="submit" name="add" id="add" value="Add Retailer" />
            </td>
        </tr>
    </table>
</form>

<script type="text/javascript">
    $("#show_info").click(function () {
        $("#info").toggle("slow");
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
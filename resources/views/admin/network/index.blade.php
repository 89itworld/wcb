@extends('layouts.admin')
@section('content')
    <div class="content-box main-padding">

        <div class="up-links text-right">
            <h5 class="left">Affiliate Networks</h5>
            <a  href="http://www.cashbackengine.net/c/myproducts.php" target="_blank">
                {!! Html::image('/public/images/addons.png','altText',['align'=>'absmiddle']) !!}
                <b>Buy Addons</b></a>
            <a class="addnew" href="affnetwork_add.php">Add Affiliate Network</a>
        </div>
        <hr/>

        <table align="center" class="tbl" width="75%" border="0" cellpadding="5" cellspacing="0">
            <tr>
                <th width="40%">Affiliate Network</td>
                <th width="15%">Retailers</td>
                <th width="15%">Cashback Update</td>
                <th width="15%">Status</td>
                <th width="15%">Actions</td>
            </tr>

            @foreach( $affNetworks as $affNetwork )
                <tr>
                    <td>{{$affNetwork->network_name}}</td>
                    <td>{{count($affNetwork->Retailers)}}</td>
                    <?php
                    $format = '---';
                    if  ( $affNetwork->last_cashback_update !=  '0000-00-00 00:00:00.000000' ){
                     $format = date('d M Y', strtotime($affNetwork->last_cashback_update));
                        if ( $format == '01 Jan 1970') $format = '---';
                    }
                    ?>
                    <td>{{$format}}</td>
                    <td>
                        @if($affNetwork->status == 'active')
                            <h6 class="font-11 active  tip-top"><i class="fa fa-check-circle"></i> Active</h6>
                        @else
                            <h6 class="font-11 deactive tip-top"><i class="fa fa-check-circle"></i> Inactive</h6>
                        @endif
                    </td>
                    <td>
                        <a href="edit/affnetwork?id={{$affNetwork->network_id}}" class="black-color font-13 action tip-top" title="edit"><i class="fa fa-pencil-square-o"></i></a>
                    </td>
                </tr>
            @endforeach
        </table>

        <!-- Pagination  -->
        <div class = 'right'>
            {!! $affNetworks->render() !!}
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
        </div>
    </div>

@endsection

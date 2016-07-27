<?php
        $alphabet = array("All","0-9", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
?>
@foreach($alphabet as $letter)
        @if($letter != 'All')
<li> {!! link_to(Config::get('SITE_URL')."retailer/".$letter, $letter, []) !!}</li>
        @else
                <li> {!! link_to(Config::get('SITE_URL')."retailer", $letter, []) !!}</li>
        @endif
@endforeach


<?php
$last_segments = last(request()->segments());
?>

<ul class="tabs tabs-inline tabs-top">
    <li class='{{ ($last_segments=='rackHandling' || $last_segments=='driverMappingReport') ? 'active' : '' }}'>
        <a href="{{ url('/rackHandling') }}" style="font-weight:bold">
            <i class="fa fa-inbox"></i>Rack Handling</a>
    </li>
    <li class="{{ ($last_segments=='rackHandlingPayment' || $last_segments=='rackHandlingPaymentReport') ? 'active' : '' }}">
        <a href="{{ url('/rackHandlingPayment') }}" style="font-weight:bold">
            <i class="fa fa-share"></i>Rack Handling Payment</a>
    </li>    
</ul>
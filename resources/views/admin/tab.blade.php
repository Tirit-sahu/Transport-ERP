
<?php
$last_segments = last(request()->segments());
?>
<ul class="tabs tabs-inline tabs-top">
    <li class='{{ ($last_segments=='index') ? 'active' : '' }}'>
        <a href="{{ url('/admin/loading') }}" style="font-weight:bold">
            <i class="fa fa-inbox"></i>Loading Entery</a>
    </li>
    <li class="{{ ($last_segments=='receiving') ? 'active' : '' }}">
        <a href="{{ url('/admin/receiving') }}" style="font-weight:bold">
            <i class="fa fa-share"></i>Receiving</a>
    </li>
    <li class="{{ ($last_segments=='receivingPayment') ? 'active' : '' }}">
        <a href="{{ url('/admin/receivingPayment') }}" style="font-weight:bold">
            <i class="fa fa-book"></i>Payment</a>
    </li>

    <li class="{{ ($last_segments=='hemaliPayment') ? 'active' : '' }}">
        <a href="{{ url('/admin/hemaliPayment') }}" style="font-weight:bold">
            <i class="fa fa-book"></i>Hemali Payment</a>
    </li>
    
</ul>
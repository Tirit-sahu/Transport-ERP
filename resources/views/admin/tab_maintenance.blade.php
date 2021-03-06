<?php
$last_segments = last(request()->segments());
?>

<ul class="tabs tabs-inline tabs-top">
    <li class='{{ ($last_segments=='driverMapping' || $last_segments=='driverMappingReport') ? 'active' : '' }}'>
        <a href="{{ url('/driverMapping') }}" style="font-weight:bold">
            <i class="fa fa-inbox"></i>Driver Mapping</a>
    </li>
    <li class="{{ ($last_segments=='itemIssue' || $last_segments=='itemIssueReport') ? 'active' : '' }}">
        <a href="{{ url('/itemIssue') }}" style="font-weight:bold">
            <i class="fa fa-share"></i>Item Issue</a>
    </li>
    <li class="{{ ($last_segments=='truckService' || $last_segments=='truckServiceShow') ? 'active' : '' }}">
        <a href="{{ url('/truckService') }}" style="font-weight:bold">
            <i class="fa fa-book"></i>Truck Service</a>
    </li>

    <li class="{{ ($last_segments=='TruckOtherExpense' || $last_segments=='TruckOtherExpenseShow') ? 'active' : '' }}">
        <a href="{{ url('/TruckOtherExpense') }}" style="font-weight:bold">
            <i class="fa fa-money"></i>Truck Other Expenses</a>
    </li>
</ul>
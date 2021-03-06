<?php
$last_segments = last(request()->segments());
?>

<ul class="tabs tabs-inline tabs-top">
    <li class='{{ ($last_segments=='generateSalary' || $last_segments=='generateSalaryShow') ? 'active' : '' }}'>
        <a href="{{ url('/generateSalary') }}" style="font-weight:bold">
            <i class="fa fa-inbox"></i>Generate Salary</a>
    </li>
    {{-- <li>
        <a href="{{ url('/payEMI') }}" style="font-weight:bold">
            <i class="fa fa-share"></i>PAY EMI</a>
    </li> --}}
    
</ul>
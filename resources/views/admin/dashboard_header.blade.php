
<?php use \App\Http\Controllers\Admin\commonController;
use Illuminate\Http\Request;
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');
$dateTime = date('M d, Y');
$day = date('D', strtotime($date));
$time = date('H:i');
?>
<ul class="stats">
    <li class='satgreen'>
        <i class="fa fa-money"></i>
        <div class="details">
            <span class="big">{{ commonController::myQuery("SELECT SUM(cash_advance) AS resCol FROM `loading_entries` WHERE loading_date = '$date'") }}</span>
            <span>Today Cash Adv</span>
        </div>
    </li>
    <li class='lightred'>
        <i class="fa fa-filter"></i>
        <div class="details">
            <span class="big">{{ commonController::myQuery("SELECT SUM(diesel_advance) AS resCol FROM `loading_entries` WHERE loading_date = '$date'") }}</span>
            <span>Today Diesel Adv</span>
        </div>
    </li>
    <li class='satgreen'>
        <i class="fa fa-database"></i>
        <div class="details">
            <span class="big">{{ commonController::myQuery("SELECT SUM(weight) AS resCol FROM `loading_entries` WHERE loading_date = '$date'") }}</span>
            <span>Today Loading Weight</span>
        </div>
    </li>
    <li class='lightred'>
        <i class="fa fa-calendar"></i>
        <div class="details">
            <span class="big">{{ $dateTime }}</span>
            <span>{{ $day.", ".$time}}</span>
        </div>
    </li>
</ul>
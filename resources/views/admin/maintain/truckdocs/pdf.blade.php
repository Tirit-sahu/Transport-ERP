<!DOCTYPE html>
<html>
<body>
{{-- <h1>Document</h1> --}}

<strong><center>{{ $title }}</center></strong><br/><br/>
<?php

$array = json_decode($val);
if(is_array($array)){

    for ($i=0; $i < sizeof($array); $i++) { 
?>
<img style="width: 100%;" src="{{ asset('storage/app/public/TruckDocs/'.$array[$i]) }}">
<br>
<?php }

}else{
    ?>
    <img style="width: 100%;" src="{{ asset('storage/app/public/DriverDocs/'.$val) }}">
    <br>
    <?php
}
?>
</body>
</html>
<?php 
use \App\Http\Controllers\Admin\commonController;
use Illuminate\Http\Request;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Document</title>
    <style>
        body{
            padding:20px;
        }        
    </style>
</head>
<body>

    <div>
        <center>   <p><b> {{ $companies->company_name }}</b> <br>{{ $companies->company_address }} <br><b><u>GST NO : {{ $companies->company_gst_no }} </u></b></p></center>
        <div class="row">
            <div class="col-md-8">
                <p>TO, <br>{{ $generate_l_t_r_b_i_l_l_s->TO }}<br>GST NO.- {{ $generate_l_t_r_b_i_l_l_s->GSTNO }}</p>
             
            </div>
            <div class="col-md-4">
                <p style="text-align: right;">Bill No.-{{ $generate_l_t_r_b_i_l_l_s->id }} <br>Date- {{ date('d-m-Y', strtotime($generate_l_t_r_b_i_l_l_s->date)) }}</p>
            </div>
        </div>
        <P style="text-align: center;"><b>DIS-</b> </P>
        <p><b>Name of the Center From:- {{ $generate_l_t_r_b_i_l_l_s->NameOfCenterFrom }} To {{ $generate_l_t_r_b_i_l_l_s->NameOfCenterTO }}</b> <br>Date of Opration  From - {{ $generate_l_t_r_b_i_l_l_s->DateOfOperationFrom }} <b>To</b>   {{ $generate_l_t_r_b_i_l_l_s->DateOfOperationTO }} (DEC TO JAN-2020/2021) <br>{{ commonController::getValueStatic('items','item_name','id',$generate_l_t_r_b_i_l_l_s->ITEM) }}</p>
     
        <table class="table table-bordered">
            <thead>
                <th>S No.</th>
                <th>Description</th>
                <th>No of Truck</th>
                <th>No of Bags</th>
                <th>Total of Weight </th>
                <th>Rate</th>
                <th>KM</th>
                <th>Amount</th>
            </thead>
            <tbody>
                <tr style="height: 228px;">
                <td>1</td>
                <td>{{ $generate_l_t_r_b_i_l_l_s->description }}</td>
                <td>{{ $generate_l_t_r_b_i_l_l_s->NumberOfTruck }}</td>
                <td>{{ $generate_l_t_r_b_i_l_l_s->NumberOfBags }}</td>
                <td>{{ $generate_l_t_r_b_i_l_l_s->TotalWeight }}</td>
                <td>{{ $generate_l_t_r_b_i_l_l_s->RATE }}</td>
                <td>{{ $generate_l_t_r_b_i_l_l_s->KM }}</td>
                <td>{{ $generate_l_t_r_b_i_l_l_s->AMOUNT }}</td>
                <tr>
                    <td colspan="2"><h6 style="text-align: center;"><b>TOTAL</b> </h6></td>
                    <td><b>{{ $generate_l_t_r_b_i_l_l_s->NumberOfTruck }}</b></td>
                    <td><b>{{ $generate_l_t_r_b_i_l_l_s->NumberOfBags }}</b></td>
                    <td><b>{{ $generate_l_t_r_b_i_l_l_s->TotalWeight }}</b></td>
                    <td><b></b></td>
                    <td><b></b></td>
                    <td><b>{{ $generate_l_t_r_b_i_l_l_s->AMOUNT }}</b></td>
                </tr>
            </tbody>
        </table>
       
         <p><b>Total Amount (IN WORDS) - <span style="text-transform: capitalize;">{{ commonController::getIndianCurrency($generate_l_t_r_b_i_l_l_s->AMOUNT) }}</span></b></p>
         <p STYLE="text-align: right; padding-top: 93px;" ><b>For - {{ $companies->company_name }} <br>{{ $companies->company_address }}</b></p>

    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>
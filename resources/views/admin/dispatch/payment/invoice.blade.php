<?php
use \App\Http\Controllers\Admin\LoadingPaymentController;
use Illuminate\Http\Request;

?>
<!DOCTYPE html>
<html>
<body >


<style>
 table,td,th {

  border-spacing: -1px;
  font-size: 14px;
  border: 0.5px solid black;

}
td {

padding: 4px;
}
</style>
<?php
    $whereCompany=array('id'=>1);
    $companies = LoadingPaymentController::first_record_static('companies', $whereCompany);
  ?>
<table style="width: 100%">
  <tr>
    <td colspan="15" style="text-align: center; font-size: 24px; padding: 10px;">
         <b>{{ $companies->company_name }}</b>
    </td>
</tr>

 <tr>
    <td colspan="8" style=" font-size: 14px; padding: 10px;">
         Contact : {{ $companies->company_phone }}
    </td>
     <td colspan="7" style=" font-size: 14px; padding: 10px;">
          GST No. : {{ $companies->company_gst_no }}
    </td>

</tr>

 <tr>
    <td colspan="8" style=" font-size: 14px; padding: 10px;">
         Address : {{ $companies->company_address }}
    </td>
     <td colspan="7" style=" font-size: 14px; padding: 10px;">
          PAN No. : {{ $companies->company_pan_card }}
    </td>

</tr>


    <tr>
      <?php 
        $paymentrow = json_decode($loading_payments->loading_receiveing_id); 
        $loading_entries_id = LoadingPaymentController::getValueStatic('loading_receiveings', 'loading_entries_id', 'id', $paymentrow[0]);
        $vehicle_no = LoadingPaymentController::getValueStatic('loading_entries', 'vehicle_no', 'id', $loading_entries_id);
        $truckowner_id = LoadingPaymentController::getValueStatic('trucks', 'truckowner_id', 'id', $vehicle_no);
        
        
        ?>
      <td colspan="8" style=" font-size: 14px; padding: 10px;">
         <b>Paid To/Truck Owner: {{ LoadingPaymentController::getValueStatic('truckowners', 'owner_name', 'id', $truckowner_id) }}</b>
    </td>
    <td colspan="7" style=" font-size: 14px; padding: 10px;" >Voucher No.:  {{ $loading_payments->voucher_no }}</td>
</tr>

<tr>

      <td colspan="8" style=" font-size: 14px; padding: 10px;">
         Payment Date : {{ date('d-m-Y', strtotime($loading_payments->payment_date)) }}
    </td>
    <td colspan="7" style=" font-size: 14px; padding: 10px;">Address :  {{ LoadingPaymentController::getValueStatic('truckowners', 'address', 'id', $truckowner_id) }}</td>
</tr>

<tr> 
  <th>SN</th>
  <th>Loading DATE </th>
  <th>Loading No.</th>
  <th>Vehicle No.</th>
  <th>From Place</th>
  <th>To Place </th>
  <th>Wt.(MT)</th>
  <th>Rec (MT)</th>
  <th>Freight Rate</th>
  <th>Cash ADVANCE </th>
  <th>Petrol ADVANCE </th>
  <th>Commission </th>
  <th>Shortage Bag</th>
  <th>Shortage MT</th>
  <th>Net Amount</th>
</tr>
  @php $totolmount=0  @endphp  
  <?php
  $paymentrow = json_decode($loading_payments->loading_receiveing_id);
  $i=0;
  ?>  
  @foreach($paymentrow as $row)
  <?php
    $where = array('id' => $row);
    $loading_receiveings = LoadingPaymentController::first_record_static('loading_receiveings', $where);
    $where2 = array('id' => $loading_receiveings->loading_entries_id);
    $loading_entry = LoadingPaymentController::first_record_static('loading_entries', $where2);
  ?>
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $loading_entry->loading_date }}</td>
    <td>{{ $loading_entry->loading_no }}</td>
    <td>{{ LoadingPaymentController::getValueStatic('trucks', 'truck_number', 'id', $loading_entry->vehicle_no) }}</td>
    <td>{{ LoadingPaymentController::getValueStatic('places', 'placename', 'id', $loading_entry->from_place) }}</td>
    <td>{{ LoadingPaymentController::getValueStatic('places', 'placename', 'id', $loading_entry->to_plce) }}</td>
    <td>{{ $loading_entry->weight }}</td>
    <td>{{ $loading_receiveings->received_mt }}</td>
    <td>{{ $loading_entry->freight_rate }}</td>
    <td>{{ $loading_entry->cash_advance }}</td>
    <td>{{ $loading_entry->diesel_advance }}</td>
    <td>{{ $loading_entry->commision_rate }}</td>
    <td>{{ $loading_receiveings->shortage_bag }}</td>
    <td>{{ $loading_receiveings->shortage_mt }}</td>
    <td>{{ $loading_receiveings->net_amt }}</td>
  </tr>
  @endforeach
   <tr>
    {{-- <td colspan="14" style="font-size: 14px"><center><b>Total Amount</b></center></td> --}}
    {{-- <td style="font-size: 14px"><b>{{ $totolmount }}</b></td> --}}
  </tr>
</table>
</div>
</body>
</html>


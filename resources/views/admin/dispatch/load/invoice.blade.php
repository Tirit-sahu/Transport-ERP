<?php use \App\Http\Controllers\Admin\commonController;
use Illuminate\Http\Request;
?>
<!DOCTYPE html>
<html>
<body onload="printDiv('printableArea')">


<style>
 table,td {

  border-spacing: -1px;
  font-size: 14px;
  border: 0.5px solid black;
}
/*td {

padding-left: 4px;
}*/
</style>

<table >
  <tr>
    <td colspan="7" style="text-align: center; font-size: 24px; padding: 10px;">
         <b>Tamanna Road Carrier</b>
         <br>
         <span style="font-size: 18px;">Office No. 116, 4th Floor, Pithaliya Plaza, Raipur</span>
    </td>
  </tr>
   <tr>
      <td colspan="2" style="padding: 4px;"><b>Consignor :</b></td>
      
      <td colspan="3" style="padding: 4px;"><b>Consignee :</b></td>
    
      <td colspan="2" style="padding: 4px;">Loading No : {{$load->loading_no}}</td>
   </tr>
   <tr>
      <td colspan="2" rowspan="2" style="padding-left:  4px;">  {{ $load->Consignor->consignor_name }} 

       <br><span> Address: {{ $load->Consignor->consignor_address }}</span> 
       {{-- <br><span>GST : {{ $load->Consignor->consignor_gst_no }}</span> --}}
      </td>
   
      <td colspan="3" rowspan="2" style="padding-left:  4px;"> 
        {{ $load->Consignee->consignee_name }} </br>
       <br><span> Address:  {{ $load->Consignee->consignee_address }} </span>
     <br>
      <span>Mob :  {{ $load->Consignee->consignee_mobile }}</span></td>
      
      <td colspan="2" >Loading Date : {{$load->loading_date}}</td>
   </tr>
    
   <tr>
      <td colspan="2">Truck No : {{ commonController::getValueStatic('trucks','truck_number','id',$load->vehicle_no) }}</td>
   </tr>
   <tr>
      <td colspan="2" style="padding-left:  4px;">From: {{ $load->place->placename }}</td>
      <td colspan="3" style="padding-left:  4px;">To: {{ $load->toplace->placename}}</td>
      
      <td colspan="2"> </td>
   </tr>
   <tr>
      <td style="padding:  4px;">Material</td>
      <td style="padding:  4px;">Contents(bags)</td>
      <td style="padding-left:  4px;">Weight(MT)</td>
      <td colspan="2" style="padding-left:  4px; ">Fright Rate</td>
      <td colspan="2"></td>
   </tr>
   <tr>
      <td>-</td>
      <td style="text-align: center;">{{ $load->bags}}</td>
      <td style="padding:  4px;">{{ $load->weight}}</td>
      <td colspan="2" style="padding:  4px;">{{ $load->fright_rate}}</td>
      <td colspan="2"></td>
 
   </tr>
   
   <tr>
      <td colspan="1" rowspan="3" style="padding:  4px;">Receiver's Signature</td>
      
      <td colspan="2" style="padding:  4px;">Cash Advance</td>
     
      <td colspan="2" style="text-align: right; padding-right:   4px;"> {{ $load->cash_advance }} </td>
      
      <?php 
      $truckowner_id = commonController::getValueStatic('trucks','truckowner_id','id',$load->vehicle_no);
      $owner_name = commonController::getValueStatic('truckowners','owner_name','id',$truckowner_id);
      $owner_address = commonController::getValueStatic('truckowners','address','id',$truckowner_id);
      ?>
      <td colspan="2" rowspan="4">Owner Name &amp; Address : {{ $owner_name }} </br> {{ $owner_address }} </td>
   </tr>
   
   <tr>

      <td colspan="2" style="padding:  4px;">Diesel Advance</td>
      <td colspan="2"style="text-align: right; padding:  4px;"> {{ $load->diesel_advance }} </td>
      
   </tr>
   <tr>
      <td colspan="2" style="padding:  4px;">Total Advance</td>
      <td colspan="2" style="text-align: right;padding:  4px;">{{$load->diesel_advance+$load->cash_advance}}</td>
      
   </tr>
   
   <tr>
      <td colspan="1" style="font-size: 12px; padding:  4px;">"UNDERTAKING : By virtue of section 9(3) of CGST Act 2017, The Goods Transport service provided by transporter falls under Reverse change Mechanism and 100% GST </td>
      <td  colspan="4" style="font-size: 12px; text-align: right; padding-right:10px;">AT OWNER RISK</td>
     
   </tr>
   
   <tr >
      <td colspan="1" style="padding: 15px;">Driver's Signature</td>
      
      <td colspan="3" style="font-size: 12px; padding: 15px;">TWO POINT DELIVERY WITHIN CITY LIMIT</td>
      
      <td colspan="3" style="padding: 14px;">For, <br>
        Tamanna Road Carrier({{$load->user->name}}) </td>
   </tr>
</table>
</div>
</body>
</html>


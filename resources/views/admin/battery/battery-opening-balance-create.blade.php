@extends('admin.layouts.body')
@section('content')


<style>
    img.i1{
       -webkit-transform: scaleX(-1);
       transform: scaleX(-1);
       }
       .rectangle {
       height: 482px;
       width: 200px;
       background-color: #555;
       }
       
       h1{
           
         font-size: 20px !important;

       }
       h5{
          font-family: -webkit-body;
       }
  </style>

<div class="container-fluid" id="content">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h2>Tamanna RoadCarrier</h2>
					</div>
					<div class="pull-right">
						
                        @include('admin.dashboard_header');
                        
					</div>
				</div>
				
			<div class="row">
                
                <div class="col-sm-12">
						<div class="box box-bordered box-color satblue">
							<div class="box-title">
								<h3>
									<i class="fa fa-bars"></i> Battery Entry </h3>
							</div>
							<div class="box-content nopadding">
								<div class="tab-content padding tab-content-inline tab-content-bottom">								
                                    
                            <div>
                            <form action="#" method="post" class='form-vertical' enctype="multipart/form-data">
                                @csrf
                                <x-alert />
                                <input type="hidden" value="1" id="index">
                            <div class="row">                                

                            <div class="col-sm-2">
                                <div class="form-group">
                                <label for="truck_number" class="control-label"><strong>Truck Number </strong> </label>
                                <select name="truck_number" id="truck_number" class='select2Jquery' style="width: 100%;" onchange="getTyreType(this.value)" required>                                                
                                </select>                               
                                </div>
                            </div>

<div class="col-sm-12">                         
<!-- tire images -->
<center>
<div class="container-fluid">
<table id="table10">
   <thead>
      <tr>
         <td>
            <h5 style="margin-left: 38px;padding-top: 37px;">Front Left</h5>
         </td>
         <td></td>
         <td>
            <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 10px;color: white;font-size: 28px;">1</h1>
            <img src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 110px;">
         </td>
         <td rowspan="6"><img src="{{ asset('storage/app/public/tire/body.png') }}" alt="" style="margin-left: -2px;"></td>
         <td>
            <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 25px;color: white;font-size: 28px;">2</h1>
            <img class="i1" src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 110px;margin-left: -4px;">
         </td>
         <td></td>
         <td>
            <h5 style="margin-left: 20px;padding-top: 37px;">Front Right</h5>
         </td>
      </tr>

      <tr>
         <td><h5 style="margin-left: 38px;padding-top: 10px;">Battery 1</h5></td>
         <td style="cursor: pointer;" onclick="tireOpeningModal('Battery 1')" colspan="3"> <img class="#" src="{{ asset('storage/app/public/tire/pp.png') }}" alt="" style="height: 72px;margin-left:56px;"></td>

         <td style="cursor: pointer;" onclick="tireOpeningModal('Battery 2')" colspan="2"> <img class="#" src="{{ asset('storage/app/public/tire/pp.png') }}" alt="" style="height: 72px;margin-left:-45px;"></td>
         <td><h5 style="margin-left: 38px;padding-top: 10px;">Battery 2</h5></td>
      </tr>

     <tr>
         <td>
            <h5 style="margin-left: 22px;padding-top: 37px;">Crown Left 1 <br> Crown Left 2</h5>
         </td>
         <td>
            <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 10px;color: white;font-size: 28px;">3</h1>
            <img src="{{ asset('storage/app/public/tire/2t.png') }}" alt="" style="height: 110px;margin-right: -7px;">
         </td>
         <td>
            <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 10px;color: white;font-size: 28px;">4</h1>
            <img src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 110px;">
         </td>
         <!-- <td>  <div class="rectangle"> </div> </td> -->
         <td>
            <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 21px;color: white;font-size: 28px;">5</h1>
            <img class="i1" src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 110px;margin-left: -4px;">
         </td>
         <td>
            <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 10px;color: white;font-size: 28px;">6</h1>
            <img class="i1" src="{{ asset('storage/app/public/tire/2t.png') }}" alt="" style="height: 110px;margin-left: -4px;">
         </td>
         <td>
            <h5 style="margin-left: 26px;padding-top: 37px;">Crown Right 1 <br> Crown Right 2</h5>
         </td>
      </tr>
      <tr>
         <td>
            <h5 style="margin-right: 39px;padding-top: 37px;">Dumy  Left 1 <br> Dumy Left 2</h5>
         </td>
         <td>
            <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 10px;color: white;font-size: 28px;">7</h1>
            <img src="{{ asset('storage/app/public/tire/2t.png') }}" alt="" style="height: 110px;margin-right: -7px;">
         </td>
         <td>
            <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 10px;color: white;font-size: 28px;">8</h1>
            <img src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 110px;">
         </td>
         <!-- <td>  <div class="rectangle"> </div> </td> -->
         <td>
            <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 22px;color: white;font-size: 28px;">9</h1>
            <img class="i1" src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 110px; margin-left: -4px;">
         </td>
         <td>
            <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 8px;color: white;font-size: 28px;">10</h1>
            <img class="i1" src="{{ asset('storage/app/public/tire/2t.png') }}" alt="" style="height: 110px;margin-left: -4px;">
         </td>
         <td>
            <h5 style="margin-left: 26px;padding-top: 37px;">Dumy Right 1 <br>Dumy Right 2</h5>
         </td>
      </tr>
      <tr>
         <td></td>
         <td></td>
         <td><img src="{{ asset('storage/app/public/tire/tyer.png') }}" alt="" style="height: 119px;margin-left: 141px;position: absolute;margin-top: -124px;"></td>
         <td></td>
         <td></td>
      </tr>
   </thead>
</table>


<table id="table12">
    <thead>
       <tr>
          <td>
             <h5 style="margin-left: 54px;padding-top: 37px;">Front Left</h5>
          </td>
          <td></td>
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 10px;color: white;font-size: 28px;margin-top: 35px;"">1</h1>
             <img src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 110px;margin-top: 35px;"">
          </td>
          <td rowspan="8"><img src="{{ asset('storage/app/public/tire/body.png') }}" alt="" style="margin-left: -2px;"></td>
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 25px;color: white;font-size: 28px;margin-top: 35px;"">2</h1>
             <img class="i1" src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 110px;margin-left: -4px;margin-top: 35px;"">
          </td>
          <td></td>
          <td>
             <h5 style="margin-right: 31px;padding-top: 37px;">Front Right</h5>
          </td>
       </tr>
       <tr>
        <td><h5 style="margin-left: 38px;padding-top: 10px;">Battery 1</h5></td>
         <td style="cursor: pointer;" onclick="tireOpeningModal('Battery 1')" colspan="3"> <img class="#" src="{{ asset('storage/app/public/tire/pp.png') }}" alt="" style="height: 72px;margin-left:56px;"></td>
         <td style="cursor: pointer;" onclick="tireOpeningModal('Battery 2')" colspan="2"> <img class="#" src="{{ asset('storage/app/public/tire/pp.png') }}" alt="" style="height: 72px;margin-left:-45px;"></td>
         <td><h5 style="margin-left: 38px;padding-top: 10px;">Battery 2</h5></td>
      </tr>
     <tr>
    

       
       <tr>
          <td>
             <h5 style="margin-left: 54px;padding-top: 37px;">Lefter Left</h5>
          </td>
          <td></td>
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 10px;color: white;font-size: 28px;">3</h1>
             <img src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 110px;">
          </td>
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 21px;color: white;font-size: 28px;">4</h1>
             <img class="i1" src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 110px;margin-left: -4px;">
          </td>
          <td></td>
          <td>
             <h5 style="margin-right: 31px;padding-top: 37px;">Lefter Right</h5>
          </td>
       </tr>
       <tr>
          <td>
             <h5 style="margin-left: 27px;padding-top: 37px;">Crown Left 1 <br>Crown Left 2</h5>
          </td>
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 10px;color: white;font-size: 28px;">5</h1>
             <img src="{{ asset('storage/app/public/tire/2t.png') }}" alt="" style="height: 110px;margin-right: -7px;">
          </td>
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 10px;color: white;font-size: 28px;">6</h1>
             <img src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 110px;">
          </td>
          <!-- <td>  <div class="rectangle"> </div> </td> -->
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 21px;color: white;font-size: 28px;">7</h1>
             <img class="i1" src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 110px;margin-left: -4px;">
          </td>
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 10px;color: white;font-size: 28px;">8</h1>
             <img class="i1" src="{{ asset('storage/app/public/tire/2t.png') }}" alt="" style="height: 110px;margin-left: -4px;">
          </td>
          <td>
             <h5 style="padding-top: 37px;margin-left: 27px">Crown Right 1 <br>Crown Right 2</h5>
          </td>
       </tr>
       <tr>
          <td>
             <h5 style="margin-left: 27px;padding-top: 37px;">Dumy Left 1 <br> Dumy Left 2</h5>
          </td>
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 10px;color: white;font-size: 28px;">9</h1>
             <img src="{{ asset('storage/app/public/tire/2t.png') }}" alt="" style="height: 110px;margin-right: -7px;">
          </td>
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 10px;color: white;font-size: 28px;">10</h1>
             <img src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 110px;">
          </td>
          <!-- <td>  <div class="rectangle"> </div> </td> -->
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 22px;color: white;font-size: 28px;">11</h1>
             <img class="i1" src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 110px; margin-left: -4px;">
          </td>
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 8px;color: white;font-size: 28px;">12</h1>
             <img class="i1" src="{{ asset('storage/app/public/tire/2t.png') }}" alt="" style="height: 110px;margin-left: -4px;">
          </td>
          <td>
             <h5 style="padding-top: 37px;margin-left: 27px">Dumy Right 1 <br> Dumy Left 2</h5>
          </td>
       </tr>
       <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
       </tr>
       <tr>
          <td></td>
          <td></td>
          <td><img src="{{ asset('storage/app/public/tire/tyer.png') }}" alt="" style="height: 116px;margin-left: 143px;position: absolute;margin-top: -125px;"></td>
          <td></td>
       </tr>
    </thead>
 </table>


 <table id="table14">
    <thead>
       <tr>
          <td>
             <h5 style="margin-left: 54px;padding-top: 100px;">Front Left</h5>
          </td>
          <td></td>
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 10px;color: white;font-size: 28px;margin-top: 58px;"">1</h1>
             <img src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 78px;margin-top: 58px;"">
          </td>
          <td rowspan="10"><img src="{{ asset('storage/app/public/tire/body.png') }}" alt="" style="margin-left: -2px;"></td>
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 27px;margin-left: 15px;color: white;font-size: 28px;margin-top: 58px;"">2</h1>
             <img class="i1" src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 78px;margin-left: -4px;margin-top: 58px;"">
          </td>
          <td></td>
          <td>
             <h5 style="margin-right: 31px;padding-top: 100px;">Front Right</h5>
          </td>
       </tr>

       <tr>
        <td><h5 style="margin-left: 65px;padding-top: 10px;">Battery 1</h5></td>
         <td style="cursor: pointer;" onclick="tireOpeningModal('Battery 1')" colspan="3"> <img class="#" src="{{ asset('storage/app/public/tire/pp.png') }}" alt="" style="height: 72px;margin-left:56px;"></td>
      <td style="cursor: pointer;" onclick="tireOpeningModal('Battery 2')" colspan="2"> <img class="#" src="{{ asset('storage/app/public/tire/pp.png') }}" alt="" style="height: 72px;margin-left:-45px;"></td>
      <td><h5 style="margin-left: 5px;padding-top: 10px;">Battery 2</h5></td>
      </tr>
     <tr>

       <tr>
          <td>
             <h5 style="margin-left: 54px;">Front Single Left</h5>
          </td>
          <td></td>
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 10px;color: white;font-size: 28px;">3</h1>
             <img src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 78px;">
          </td>
          <!-- <td>  <div class="rectangle"> </div> </td> -->
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 15px;color: white;font-size: 28px;">4</h1>
             <img class="i1" src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 78px;margin-left: -4px;">
          </td>
          <td></td>
          <td>
             <h5 style="margin-right: 31px;">Front Single Right</h5>
          </td>

         


       </tr>
       <tr>
          <td>
             <h5 style="margin-left: 54px;">Lefter Left</h5>
          </td>
          <td></td>
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 10px;color: white;font-size: 28px;">5</h1>
             <img src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 78px;">
          </td>
          <!-- <td>  <div class="rectangle"> </div> </td> -->
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 15px;color: white;font-size: 28px;">6</h1>
             <img class="i1" src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 78px;margin-left: -4px;">
          </td>
          <td></td>
          <td>
             <h5 style="margin-right: 31px;">Lefter Right</h5>
          </td>
       </tr>
       <tr>
          <td>
             <h5 style="margin-left: 54px;">Crown Left 1 <br>Crown Left 2</h5>
          </td>
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 8px;color: white;font-size: 28px;">7</h1>
             <img src="{{ asset('storage/app/public/tire/2t.png') }}" alt="" style="height: 78px;margin-right: -7px;">
          </td>
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 8px;color: white;font-size: 28px;">8</h1>
             <img src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 78px;">
          </td>
          <!-- <td>  <div class="rectangle"> </div> </td> -->
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 15px;color: white;font-size: 28px;">9</h1>
             <img class="i1" src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 78px;margin-left: -4px;">
          </td>
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 1px;color: white;font-size: 28px;">10</h1>
             <img class="i1" src="{{ asset('storage/app/public/tire/2t.png') }}" alt="" style="height: 78px;margin-left: -4px;">
          </td>
          <td>
             <h5 style="margin-right: 31px;margin-left: 20px;">Crown Right 1 <br>Crown Right 2</h5>
          </td>
       </tr>
       <tr>
          <td>
             <h5 style="margin-left: 54px;">Dumy Left 1 <br>Dumy Left 2</h5>
          </td>
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 5px;color: white;font-size: 28px;">11</h1>
             <img src="{{ asset('storage/app/public/tire/2t.png') }}" alt="" style="height: 78px;margin-right: -7px;">
          </td>
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 5px;color: white;font-size: 28px;">12</h1>
             <img src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 78px;">
          </td>
          <!-- <td>  <div class="rectangle"> </div> </td> -->
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 11px;color: white;font-size: 28px;">13</h1>
             <img class="i1" src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 78px; margin-left: -4px;">
          </td>
          <td>
             <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 1px;color: white;font-size: 28px;">14</h1>
             <img class="i1" src="{{ asset('storage/app/public/tire/2t.png') }}" alt="" style="height: 78px;margin-left: -4px;">
          </td>
          <td>
             <h5 style="margin-right: 31px; margin-left: 20px;">Dumy Right 1 <br> Dumy Right 2</h5>
          </td>
       </tr>
       <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
       </tr>
       <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
       </tr>
       <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
       </tr>
       <tr>
          <td></td>
          <td></td>
          <td><img src="{{ asset('storage/app/public/tire/tyer.png') }}" alt="" style="height: 116px;margin-left: 127px;position: absolute;margin-top: -129px;"></td>
          <td></td>
       </tr>
    </thead>
    </table>


    <table id="table16">
        <thead>
           <tr>
              <td>
                 <h5 style="margin-right: 31px;padding-top: 100px;">Front Left</h5>
              </td>
              <td></td>
              <td>
                 <h1 style="z-index: 1;position: absolute; padding-top: 89px;margin-left: 10px;color: white;font-size: 28px;">1</h1>
                 <img src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 78px;margin-top: 81px;">
              </td>
              <td rowspan="10"><img src="{{ asset('storage/app/public/tire/body.png') }}" alt="" style="margin-left: -2px;"></td>
              <td>
                 <h1 style="z-index: 1;position: absolute; padding-top: 89px;margin-left: 15px;color: white;font-size: 28px;">2</h1>
                 <img class="i1" src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 78px;margin-left: -4px; margin-top: 81px;">
              </td>
              <td></td>
              <td>
                 <h5 style="margin-right: 31px;padding-top: 100px;">Front Right</h5>
              </td>
           </tr>

         <tr>
            <td><h5 style="margin-left: 65px;padding-top: 10px;">Battery 1</h5></td>
            <td style="cursor: pointer;" onclick="tireOpeningModal('Battery 1')" colspan="3"> <img class="#" src="{{ asset('storage/app/public/tire/pp.png') }}" alt="" style="height: 72px;margin-left:56px;"></td>
            <td style="cursor: pointer;" onclick="tireOpeningModal('Battery 2')" colspan="2"> <img class="#" src="{{ asset('storage/app/public/tire/pp.png') }}" alt="" style="height: 72px;margin-left:-45px;"></td>
            <td><h5 style="margin-left: 5px;padding-top: 10px;">Battery 2</h5></td>
         </tr>
         <tr>


           <tr>
              <td>
                 <h5>Front Single Left</h5>
              </td>
              <td></td>
              <td>
                 <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 10px;color: white;font-size: 28px;">3</h1>
                 <img src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 78px;">
              </td>
              <!-- <td>  <div class="rectangle"> </div> </td> -->
              <td style="cursor: pointer;" onclick="tireOpeningModal('Front Single Right')">
                 <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 15px;color: white;font-size: 28px;">4</h1>
                 <img class="i1" src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 78px;margin-left: -4px;">
              </td>
              <td></td>
              <td>
                 <h5>Front Single Right</h5>
              </td>
           </tr>
           <tr>
              <td>
                 <h5>Lefter Left 1 <br>Lefter Left 2</h5>
              </td>
              <td>
                 <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 8px;color: white;font-size: 28px;">5</h1>
                 <img src="{{ asset('storage/app/public/tire/2t.png') }}" alt="" style="height: 78px;margin-right: -7px;">
              </td>
              <td>
                 <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 8px;color: white;font-size: 28px;">6</h1>
                 <img src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 78px;">
              </td>
              <!-- <td>  <div class="rectangle"> </div> </td> -->
              <td>
                 <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 15px;color: white;font-size: 28px;">7</h1>
                 <img class="i1" src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 78px;margin-left: -4px;">
              </td>
              <td>
                 <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 1px;color: white;font-size: 28px;">8</h1>
                 <img class="i1" src="{{ asset('storage/app/public/tire/2t.png') }}" alt="" style="height: 78px;margin-left: -4px;">
              </td>
              <td>
                 <h5 style="margin-left: 16px;">Lefter Right 1 <br>Lefter Right 2</h5>
              </td>
           </tr>
           <tr>
              <td>
                 <h5>Crown Left 1 <br> Crown Left 2</h5>
              </td>
              <td>
                 <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 5px;color: white;font-size: 28px;">9</h1>
                 <img src="{{ asset('storage/app/public/tire/2t.png') }}" alt="" style="height: 78px;margin-right: -7px;">
              </td>
              <td>
                 <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 5px;color: white;font-size: 28px;">10</h1>
                 <img src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 78px;">
              </td>
              <!-- <td>  <div class="rectangle"> </div> </td> -->
              <td>
                 <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 12px;color: white;font-size: 28px;">11</h1>
                 <img class="i1" src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 78px;margin-left: -4px;">
              </td>
              <td>
                 <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 1px;color: white;font-size: 28px;">12</h1>
                 <img class="i1" src="{{ asset('storage/app/public/tire/2t.png') }}" alt="" style="height: 78px;margin-left: -4px;">
              </td>
              <td>
                 <h5 style="margin-left: 16px;">Crown Right 1 <br> Crown Right 2</h5>
              </td>
           </tr>
           <tr>
              <td>
                 <h5>Dumy Left 1 <br>Dumy Left 2</h5>
              </td>
              <td>
                 <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 3px;color: white;font-size: 28px;">13</h1>
                 <img src="{{ asset('storage/app/public/tire/2t.png') }}" alt="" style="height: 78px;margin-right: -7px;">
              </td>
              <td>
                 <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 5px;color: white;font-size: 28px;">14</h1>
                 <img src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 78px;">
              </td>
              <!-- <td>  <div class="rectangle"> </div> </td> -->
              <td>
                 <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 8px;color: white;font-size: 28px;">15</h1>
                 <img class="i1" src="{{ asset('storage/app/public/tire/ty.png') }}" alt="" style="height: 78px; margin-left: -4px;">
              </td>
              <td>
                 <h1 style="z-index: 1;position: absolute; padding-top: 5px;margin-left: 1px;color: white;font-size: 28px;">16</h1>
                 <img class="i1" src="{{ asset('storage/app/public/tire/2t.png') }}" alt="" style="height: 78px;margin-left: -4px;">
              </td>
              <td>
                 <h5 style="margin-left: 16px;">Dumy Right 1 <br>Dumy Right 2</h5>
              </td>
           </tr>
           <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
           </tr>
           <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
           </tr>
           <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
           </tr>
           <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
           </tr>
           <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
           </tr>
           <tr>
              <td></td>
              <td></td>
              <td></td>
              <td><img alt="" style="height: 119px;margin-left: 88px;position: absolute;margin-top: -129px;cursor: pointer;"></td>
              <td></td>
           </tr>
        </thead>
     </table>


</div>
</div>
</center>

                            <!-- end tire images -->



                            {{-- <div class="col-md-12">                   
                            <center>                             
                            <button type="submit" class="btn btn-satgreen">- {{$button}} -</button> &nbsp;&nbsp;
                            <a href="{{ url('/tyre-opening-record') }}" class='btn btn-red'>- RESET -</a> &nbsp;&nbsp;
                            <a href="{{ url('/tyre-opening-record-datatables') }}" class="btn btn-teal">- REPORTS -</a>&nbsp;&nbsp;                          
                            </center>
                            </div> --}}

                            </div>


                            </form>

                            
									</div>
									
										
									</div>
								</div>
							</div>
						</div>
			    </div>
                    					
				</div>
				
		</div>

</div>


<!-- ============= Modal ============= -->

<div class="modal fade" id="tireOpeningModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" id="tireOpeningHeader">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#Create">Create</a></li>
                <li><a data-toggle="tab" href="#Report">Report</a></li>
              </ul>
            
              <div class="tab-content">
                <div id="Create" class="tab-pane fade in active">
                  <h3><center>Create Battery Opening Balance</center></h3><hr>
                  <form class="form-horizontal" id="upload-battery-opening-form" method="POST" enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="Mtruck_number" id="Mtruck_number">
                     <input type="hidden" name="Mbattery_name" id="Mbattery_name">

                     <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Battery Name:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="Mname" id="Mname" placeholder="Enter tyre name" required>
                        </div>
                     </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="serial_number">Battery Serial Number:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="Mserial_number" id="Mserial_number" placeholder="Enter serial number" required>
                      </div>
                    </div>                    

                      <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Upload Date:</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" name="Mupload_date" id="Mupload_date" placeholder="Enter Upload Date" required>
                        </div>
                      </div>  
                      
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Battery Image 1:</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" name="Mimage1" id="Mimage1" placeholder="Enter Upload Date" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Battery Image 2:</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" name="Mimage2" id="Mimage2" placeholder="Enter Upload Date" required>
                        </div>
                      </div>

                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div id="Report" class="tab-pane fade">
                  <h3><center>Report</center></h3>
                  <div id="BatteryOpeingTable"></div>
                </div>
               
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<!-- ============= End Modal ============= -->

<script>
   $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#upload-battery-opening-form').submit(function(e) {
       e.preventDefault();
       let formData = new FormData(this);
      //  $('#image-input-error').text('');

       $.ajax({
          type:'POST',
          url: '{{ url("battery-opening-balance-store") }}',
           data: formData,
           contentType: false,
           processData: false,
           success: function(res){
            console.log(res);
            if(res==1){
               $('#upload-battery-opening-form')[0].reset();
               showBatteryOpeingRecord();
               swal("New Record Added Successfully!", "", "success");
            }else{
               swal("Something went wrong", "", "error");
            }
           }
       });
  });

</script>


<script>
      function tireOpeningModal(Mbattery_name){
        var truck_id = $("#truck_number").val();
        var truck_number = $('#truck_number').find(":selected").text();
        $("#tireOpeningModal").modal('show');
        $("#tireOpeningHeader").html('<b>Truck Number: '+truck_number+',  Battery Name: '+Mbattery_name+'</b>');
        $("#Mtruck_number").val(truck_id);
        $("#Mbattery_name").val(Mbattery_name);
        // console.log('tyre_type='+tyre_type+', truck_number='+truck_number);
        showBatteryOpeingRecord();
      }

      function deleteBatteryOpening(id){
         if (confirm("Are you sure ?")) {
         $.ajax({
            type:'GET',
            url:'{{ url("commonDeleteRecord") }}?table=battery_opening_balances&key=id&value='+id,
            success:function(res){
               showBatteryOpeingRecord();
            }
         });
         }
      }

      function showBatteryOpeingRecord(){
         var truck_number = $("#Mtruck_number").val();
         var batteryName = $("#Mbattery_name").val();
         $.ajax({
            type:'GET',
            url:'{{ url("battery-opening-balance-datatables") }}?truck_number='+truck_number+'&batteryName='+batteryName,
            success:function(res){
               // console.log(res);
               $("#BatteryOpeingTable").html(res);
            }
         });
      }


</script>

<script>

    function getVehicle(){
        $.ajax({
            type:'GET',
            url:'{{ url("fetchSelectOption") }}?table=trucks&id=id&value=truck_number',
            success:function(res){
                // console.log(res);
                $("#truck_number").html(res);
                $("#truck_number").trigger('change'); 
                
            }
        });
    }
    getVehicle();

    function getGodown(){
        $.ajax({
            type:'GET',
            url:'{{ url("fetchSelectOption") }}?table=godowns&id=id&value=name',
            success:function(res){
                // console.log(res);
                $("#godown").html(res);
            }
        });
    }
    getGodown();

</script>

<script>
    
    function getTyreType(truckId){
        $("#table10").hide();
        $("#table12").hide();
        $("#table14").hide();
        $("#table16").hide();
       $.ajax({
           type:'GET',
           url:'{{ url("getTyreType") }}?truckId='+truckId,
           success:function(res){
               console.log(res);
               if(res==10){
                $("#table10").show();
               }
               if(res==12){
                $("#table12").show();
               }
               if(res==14){
                $("#table14").show();
               }
               if(res==16){
                $("#table16").show();
               }            
           }
       });
    }  
    $("#table10").hide();
    $("#table12").hide();
    $("#table14").hide();
    $("#table16").hide();


    function getSerialNumber(){
       $.ajax({
           type:'GET',
           url:'{{ url("getSerialNumber") }}',
           success:function(res){
            //    console.log(res);
               $("#Serial_number").html(res);
           }
       });
    } 
    getSerialNumber();
    
</script>

@endsection
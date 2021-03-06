@include('admin.layouts.head')
@include('admin.layouts.header')
<style>
   img{
   box-shadow: 10px 10px 5px #ccc;
   }
   h5 {
   text-align: center;
   }
</style>
<div class="container-fluid" id="content">
<!-- @include('admin.layouts.leftheader') -->
<div class="container-fluid">
   <div class="page-header">
      <div class="pull-left">
         <h1>Tamanna RoadCarrier</h1>
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
                  <i class="fa fa-dashboard"></i> Dasboard
               </h3>
            </div>
            <div class="box-content nopadding">
               <div class="tab-content padding tab-content-inline tab-content-bottom">
                  <div class="row">

                     @foreach($dashboard_pin_sets as $row)
                     <?php 
                     $id = $row->id;
                     $menu = "'$row->menu'";
                     $route = "'$row->route'";
                     ?>
                     <div class="col-md-1" style="cursor: pointer;" onclick="passwordModalMethod({{$id.','.$menu.', '.$route}});">
                        <div>
                           <center> <img src="{{ asset('storage/app/public/icon/'.$row->image)}}" alt="{{ $row->menu }}" class="img-thumbnail"></center>
                           <h5><b> {{ $row->menu }} </b></h5>
                        </div>
                     </div>
                     @endforeach
                      
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<!-- Password Modal -->
<div class="modal fade" id="passwordModal" role="dialog">
   <div class="modal-dialog">
   
     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title"><i class="fa fa-lock" aria-hidden="true"></i> <span id="menuTitle"></span></h4>
       </div>
       <div class="modal-body">
         <center>
            <form class="form-inline">
               <div class="form-group mb-2">
                 <label for="staticEmail2" class="sr-only">Password</label>
                 <input type="hidden" id="menuId">
                 <input type="hidden" id="route">
               </div>
               <div class="form-group mx-sm-3 mb-2">
                 <label for="inputPassword2" class="sr-only">Password</label>
                 <input type="password" class="form-control" id="password" placeholder="Password">
               </div>
               <button type="button" onclick="checkMenuPassword()" class="btn btn-primary mb-2"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Submit</button>               
             </form>
               <span class="text-danger" id="passwordError"></span>
         </center>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
     </div>
     
   </div>
 </div>


 <script>
    function passwordModalMethod(id, menu, route){
       $("#passwordModal").modal('show');
       $("#passwordError").html(' ');
       $("#menuTitle").html(menu);
       $("#menuId").val(id);
       $("#route").val(route);
      //  alert(menu);
    }    
 </script>

 <script>
    function checkMenuPassword(){
      var menuId = $("#menuId").val();
      var password = $("#password").val();
      var route = $("#route").val();
      $.ajax({
         type:'GET',
         url:'{{ url("checkMenuPassword") }}?menuId='+menuId+'&password='+password+'&route='+route,
         success:function(res){
            console.log(res);
            if(res==1){
               $("#passwordError").html(' ');
               var url = '{{ url(":route") }}';
               url = url.replace(':route',route);
               window.location.href = url;
            }else{
               $("#passwordError").html('<h6 style="background: #c00303;padding: 8px;color: white;width: 280px;" ><b><center>Invalid Password</center></b></h6>');
            }
            
         }
      });

    }
 </script>
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
                  <i class="fa fa-cogs"></i> Menu Password Setting
               </h3>
            </div>
            <div class="box-content nopadding">
               <div class="tab-content padding tab-content-inline tab-content-bottom">

                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>SNO.</th>
                        <th>Menu</th>
                        <th>Password</th>
                        <th>New Password</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($dashboard_pin_sets as $row)
                        <?php 
                        $id = $row->id;
                        ?>
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>
                                <img style="width: 50px;" src="{{ asset('storage/app/public/icon/'.$row->image)}}" alt="{{ $row->menu }}" class="img-thumbnail">
                                <span style="font-size: 18px;font-weight:bold;">{{ $row->menu }}</span>
                            </td>
                            <td><b>{{ $row->password }}</b></td>
                            <td>
                                <input type="text" id="menu{{$id}}" class="form-control">
                                <small class="text-danger" id="error{{$id}}"></small>
                            </td>
                            <td>
                                <button onclick="changeMenuPassword({{$id}});" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Change Password</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>

                  
               </div>
            </div>
         </div>
      </div>
   </div>
</div>



 <script>
    function changeMenuPassword(id){
      var menuPassword = $("#menu"+id).val();
      var status = false;
      
      if(menuPassword == ''){
        $("#error"+id).html('New Password Field is Required');
        status = false;
      }else{
        $("#error"+id).html(' ');
        status = true;
      }

        if(status == true){
                $.ajax({
                    type:'GET',
                    url:'{{ url("changeMenuPassword") }}?menuId='+id+'&password='+menuPassword,
                    success:function(res){
                    console.log(res);
                    if(res==1){
                        swal("Password changed successfully")
                        .then((value) => {
                            location.reload();
                        });
                    }else{
                        swal("Something went wrong", "", "error");
                    }
                    
                    }
                });
        }      

    }
 </script>
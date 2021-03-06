<div>
    @if(session()->has('message'))
    	<h6 style="background: #177905;padding: 8px;color: white;" ><b><center>{{session()->get('message')}}</center></b></h6>
    @elseif(session()->has('error'))
    	<h6 style="background: #c00303;padding: 8px;color: white;" ><b><center>{{session()->get('error')}}</center></b></h6>
    @endif




    @if ($errors->any())
    
            @foreach ($errors->all() as $error)
                <h6 style="background: #c00303;padding: 8px;color: white; "><b><center>{{ $error }}</center></b></h6>
                <?php break; ?>
            @endforeach
       
@endif
</div>
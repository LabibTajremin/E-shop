@include('header')




<div class="usercontent">
	
	<div class="usercard">
		<div class="row">
			<div class=col-md-12 style="text-align:center; line-height: 45px; "><h1>User details<h1></div>
			
		</div>
		<div class="row">
			<div class=col-md-4 style="line-height: 35px;" >Name:</div>
			<div class=col-md-8 style="line-height: 35px;" >{{$user['name']}}</div>
		</div>
		<div class="row">
			<div class=col-md-4 style="line-height: 35px;">Username:</div>
			<div class=col-md-8 style="line-height: 35px;">{{$user['username']}}</div>
		</div>
		<div class="row">
			<div class=col-md-4 style="line-height: 35px;">Email:</div>
			<div class=col-md-8 style="line-height: 35px;">{{$user['email']}}</div>
		</div>
		<div class="row">
			<div class=col-md-12 style="text-align:center; margin-top:30px;"><a class="btn btn-info"  href="#"><i class="fa fa-edit"></i> Edit</a></div>
			
		</div>
	</div>
	
	<div class="usercard">
	
		<div class="row">
			<div class=col-md-12 style="text-align:center; line-height: 45px; "><h1>Address details<h1></div>
			
		</div>
		
		
		
		<div class="row">
			<div class=col-md-12 style="text-align:center; margin-top:30px;"><a class="btn btn-info" href="#"><i class="fa fa-edit"></i> Edit</a></div>
			
		</div>
	</div>
	<div class="usercard">
	
		<div class="row">
			<div class=col-md-12 style="text-align:center; line-height: 45px; "><h1>Card details<h1></div>
			
		</div>
		
		
		
		<div class="row">
			<div class=col-md-12 style="text-align:center; margin-top:30px;"><a class="btn btn-info" href="#"><i class="fa fa-edit"></i> Edit</a></div>
			
		</div>
	</div>
    
	<div class=col-md-12 style="text-align:center; margin-top:30px;"><a class="btn btn-danger" href="logout"><i class="fa fa-sign-out"></i> Logout </a></div>	
	<br><br>	

    
               
                
</div>

@include('footer')
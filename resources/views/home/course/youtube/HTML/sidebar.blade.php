	<div class="sidebar" data-background-color="black" data-active-color="danger">

		<div class="sidebar-wrapper">
			<div class="logo">				
  				<div class="dropdown" align="center">
  					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    					HTML
    			</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
					    <ul class="list-group">
							<li class="list-group-item list-group-item-primary">
							    <a href="/course/udemy" class="dropdown-item"><img src="/assets/img/iconphp.jpg" class="rounded-circle" height="16px"> PHP</a>						
							</li>
							<li class="list-group-item list-group-item-primary">					    
							    <a href="/course/youtube/javascript" class="dropdown-item"><img src="/assets/img/iconjavascript.jpg" class="rounded-circle" height="16px"> JavaScript</a>
							</li>
							<li class="list-group-item list-group-item-primary">					    
							    <a href="/course/youtube/css" class="dropdown-item"><img src="/assets/img/iconcss.jpg" class="rounded-circle" height="16px"> CSS</a>
							</li>	
							<li class="list-group-item list-group-item-primary">					    
							    <a href="/course/youtube/java" class="dropdown-item"><img src="/assets/img/iconjava.jpg" class="rounded-circle" height="16px"> Java</a>
							</li>	
							<li class="list-group-item list-group-item-primary">					    
							    <a href="/course/youtube/jquery" class="dropdown-item"><img src="/assets/img/iconjquery.jpg" class="rounded-circle" height="16px"> jQuery</a>
							</li>										
				    	</ul>
				</div>
				</div>
			</div>
			<div id="list-example" class="list-group">
					@foreach ($htmlyoutube1 as $htmlyoutube1s)
				  	<a class="list-group-item list-group-item-action" href="/course/youtube/html"><img src="/assets/img/iconhtml.jpg" class="rounded-circle" height="16px">&nbsp {{ $htmlyoutube1s->title }}</a>
				  	@endforeach				  
			</div>
		</div>
	</div>


			
						

	
	<div class="sidebar" data-background-color="black" data-active-color="danger">

		<div class="sidebar-wrapper">
			<div class="logo">				
  				<div class="dropdown" align="center">
  					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    					Udemy
    			</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
					    <ul class="list-group">							
							<li class="list-group-item list-group-item-primary">					    
							    <a href="/course/sololearn/html"><img src="/assets/img/iconhtml.jpg" class="rounded-circle" height="16px"> HTML Fundamentals </a>
							</li>
							<li class="list-group-item list-group-item-primary">					    
							    <a href="/course/sololearn/javascript"><img src="/assets/img/iconjavascript.jpg" class="rounded-circle" height="16px"> JavaScript Tutorial </a>
							</li>
							<li class="list-group-item list-group-item-primary">					    
							    <a href="/course/sololearn/python3"><img src="/assets/img/iconpython.jpg" class="rounded-circle" height="16px"> Python 3 Tutorial </a>
							</li>
							<li class="list-group-item list-group-item-primary">					    
							    <a href="/course/sololearn/php"><img src="/assets/img/iconphp.jpg" class="rounded-circle" height="16px"> PHP Tutorial </a>
							</li>
							<li class="list-group-item list-group-item-primary">					    
							    <a href="/course/sololearn/jquery"><img src="/assets/img/iconjquery.jpg" class="rounded-circle" height="16px"> jQuery Tutorial </a>
							</li>												
				    	</ul>
				</div>
				</div>
			</div>
			<br>				
  				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					[New] Ultimate AWS Certified Cloud Practitioner - 2020
	    			</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
						    <ul class="list-group">
								@foreach ($awscloududemy as $awscloududemys)
								<li class="list-group-item list-group-item-primary">
								    <a href="/course/sololearn/sql"><img src="/assets/img/iconsql.jpg" class="rounded-circle" height="16px">&nbsp {{ $awscloududemys->subtitle }} </a>						
								</li>	
								@endforeach
					    	</ul>
					</div>
				</div>
				
		</div>
	</div>
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
							    <a href="/course/udemy/python"><img src="/assets/img/iconpython.jpg" class="rounded-circle" height="16px"> Python </a>
							</li>				
							<li class="list-group-item list-group-item-primary">					    
							    <a href="/course/sololearn/html"><img src="/assets/img/iconhtml.jpg" class="rounded-circle" height="16px"> HTML Fundamentals </a>
							</li>
							<li class="list-group-item list-group-item-primary">					    
							    <a href="/course/sololearn/javascript"><img src="/assets/img/iconjavascript.jpg" class="rounded-circle" height="16px"> JavaScript Tutorial </a>
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
			<div class="logo">
				<div class="dropdown" align="center">
	  					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Udemy
	    			</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
						    <ul class="list-group">
								<li class="list-group-item list-group-item-primary">
								    <a href="/course/sololearn" class="dropdown-item"><img src="/assets/img/iconsololearn.jpg" height="16px"> Sololearn</a>						
								</li>							
								<li class="list-group-item list-group-item-primary">					    
								    <a href="/course/youtube" class="dropdown-item"><img src="/assets/img/iconyoutube.jpg" height="16px"></i> Youtube</a>	
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
								    <a href="/course/udemy/awscloud"><img src="/assets/img/iconsql.jpg" class="rounded-circle" height="16px">&nbsp {{ $awscloududemys->subtitle }} </a>						
								</li>	
								@endforeach
					    	</ul>
					</div>
				</div>

			<br>				
  				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Free AWS Certified Cloud Practitioner 2019
	    			</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
						    <ul class="list-group">
								@foreach ($awscloududemy1 as $awscloududemy1s)
								<li class="list-group-item list-group-item-primary">
								    <a href="/course/udemy/awscloud2"><img src="/assets/img/iconsql.jpg" class="rounded-circle" height="16px">&nbsp {{ $awscloududemy1s->subtitle }} </a>						
								</li>	
								@endforeach
					    	</ul>
					</div>
				</div>
				
		</div>
	</div>
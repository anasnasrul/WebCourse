	<div class="sidebar" data-background-color="black" data-active-color="danger">

		<div class="sidebar-wrapper">
			<div class="logo">				
  				<div class="dropdown" align="center">
  					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    					HTML Fundamentals
    			</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
					    <ul class="list-group">
							<li class="list-group-item list-group-item-primary">
							    <a href="/course/sololearn/sql"><img src="/assets/img/iconsql.jpg" class="rounded-circle" height="16px"> SQL Fundamentals </a>						
							</li>
							<li class="list-group-item list-group-item-primary">					    
							    <a href="/course/sololearn/php"><img src="/assets/img/iconphp.jpg" class="rounded-circle" height="16px"> PHP Tutorial </a>
							</li>
							<li class="list-group-item list-group-item-primary">					    
							    <a href="/course/sololearn/javascript"><img src="/assets/img/iconjavascript.jpg" class="rounded-circle" height="16px"> JavaScript Tutorial </a>
							</li>
							<li class="list-group-item list-group-item-primary">					    
							    <a href="/course/sololearn/python"><img src="/assets/img/iconpython.jpg" class="rounded-circle" height="16px"> Python 3 Tutorial </a>
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
	    					Sololearn
	    			</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
						    <ul class="list-group">
								<li class="list-group-item list-group-item-primary">
								    <a href="/course/udemy" class="dropdown-item"><img src="/assets/img/iconudemy.jpg" height="16px"> Udemy</a>						
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
	    					Module 1: Overview
	    			</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
						    <ul class="list-group">
						    	@foreach ($htmlsololearn as $htmlsololearns)
								<li class="list-group-item list-group-item-primary">
								    <a href="/course/sololearn/html"><img src="/assets/img/iconhtml.jpg" class="rounded-circle" height="16px">&nbsp {{ $htmlsololearns->subtitle }}</a> 						
								</li>
								@endforeach										
					    	</ul>
					</div>
				</div>
			
			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 2: HTML Basics
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
							    	@foreach ($htmlsololearn1 as $htmlsololearn1s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/html2"><img src="/assets/img/iconhtml.jpg" class="rounded-circle" height="16px"> &nbsp {{ $htmlsololearn1s->subtitle }}</a>						
									</li>
									@endforeach	
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 3: HTML5
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">									
									@foreach ($htmlsololearn2 as $htmlsololearn2s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/html3"><img src="/assets/img/iconhtml.jpg" class="rounded-circle" height="16px">&nbsp {{ $htmlsololearn2s->subtitle }}</a>
									@endforeach						
									</li>								
						    	</ul>
						</div>
				</div>	    
		</div>
	</div>


			
						

	
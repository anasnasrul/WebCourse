	<div class="sidebar" data-background-color="black" data-active-color="danger">

		<div class="sidebar-wrapper">
			<div class="logo">				
  				<div class="dropdown" align="center">
  					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    					jQuery Tutorial
    			</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
					    <ul class="list-group">
							<li class="list-group-item list-group-item-primary">
							    <a href="/course/sololearn/sql"><img src="/assets/img/iconsql.jpg" class="rounded-circle" height="16px"> SQL Fundamentals </a>						
							</li>
							<li class="list-group-item list-group-item-primary">					    
							    <a href="/course/sololearn/html"><img src="/assets/img/iconhtml.jpg" class="rounded-circle" height="16px"> HTML Fundamentals </a>
							</li>
							<li class="list-group-item list-group-item-primary">					    
							    <a href="/course/sololearn/javascript"><img src="/assets/img/iconjavascript.jpg" class="rounded-circle" height="16px"> JavaScript Tutorial </a>
							</li>
							<li class="list-group-item list-group-item-primary">					    
							    <a href="/course/sololearn/python"><img src="/assets/img/iconpython.jpg" class="rounded-circle" height="16px"> Python 3 Tutorial </a>
							</li>							
							<li class="list-group-item list-group-item-primary">					    
							    <a href="/course/sololearn/php"><img src="/assets/img/iconphp.jpg" class="rounded-circle" height="16px"> PHP Tutorial </a>
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
								@foreach ($jquerysololearn as $jquerysololearns)
								<li class="list-group-item list-group-item-primary">
								    <a href="/course/sololearn/jquery"><img src="/assets/img/iconjquery.jpg" class="rounded-circle" height="16px">&nbsp {{ $jquerysololearns->subtitle }}</a>						
								</li>	
								@endforeach	
					    	</ul>
					</div>
				</div>
			
			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 2: Attributes and Content
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($jquerysololearn1 as $jquerysololearn1s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/jquery2"><img src="/assets/img/iconjquery.jpg" class="rounded-circle" height="16px">&nbsp {{ $jquerysololearn1s->subtitle }}</a>						
									</li>
									@endforeach		
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 3: Manipulating CSS
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($jquerysololearn2 as $jquerysololearn2s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/jquery3"><img src="/assets/img/iconjquery.jpg" class="rounded-circle" height="16px">&nbsp {{ $jquerysololearn2s->subtitle }}</a>						
									</li>	
									@endforeach									
						    	</ul>						    	
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 4: Manipulate DOM
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($jquerysololearn3 as $jquerysololearn3s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/jquery4"><img src="/assets/img/iconjquery.jpg" class="rounded-circle" height="16px">&nbsp {{ $jquerysololearn3s->subtitle }}</a>						
									</li>	
									@endforeach										
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 5: Events
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($jquerysololearn4 as $jquerysololearn4s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/jquery5"><img src="/assets/img/iconjquery.jpg" class="rounded-circle" height="16px">&nbsp {{ $jquerysololearn4s->subtitle }}</a>						
									</li>	
									@endforeach	
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 6: Effects
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($jquerysololearn5 as $jquerysololearn5s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/jquery6"><img src="/assets/img/iconjquery.jpg" class="rounded-circle" height="16px">&nbsp {{ $jquerysololearn5s->subtitle }}</a>						
									</li>
									@endforeach											
						    	</ul>
						</div>
				</div>	    
		</div>
	</div>


			
						

	
	<div class="sidebar" data-background-color="black" data-active-color="danger">

		<div class="sidebar-wrapper">
			<div class="logo">				
  				<div class="dropdown" align="center">
  					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    					JavaScript Tutorial
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
							    <a href="/course/sololearn/php"><img src="/assets/img/iconphp.jpg" class="rounded-circle" height="16px"> PHP Tutorial </a>
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
			<br>				
  				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 1: Overview
	    			</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
						    <ul class="list-group">
								@foreach ($jssololearn as $jssololearns)
								<li class="list-group-item list-group-item-primary">
								    <a href="/course/sololearn/javascript"><img src="/assets/img/iconjavascript.jpg" class="rounded-circle" height="16px">&nbsp {{ $jssololearns->subtitle }}</a>						
								</li>	
								@endforeach
					    	</ul>
					</div>
				</div>
			
			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 2: Basic Concepts
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($jssololearn1 as $jssololearn1s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/javascript2"><img src="/assets/img/iconjavascript.jpg" class="rounded-circle" height="16px">&nbsp {{ $jssololearn1s->subtitle }}</a>						
									</li>
									@endforeach
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 3: Conditionals and Loops
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($jssololearn2 as $jssololearn2s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/javascript3"><img src="/assets/img/iconjavascript.jpg" class="rounded-circle" height="16px">&nbsp {{ $jssololearn2s->subtitle }}</a>						
									</li>		
									@endforeach
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 4: Functions
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($jssololearn3 as $jssololearn3s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/javascript4"><img src="/assets/img/iconjavascript.jpg" class="rounded-circle" height="16px">&nbsp {{ $jssololearn3s->subtitle }}</a>						
									</li>		
									@endforeach
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 5: Objects
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($jssololearn4 as $jssololearn4s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/javascript5"><img src="/assets/img/iconjavascript.jpg" class="rounded-circle" height="16px">&nbsp {{ $jssololearn4s->subtitle }}</a>						
									</li>
									@endforeach
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 6: Core Objects
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($jssololearn5 as $jssololearn5s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/javascript6"><img src="/assets/img/iconjavascript.jpg" class="rounded-circle" height="16px">&nbsp {{ $jssololearn5s->subtitle }}</a>						
									</li>	
									@endforeach
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 7: DOM and Events
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($jssololearn6 as $jssololearn6s)		
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/javascript7"><img src="/assets/img/iconjavascript.jpg" class="rounded-circle" height="16px">&nbsp {{ $jssololearn6s->subtitle }}</a>						
									</li>
									@endforeach
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 8: ECMAScript 6
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($jssololearn7 as $jssololearn7s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/javascript8"><img src="/assets/img/iconjavascript.jpg" class="rounded-circle" height="16px">&nbsp {{ $jssololearn7s->subtitle }}</a>						
									</li>
									@endforeach
						    	</ul>
						</div>
				</div>						    
		</div>
	</div>


			
						

	
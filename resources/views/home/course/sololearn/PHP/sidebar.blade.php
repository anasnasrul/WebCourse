	<div class="sidebar" data-background-color="black" data-active-color="danger">

		<div class="sidebar-wrapper">
			<div class="logo">				
  				<div class="dropdown" align="center">
  					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    					PHP Tutorial
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
							    <a href="/course/sololearn/jquery"><img src="/assets/img/iconjquery.jpg" class="rounded-circle" height="16px"> jQuery Tutorial </a>
							</li>												
				    	</ul>
				</div>
				</div>
			</div>
			<br>				
  				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 1: Basic Syntax
	    			</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
						    <ul class="list-group">
								@foreach ($phpsololearn as $phpsololearns)
								<li class="list-group-item list-group-item-primary">
								    <a href="/course/sololearn/php"><img src="/assets/img/iconphp.jpg" class="rounded-circle" height="16px">&nbsp {{ $phpsololearns->subtitle }}</a>						
								</li>
								@endforeach
					    	</ul>
					</div>
				</div>
			
			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 2: Variables
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($phpsololearn1 as $phpsololearn1s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/php2"><img src="/assets/img/iconphp.jpg" class="rounded-circle" height="16px">&nbsp {{ $phpsololearn1s->subtitle }} </a>						
									</li>
									@endforeach		
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 3: Operators
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($phpsololearn2 as $phpsololearn2s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/php3"><img src="/assets/img/iconphp.jpg" class="rounded-circle" height="16px">&nbsp {{ $phpsololearn2s->subtitle }} </a>						
									</li>
									@endforeach										
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 4: Arrays
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($phpsololearn3 as $phpsololearn3s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/php4"><img src="/assets/img/iconphp.jpg" class="rounded-circle" height="16px">&nbsp {{ $phpsololearn3s->subtitle }}  </a>						
									</li>
									@endforeach											
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 5: Control Structures
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($phpsololearn4 as $phpsololearn4s)									
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/php5"><img src="/assets/img/iconphp.jpg" class="rounded-circle" height="16px">&nbsp {{ $phpsololearn4s->subtitle }} </a>						
									</li>
									@endforeach		
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 6: Functions
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($phpsololearn5 as $phpsololearn5s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/php6"><img src="/assets/img/iconphp.jpg" class="rounded-circle" height="16px">&nbsp {{ $phpsololearn5s->subtitle }} </a>						
									</li>
									@endforeach											
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 7: Predefined Variables
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($phpsololearn6 as $phpsololearn6s)		
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/php7"><img src="/assets/img/iconphp.jpg" class="rounded-circle" height="16px">&nbsp {{ $phpsololearn6s->subtitle }} </a>						
									</li>
									@endforeach
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 8: Working with Files
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($phpsololearn7 as $phpsololearn7s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/php8"><img src="/assets/img/iconphp.jpg" class="rounded-circle" height="16px">&nbsp {{ $phpsololearn7s->subtitle }} </a>						
									</li>
									@endforeach																			
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 9: Object-Oriented PHP
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($phpsololearn8 as $phpsololearn8s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/php9"><img src="/assets/img/iconphp.jpg" class="rounded-circle" height="16px">&nbsp {{ $phpsololearn8s->subtitle }} </a>						
									</li>	
									@endforeach									
						    	</ul>
						</div>
				</div>
						    
		</div>
	</div>


			
						

	
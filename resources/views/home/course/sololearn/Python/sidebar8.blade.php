	<div class="sidebar" data-background-color="black" data-active-color="danger">

		<div class="sidebar-wrapper">
			<div class="logo">				
  				<div class="dropdown" align="center">
  					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    					Python 3 Tutorial
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
	    					Module 1: Basic Concepts
	    			</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
						    <ul class="list-group">
								@foreach ($pythonsololearn as $pythonsololearns)
								<li class="list-group-item list-group-item-primary">
								    <a href="/course/sololearn/python"><img src="/assets/img/iconpython.jpg" class="rounded-circle" height="16px">&nbsp {{ $pythonsololearns->subtitle }}</a>						
								</li>	
								@endforeach	
					    	</ul>
					</div>
				</div>
			
			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 2: Control Structures
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($pythonsololearn1 as $pythonsololearn1s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/python2"><img src="/assets/img/iconpython.jpg" class="rounded-circle" height="16px">&nbsp {{ $pythonsololearn1s->subtitle }}</a>						
									</li>	
									@endforeach	
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 3: Functions and Modules
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($pythonsololearn2 as $pythonsololearn2s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/python3"><img src="/assets/img/iconpython.jpg" class="rounded-circle" height="16px">&nbsp {{ $pythonsololearn2s->subtitle }}</a>						
									</li>
									@endforeach										
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 4: Exceptions and Files
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($pythonsololearn3 as $pythonsololearn3s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/python4"><img src="/assets/img/iconpython.jpg" class="rounded-circle" height="16px">&nbsp {{ $pythonsololearn3s->subtitle }}</a>						
									</li>
									@endforeach											
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 5: More Types
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($pythonsololearn4 as $pythonsololearn4s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/python5"><img src="/assets/img/iconpython.jpg" class="rounded-circle" height="16px">&nbsp {{ $pythonsololearn4s->subtitle }}</a>						
									</li>
									@endforeach		
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 6: Functional Programming
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($pythonsololearn5 as $pythonsololearn5s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/python6"><img src="/assets/img/iconpython.jpg" class="rounded-circle" height="16px">&nbsp {{ $pythonsololearn5s->subtitle }}</a>						
									</li>
									@endforeach											
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 7: Object-Oriented Programming
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($pythonsololearn6 as $pythonsololearn6s)		
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/python7"><img src="/assets/img/iconpython.jpg" class="rounded-circle" height="16px">&nbsp {{ $pythonsololearn6s->subtitle }}</a>						
									</li>
									@endforeach
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 8: Regular Expressions
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($pythonsololearn7 as $pythonsololearn7s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/python8"><img src="/assets/img/iconpython.jpg" class="rounded-circle" height="16px">&nbsp {{ $pythonsololearn7s->subtitle }}</a>						
									</li>
									@endforeach																			
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 9: Pythonicness and Packaging
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($pythonsololearn8 as $pythonsololearn8s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/python9"><img src="/assets/img/iconpython.jpg" class="rounded-circle" height="16px">&nbsp {{ $pythonsololearn8s->subtitle }}</a>						
									</li>
									@endforeach										
						    	</ul>
						</div>
				</div>
						    
		</div>
	</div>


			
						

	
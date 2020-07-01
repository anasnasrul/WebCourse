	<div class="sidebar" data-background-color="black" data-active-color="danger">

		<div class="sidebar-wrapper">
			<div class="logo">				
  				<div class="dropdown" align="center">
  					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    					SQL Fundamentals
    			</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
					    <ul class="list-group">
							<li class="list-group-item list-group-item-primary">
							    <a href="/course/sololearn/php"><img src="/assets/img/iconphp.jpg" class="rounded-circle" height="16px"> PHP Tutorial </a>						
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
	    					Module 1: Basic Concepts
	    			</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
						    <ul class="list-group">
								@foreach ($sqlsololearn as $sqlsololearns)
								<li class="list-group-item list-group-item-primary">
								    <a href="/course/sololearn/sql"><img src="/assets/img/iconsql.jpg" class="rounded-circle" height="16px">&nbsp {{ $sqlsololearns->subtitle }} </a>						
								</li>	
								@endforeach
					    	</ul>
					</div>
				</div>
			
			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 2: Filtering, Functions, Subqueries
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($sqlsololearn1 as $sqlsololearn1s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/sql2"><img src="/assets/img/iconsql.jpg" class="rounded-circle" height="16px">&nbsp {{ $sqlsololearn1s->subtitle }} </a>						
									</li>
									@endforeach		
						    	</ul>
						</div>
				</div>

			<br>
				<div class="dropdown" align="center">
	  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    					Module 3: JOIN, Table Operations
	    			</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
							    <ul class="list-group">
									@foreach ($sqlsololearn2 as $sqlsololearn2s)
									<li class="list-group-item list-group-item-primary">
									    <a href="/course/sololearn/sql3"><img src="/assets/img/iconsql.jpg" class="rounded-circle" height="16px">&nbsp {{ $sqlsololearn2s->subtitle }} </a>						
									</li>
									@endforeach										
						    	</ul>
						</div>
				</div>	    
		</div>
	</div>


			
						

	
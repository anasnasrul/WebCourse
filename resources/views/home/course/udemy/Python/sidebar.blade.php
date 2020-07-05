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
							    <a href="/course/udemy/awscloud"><img src="/assets/img/iconaws.jpg" class="rounded-circle" height="16px"> AWS Cloud </a>
							</li>		
							<li class="list-group-item list-group-item-primary">					    
							    <a href="/course/udemy/java"><img src="/assets/img/iconjava.jpg" class="rounded-circle" height="16px"> Java </a>
							</li>
							<li class="list-group-item list-group-item-primary">					    
							    <a href="/course/udemy/net"><img src="/assets/img/iconnet.jpg" class="rounded-circle" height="16px"> Net </a>
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
	    					Decision Trees, Random Forests. AdaBoost and XGBoost in Python
	    			</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenu2">					
						    <ul class="list-group">
								@foreach ($pythonudemy as $pythonudemys)
								<li class="list-group-item list-group-item-primary">
								    <a href="/course/udemy/python"><img src="/assets/img/iconpython.jpg" class="rounded-circle" height="16px">&nbsp {{ $pythonudemys->subtitle }} </a>						
								</li>	
								@endforeach
					    	</ul>
					</div>
				</div>			
				
		</div>
	</div>
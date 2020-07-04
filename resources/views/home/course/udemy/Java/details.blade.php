        <div class="container">
        	<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-sm-6">
						<div class="card">
							<div class="content">
								@foreach ($javaudemy1 as $javaudemy1s)
								<h4>{{ $javaudemy1s->Content_Subtitle }}</h4>
								<p align="justify">{{ $javaudemy1s->Content_Home1 }}&nbsp{{ $javaudemy1s->Content_Home2 }}&nbsp
								{{ $javaudemy1s->Content_Home3 }}&nbsp{{ $javaudemy1s->Content_Home4 }}&nbsp{{ $javaudemy1s->Content_Home5 }}&nbsp
								{{ $javaudemy1s->Content_Home6 }}&nbsp{{ $javaudemy1s->Content_Home7 }}&nbsp{{ $javaudemy1s->Content_Home8 }}&nbsp
									{{ $javaudemy1s->Content_Home9 }}&nbsp{{ $javaudemy1s->Content_Home10 }}</p>
								<p><img src="{{ $javaudemy1s->Content_Picture1 }}" height="100px" width="200px">&nbsp
									<img src="{{ $javaudemy1s->Content_Picture2 }}" height="100px" width="200px">&nbsp
									<img src="{{ $javaudemy1s->Content_Picture3 }}" height="100px" width="200px">&nbsp
									<img src="{{ $javaudemy1s->Content_Picture4 }}" height="100px" width="200px">&nbsp
									<img src="{{ $javaudemy1s->Content_Picture5 }}" height="100px" width="200px">&nbsp
									<img src="{{ $javaudemy1s->Content_Picture6 }}" height="100px" width="200px">&nbsp
									<img src="{{ $javaudemy1s->Content_Picture7 }}" height="100px" width="200px">&nbsp
									<img src="{{ $javaudemy1s->Content_Picture8 }}" height="100px" width="200px">&nbsp
									<img src="{{ $javaudemy1s->Content_Picture9 }}" height="100px" width="200px">&nbsp
									<img src="{{ $javaudemy1s->Content_Picture10 }}" height="100px" width="200px">
								</p>
								
								@endforeach
								{{ $javaudemy1->links() }}	
							</div>
						</div>
					</div>					
        		</div> 
    		</div>
		</div>
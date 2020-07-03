        <div class="container">
        	<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-sm-6">
						<div class="card">
							<div class="content">
								@foreach ($pythonudemy1 as $pythonudemy1s)
								<h4>{{ $pythonudemy1s->Content_Subtitle }}</h4>
								<p align="justify">{{ $pythonudemy1s->Content_Home1 }}&nbsp{{ $pythonudemy1s->Content_Home2 }}&nbsp
								{{ $pythonudemy1s->Content_Home3 }}&nbsp{{ $pythonudemy1s->Content_Home4 }}&nbsp{{ $pythonudemy1s->Content_Home5 }}&nbsp
								{{ $pythonudemy1s->Content_Home6 }}&nbsp{{ $pythonudemy1s->Content_Home7 }}&nbsp{{ $pythonudemy1s->Content_Home8 }}&nbsp
									{{ $pythonudemy1s->Content_Home9 }}&nbsp{{ $pythonudemy1s->Content_Home10 }}</p>
								<p><img src="{{ $pythonudemy1s->Content_Picture1 }}" height="100px" width="200px">&nbsp
									<img src="{{ $pythonudemy1s->Content_Picture2 }}" height="100px" width="200px">&nbsp
									<img src="{{ $pythonudemy1s->Content_Picture3 }}" height="100px" width="200px">&nbsp
									<img src="{{ $pythonudemy1s->Content_Picture4 }}" height="100px" width="200px">&nbsp
									<img src="{{ $pythonudemy1s->Content_Picture5 }}" height="100px" width="200px">&nbsp
									<img src="{{ $pythonudemy1s->Content_Picture6 }}" height="100px" width="200px">&nbsp
									<img src="{{ $pythonudemy1s->Content_Picture7 }}" height="100px" width="200px">&nbsp
									<img src="{{ $pythonudemy1s->Content_Picture8 }}" height="100px" width="200px">&nbsp
									<img src="{{ $pythonudemy1s->Content_Picture9 }}" height="100px" width="200px">&nbsp
									<img src="{{ $pythonudemy1s->Content_Picture10 }}" height="100px" width="200px">
								</p>
								
								@endforeach
								{{ $pythonudemy1->links() }}	
							</div>
						</div>
					</div>					
        		</div> 
    		</div>
		</div>
        <div class="container">
        	<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-sm-6">
						<div class="card">
							<div class="content">
								@foreach ($awscloududemy3 as $awscloududemy3s)
								<h4>{{ $awscloududemy3s->Content_Subtitle }}</h4>
								<p align="justify">{{ $awscloududemy3s->Content_Home1 }}&nbsp{{ $awscloududemy3s->Content_Home2 }}&nbsp
								{{ $awscloududemy3s->Content_Home3 }}&nbsp{{ $awscloududemy3s->Content_Home4 }}&nbsp{{ $awscloududemy3s->Content_Home5 }}&nbsp
								{{ $awscloududemy3s->Content_Home6 }}&nbsp{{ $awscloududemy3s->Content_Home7 }}&nbsp{{ $awscloududemy3s->Content_Home8 }}&nbsp
									{{ $awscloududemy3s->Content_Home9 }}&nbsp{{ $awscloududemy3s->Content_Home10 }}</p>
								<p><img src="{{ $awscloududemy3s->Content_Picture1 }}" height="100px" width="200px">&nbsp
									<img src="{{ $awscloududemy3s->Content_Picture2 }}" height="100px" width="200px">&nbsp
									<img src="{{ $awscloududemy3s->Content_Picture3 }}" height="100px" width="200px">&nbsp
									<img src="{{ $awscloududemy3s->Content_Picture4 }}" height="100px" width="200px">&nbsp
									<img src="{{ $awscloududemy3s->Content_Picture5 }}" height="100px" width="200px">&nbsp
									<img src="{{ $awscloududemy3s->Content_Picture6 }}" height="100px" width="200px">&nbsp
									<img src="{{ $awscloududemy3s->Content_Picture7 }}" height="100px" width="200px">&nbsp
									<img src="{{ $awscloududemy3s->Content_Picture8 }}" height="100px" width="200px">&nbsp
									<img src="{{ $awscloududemy3s->Content_Picture9 }}" height="100px" width="200px">&nbsp
									<img src="{{ $awscloududemy3s->Content_Picture10 }}" height="100px" width="200px">
								</p>
								
								@endforeach
								{{ $awscloududemy3->links() }}	
							</div>
						</div>
					</div>					
        		</div> 
    		</div>
		</div>
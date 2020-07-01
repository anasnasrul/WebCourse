        <div class="container">
        	<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-sm-6">
						<div class="card">
							<div class="content">
								@foreach ($pythonsololearn33 as $pythonsololearn33s)
								<h4>{{ $pythonsololearn33s->Content_Subtitle }}</h4>
								<p align="justify">{{ $pythonsololearn33s->Content_Home1 }}&nbsp{{ $pythonsololearn33s->Content_Home2 }}&nbsp
								{{ $pythonsololearn33s->Content_Home3 }}&nbsp{{ $pythonsololearn33s->Content_Home4 }}&nbsp{{ $pythonsololearn33s->Content_Home5 }}</p>
								<p>{{ $pythonsololearn33s->Content_Code1 }}&nbsp{{ $pythonsololearn33s->Content_Code2 }}&nbsp{{ $pythonsololearn33s->Content_Code3 }}&nbsp
									{{ $pythonsololearn33s->Content_Code4 }}&nbsp{{ $pythonsololearn33s->Content_Code5 }}</p>
								<p><img src="{{ $pythonsololearn33s->Content_Picture1 }}" height="100px" width="200px">&nbsp
									<img src="{{ $pythonsololearn33s->Content_Picture2 }}" height="100px" width="200px">&nbsp
									<img src="{{ $pythonsololearn33s->Content_Picture3 }}" height="100px" width="200px">&nbsp
									<img src="{{ $pythonsololearn33s->Content_Picture4 }}" height="100px" width="200px">&nbsp
									<img src="{{ $pythonsololearn33s->Content_Picture5 }}" height="100px" width="200px">
								</p>
								<p class="text-primary">{{ $pythonsololearn33s->Content_Note1 }}</p>
								<p class="text-primary">{{ $pythonsololearn33s->Content_Note2 }}</p>
								<p class="text-primary">{{ $pythonsololearn33s->Content_Note3 }}</p>
								<p class="text-primary">{{ $pythonsololearn33s->Content_Note4 }}</p>
								<p class="text-primary">{{ $pythonsololearn33s->Content_Note5 }}</p>
								@endforeach
								{{ $pythonsololearn33->links() }}
							</div>
						</div>
					</div>												
        		</div> 
    		</div>
		</div>
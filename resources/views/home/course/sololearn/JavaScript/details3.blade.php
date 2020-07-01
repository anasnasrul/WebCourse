        <div class="container">
        	<div class="container-fluid">
				<div class="row">					
					<div class="col-lg-12 col-sm-6">
						<div class="card">
							<div class="content">
								@foreach ($jssololearn20 as $jssololearn20s)
								<h4>{{ $jssololearn20s->Content_Subtitle }}</h4>
								<p align="justify">{{ $jssololearn20s->Content_Home1 }}&nbsp{{ $jssololearn20s->Content_Home2 }}&nbsp
								{{ $jssololearn20s->Content_Home3 }}&nbsp{{ $jssololearn20s->Content_Home4 }}&nbsp{{ $jssololearn20s->Content_Home5 }}</p>
								<p>{{ $jssololearn20s->Content_Code1 }}&nbsp{{ $jssololearn20s->Content_Code2 }}&nbsp{{ $jssololearn20s->Content_Code3 }}&nbsp
									{{ $jssololearn20s->Content_Code4 }}&nbsp{{ $jssololearn20s->Content_Code5 }}</p>
								<p><img src="{{ $jssololearn20s->Content_Picture1 }}" height="100px" width="200px">&nbsp
									<img src="{{ $jssololearn20s->Content_Picture2 }}" height="100px" width="200px">&nbsp
									<img src="{{ $jssololearn20s->Content_Picture3 }}" height="100px" width="200px">&nbsp
									<img src="{{ $jssololearn20s->Content_Picture4 }}" height="100px" width="200px">&nbsp
									<img src="{{ $jssololearn20s->Content_Picture5 }}" height="100px" width="200px">
								</p>
								<p class="text-primary">{{ $jssololearn20s->Content_Note1 }}</p>
								<p class="text-primary">{{ $jssololearn20s->Content_Note2 }}</p>
								<p class="text-primary">{{ $jssololearn20s->Content_Note3 }}</p>
								<p class="text-primary">{{ $jssololearn20s->Content_Note4 }}</p>
								<p class="text-primary">{{ $jssololearn20s->Content_Note5 }}</p>
								@endforeach
								{{ $jssololearn20->links() }}
							</div>
						</div>
					</div>								
        		</div> 
    		</div>
		</div>
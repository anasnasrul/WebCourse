        <div class="container">
        	<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="card-img-top" style="width: 50rem;">
							<div class="content">
								<div class="row">
									@foreach ($phpyoutube as $phpyoutubes)									
									 	<div >
										  <video id="{{ $phpyoutubes->id }}" class="video-js vjs-theme-city vjs-big-play-centered" 
										  controls preload="auto" width="500" height="380" data-setup='{ "techOrder": ["youtube"], 
										  "sources": [{ "type": "video/youtube", "src": "{{ $phpyoutubes->destination }}"}] }'>										  		
								    	  </video>		
										  {{ Html::script('assets/js/video.min.js') }}
										  {{ Html::script('assets/js/youtube.min.js') }}
										  	<script>
									        videojs(document.getElementById('{{ $phpyoutubes->id }}'), {}, function() {
									            // This is functionally the same as the previous example.
									        });
									    	</script>
									    	<p class="text-center text-primary">{{ $phpyoutubes->title }}</p>									    	
										</div>
										@endforeach
										{{ $phpyoutube->links() }}																			
								</div>	
							</div>
						</div>
					</div>
        		</div> 
    		</div>
		</div>
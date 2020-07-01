@extends('home.layouts.master')

@section('page')

Dashboard

@endsection

@section('content')

		<div class="content">
			<div class="container-fluid">				
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="card">
							<div class="content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-warning text-center">
											<i><img src="../assets/img/iconyoutube.jpg" height="32px"></i>
										</div>
									</div>
									<div class="col-xs-7">
										<div class="numbers">
											<p>Youtube</p>
											1
										</div>
									</div>
								</div>
								<div class="footer">
									<hr/>	
									<div class="stats">
										<a href="/course/youtube"><i><img src="../assets/img/iconyoutube.jpg" height="16px"></i>Youtube</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="card">
							<div class="content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-success text-center">
											<i><img src="../assets/img/iconudemy.jpg" height="32px"></i>
										</div>
									</div>
									<div class="col-xs-7">
										<div class="numbers">
											<p>Udemy</p>											
											4
										</div>
									</div>
								</div>
								<div class="footer">
									<hr/>	
									<div class="stats">
										<a href="/course/udemy"><i><img src="../assets/img/iconudemy.jpg" height="16px"></i>Udemy</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="card">
							<div class="content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-danger text-center">
											<i><img src="../assets/img/iconsololearn.jpg" height="32px"></i>
										</div>
									</div>
									<div class="col-xs-7">
										<div class="numbers">
											<p>SoloLearn</p>
											8
										</div>
									</div>
								</div>
								<div class="footer">
									<hr/>	
									<div class="stats">
										<a href="/course/sololearn"><i><img src="../assets/img/iconsololearn.jpg" height="16px"></i>SoloLearn</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="card">
							<div class="content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-info text-center">
										<i class="ti-desktop"></i>
										</div>
									</div>
									<div class="col-xs-7">
										<div class="numbers">
											<p>Others</p>
											2
										</div>
									</div>
								</div>
								<div class="footer">
								<hr/>
									<div class="stats">
										<a href="/training"><i class="fas fa-certificate"></i>Others</a>
									</div>
								</div>
							</div>
						</div>
					</div>									
				</div>
			</div>
		</div>

@endsection
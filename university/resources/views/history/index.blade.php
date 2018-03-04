@extends('layouts.master')

@section('content')


<!-- Page Header -->
				<div class="page-header bg-dark">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<!-- Page Header Wrapper -->
								<div class="page-header-wrapper">
									<!-- Title & Sub Title -->
									<h3 class="title">University Name</h3>
									<h6 class="sub-title">About university</h6>
									<ol class="breadcrumb">
										<li><a href="index.php">Home</a></li>
										<li class="active">History</li>
									</ol><!-- Breadcrumb -->
								</div><!-- Page Header Wrapper -->
							</div><!-- Coloumn -->
						</div><!-- Row -->
					</div><!-- Container -->
				</div><!-- Page Header -->

				<!-- Page Main -->
				<div role="main" class="main">
					<div class="page-default bg-grey typo-dark">
						<!-- Container -->
						<div class="container">
							<div class="row">
								<!-- history Column -->
								<div class="col-xs-12 news-single">
								
									<div class="news-img-wrap">
										<img src="images/news/single-01.jpg" class="img-responsive" alt="News" height="600" width="1200">
									</div>
									<!-- Blog Detail Wrapper -->
									<div class="news-single-details">
										<!-- Blog Description -->
										<p>
											{{$histories->content}}
										</p>

										
									</div><!-- Blog Detail Wrapper -->
								</div><!-- Blog Wrapper -->
								<hr class="lg">
							</div>

								<!-- rector Wrapper -->
								<div class="col-sm-12">
									<div class="title-container sm">
										<div class="title-wrap">
											<h3 class="title">Rector Lists</h3>
											<span class="separator line-separator"></span>
										</div>
									</div>
								</div><!-- rector Wrapper -->
								<!-- rector Detail Wrapper -->
								<div class="col-md-12 rector-wrap">
									<div class="col-md-12">
										<div class="col-md-5 rector-detail">
											<ol>
												Name   :   AAA AAA AAA
											</ol>
											<ol>
												Degree   :   DDDD
											</ol>
											<ol>
												Native Town   :   TTTTTTT
											</ol>
											<ol>
												From   :   University
											</ol>
										</div>
										<div class="col-md-2">
											<div class="student-wrap">
												<div class="student-img-wrap">
													<img width="150" height="150" src="images/teacher/teacher-sm-01.jpg" alt="Teacher" class="img-responsive">
												</div><!-- Image Wrapper -->
												<div class="student-detail-wrap">
													<h5 class="student-name">2000 - 2005</h5>
												</div><!-- Year Wrap -->
											</div><!-- Member Wrap -->
										</div>
										<div class="col-md-5 rector-detail">
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed. Optio, reprehenderit, ex.Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed. Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed.

											</p>
											<a class="btn" href="rector.php">Read More</a>
										</div><!-- rector Detail Wrapper -->
									</div>
									<div class="col-md-12">
										<hr class="lg hidden-xs">
									</div>
									<!-- rector Detail Wrapper -->
									<div class="col-md-12">
										<div class="col-md-5 rector-detail1">
											<ol>
												Name   :   AAA AAA AAA
											</ol>
											<ol>
												Degree   :   DDDD
											</ol>
											<ol>
												Native Town   :   TTTTTTT
											</ol>
											<ol>
												From   :   University
											</ol>
										</div>
										<div class="col-md-2">
											<div class="student-wrap">
												<div class="student-img-wrap">
													<img width="150" height="150" src="images/teacher/teacher-sm-01.jpg" alt="Teacher" class="img-responsive">
												</div><!-- Image Wrapper -->
												<div class="student-detail-wrap">
													<h5 class="student-name">2006 - 2010</h5>
												</div><!-- Year Wrap -->
											</div><!-- Member Wrap -->
										</div>
										<div class="col-md-5 rector-detail1">
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed. Optio, reprehenderit, ex.Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed. Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed.

											</p>
											<a class="btn" href="rector.php">Read More</a>
										</div><!-- rector Detail Wrapper -->
									</div>
									<div class="col-md-12">
										<hr class="lg hidden-xs">
									</div>
									<!-- rector Detail Wrapper -->
									<div class="col-md-12">
										<div class="col-md-5 rector-detail">
											<ol>
												Name   :   AAA AAA AAA
											</ol>
											<ol>
												Degree   :   DDDD
											</ol>
											<ol>
												Native Town   :   TTTTTTT
											</ol>
											<ol>
												From   :   University
											</ol>
										</div>
										<div class="col-md-2">
											<div class="student-wrap">
												<div class="student-img-wrap">
													<img width="150" height="150" src="images/teacher/teacher-sm-01.jpg" alt="Teacher" class="img-responsive">
												</div><!-- Image Wrapper -->
												<div class="student-detail-wrap">
													<h5 class="student-name">2011 - 2013</h5>
												</div><!-- Year Wrap -->
											</div><!-- Member Wrap -->
										</div>
										<div class="col-md-5 rector-detail">
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed. Optio, reprehenderit, ex.Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed. Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed.

											</p>
											<a class="btn" href="rector.php">Read More</a>
										</div><!-- rector Detail Wrapper -->
									</div>
									<div class="col-md-12">
										<hr class="lg hidden-xs">
									</div>
									<!-- rector Detail Wrapper -->
									<div class="col-md-12">
										<div class="col-md-5 rector-detail1">
											<ol>
												Name   :   AAA AAA AAA
											</ol>
											<ol>
												Degree   :   DDDD
											</ol>
											<ol>
												Native Town   :   TTTTTTT
											</ol>
											<ol>
												From   :   University
											</ol>
										</div>
										<div class="col-md-2">
											<div class="student-wrap">
												<div class="student-img-wrap">
													<img width="150" height="150" src="images/teacher/teacher-sm-01.jpg" alt="Teacher" class="img-responsive">
												</div><!-- Image Wrapper -->
												<div class="student-detail-wrap">
													<h5 class="student-name">2014 - 2015</h5>
												</div><!-- Year Wrap -->
											</div><!-- Member Wrap -->
										</div>
										<div class="col-md-5 rector-detail1">
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed. Optio, reprehenderit, ex.Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed. Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed.

											</p>
											<a class="btn" href="rector.php">Read More</a>
										</div><!-- rector Detail Wrapper -->
									</div>
									<div class="col-md-12">
										<hr class="lg hidden-xs">
									</div>
									<!-- rector Detail Wrapper -->
									<div class="col-md-12">
										<div class="col-md-5 rector-detail">
											<ol>
												Name   :   AAA AAA AAA
											</ol>
											<ol>
												Degree   :   DDDD
											</ol>
											<ol>
												Native Town   :   TTTTTTT
											</ol>
											<ol>
												From   :   University
											</ol>
										</div>
										<div class="col-md-2">
											<div class="student-wrap">
												<div class="student-img-wrap">
													<img width="150" height="150" src="images/teacher/teacher-sm-01.jpg" alt="Teacher" class="img-responsive">
												</div><!-- Image Wrapper -->
												<div class="student-detail-wrap">
													<h5 class="student-name">2016 - 2017</h5>
												</div><!-- Year Wrap -->
											</div><!-- Member Wrap -->
										</div>
										<div class="col-md-5 rector-detail">
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed. Optio, reprehenderit, ex.Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed. Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed.

											</p>
											<a class="btn" href="rector.php">Read More</a>
										</div><!-- rector Detail Wrapper -->
									</div>
								</div><!-- rector Wrapper -->

							</div><!-- Row -->
						</div><!-- Container -->
					</div><!-- Page Default -->
				</div><!-- Page Main -->


@endsection
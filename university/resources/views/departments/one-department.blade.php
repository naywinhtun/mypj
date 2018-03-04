@extends('layouts.master')

@section('content')

@foreach($departments as $department)



<!-- Page Header -->
<div class="page-header bg-dark">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<!-- Page Header Wrapper -->
				<div class="page-header-wrapper">
					<!-- Title & Sub Title -->
					<h3 class="title">Department of {{ $department->name }}</h3>
					<h6 class="sub-title">All you want know</h6>
					<ol class="breadcrumb">
						<li><a href="/">Home</a></li>
						<li><a href="/department-overview">Department</a></li>
						<li class="active">{{ $department->name }}</li>
					</ol><!-- Breadcrumb -->
				</div><!-- Page Header Wrapper -->
			</div><!-- Coloumn -->
		</div><!-- Row -->
	</div><!-- Container -->
</div><!-- Page Header -->

<!-- Page Main -->
<div role="main" class="main">

	<!--Page Default -->
	<div class="page-default bg-light typo-dark">
		<div class="container">
			<div class="row">
				<!-- Blog Column -->
				<div class="blog-list-wrap">

					<div class="col-sm-8">
						<div class="blog-single-wrap">
							<div class="news-img-wrap">
								<img src="/images/news/single-01.jpg" class="img-responsive" alt="News" height="600" width="1200">
							</div>
						</div><br>
						<div>					
							<!-- <p>{{ $department->description }}
							</p> -->
							
						</div><!-- Blog Detail Wrapper -->
					</div>

					<div class="col-sm-4">
						<div class="panel panel-info">
							<div class="panel-heading">
								<center>
									<h5>CONTACT INFORMATION</h5>
								</center>
							</div>
							<div class="panel-body">
								<p>Dr.{{ $department->departmentHead->name}}</p>
								<p>	Professor - Department Head
								</p>
								<hr>
								<p>
									<i class="uni-mail department-contact"></i>&nbsp;
									<span>{{ $department->departmentHead->email}}</span>
								</p>
								<p>
									<i class="uni-phone-2 department-contact"></i>&nbsp;
									<span>{{ $department->departmentHead->phonenumber}}</span>
								</p>
								<p>
									<i class="uni-map-marker"></i>&nbsp;
									<span>{{ $department->departmentHead->address}}</span>
								</p>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<p>{{ $department->description }}</p>
					</div>

				</div><!-- Blog Detail Column -->     

				
				<div class="col-md-12 news-single-details">
					<h5>Research and Lab Facility</h5>
					<p>{{ $department->facility }}</p>
				</div>
				
				<div class="col-md-12 news-single-details">
					<h5>Project Activities</h5>
					<p>{{ $department->project_activity }}</p>
				</div>
				
				<div class="col-md-12 news-single-details">
					<h5>Programmes Offered</h5>
					
					<p>{{ $department->program_offer }}</p>
					
				</div>
			</div><!-- Blog Wrapper -->

		</div><!-- Blog Column -->

	</div><!-- Row -->

</div><!-- Page Default -->

<!-- Page Default -->
<div class="bg-grey typo-dark" style="padding-top: 20px;padding-bottom: 20px;">
	<div class="container">
		<div class="row">
			<!-- Title -->
			<div class="col-sm-12">
				<center>
					<div class="title-wrap">
						<h3 class="title">Teachers</h3>
						<span class="separator line-separator"></span>
					</div>
				</center>
				<!-- <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam</p> -->

			</div><!-- Title -->
			<div class="col-md-4 col-md-offset-4" style="margin-bottom: 3%;">
				<div class="student-wrap">
					<div class="student-img-wrap">
						<img width="200" height="200" src="/images/default/thumb-03.jpg" alt="Teacher" class="img-responsive">
					</div><!-- Image Wrapper -->
					<div class="student-detail-wrap">
						<h5 class="student-name"><a href="rector.php">{{ $department->departmentHead->name}}</a></h5>
						<span>Department Head</span>						
					</div><!-- Detail Wrap -->
				</div><!-- Member Wrap -->
			</div>
		</div><!-- Row -->

		<div class="row">
			@foreach($department->teacherLists as $teacher)
			<div class="col-sm-3" style="margin-bottom: 3%;">
				<div class="student-wrap">
					<div class="student-img-wrap">
						<img width="150" height="150" src="/images/default/thumb-03.jpg" alt="Teacher" class="img-responsive">
					</div><!-- Image Wrapper -->
					<div class="student-detail-wrap">
						<h5 class="student-name"><a href="rector.php">{{ $teacher->name }}</a></h5>
						<span>Principal</span>
					</div><!-- Detail Wrap -->
				</div><!-- Member Wrap -->				
			</div><!-- Column -->
			@endforeach			
		</div><!-- Row -->
	</div><!-- Container -->
</div><!-- Page Default -->

<!-- Page Default -->
<div class="page-default bg-dark typo-light">
	<div class="container">
		<div class="row counter-sm">
			<!-- Title -->
				<!-- <div class="col-sm-12">
					<div class="title-container">
						<div class="title-wrap">
							<h3 class="title">About Universh</h3>
							<span class="separator line-separator"></span>
						</div>
					</div>
				</div> -->
				<!-- Title -->
				<div class="col-sm-6 col-md-3">
					<!-- Count Block -->
					<div class="count-block dark bg-verydark">
						<h5>Subjects</h5>
						<h3 data-count="{{ $department->subject }}" class="count-number"><span class="counter">{{ $department->subject }}</span></h3>
						<i class="uni-fountain-pen"></i>
					</div><!-- Counter Block -->
				</div><!-- Column -->
				<div class="col-sm-6 col-md-3">
					<!-- Count Block -->
					<div class="count-block dark bg-verydark">
						<h5>Modern lab</h5>
						<h3 data-count="{{ $department->lab }}" class="count-number"><span class="counter">{{ $department->lab }}</span></h3>
						<i class="uni-chemical"></i>
					</div><!-- Counter Block -->
				</div><!-- Column -->
				<div class="col-sm-6 col-md-3">
					<!-- Count Block -->
					<div class="count-block dark bg-verydark">
						<h5>Instructors</h5>
						<h3 data-count="{{ $department->teacherLists->count() }}" class="count-number"><span class="counter">{{ $department->teacherLists->count() }}</span></h3>
						<i class="uni-talk-man"></i>
					</div><!-- Counter Block -->
				</div><!-- Column -->
				<div class="col-sm-6 col-md-3">
					<!-- Count Block -->
					<div class="count-block dark bg-verydark">
						<h5>Students</h5>
						<h3 data-count="{{ $department->student }}" class="count-number"><span class="counter">{{ $department->student }}</span></h3>
						<i class="uni-brain"></i>
					</div><!-- Counter Block -->
				</div><!-- Column -->
			</div><!-- Row -->
		</div><!-- Container -->
	</div><!-- Page Default -->

	<div class="page-default bg-grey typo-dark">
		<div class="container">
			<div class="isotope-grid grid-three-column has-gutter-space" data-gutter="20" data-columns="3" style="position: relative; height: 660px;">
				<div class="grid-sizer" style="position: absolute; display: none;"></div>
				<!-- Portfolio Item -->
				<div class="item all design web" style="width: 366px; margin-bottom: 20px; position: absolute; left: 0px; top: 0px;">
					<!-- Image Wrapper -->
					<div class="image-wrapper">
						<!-- IMAGE -->
						<img src="/images/gallery/grid/1.jpg" alt="">
						<!-- Gallery Btns Wrapper -->
						<div class="gallery-detail btns-wrapper">
							
							<a href="images/gallery/grid/1.jpg" data-rel="prettyPhoto[portfolio]" class="btn uni-full-screen"></a>
						</div><!-- Gallery Btns Wrapper -->
					</div><!-- Image Wrapper -->
				</div><!-- Portfolio Item -->
				<!-- Portfolio Item -->
				<div class="item all design identity photography" style="width: 366px; margin-bottom: 20px; position: absolute; left: 386px; top: 0px;">
					<!-- Image Wrapper -->
					<div class="image-wrapper">
						<!-- IMAGE -->
						<img src="/images/gallery/grid/2.jpg">
						<!-- Gallery Btns Wrapper -->
						<div class="gallery-detail btns-wrapper">
							
							<a href="images/gallery/grid/2.jpg" data-rel="prettyPhoto[portfolio]" class="btn uni-full-screen"></a>
						</div><!-- Gallery Btns Wrapper -->
					</div><!-- Image Wrapper -->
				</div><!-- Portfolio Item -->
				<!-- Portfolio Item -->
				<div class="item all identity web" style="width: 366px; margin-bottom: 20px; position: absolute; left: 772px; top: 0px;">
					<!-- Image Wrapper -->
					<div class="image-wrapper">
						<!-- IMAGE -->
						<img src="/images/gallery/grid/3.jpg">
						<!-- Gallery Btns Wrapper -->
						<div class="gallery-detail btns-wrapper">
							
							<a href="images/gallery/grid/3.jpg" data-rel="prettyPhoto[portfolio]" class="btn uni-full-screen"></a>
						</div><!-- Gallery Btns Wrapper -->
					</div><!-- Image Wrapper -->		 
				</div><!-- Portfolio Item -->
				<!-- Portfolio Item -->
				<div class="item all design web" style="width: 366px; margin-bottom: 20px; position: absolute; left: 0px; top: 340px;">
					<!-- Image Wrapper -->
					<div class="image-wrapper">
						<!-- IMAGE -->
						<img src="/images/gallery/grid/4.jpg">
						<!-- Gallery Btns Wrapper -->
						<div class="gallery-detail btns-wrapper">
							
							<a href="images/gallery/grid/4.jpg" data-rel="prettyPhoto[portfolio]" class="btn uni-full-screen"></a>
						</div><!-- Gallery Btns Wrapper -->
					</div><!-- Image Wrapper -->		 
				</div><!-- Portfolio item -->
				<!-- Portfolio Item -->
				<div class="item all identity" style="width: 366px; margin-bottom: 20px; position: absolute; left: 386px; top: 340px;">
					<!-- Image Wrapper -->
					<div class="image-wrapper">
						<!-- IMAGE -->
						<img src="/images/gallery/grid/5.jpg">
						<!-- Gallery Btns Wrapper -->
						<div class="gallery-detail btns-wrapper">
							
							<a href="images/gallery/grid/5.jpg" data-rel="prettyPhoto[portfolio]" class="btn uni-full-screen"></a>
						</div><!-- Gallery Btns Wrapper -->
					</div><!-- Image Wrapper -->		 
				</div><!-- Portfolio item -->
				<!-- Portfolio Item -->
				<div class="item all identity web" style="width: 366px; margin-bottom: 20px; position: absolute; left: 772px; top: 340px;">
					<!-- Image Wrapper -->
					<div class="image-wrapper">
						<!-- IMAGE -->
						<img src="/images/gallery/grid/6.jpg">
						<!-- Gallery Btns Wrapper -->

						<div class="gallery-detail btns-wrapper">
							
							<a href="images/gallery/grid/6.jpg" data-rel="prettyPhoto[portfolio]" class="btn uni-full-screen"></a>
						</div><!-- Gallery Btns Wrapper -->
					</div><!-- Image Wrapper -->		 
				</div><!-- Portfolio item -->
			</div>
		</div>
		<hr class="lg hidden-xs">
		<!-- Container -->
		<div class="container">
			<h4 class="title">Latest Events&Posts</h4>
			<br>		
			<div class="owl-carousel" data-animatein="" data-animateout="" data-items="1" data-margin="30" data-loop="true" data-merge="true" data-nav="true" data-dots="false" data-stagepadding="" data-mobile="1" data-tablet="2" data-desktopsmall="3"  data-desktop="3" data-autoplay="true" data-delay="3000" data-navigation="true">
				
				@foreach($department->latestPosts as $post)
				
				<div class="item">
					<!-- Related Wrapper -->
					<div class="related-wrap">
						<!-- Related Image Wrapper -->
						<div class="img-wrap">
							<img width="600" height="220" alt="course" class="img-responsive" src="/images/events/event-01.jpg">
						</div>
						<!-- Related Content Wrapper -->
						<div class="related-content">
							<h5 class="title">{{ $post->title }}</h5>
							<ul class="blog-meta">
								<li><i class="fa fa-calendar-o"></i>
								{{$post['created_at']->toFormattedDateString()}}</li>
								<li><i class="fa fa-comments"></i> 22</li>
							</ul><!-- Blog Meta -->
							<a href="/postoverview/{{ $post->id }}">+</a>
							<span>Read More</span>
						</div><!-- Related Content Wrapper -->
					</div><!-- Related Wrapper -->
				</div><!-- Item -->
				@endforeach

			</div><!-- Related Posts&Events -->

		</div><!-- Container -->
		<hr class="lg hidden-xs">
		<!-- Container -->
		<div class="container">
			<h4 class="title">Project Lists</h4>
			<br>		
			<div class="owl-carousel" data-animatein="" data-animateout="" data-items="1" data-margin="30" data-loop="true" data-merge="true" data-nav="true" data-dots="false" data-stagepadding="" data-mobile="1" data-tablet="2" data-desktopsmall="3"  data-desktop="3" data-autoplay="true" data-delay="3000" data-navigation="true">
				
				@foreach($department->projectLists as $project)
				<div class="item">
					<!-- Related Wrapper -->
					<div class="related-wrap">
						<!-- Related Image Wrapper -->
						<div class="img-wrap">
							<img width="600" height="220" alt="course" class="img-responsive" src="/images/events/event-01.jpg">
						</div>
						<!-- Related Content Wrapper -->
						<div class="related-content">
							<h5 class="title">{{ $project->name }}</h5>
							<br>
							<a href="#" title="Read More">+</a>
							<span>Details</span>
						</div><!-- Related Content Wrapper -->
					</div><!-- Related Wrapper -->
				</div><!-- Item -->
				@endforeach

			</div><!-- Related Project -->

		</div><!-- Container -->
	</div><!-- Page Default -->
	
	

</div><!-- Page Main -->

@endforeach

@endsection
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
					<h3 class="title">Myanmar Subject</h3>
					<h6 class="sub-title">All you want know</h6>
				</div><!-- Page Header Wrapper -->
			</div><!-- Coloumn -->
		</div><!-- Row -->
	</div><!-- Container -->
</div><!-- Page Header -->


<!-- Page Main -->
<div role="main" class="main">
	<!-- Section -->
	<section class="element-animation-section bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-container text-left sm">
						<div class="title-wrap">
							<h4 class="title">Syllabus & Curriculum For Day Education</h4>
							<span class="separator line-separator"></span>
						</div>							
					</div>
					<!-- Tab -->
					<div class="tab"> 
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">

							@foreach($years as $year=> $syllabi)						
							
							
							<li role="presentation" class="{{ $loop->first ? 'active' : '' }}"><a href="#{{ $year}}" aria-controls="home" role="tab" data-toggle="tab">
							{{ $year}}</a></li>

							@endforeach
						</ul>
						<!-- Tab panes -->
						<div class="tab-content">
							@foreach($years as $year=> $syllabi)
							<div role="tabpanel" class="{{ $loop->first ? 'tab-pane fade in active' : 'tab-pane fade' }}" id="{{$year}}">
								<div class="row">
									<div class="col-md-6">
										<center><h6>-----First Semester-----</h6></center>
										<!--First Year Tab -->
										<div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
											
											@foreach($syllabi as $module)
											<!-- module 1 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="heading{{ $module->id }}">
													<h4 class="panel-title">
														<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $module->id }}" aria-expanded="true" aria-controls="collapse{{ $module->id }}">
															{{ $module->name }}
														</a>
													</h4>
												</div>
												<div id="collapse{{ $module->id }}" class="{{ $loop->first ? 'panel-collapse collapse in' : 'panel-collapse collapse' }}" role="tabpanel" aria-labelledby="heading{{ $module->id }}">
													<div class="panel-body">
														<ol type="1.0">
															<li>Research Designs</li>
															<li>Quantitative Methods</li>
															<li>Qualitative Procedures</li>
															<li>Mixed Methods Procedures</li>
															<li>Dommunicating the Results of Research in Psychologly</li>
														</ol>
														<p><u>References</u></p> 
														<ol type="1.0">
															<li>Goodwin,C.J.(2005):Research in Psychology(Fourth Edition).USA:WILEY</li>
															<li>Creswell,(2003):Research Design(Second Edition).SAGE Publications</li>
															<li>Rubin,A,and Babbie,e..,(2007):"Essential Research Methods for social work"</li>
														</ol>
													</div>
												</div>
											</div>
											<!--end module 1 -->
											
											@endforeach
										</div><!--First Year Tab -->
									</div>
									<div class="col-md-6" style="border-left:2px solid blue;">
										<center><h6>-----Second Semester-----</h6></center>
										<!--First Year Tab -->
										<div class="panel-group accordion" id="accordion1" role="tablist" aria-multiselectable="true">
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingOne1">
													<h4 class="panel-title">
														<a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
															Collapsible Group Item #1
														</a>
													</h4>
												</div>
												<div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne1">
													<div class="panel-body">
														<ol type="1.0">
															<li>Research Designs</li>
															<li>Quantitative Methods</li>
															<li>Qualitative Procedures</li>
															<li>Mixed Methods Procedures</li>
															<li>Dommunicating the Results of Research in Psychologly</li>
														</ol>
														<p><u>References</u></p> 
														<ol type="1.0">
															<li>Goodwin,C.J.(2005):Research in Psychology(Fourth Edition).USA:WILEY</li>
															<li>Creswell,(2003):Research Design(Second Edition).SAGE Publications</li>
															<li>Rubin,A,and Babbie,e..,(2007):"Essential Research Methods for social work"</li>
														</ol>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingTwo1">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
															Collapsible Group Item #2
														</a>
													</h4>
												</div>
												<div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo1">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
										</div><!--First year Tab -->

									</div><!-- Column -->
									
								</div>
							</div>
							@endforeach							
						</div><!-- Tab Content -->

					</div><!-- Tab -->
				</div><!-- Column -->
			</div><!-- Row -->
		</div><!-- Container -->
	</section><!-- Section -->

	<!-- Section -->
	<section class="element-animation-section bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-container text-left sm">
						<div class="title-wrap">
							<h4 class="title">Syllabus & Curriculum For Distance Education</h4>
							<span class="separator line-separator"></span>
						</div>							
					</div>
					<!-- Tab -->
					<div class="tab"> 
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home1" aria-controls="home" role="tab" data-toggle="tab">First Year</a></li>
							
							<li role="presentation"><a href="#profile1" aria-controls="profile" role="tab" data-toggle="tab">Second Year</a></li>
							<li role="presentation"><a href="#messages1" aria-controls="messages" role="tab" data-toggle="tab">Third Year</a></li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="home1">
								<div class="row">
									<div class="col-md-6">

										<center><h6>-----First Semester-----</h6></center>
										<!--First Year Distance Tab -->
										<div class="panel-group accordion" id="accordion01" role="tablist" aria-multiselectable="true">
											<!-- module 1 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingOne01">
													<h4 class="panel-title">
														<a role="button" data-toggle="collapse" data-parent="#accordion01" href="#collapseOne01" aria-expanded="true" aria-controls="collapseOne01">
															Psy 4111  PSYCHOLOGICAL RESEARCH
														</a>
													</h4>
												</div>
												<div id="collapseOne01" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne01">
													<div class="panel-body">
														<ol type="1.0">
															<li>Research Designs</li>
															<li>Quantitative Methods</li>
															<li>Qualitative Procedures</li>
															<li>Mixed Methods Procedures</li>
															<li>Dommunicating the Results of Research in Psychologly</li>
														</ol>
														<p><u>References</u></p> 
														<ol type="1.0">
															<li>Goodwin,C.J.(2005):Research in Psychology(Fourth Edition).USA:WILEY</li>
															<li>Creswell,(2003):Research Design(Second Edition).SAGE Publications</li>
															<li>Rubin,A,and Babbie,e..,(2007):"Essential Research Methods for social work"</li>
														</ol>
													</div>
												</div>
											</div>
											<!--end module 1 -->
											<!-- module 2 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingTwo01">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion01" href="#collapseTwo01" aria-expanded="false" aria-controls="collapseTwo01">
															Collapsible Group Item #2
														</a>
													</h4>
												</div>
												<div id="collapseTwo01" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo01">
													<div class="panel-body">
														<ol type="1.0">
															<li>Research Designs</li>
															<li>Quantitative Methods</li>
															<li>Qualitative Procedures</li>
															<li>Mixed Methods Procedures</li>
															<li>Dommunicating the Results of Research in Psychologly</li>
														</ol>
														<p><u>References</u></p> 
														<ol type="1.0">
															<li>Goodwin,C.J.(2005):Research in Psychology(Fourth Edition).USA:WILEY</li>
															<li>Creswell,(2003):Research Design(Second Edition).SAGE Publications</li>
															<li>Rubin,A,and Babbie,e..,(2007):"Essential Research Methods for social work"</li>
														</ol>
													</div>
												</div>
											</div>
											<!--end module 2 -->
											<!-- module 3 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingThree01">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion01" href="#collapseThree01" aria-expanded="false" aria-controls="collapseThree01">
															Collapsible Group Item #3
														</a>
													</h4>
												</div>
												<div id="collapseThree01" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree01">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 3 -->
											<!-- module 4 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingFour01">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion01" href="#collapseFour01" aria-expanded="false" aria-controls="collapseFour01">
															Collapsible Group Item #4
														</a>
													</h4>
												</div>
												<div id="collapseFour01" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour01">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 4 -->
											<!-- module 5 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingFive01">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion01" href="#collapseFive01" aria-expanded="false" aria-controls="collapseFive01">
															Collapsible Group Item #5
														</a>
													</h4>
												</div>
												<div id="collapseFive01" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive01">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 5 -->
											<!-- module 6 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingSix01">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion01" href="#collapseSix01" aria-expanded="false" aria-controls="collapseSix01">
															Collapsible Group Item #6
														</a>
													</h4>
												</div>
												<div id="collapseSix01" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix01">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 6 -->
											<!-- module 7 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingSeven01">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion01" href="#collapseSeven01" aria-expanded="false" aria-controls="collapseSeven01">
															Collapsible Group Item #7
														</a>
													</h4>
												</div>
												<div id="collapseSeven01" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven01">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 7 -->
											<!-- module 8 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingEight01">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion01" href="#collapseEight01" aria-expanded="false" aria-controls="collapseEight01">
															Collapsible Group Item #8
														</a>
													</h4>
												</div>
												<div id="collapseEight01" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight01">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 8 -->
											<!-- module 9 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingNine01">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion01" href="#collapseNine01" aria-expanded="false" aria-controls="collapseNine01">
															Collapsible Group Item #9
														</a>
													</h4>
												</div>
												<div id="collapseNine01" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine01">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 9 -->
										</div><!--First Year Distance Tab -->

									</div>
									<div class="col-md-6" style="border-left:2px solid blue;">

										<center><h6>-----Second Semester-----</h6></center>
										<!--First Year Distance Tab -->
										<div class="panel-group accordion" id="accordion011" role="tablist" aria-multiselectable="true">
											<!-- module 1 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingOne011">
													<h4 class="panel-title">
														<a role="button" data-toggle="collapse" data-parent="#accordion011" href="#collapseOne011" aria-expanded="true" aria-controls="collapseOne011">
															Psy 4111  PSYCHOLOGICAL RESEARCH
														</a>
													</h4>
												</div>
												<div id="collapseOne011" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne011">
													<div class="panel-body">
														<ol type="1.0">
															<li>Research Designs</li>
															<li>Quantitative Methods</li>
															<li>Qualitative Procedures</li>
															<li>Mixed Methods Procedures</li>
															<li>Dommunicating the Results of Research in Psychologly</li>
														</ol>
														<p><u>References</u></p> 
														<ol type="1.0">
															<li>Goodwin,C.J.(2005):Research in Psychology(Fourth Edition).USA:WILEY</li>
															<li>Creswell,(2003):Research Design(Second Edition).SAGE Publications</li>
															<li>Rubin,A,and Babbie,e..,(2007):"Essential Research Methods for social work"</li>
														</ol>
													</div>
												</div>
											</div>
											<!--end module 1 -->
											<!-- module 2 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingTwo011">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion011" href="#collapseTwo011" aria-expanded="false" aria-controls="collapseTwo011">
															Collapsible Group Item #2
														</a>
													</h4>
												</div>
												<div id="collapseTwo011" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo011">
													<div class="panel-body">
														<ol type="1.0">
															<li>Research Designs</li>
															<li>Quantitative Methods</li>
															<li>Qualitative Procedures</li>
															<li>Mixed Methods Procedures</li>
															<li>Dommunicating the Results of Research in Psychologly</li>
														</ol>
														<p><u>References</u></p> 
														<ol type="1.0">
															<li>Goodwin,C.J.(2005):Research in Psychology(Fourth Edition).USA:WILEY</li>
															<li>Creswell,(2003):Research Design(Second Edition).SAGE Publications</li>
															<li>Rubin,A,and Babbie,e..,(2007):"Essential Research Methods for social work"</li>
														</ol>
													</div>
												</div>
											</div>
											<!--end module 2 -->
											<!-- module 3 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingThree011">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion011" href="#collapseThree011" aria-expanded="false" aria-controls="collapseThree011">
															Collapsible Group Item #3
														</a>
													</h4>
												</div>
												<div id="collapseThree011" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree011">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 3 -->
											<!-- module 4 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingFour011">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion011" href="#collapseFour011" aria-expanded="false" aria-controls="collapseFour011">
															Collapsible Group Item #4
														</a>
													</h4>
												</div>
												<div id="collapseFour011" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour011">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 4 -->
											<!-- module 5 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingFive011">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion011" href="#collapseFive011" aria-expanded="false" aria-controls="collapseFive011">
															Collapsible Group Item #5
														</a>
													</h4>
												</div>
												<div id="collapseFive011" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive011">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 5 -->
											<!-- module 6 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingSix011">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion011" href="#collapseSix011" aria-expanded="false" aria-controls="collapseSix011">
															Collapsible Group Item #6
														</a>
													</h4>
												</div>
												<div id="collapseSix011" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix011">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 6 -->
											<!-- module 7 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingSeven011">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion011" href="#collapseSeven011" aria-expanded="false" aria-controls="collapseSeven011">
															Collapsible Group Item #7
														</a>
													</h4>
												</div>
												<div id="collapseSeven011" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven011">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 7 -->
											<!-- module 8 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingEight011">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion011" href="#collapseEight011" aria-expanded="false" aria-controls="collapseEight011">
															Collapsible Group Item #8
														</a>
													</h4>
												</div>
												<div id="collapseEight011" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight011">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 8 -->
											<!-- module 9 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingNine011">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion011" href="#collapseNine011" aria-expanded="false" aria-controls="collapseNine011">
															Collapsible Group Item #9
														</a>
													</h4>
												</div>
												<div id="collapseNine011" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine011">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 9 -->
										</div><!--First Year Distance Tab -->

									</div><!-- Column -->
									
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="profile1">
								<div class="row">
									<div class="col-md-6">

										<center><h6>-----First Semester-----</h6></center>
										<!--Second Year Distance Tab -->
										<div class="panel-group accordion" id="accordion02" role="tablist" aria-multiselectable="true">
											<!-- module 1 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingOne02">
													<h4 class="panel-title">
														<a role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapseOne02" aria-expanded="true" aria-controls="collapseOne02">
															Psy 4112  PSYCHOLOGICAL RESEARCH
														</a>
													</h4>
												</div>
												<div id="collapseOne02" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne02">
													<div class="panel-body">
														<ol type="1.0">
															<li>Research Designs</li>
															<li>Quantitative Methods</li>
															<li>Qualitative Procedures</li>
															<li>Mixed Methods Procedures</li>
															<li>Dommunicating the Results of Research in Psychologly</li>
														</ol>
														<p><u>References</u></p> 
														<ol type="1.0">
															<li>Goodwin,C.J.(2005):Research in Psychology(Fourth Edition).USA:WILEY</li>
															<li>Creswell,(2003):Research Design(Second Edition).SAGE Publications</li>
															<li>Rubin,A,and Babbie,e..,(2007):"Essential Research Methods for social work"</li>
														</ol>
													</div>
												</div>
											</div>
											<!--end module 1 -->
											<!-- module 2 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingTwo02">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapseTwo02" aria-expanded="false" aria-controls="collapseTwo02">
															Collapsible Group Item #2
														</a>
													</h4>
												</div>
												<div id="collapseTwo02" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo02">
													<div class="panel-body">
														<ol type="1.0">
															<li>Research Designs</li>
															<li>Quantitative Methods</li>
															<li>Qualitative Procedures</li>
															<li>Mixed Methods Procedures</li>
															<li>Dommunicating the Results of Research in Psychologly</li>
														</ol>
														<p><u>References</u></p> 
														<ol type="1.0">
															<li>Goodwin,C.J.(2005):Research in Psychology(Fourth Edition).USA:WILEY</li>
															<li>Creswell,(2003):Research Design(Second Edition).SAGE Publications</li>
															<li>Rubin,A,and Babbie,e..,(2007):"Essential Research Methods for social work"</li>
														</ol>
													</div>
												</div>
											</div>
											<!--end module 2 -->
											<!-- module 3 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingThree02">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapseThree02" aria-expanded="false" aria-controls="collapseThree02">
															Collapsible Group Item #3
														</a>
													</h4>
												</div>
												<div id="collapseThree02" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree02">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 3 -->
											<!-- module 4 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingFour02">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapseFour02" aria-expanded="false" aria-controls="collapseFour02">
															Collapsible Group Item #4
														</a>
													</h4>
												</div>
												<div id="collapseFour02" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour02">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 4 -->
											<!-- module 5 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingFive02">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapseFive02" aria-expanded="false" aria-controls="collapseFive02">
															Collapsible Group Item #5
														</a>
													</h4>
												</div>
												<div id="collapseFive02" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive02">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 5 -->
											<!-- module 6 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingSix02">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapseSix02" aria-expanded="false" aria-controls="collapseSix02">
															Collapsible Group Item #6
														</a>
													</h4>
												</div>
												<div id="collapseSix02" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix02">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 6 -->
											<!-- module 7 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingSeven02">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapseSeven02" aria-expanded="false" aria-controls="collapseSeven02">
															Collapsible Group Item #7
														</a>
													</h4>
												</div>
												<div id="collapseSeven02" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven02">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 7 -->
											<!-- module 8 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingEight02">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapseEight02" aria-expanded="false" aria-controls="collapseEight02">
															Collapsible Group Item #8
														</a>
													</h4>
												</div>
												<div id="collapseEight02" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight02">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 8 -->
											<!-- module 9 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingNine02">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapseNine02" aria-expanded="false" aria-controls="collapseNine02">
															Collapsible Group Item #9
														</a>
													</h4>
												</div>
												<div id="collapseNine02" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine02">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 9 -->
										</div><!--Second Year Distance Tab -->

									</div>
									<div class="col-md-6" style="border-left:2px solid blue;">

										<center><h6>-----Second Semester-----</h6></center>
										<!--Second Year Distance Tab -->
										<div class="panel-group accordion" id="accordion022" role="tablist" aria-multiselectable="true">
											<!-- module 1 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingOne022">
													<h4 class="panel-title">
														<a role="button" data-toggle="collapse" data-parent="#accordion022" href="#collapseOne022" aria-expanded="true" aria-controls="collapseOne022">
															Psy 4112  PSYCHOLOGICAL RESEARCH
														</a>
													</h4>
												</div>
												<div id="collapseOne022" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne022">
													<div class="panel-body">
														<ol type="1.0">
															<li>Research Designs</li>
															<li>Quantitative Methods</li>
															<li>Qualitative Procedures</li>
															<li>Mixed Methods Procedures</li>
															<li>Dommunicating the Results of Research in Psychologly</li>
														</ol>
														<p><u>References</u></p> 
														<ol type="1.0">
															<li>Goodwin,C.J.(2005):Research in Psychology(Fourth Edition).USA:WILEY</li>
															<li>Creswell,(2003):Research Design(Second Edition).SAGE Publications</li>
															<li>Rubin,A,and Babbie,e..,(2007):"Essential Research Methods for social work"</li>
														</ol>
													</div>
												</div>
											</div>
											<!--end module 1 -->
											<!-- module 2 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingTwo022">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion022" href="#collapseTwo022" aria-expanded="false" aria-controls="collapseTwo022">
															Collapsible Group Item #2
														</a>
													</h4>
												</div>
												<div id="collapseTwo022" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo022">
													<div class="panel-body">
														<ol type="1.0">
															<li>Research Designs</li>
															<li>Quantitative Methods</li>
															<li>Qualitative Procedures</li>
															<li>Mixed Methods Procedures</li>
															<li>Dommunicating the Results of Research in Psychologly</li>
														</ol>
														<p><u>References</u></p> 
														<ol type="1.0">
															<li>Goodwin,C.J.(2005):Research in Psychology(Fourth Edition).USA:WILEY</li>
															<li>Creswell,(2003):Research Design(Second Edition).SAGE Publications</li>
															<li>Rubin,A,and Babbie,e..,(2007):"Essential Research Methods for social work"</li>
														</ol>
													</div>
												</div>
											</div>
											<!--end module 2 -->
											<!-- module 3 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingThree022">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion022" href="#collapseThree022" aria-expanded="false" aria-controls="collapseThree022">
															Collapsible Group Item #3
														</a>
													</h4>
												</div>
												<div id="collapseThree022" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree022">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 3 -->
											<!-- module 4 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingFour022">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion022" href="#collapseFour022" aria-expanded="false" aria-controls="collapseFour022">
															Collapsible Group Item #4
														</a>
													</h4>
												</div>
												<div id="collapseFour022" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour022">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 4 -->
											<!-- module 5 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingFive022">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion022" href="#collapseFive022" aria-expanded="false" aria-controls="collapseFive022">
															Collapsible Group Item #5
														</a>
													</h4>
												</div>
												<div id="collapseFive022" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive022">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 5 -->
											<!-- module 6 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingSix022">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion022" href="#collapseSix022" aria-expanded="false" aria-controls="collapseSix022">
															Collapsible Group Item #6
														</a>
													</h4>
												</div>
												<div id="collapseSix022" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix022">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 6 -->
											<!-- module 7 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingSeven022">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion022" href="#collapseSeven022" aria-expanded="false" aria-controls="collapseSeven022">
															Collapsible Group Item #7
														</a>
													</h4>
												</div>
												<div id="collapseSeven022" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven022">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 7 -->
											<!-- module 8 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingEight022">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion022" href="#collapseEight022" aria-expanded="false" aria-controls="collapseEight022">
															Collapsible Group Item #8
														</a>
													</h4>
												</div>
												<div id="collapseEight022" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight022">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 8 -->
											<!-- module 9 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingNine022">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion022" href="#collapseNine022" aria-expanded="false" aria-controls="collapseNine022">
															Collapsible Group Item #9
														</a>
													</h4>
												</div>
												<div id="collapseNine022" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine022">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 9 -->
										</div><!--Second Year Distance Tab -->


									</div><!-- Column -->
									
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="messages1">
								<div class="row">
									<div class="col-md-6">

										<center><h6>-----First Semester-----</h6></center>
										<!--Third Year Distance Tab -->
										<div class="panel-group accordion" id="accordion03" role="tablist" aria-multiselectable="true">
											<!-- module 1 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingOne03">
													<h4 class="panel-title">
														<a role="button" data-toggle="collapse" data-parent="#accordion03" href="#collapseOne03" aria-expanded="true" aria-controls="collapseOne03">
															Psy 4113  PSYCHOLOGICAL RESEARCH
														</a>
													</h4>
												</div>
												<div id="collapseOne03" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne03">
													<div class="panel-body">
														<ol type="1.0">
															<li>Research Designs</li>
															<li>Quantitative Methods</li>
															<li>Qualitative Procedures</li>
															<li>Mixed Methods Procedures</li>
															<li>Dommunicating the Results of Research in Psychologly</li>
														</ol>
														<p><u>References</u></p> 
														<ol type="1.0">
															<li>Goodwin,C.J.(2005):Research in Psychology(Fourth Edition).USA:WILEY</li>
															<li>Creswell,(2003):Research Design(Second Edition).SAGE Publications</li>
															<li>Rubin,A,and Babbie,e..,(2007):"Essential Research Methods for social work"</li>
														</ol>
													</div>
												</div>
											</div>
											<!--end module 1 -->
											<!-- module 2 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingTwo03">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion03" href="#collapseTwo03" aria-expanded="false" aria-controls="collapseTwo03">
															Collapsible Group Item #2
														</a>
													</h4>
												</div>
												<div id="collapseTwo03" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo03">
													<div class="panel-body">
														<ol type="1.0">
															<li>Research Designs</li>
															<li>Quantitative Methods</li>
															<li>Qualitative Procedures</li>
															<li>Mixed Methods Procedures</li>
															<li>Dommunicating the Results of Research in Psychologly</li>
														</ol>
														<p><u>References</u></p> 
														<ol type="1.0">
															<li>Goodwin,C.J.(2005):Research in Psychology(Fourth Edition).USA:WILEY</li>
															<li>Creswell,(2003):Research Design(Second Edition).SAGE Publications</li>
															<li>Rubin,A,and Babbie,e..,(2007):"Essential Research Methods for social work"</li>
														</ol>
													</div>
												</div>
											</div>
											<!--end module 2 -->
											<!-- module 3 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingThree03">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion03" href="#collapseThree03" aria-expanded="false" aria-controls="collapseThree03">
															Collapsible Group Item #3
														</a>
													</h4>
												</div>
												<div id="collapseThree03" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree03">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 3 -->
											<!-- module 4 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingFour03">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion03" href="#collapseFour03" aria-expanded="false" aria-controls="collapseFour03">
															Collapsible Group Item #4
														</a>
													</h4>
												</div>
												<div id="collapseFour03" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour03">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 4 -->
											<!-- module 5 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingFive03">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion03" href="#collapseFive03" aria-expanded="false" aria-controls="collapseFive03">
															Collapsible Group Item #5
														</a>
													</h4>
												</div>
												<div id="collapseFive03" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive03">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 5 -->
											<!-- module 6 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingSix03">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion03" href="#collapseSix03" aria-expanded="false" aria-controls="collapseSix03">
															Collapsible Group Item #6
														</a>
													</h4>
												</div>
												<div id="collapseSix03" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix03">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 6 -->
											<!-- module 7 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingSeven03">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion03" href="#collapseSeven03" aria-expanded="false" aria-controls="collapseSeven03">
															Collapsible Group Item #7
														</a>
													</h4>
												</div>
												<div id="collapseSeven03" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven03">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 7 -->
											<!-- module 8 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingEight03">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion03" href="#collapseEight03" aria-expanded="false" aria-controls="collapseEight03">
															Collapsible Group Item #8
														</a>
													</h4>
												</div>
												<div id="collapseEight03" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight03">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 8 -->
											<!-- module 9 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingNine03">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion03" href="#collapseNine03" aria-expanded="false" aria-controls="collapseNine03">
															Collapsible Group Item #9
														</a>
													</h4>
												</div>
												<div id="collapseNine03" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine03">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 9 -->
										</div><!--Third Year Distance Tab -->

									</div>
									<div class="col-md-6" style="border-left:2px solid blue;">

										<center><h6>-----Second Semester-----</h6></center>
										<!--Third Year Distance Tab -->
										<div class="panel-group accordion" id="accordion033" role="tablist" aria-multiselectable="true">
											<!-- module 1 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingOne033">
													<h4 class="panel-title">
														<a role="button" data-toggle="collapse" data-parent="#accordion033" href="#collapseOne033" aria-expanded="true" aria-controls="collapseOne033">
															Psy 4113  PSYCHOLOGICAL RESEARCH
														</a>
													</h4>
												</div>
												<div id="collapseOne033" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne033">
													<div class="panel-body">
														<ol type="1.0">
															<li>Research Designs</li>
															<li>Quantitative Methods</li>
															<li>Qualitative Procedures</li>
															<li>Mixed Methods Procedures</li>
															<li>Dommunicating the Results of Research in Psychologly</li>
														</ol>
														<p><u>References</u></p> 
														<ol type="1.0">
															<li>Goodwin,C.J.(2005):Research in Psychology(Fourth Edition).USA:WILEY</li>
															<li>Creswell,(2003):Research Design(Second Edition).SAGE Publications</li>
															<li>Rubin,A,and Babbie,e..,(2007):"Essential Research Methods for social work"</li>
														</ol>
													</div>
												</div>
											</div>
											<!--end module 1 -->
											<!-- module 2 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingTwo033">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion033" href="#collapseTwo033" aria-expanded="false" aria-controls="collapseTwo033">
															Collapsible Group Item #2
														</a>
													</h4>
												</div>
												<div id="collapseTwo033" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo033">
													<div class="panel-body">
														<ol type="1.0">
															<li>Research Designs</li>
															<li>Quantitative Methods</li>
															<li>Qualitative Procedures</li>
															<li>Mixed Methods Procedures</li>
															<li>Dommunicating the Results of Research in Psychologly</li>
														</ol>
														<p><u>References</u></p> 
														<ol type="1.0">
															<li>Goodwin,C.J.(2005):Research in Psychology(Fourth Edition).USA:WILEY</li>
															<li>Creswell,(2003):Research Design(Second Edition).SAGE Publications</li>
															<li>Rubin,A,and Babbie,e..,(2007):"Essential Research Methods for social work"</li>
														</ol>
													</div>
												</div>
											</div>
											<!--end module 2 -->
											<!-- module 3 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingThree033">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion033" href="#collapseThree033" aria-expanded="false" aria-controls="collapseThree033">
															Collapsible Group Item #3
														</a>
													</h4>
												</div>
												<div id="collapseThree033" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree033">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 3 -->
											<!-- module 4 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingFour033">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion033" href="#collapseFour033" aria-expanded="false" aria-controls="collapseFour033">
															Collapsible Group Item #4
														</a>
													</h4>
												</div>
												<div id="collapseFour033" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour033">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 4 -->
											<!-- module 5 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingFive033">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion033" href="#collapseFive033" aria-expanded="false" aria-controls="collapseFive033">
															Collapsible Group Item #5
														</a>
													</h4>
												</div>
												<div id="collapseFive033" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive033">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 5 -->
											<!-- module 6 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingSix033">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion033" href="#collapseSix033" aria-expanded="false" aria-controls="collapseSix033">
															Collapsible Group Item #6
														</a>
													</h4>
												</div>
												<div id="collapseSix033" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix033">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 6 -->
											<!-- module 7 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingSeven033">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion033" href="#collapseSeven033" aria-expanded="false" aria-controls="collapseSeven033">
															Collapsible Group Item #7
														</a>
													</h4>
												</div>
												<div id="collapseSeven033" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven033">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 7 -->
											<!-- module 8 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingEight033">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion033" href="#collapseEight033" aria-expanded="false" aria-controls="collapseEight033">
															Collapsible Group Item #8
														</a>
													</h4>
												</div>
												<div id="collapseEight033" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight033">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 8 -->
											<!-- module 9 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingNine033">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion033" href="#collapseNine033" aria-expanded="false" aria-controls="collapseNine033">
															Collapsible Group Item #9
														</a>
													</h4>
												</div>
												<div id="collapseNine033" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine033">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 9 -->
										</div><!--Third Year Distance Tab -->

									</div><!-- Column -->
									
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="messages2">
								<div class="row">
									<div class="col-md-6">

										<center><h6>-----First Semester-----</h6></center>
										<!--Fourth Year Distance Tab -->
										<div class="panel-group accordion" id="accordion04" role="tablist" aria-multiselectable="true">
											<!-- module 1 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingOne04">
													<h4 class="panel-title">
														<a role="button" data-toggle="collapse" data-parent="#accordion04" href="#collapseOne04" aria-expanded="true" aria-controls="collapseOne04">
															Psy 4114  PSYCHOLOGICAL RESEARCH
														</a>
													</h4>
												</div>
												<div id="collapseOne04" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne04">
													<div class="panel-body">
														<ol type="1.0">
															<li>Research Designs</li>
															<li>Quantitative Methods</li>
															<li>Qualitative Procedures</li>
															<li>Mixed Methods Procedures</li>
															<li>Dommunicating the Results of Research in Psychologly</li>
														</ol>
														<p><u>References</u></p> 
														<ol type="1.0">
															<li>Goodwin,C.J.(2005):Research in Psychology(Fourth Edition).USA:WILEY</li>
															<li>Creswell,(2003):Research Design(Second Edition).SAGE Publications</li>
															<li>Rubin,A,and Babbie,e..,(2007):"Essential Research Methods for social work"</li>
														</ol>
													</div>
												</div>
											</div>
											<!--end module 1 -->
											<!-- module 2 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingTwo04">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion04" href="#collapseTwo04" aria-expanded="false" aria-controls="collapseTwo04">
															Collapsible Group Item #2
														</a>
													</h4>
												</div>
												<div id="collapseTwo04" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo04">
													<div class="panel-body">
														<ol type="1.0">
															<li>Research Designs</li>
															<li>Quantitative Methods</li>
															<li>Qualitative Procedures</li>
															<li>Mixed Methods Procedures</li>
															<li>Dommunicating the Results of Research in Psychologly</li>
														</ol>
														<p><u>References</u></p> 
														<ol type="1.0">
															<li>Goodwin,C.J.(2005):Research in Psychology(Fourth Edition).USA:WILEY</li>
															<li>Creswell,(2003):Research Design(Second Edition).SAGE Publications</li>
															<li>Rubin,A,and Babbie,e..,(2007):"Essential Research Methods for social work"</li>
														</ol>
													</div>
												</div>
											</div>
											<!--end module 2 -->
											<!-- module 3 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingThree04">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion04" href="#collapseThree04" aria-expanded="false" aria-controls="collapseThree04">
															Collapsible Group Item #3
														</a>
													</h4>
												</div>
												<div id="collapseThree04" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree04">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 3 -->
											<!-- module 4 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingFour04">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion04" href="#collapseFour04" aria-expanded="false" aria-controls="collapseFour04">
															Collapsible Group Item #4
														</a>
													</h4>
												</div>
												<div id="collapseFour04" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour04">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 4 -->
											<!-- module 5 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingFive04">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion04" href="#collapseFive04" aria-expanded="false" aria-controls="collapseFive04">
															Collapsible Group Item #5
														</a>
													</h4>
												</div>
												<div id="collapseFive04" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive04">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 5 -->
											<!-- module 6 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingSix04">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion04" href="#collapseSix04" aria-expanded="false" aria-controls="collapseSix04">
															Collapsible Group Item #6
														</a>
													</h4>
												</div>
												<div id="collapseSix04" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix04">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 6 -->
											<!-- module 7 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingSeven04">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion04" href="#collapseSeven04" aria-expanded="false" aria-controls="collapseSeven04">
															Collapsible Group Item #7
														</a>
													</h4>
												</div>
												<div id="collapseSeven04" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven04">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 7 -->
											<!-- module 8 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingEight04">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion04" href="#collapseEight04" aria-expanded="false" aria-controls="collapseEight04">
															Collapsible Group Item #8
														</a>
													</h4>
												</div>
												<div id="collapseEight04" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight04">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 8 -->
											<!-- module 9 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingNine04">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion04" href="#collapseNine04" aria-expanded="false" aria-controls="collapseNine04">
															Collapsible Group Item #9
														</a>
													</h4>
												</div>
												<div id="collapseNine04" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine04">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 9 -->
										</div><!--Fourth Year Distance Tab -->

									</div>
									<div class="col-md-6" style="border-left:2px solid blue;">

										<center><h6>-----Second Semester-----</h6></center>
										<!--Fourth Year Distance Tab -->
										<div class="panel-group accordion" id="accordion044" role="tablist" aria-multiselectable="true">
											<!-- module 1 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingOne044">
													<h4 class="panel-title">
														<a role="button" data-toggle="collapse" data-parent="#accordion044" href="#collapseOne044" aria-expanded="true" aria-controls="collapseOne044">
															Psy 4114  PSYCHOLOGICAL RESEARCH
														</a>
													</h4>
												</div>
												<div id="collapseOne044" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne044">
													<div class="panel-body">
														<ol type="1.0">
															<li>Research Designs</li>
															<li>Quantitative Methods</li>
															<li>Qualitative Procedures</li>
															<li>Mixed Methods Procedures</li>
															<li>Dommunicating the Results of Research in Psychologly</li>
														</ol>
														<p><u>References</u></p> 
														<ol type="1.0">
															<li>Goodwin,C.J.(2005):Research in Psychology(Fourth Edition).USA:WILEY</li>
															<li>Creswell,(2003):Research Design(Second Edition).SAGE Publications</li>
															<li>Rubin,A,and Babbie,e..,(2007):"Essential Research Methods for social work"</li>
														</ol>
													</div>
												</div>
											</div>
											<!--end module 1 -->
											<!-- module 2 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingTwo044">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion044" href="#collapseTwo044" aria-expanded="false" aria-controls="collapseTwo044">
															Collapsible Group Item #2
														</a>
													</h4>
												</div>
												<div id="collapseTwo044" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo044">
													<div class="panel-body">
														<ol type="1.0">
															<li>Research Designs</li>
															<li>Quantitative Methods</li>
															<li>Qualitative Procedures</li>
															<li>Mixed Methods Procedures</li>
															<li>Dommunicating the Results of Research in Psychologly</li>
														</ol>
														<p><u>References</u></p> 
														<ol type="1.0">
															<li>Goodwin,C.J.(2005):Research in Psychology(Fourth Edition).USA:WILEY</li>
															<li>Creswell,(2003):Research Design(Second Edition).SAGE Publications</li>
															<li>Rubin,A,and Babbie,e..,(2007):"Essential Research Methods for social work"</li>
														</ol>
													</div>
												</div>
											</div>
											<!--end module 2 -->
											<!-- module 3 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingThree044">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion044" href="#collapseThree044" aria-expanded="false" aria-controls="collapseThree044">
															Collapsible Group Item #3
														</a>
													</h4>
												</div>
												<div id="collapseThree044" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree044">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 3 -->
											<!-- module 4 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingFour044">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion044" href="#collapseFour044" aria-expanded="false" aria-controls="collapseFour044">
															Collapsible Group Item #4
														</a>
													</h4>
												</div>
												<div id="collapseFour044" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour044">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 4 -->
											<!-- module 5 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingFive044">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion044" href="#collapseFive044" aria-expanded="false" aria-controls="collapseFive044">
															Collapsible Group Item #5
														</a>
													</h4>
												</div>
												<div id="collapseFive044" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive044">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 5 -->
											<!-- module 6 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingSix044">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion044" href="#collapseSix044" aria-expanded="false" aria-controls="collapseSix044">
															Collapsible Group Item #6
														</a>
													</h4>
												</div>
												<div id="collapseSix044" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix044">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 6 -->
											<!-- module 7 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingSeven044">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion044" href="#collapseSeven044" aria-expanded="false" aria-controls="collapseSeven044">
															Collapsible Group Item #7
														</a>
													</h4>
												</div>
												<div id="collapseSeven044" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven044">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 7 -->
											<!-- module 8 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingEight044">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion044" href="#collapseEight044" aria-expanded="false" aria-controls="collapseEight044">
															Collapsible Group Item #8
														</a>
													</h4>
												</div>
												<div id="collapseEight044" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight044">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 8 -->
											<!-- module 9 -->
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingNine044">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion044" href="#collapseNine044" aria-expanded="false" aria-controls="collapseNine044">
															Collapsible Group Item #9
														</a>
													</h4>
												</div>
												<div id="collapseNine044" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine044">
													<div class="panel-body">
														<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
													</div>
												</div>
											</div>
											<!--end module 9 -->
										</div><!--Fourth Year Distance Tab -->

									</div><!-- Column -->
									
								</div>
							</div>
						</div><!-- Tab Content -->
					</div><!-- Tab -->
				</div><!-- Column -->
			</div><!-- Row -->
		</div><!-- Container -->
	</section><!-- Section -->

</div><!-- Page Main -->

@endsection
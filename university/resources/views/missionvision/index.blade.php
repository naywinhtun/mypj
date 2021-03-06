
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
                    <h3 class="title">MISSION AND VISION</h3>

                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">News</li>
                    </ol><!-- Breadcrumb -->
                </div><!-- Page Header Wrapper -->
            </div><!-- Coloumn -->
        </div><!-- Row -->
    </div><!-- Container -->
</div><!-- Page Header -->

<!-- Page Main -->
<div role="main" class="main">
    <div class="page-default pad-none">
        <section class="bg-grey typo-dark">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <!-- Item Begins -->
                    <div class="col-sm-12">
                        <!-- News Wrapper -->
                        <div class="news-wrap">
                            <div>
                                <h3 class="title">Mission</h2>
                            </div>
                            <!-- News Content -->
                            <div class="col-xs-12 news-single">
                                <div class="blog-single-wrap">
                                    <!-- history Detail Wrapper -->
                                    <div class="news-single-details">
                                        <p>
                                           
                                            
                                            
                                            {{$missionvision->mission}}
                                           
                                        </p>


                                    </div><!-- history Detail Wrapper -->
                                </div><!-- history Wrapper -->
                            </div><!-- News Content -->
                        </div><!-- News Wrapper -->
                    </div><!-- Column -->
                    <!-- Item Begins -->

                </div><!-- Row -->

                <!-- Divider -->
                <hr class="lg hidden-767">

                <div class="row">
                    <!-- Item Begins -->
                    <div class="col-sm-12">
                        <!-- News Wrapper -->
                        <div class="news-wrap">
                            <div>
                                <h3 class="title">Vision</h3>
                            </div>
                            <!-- News Content -->
                            <div class="col-xs-12 news-single">
                                <div class="blog-single-wrap">
                                    <!-- history Detail Wrapper -->
                                    <div class="news-single-details">
                                        <p>
                                          
                                            {{$missionvision->vision}}
                                           
                                        </p>


                                    </div><!-- history Detail Wrapper -->
                                </div><!-- history Wrapper -->
                            </div><!-- News Content -->
                        </div><!-- News Wrapper -->
                    </div><!-- Column -->
                    <!-- Item Begins -->

                </div><!-- Row -->
            </div><!-- Container -->
        </section><!-- Section -->
    </div><!-- Page Default -->
</div><!-- Page Main -->

<!-- Footer -->
@endsection
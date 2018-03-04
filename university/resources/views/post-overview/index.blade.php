@extends('layouts.master')

@section('content')

    <div class="page-header bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Page Header Wrapper -->
                    <div class="page-header-wrapper">
                        <!-- Title & Sub Title -->
                        <h3 class="title">Post Overview</h3>
                        <h6 class="sub-title">All you want know</h6>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Blog</li>
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
                    <!-- Sidebar -->
                    <div class="col-md-3">
                        @include('layouts.sidebar')
                    </div><!-- Column -->
                    <!-- Page Content -->
                    <div class="col-md-9">
                        <ul class="row">
                            @foreach ($posts as $post)
                                <li class="col-xs-12 blog-list-wrap">
                                    <!-- Blog Wrapper -->
                                    <div class="row blog-wrap">
                                        <div class="col-sm-5">
                                            <div class="blog-img-wrap">
                                                <img width="600" height="220" src="{{ asset('images/blog/blog-04.jpg') }}"
                                                     class="img-responsive" alt="Blog">
                                                <h6 class="post-type">&nbsp;<i class="fa fa-image"></i>&nbsp;</h6>
                                            </div><!-- Blog Image  Wrapper -->
                                        </div><!-- Blog Wrapper -->
                                        <!-- Blog Detail Wrapper -->
                                        <div class="col-sm-7">
                                            <div class="blog-details">
                                                <h4><a href="#">{{$post['title']}}</a></h4>
                                                <ul class="blog-meta">
                                                    <li><i class="fa fa-calendar-o"></i>{{$post['created_at']->toFormattedDateString()}}</li>
                                                    <li><i class="fa fa-comments"></i>{{ $post->comments->count()}}</li>                            
                                                </ul><!-- Blog Meta -->
                                                <p>{{$post['content']}}</p>
                                                <a class="btn" href="/postoverview/{{ $post->id }}">Read More</a>
                                            </div><!-- Blog Detail Wrapper -->
                                        </div><!-- Blog Detail Column -->
                                    </div><!-- Blog Wrapper -->
                                    <!-- Divider -->
                                    <hr class="md">
                                </li><!-- Column -->
                            @endforeach
                        </ul><!-- Row -->
                        <!-- Pagination -->
                        <nav class="post-pagination">
                            {!! $posts->links(); !!}
                        </nav><!-- Pagination -->

                    </div><!-- Column -->
                </div><!-- Row -->
            </div><!-- Container -->
        </div><!-- Page Default -->
    </div><!-- Page Main -->
@endsection
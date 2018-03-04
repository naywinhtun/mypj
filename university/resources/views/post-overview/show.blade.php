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
                    <h3 class="title">Blog</h3>
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
                    <div class="row">
                        <!-- Blog Column -->
                        <div class="col-xs-12 blog-single">
                            <div class="blog-single-wrap">
                                <div class="blog-img-wrap">
                                    <img width="1920" height="700" src="/images/blog/blog-large-01.jpg" class="img-responsive" alt="Event">
                                </div>
                                <!-- Blog Detail Wrapper -->
                                <div class="blog-single-details">
                                    <h4>{{ $post->title }}</h4>
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user"></i> {{ $post->user['name'] }}</li>
                                        <li><i class="fa fa-calendar-o"></i>{{$post['created_at']->toFormattedDateString()}}</li>
                                        <li><i class="fa fa-comments"></i>{{ $post->comments->count()}}</li>
                                        <li><i class="fa fa-folder"></i> Chemical, Maths, Conference</li>
                                    </ul><!-- Blog Meta -->
                                    <!-- Blog Description -->
                                     {{ $post->content }}
                                </div><!-- Blog Detail Wrapper -->
                            </div><!-- Blog Wrapper -->

                            <!-- Blog Share Post -->
                            <div class="share">
                                <h5>Share Post : </h5>
                                <ul class="social-icons">
                                    <li class="facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook">Facebook</a></li>
                                    <li class="twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter">Twitter</a></li>
                                    <li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin">Linkedin</a></li>
                                    <li class="mail"><a href="http://www.gmail.com/" target="_blank" title="mail">mail</a></li>
                                    <li class="googleplus"><a href="http://www.googleplus.com/" target="_blank" title="googleplus">googleplus</a></li>
                                    <li class="wordpress"><a href="http://www.wordpress.com/" target="_blank" title="wordpress">wordpress</a></li>
                                    <li class="instagram"><a href="http://www.instagram.com/" target="_blank" title="instagram">instagram</a></li>
                                </ul><!-- Blog Social Share -->
                            </div><!-- Blog Share Post -->

                            <!-- Related Post -->
                            <h4>Related Post : </h4>
                            <div class="owl-carousel" 
                            data-animatein="" 
                            data-animateout="" 
                            data-margin="30" 
                            data-loop="true" 
                            data-merge="true" 
                            data-nav="true" 
                            data-dots="false" 
                            data-stagepadding="" 
                            data-items="1" 
                            data-mobile="1" 
                            data-tablet="3" 
                            data-desktopsmall="3"  
                            data-desktop="3" 
                            data-autoplay="true" 
                            data-delay="3000" 
                            data-navigation="true">
                            <div class="item">
                                <!-- Related Wrapper -->
                                <div class="related-wrap">
                                    <!-- Related Image Wrapper -->
                                    <div class="img-wrap">
                                        <img width="600" height="220" alt="Blog" class="img-responsive" src="/images/blog/blog-01.jpg">
                                    </div>
                                    <!-- Related Content Wrapper -->
                                    <div class="related-content">
                                        <a href="blog-single-left.html" title="Read More">+</a><span>Secondary text</span>
                                        <h5 class="title">How to develop attitude?</h5>
                                    </div><!-- Related Content Wrapper -->
                                </div><!-- Related Wrapper -->
                            </div><!-- Item -->

                            <div class="item">
                                <!-- Related Wrapper -->
                                <div class="related-wrap">
                                    <!-- Related Image Wrapper -->
                                    <div class="img-wrap">
                                        <img width="600" height="220" alt="Blog" class="img-responsive" src="/images/blog/blog-02.jpg">
                                    </div>
                                    <!-- Related Content Wrapper -->
                                    <div class="related-content">
                                        <a href="blog-single-left.html" title="Read More">+</a><span>Secondary text</span>
                                        <h5 class="title">How to develop attitude?</h5>
                                    </div><!-- Related Content Wrapper -->
                                </div><!-- Related Wrapper -->
                            </div><!-- Item -->

                            <div class="item">
                                <!-- Related Wrapper -->
                                <div class="related-wrap">
                                    <!-- Related Image Wrapper -->
                                    <div class="img-wrap">
                                        <img width="600" height="220" alt="Blog" class="img-responsive" src="/images/blog/blog-03.jpg">
                                    </div>
                                    <!-- Related Content Wrapper -->
                                    <div class="related-content">
                                        <a href="blog-single-left.html" title="Read More">+</a><span>Secondary text</span>
                                        <h5 class="title">How to develop attitude?</h5>
                                    </div><!-- Related Content Wrapper -->
                                </div><!-- Related Wrapper -->
                            </div><!-- Item -->

                            <div class="item">
                                <!-- Related Wrapper -->
                                <div class="related-wrap">
                                    <!-- Related Image Wrapper -->
                                    <div class="img-wrap">
                                        <img width="600" height="220" alt="Blog" class="img-responsive" src="/images/blog/blog-04.jpg">
                                    </div>
                                    <!-- Related Content Wrapper -->
                                    <div class="related-content">
                                        <a href="blog-single-left.html" title="Read More">+</a><span>Secondary text</span>
                                        <h5 class="title">How to develop attitude?</h5>
                                    </div><!-- Related Content Wrapper -->
                                </div><!-- Related Wrapper -->
                            </div><!-- Item -->
                        </div><!-- Related Post -->

                        <!-- Post Comments -->
                        <div id="post-comment"  class="post-block post-comments clearfix">
                            <h4>Comments : </h4>
                            <!-- Comments -->
                            <ul class="comments">
                                @foreach($post->comments as $comment)
                                <li>                                                                 
                                    <!-- Comment -->
                                    <div class="comment">
                                        <div class="img-thumbnail">
                                            <img src="/images/default/thumb-01.jpg" alt="" class="avatar img-responsive" height="80" width="80">
                                        </div>

                                        <div class="comment-block">
                                            <div class="comment-arrow"></div>
                                            <span class="comment-by">
                                                <strong>{{ $comment->gmail}}</strong>
                                                <span class="pull-right">
                                                    <span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
                                                </span>
                                            </span><!-- Comment By -->
                                            <p>{{ $comment->comment}}</p>
                                            <span class="date pull-right">January 12, 2013 at 1:38 pm</span>
                                        </div><!-- Comment Block -->
                                    </div><!-- Comment -->                               
                                                                           
                                    @foreach($comment->reply as $reply)
                                    <!-- Comments Replay -->
                                    <ul class="comments reply">
                                        <!-- Comment -->
                                        <li>
                                            <div class="comment">
                                                <div class="img-thumbnail">
                                                    <img src="/images/default/thumb-02.jpg" alt="" class="avatar img-responsive" height="80" width="80">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-arrow"></div>
                                                    <span class="comment-by">
                                                        <strong>{{ $reply->gmail}}</strong>
                                                        <span class="pull-right">
                                                            <span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
                                                        </span>
                                                    </span><!-- Comment By -->
                                                    <p>{{ $reply->commentreply}}</p>
                                                    <span class="date pull-right">January 12, 2013 at 1:38 pm</span>
                                                </div><!-- Comment Block -->
                                            </div>
                                        </li><!-- Comment -->                                    
                                    </ul><!-- Comments Replay -->
                                    @endforeach

                                </li><!-- Comment -->

                                 @endforeach

                            </ul><!-- Comments Full -->
                        </div><!-- Post Comments -->

                        <!-- Post Comment Form -->
                        <h4>Post a comment : </h4>
                        <form>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputName" placeholder="Name">
                                    </div>
                                    <div class="form-group textarea-message ">
                                        <textarea name="contact_message" class="textarea-message form-control" placeholder="Message" rows="8" ></textarea>
                                    </div>
                                    <button type="submit" class="btn">Submit</button>
                                </div><!-- Column -->
                            </div><!-- Row -->
                        </form><!-- Post Comment Form -->

                    </div><!-- Column -->
                </div><!-- Row -->
            </div><!-- Column -->
        </div><!-- Row -->
    </div><!-- Container -->
</div><!-- Page Default -->
</div><!-- Page Main -->
@endsection
<!-- aside -->
                        <aside class="sidebar">
                            <!-- Widget -->
                            <div class="widget no-box">
                                <h5 class="widget-title">Search<span></span></h5>
                                <div class="search">
                                    <form id="searchForm" action="page-search-results.html" method="get">
                                        <div class="input-group">
                                            <input type="text" class="form-control search" name="q" id="q"
                                                   placeholder="Search..." required>
                                            <span class="input-group-btn">
                                                            <button class="btn" type="submit"><i
                                                                        class="fa fa-search"></i></button>
                                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- Widget -->

                            <!-- Widget -->
                            <div class="widget">
                                <h5 class="widget-title">Latest Post<span></span></h5>
                                <ul class="thumbnail-widget">
                                    <li>
                                        <div class="thumb-wrap">
                                            <img width="60" height="60" alt="Thumb" class="img-responsive"
                                                 src="images/default/thumb1.jpg">
                                        </div>
                                        <div class="thumb-content"><a href="#">About
                                                Freelancing</a><span>March 10, 2016</span></div>
                                    </li>
                                    <li>
                                        <div class="thumb-wrap">
                                            <img width="60" height="60" alt="Thumb" class="img-responsive"
                                                 src="images/default/thumb2.jpg">
                                        </div>
                                        <div class="thumb-content"><a href="#">Need a Help
                                                ?</a><span>March 10, 2016</span></div>
                                    </li>
                                    <li>
                                        <div class="thumb-wrap">
                                            <img width="60" height="60" alt="Thumb" class="img-responsive"
                                                 src="images/default/thumb3.jpg">
                                        </div>
                                        <div class="thumb-content"><a href="#">New ideas
                                                ?</a><span>March 10, 2016</span></div>
                                    </li>
                                </ul><!-- Thumbnail Widget -->
                            </div><!-- Widget -->

                            <!-- Widget -->
                            <div class="widget">
                                <h5 class="widget-title">Monthly Update<span></span></h5>
                                <ul class="go-widget">
                                    @foreach ($departments as $department)
                                    <li><a href="/postoverview/department/{{ $department['id'] }}">{{ $department['name'] }}<span class="badge">{{ $department->latestPosts->count() }}</span></a></li>
                                    @endforeach                                    
                                </ul>
                            </div><!-- Widget -->


                        </aside><!-- aside -->
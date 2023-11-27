@include('Site.includes.Header')
<div class="page-wraper">
    @include('Site.includes.menu')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h2 class="text-white" style="margin-top: 130px;"> نمـاذج المشـاريع</h2>
                </div>
            </div>
        </div>
        <!-- contact area -->
        <div class="content-block">
            <!-- Blog Grid ==== -->
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="ttr-blog-grid-3 row" id="masonry">
                        @isset($old_project)
                            @foreach ($old_project as $num => $N_project)
                                @if ($num < 7)
                                    <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                                        <div class="recent-news">
                                            <div class="action-box">
                                                <img src="{{ asset('storage/' . $N_project->image) }}" alt="">
                                            </div>
                                            <div class="info-bx">
                                                <h5 class="post-title"><a href="blog-details.html"> {{ $N_project->name }}
                                                    </a></h5>
                                                {{-- <p> {{ $N_project->details }} </p> --}}
                                                <div class="post-extra">
                                                    <a href="{{ route('namazeg-project_details', $N_project->id) }}"
                                                        class="btn-link"> للمذيد </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>
            <!-- Blog Grid END ==== -->
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
    @include('Site.includes.subfooter')
</div>
@include('Site.includes.Footer')

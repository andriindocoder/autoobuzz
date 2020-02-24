<div class="col-xl-12 content-box ">
    <div class="row row-featured row-featured-category row-featured-company">
        <div class="col-xl-12  box-title ">
            <div class="inner">
                <h2><span>Featured</span>
                    companies <a class="sell-your-item" href="job-list.html"> See all companies <i
                            class="  icon-th-list"></i> </a></h2>
            </div>
        </div>

        <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
            <a href="job-list.html"><img alt="img" class="img-responsive"
                    src="{{ asset('frontend/images/jobs/company-logos/10.jpg') }}">
                <h6> Jobs at <span class="company-name">Bluth Company</span> <span
                        class="jobs-count text-muted">(64)</span>
                </h6>
            </a>
        </div>

        <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
            <a href="job-list.html"><img alt="img" class="img-responsive"
                    src="{{ asset('frontend/images/jobs/company-logos/11.jpg') }}">
                <h6> Jobs at <span class="company-name">Mainway</span> <span class="jobs-count text-muted">(64)</span>
                </h6>
            </a>
        </div>

        <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
            <a href="job-list.html"><img alt="img" class="img-responsive"
                    src="{{ asset('frontend/images/jobs/company-logos/12.jpg') }}">
                <h6> Jobs at <span class="company-name">W&amp;P</span> <span class="jobs-count text-muted">(64)</span>
                </h6>
            </a>
        </div>

        <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
            <a href="job-list.html"><img alt="img" class="img-responsive"
                    src="{{ asset('frontend/images/jobs/company-logos/23.jpg') }}">
                <h6> Jobs at <span class="company-name">Fuels</span> <span class="jobs-count text-muted">(64)</span>
                </h6>
            </a>
        </div>

        <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
            <a href="job-list.html"><img alt="img" class="img-responsive"
                    src="{{ asset('frontend/images/jobs/company-logos/13.jpg') }}">
                <h6> Jobs at <span class="company-name">Axis Co.</span> <span class="jobs-count text-muted">(64)</span>
                </h6>
            </a>
        </div>

        <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
            <a href="job-list.html"><img alt="img" class="img-responsive"
                    src="{{ asset('frontend/images/jobs/company-logos/14.jpg') }}">
                <h6> Jobs at <span class="company-name">Videlectrix</span> <span
                        class="jobs-count text-muted">(64)</span></h6>
            </a>
        </div>

        <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
            <a href="job-list.html"><img alt="img" class="img-responsive"
                    src="{{ asset('frontend/images/jobs/company-logos/15.jpg') }}">
                <h6> Jobs at <span class="company-name">Blammo</span> <span class="jobs-count text-muted">(64)</span>
                </h6>
            </a>
        </div>

        <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
            <a href="job-list.html"><img alt="img" class="img-responsive"
                    src="{{ asset('frontend/images/jobs/company-logos/16.jpg') }}">
                <h6> Jobs at <span class="company-name">Incom Co.</span> <span class="jobs-count text-muted">(64)</span>
                </h6>
            </a>
        </div>

        <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
            <a href="job-list.html"><img alt="img" class="img-responsive"
                    src="{{ asset('frontend/images/jobs/company-logos/17.jpg') }}">
                <h6> Jobs at <span class="company-name">Data System</span> <span
                        class="jobs-count text-muted">(64)</span></h6>
            </a>
        </div>

        <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
            <a href="job-list.html"><img alt="img" class="img-responsive"
                    src="{{ asset('frontend/images/jobs/company-logos/18.jpg') }}">
                <h6> Jobs at <span class="company-name">Sample inc</span> <span
                        class="jobs-count text-muted">(64)</span></h6>
            </a>
        </div>

        <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
            <a href="job-list.html"><img alt="img" class="img-responsive"
                    src="{{ asset('frontend/images/jobs/company-logos/19.jpg') }}">
                <h6> Jobs at <span class="company-name">Globex</span> <span class="jobs-count text-muted">(64)</span>
                </h6>
            </a>
        </div>

        <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
            <a href="job-list.html"><img alt="img" class="img-responsive"
                    src="{{ asset('frontend/images/jobs/company-logos/20.jpg') }}">
                <h6> Jobs at <span class="company-name">LuthorCorp</span> <span
                        class="jobs-count text-muted">(64)</span></h6>
            </a>
        </div>

        @foreach($carmake as $make)
        <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
            <a href="job-list.html"><img alt="img" class="img-responsive"
                    src="{{ asset('frontend/images/jobs/company-logos/20.jpg') }}">
                <h6> <span class="company-name">{{ ucwords(strtolower($make)) }}</span> <span
                        class="jobs-count text-muted">(64)</span></h6>
            </a>
        </div>
        @endforeach

    </div>
</div>

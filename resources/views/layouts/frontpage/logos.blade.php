<div class="col-xl-12 content-box ">
    <div class="row row-featured row-featured-category row-featured-company">
        <div class="col-xl-12  box-title ">
            <div class="inner">
                <h2><span>Carmaker</span>
                    list <a class="sell-your-item" href="job-list.html"> See all companies <i
                            class="  icon-th-list"></i> </a></h2>
            </div>
        </div>

        @foreach($carmake as $make)
        <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
            <a href="{{ url('category')}}/{{$make['niceName']}}"><img alt="img" class="img-responsive"
                    src="{{ asset('frontend/images/logos').'/'.$make['niceName'].'.jpg' }}">
            </a>
        </div>
        @endforeach

    </div>
</div>

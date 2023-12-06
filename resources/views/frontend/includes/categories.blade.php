<div class="col-xl-2 col-lg-2 col-md-3 col-sm-12">
    <aside class="content-sidebar mb-40">
        <h3>Categories</h3>
        <ul class="sidebar-cat-height">
            @if(!empty($categories))
                @foreach($categories as $category)
                    <li><a href="{{ route('videos.list',['category_id'=>$category->id,'category_slug'=>$category->category_slug]) }}"><i class="jam jam-anchor"></i> {{ $category->category_name }}</a></li>
                @endforeach
            @endif
        </ul>
    </aside>
    <!-- <aside class="content-sidebar mb-40">
        <h3>Countries</h3>
        <ul class="sidebar-cat-height">
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/1.png') }}" alt=""> England</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/2.png') }}" alt=""> Spain</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/3.png') }}" alt=""> Germany</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/4.png') }}" alt=""> Italy</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/5.png') }}" alt=""> France</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/6.png') }}" alt=""> Netherlands</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/1.png') }}" alt=""> England</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/2.png') }}" alt=""> Spain</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/3.png') }}" alt=""> Germany</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/4.png') }}" alt=""> Italy</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/5.png') }}" alt=""> France</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/6.png') }}" alt=""> Netherlands</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/1.png') }}" alt=""> England</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/2.png') }}" alt=""> Spain</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/3.png') }}" alt=""> Germany</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/4.png') }}" alt=""> Italy</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/5.png') }}" alt=""> France</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/6.png') }}" alt=""> Netherlands</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/1.png') }}" alt=""> England</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/2.png') }}" alt=""> Spain</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/3.png') }}" alt=""> Germany</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/4.png') }}" alt=""> Italy</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/5.png') }}" alt=""> France</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/icons/country/6.png') }}" alt=""> Netherlands</a></li>
        </ul>
    </aside> 
    <aside class="content-sidebar">
        <h3>Top 10 Profiles</h3>
        <ul>
            <li><a href=""><img src="{{ asset('public/frontend/images/uploaders/1.jpg') }}" alt=""> Lyle Massey</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/uploaders/2.jpg') }}" alt=""> Bertha Price</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/uploaders/3.jpg') }}" alt=""> Ida Rhodes</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/uploaders/4.jpg') }}" alt=""> Nancy Kelly</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/uploaders/5.jpg') }}" alt=""> Kathleen Chapman</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/uploaders/1.jpg') }}" alt=""> Lyle Massey</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/uploaders/2.jpg') }}" alt=""> Bertha Price</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/uploaders/3.jpg') }}" alt=""> Ida Rhodes</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/uploaders/4.jpg') }}" alt=""> Nancy Kelly</a></li>
            <li><a href=""><img src="{{ asset('public/frontend/images/uploaders/5.jpg') }}" alt=""> Kathleen Chapman</a></li>
        </ul>
    </aside>  -->
</div>

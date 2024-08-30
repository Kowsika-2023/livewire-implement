<div>
    {{-- Success is as dangerous as failure. --}}
@section('content')
<div class="abou-pages">
    <h3>Services</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, earum aliquid quos quisquam </p>
</div>
<!-- services design -->
<div class="my-4   w-90">
    <div class="search-container w-50 m-auto">
        <form action="" method="GET" >
            @csrf
            <div class="sea  ">

                <div id="searchform">
                    <input type="text" id="search-bar" autocomplete="off" type="text" name= "search" class="form-control" placeholder="Search the job title" />
                    <ul class="output" style="display: none"></ul>
                    <button class="btn-sea d-sm-block d-none" type="submit">
                        <i class="fa fa-search"></i> Search
                    </button>
                    <button class="btn-sea d-sm-none d-block" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="  d-flex-wrap  my-3">
        @if($products)
            @foreach($products as $product)

                <div class="col-md-4 col-12 px-2 my-2">


                    <a href="{{url('servicedetail')}}">
                        <div class="owl-box h-100">
                            <h6>Team members- 1</h6>

                            <div class="cir-img">
                                <img src="{{asset('assets/img/marketing.png')}}" alt="ur img">
                            </div>
                            <div class="my-2 service-con">
                            <h5>{{$product->title}}</h5>


                                <p>{!! $product->description !!}</p>
                            </div>
                        </div>

                    </a>

                </div>

            @endforeach
        @else
                <div class="form-outline mb-4 col-8">
                <h1>No Results Found </h1>
                </div>
        @endif

    </div>
</div>

<!-- services design end -->
</div>
@endsection

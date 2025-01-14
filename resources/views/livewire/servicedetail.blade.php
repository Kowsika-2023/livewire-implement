<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
@section('content')

    <div class="abou-pages  ">

      <h3>{{ $post?$post->title:'-' }}</h3>

      <p>{!! $post?$post->description:'-' !!}</p>

    </div>

<!-- service details -->

<div class=" w-90 my-3 ser-title">
    <h3>Discover trust team and our Experts</h3>


    <div class="d-flex-wrap  ">
    @foreach($posts as $post)

        <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-2 my-2">

            <a aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#team-popup{{$post->id}}">

            <div class="box-img">

                    <div class="imge-box my-2">
                        <img src="{{asset('assets/img/marketing.png')}}" alt="">
                    </div>
                    <div class="te-deta pt-3">
                        <h5>Service Member</h5>

                        <p>{{ $post->title }}</p>

                        <h6>Years of Experience : 1</h6>

                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
<!-- service details end -->

<!-- enquiry form starts -->
@foreach($posts as $post)

<div class="modal job-form"  id="team-popup{{$post->id}}">

    <div class="modal-dialog mo-di">
        <div class="modal-content">

            <div class="enq_bg">

                <div class="fot_enq">
                    <button data-bs-dismiss="modal" class="clse_btn">
                        <i class="fa-solid fa-xmark "></i>
                    </button>
                </div>

                <div class="sha_pe">
                </div>
                <div class="imge-box my-2">
                    <img src="{{asset('assets/img/marketing.png')}}" alt="">

                </div>

                <div class="te-deta p-3">
                    <h5>Service Member</h5>

                    <h6>{{$post->title }}</h6>

                    <div class="d-flex-al-jb my-3">
                        <h6>YOE :1 </h6>

                        <a href="tel:+919080902021"><i class="fa-solid fa-phone"></i>8888888888</a>
                    </div>


                    <p> {!! $post->description !!}</p>
                </div>

                <div class="enq_btn text-center">
                    <a data-bs-toggle="modal" data-bs-target="#enquiry-popup{{$post->id}}" class="btn-des">Enquiry now</a>
                </div>

            </div>
        </div>

    </div>

</div>
@endforeach

@foreach($posts as $post)
<div class="modal job-form" id="enquiry-popup{{$post->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <h4 class="modal-title mt-2 ps-3">Enquiry Now</h4>
            <div class="fot_enq">
                <button data-bs-dismiss="modal" class="clse_btn">
                    <i class="fa-solid fa-xmark "></i>
                </button>
            </div>
            <form action=""  id="loadermail" method="post" >
                @csrf
                @method('POST')

                <div class="my-3 px-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control form-design  @error('name') is-invalid @enderror" id="name1"  required placeholder="Enter Name" name="name" />
                </div>
                @error('name')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror

                <div class="my-3 px-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control form-design  @error('email') is-invalid @enderror" id="email1" class="form-control" required placeholder="Enter Email" name="email" />
                </div>
                @error('email')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror

                <div class="my-3 px-3">
                    <label for="number">Phone</label>
                    <input type="text" class="form-control form-design  @error('mobile') is-invalid @enderror" id="mobile1" maxlength="10" pattern="[6789][0-9]{9}" required placeholder="Enter Phone Number" name="mobile"   />

                </div>
                @error('mobile')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror

                <div class="my-3 px-3">
                    <label for="subject">Subject</label>
                    <input type="subject" class="form-control form-design  @error('subject') is-invalid @enderror" id="subject1" required placeholder="Enter subject" name="subject" />
                </div>
                @error('subject')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror

                <div class="my-3 px-3">
                    <label for="expert_name">Expert Name</label>
                    <input type="name" class="form-control form-design" id="expert_name1" value="{{$post->title}}" readonly required placeholder="Enter Expert Name" name="expert_name" />
                    <input type="hidden" id="service_member_id" name="service_member_id"  value="{{$post->id}}">
                </div>
                @error('expert_name')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror

                <div class="my-3 px-3">
                    <label for="message">Message</label>
                    <textarea class="form-control form-design  @error('message') is-invalid @enderror" placeholder="type here..." required name="message" rows="4" id="message1"></textarea>
                </div>
                @error('message')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror
                <div class="re_ser text-center py-2">
                    <input class="btn-des" type="submit" name="submit"  onclick="myFunction1()" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
<!-- enquiry form ends -->
@endsection

</div>

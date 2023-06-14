@extends('layouts.front.theme')


@section("content")
<div class="space"></div>



<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Selecciona tus planes personalizados de aprendizaje en línea.<span></span></p>
            <h1 class="text-center mb-5">NextEducation tiene un plan diseñado para ayudar a tus estudiantes a aprender algo nuevo en programación.</h1>
        </div>
        <div class="row g-4">
            
            @forelse($plans as $plan)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-search fa-2x"></i>
                    </div>
                    <h5 class="mb-3">{{ $plan->title }}</h5>
                    <p class="m-0">{{ $plan->description }} </p>
                    <hr/>
                    <h5 class="mb-3">{{ '$' . $plan->price }} MXN
                    @if($plan->discount > 0)
                        <span class="text-danger text-sm">- ({{ $plan->discount }}%)</span>
                    @endif
                    </h5>
                    @if(Auth::check())
                    <a class="btn btn" href="">
                        <i class="fa fa-arrow-right"></i> {{ __('Add ') }}
                    </a>
                   
                    @else
                    <a class="btn" href="{{ route('login') }}">
                        <i class="fa fa-arrow-right"></i> {{ __('Login ') }}
                    </a>
                    @endif
                </div>
            </div>
            @empty
            @endforelse            
            
        </div>
    </div>
</div>
<!-- Service End -->

@endsection
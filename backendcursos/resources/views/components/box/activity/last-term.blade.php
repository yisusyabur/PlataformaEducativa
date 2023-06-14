<div>
    @if(!isset($term) || empty($term))
    <div class="col-12">
        <div class="alert alert-danger alert-sm">
            {{ __("No tienes ningún término, puedes agregar cualquier término que desees.") }}
        </div>
    </div>
    @else

    <div class="col-12 mb-2">

        <div class="card border-left-primary bg-light shadow">
            <div class="card-header">
                {{ __('Ultima actividad') }}
            </div>
            <div class="card-body p-4 text-left">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-4">
                        <div class="row">

                         

                            <div class="col-2">
                                <img src="{{ URL::to('term/' . $term->image) }}" class="img-fluid" alt="">
                            </div>



                            <div class="col ml-3 align-middle">
                                <h6 class="text-secondary fs-5">
                                    {{ $term->Department->title }} | {{ $term->Course->title }}
                                </h6>

                                <div class="text-lg pt-2 font-weight-bold mb-1 text-primary">
                                    <a class="text-secondary" href="{{ route('learningCourse', $term->id) }}">
                                        {{ $term->title }}
                                    </a>
                                </div>

                               

                            </div>
                            <div class="col-4">
                                <h6 class="font-weight-bold text-dark">{{ __('Siguiente en la lista') }}</h6>
                                <p class="text-dark">
                                    <i class="fa fa-flag-checkered"></i>
                                    <a href="" class="">Objetivos anteriores del proyecto</a>
                                </p>
                                <small class="text-secondary">Semana 2 | debate del tema * 10 min</small>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>


    @endif
</div>
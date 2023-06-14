<div class="row">

    <div class="col-6">
        <div class="card shadow mb-4 border-bottom-success">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{ __('Mentor Edit') }}</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">


                <form method="post" action="{{ route('workoutMentorReviewUpdate') }}" class="form-inline">
                    @csrf
                    <input type="hidden" name="workout_id" value="{{ $workout->id }}" />
                    <div class="form-group mb-2">
                        <label for="ScoreMentorWorkout" class="sr-only">{{ __('Puntuación') }}</label>
                        <input name="score" type="text" class="form-control-plaintext" id="ScoreMentorWorkout" value="{{ $workout->score ?? 0 }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="ScoreMentorWorkout" class="sr-only">{{ __('completado') }}</label>
                        <select name="is_completed" class="form-control">
                            <option value="1" {{ $workout->is_completed ? 'selected' : '' }}>{{ __('completado') }}</option>
                            <option value="0" {{ !$workout->is_completed ? 'selected' : '' }}>{{ __('No completado') }}</option>
                        </select>

                    </div>
                    
                    <button type="submit" class="btn btn-primary mb-2">{{ __('Confirmar') }}</button>
                    
                </form>
            </div>


        </div>
    </div>

    <div class="col-6">

        <div class="card shadow mb-4 border-bottom-danger">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold ">
                    <i class="fa fa-comment"></i>
                    {{ __('Comentarios') }}
                </h6>

                <div class="dropdown no-arrow">
                    @can('mentor.list')
                    <x-modules.mentor-comments.new-comment :userId="$workout->user_id" :activableType="'App\Models\Workout'" :activableId="$workout->id" />
                    @endcan

                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                @livewire('services.mentors.comments',[
                'activable_id' => $workout->id,
                'activable_type' => 'App\Models\Workout',
                'userId' => $workout->user_id
                ])
            </div>
        </div>
    </div>
</div>
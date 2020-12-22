@extends('dashboard.app')
@section('content')
    <div class="about">
        <form name="SignUp" id="SignUp" class="Signup" method="post">@csrf
            <fieldset>
                <legend>
                    Check Attendance
                </legend>
                <p>
                    Attendance details below:
                </p>
                <div class="form-group form-actions">
                    <div class="input-icon">
                        <select name="trainee_id" style="width:260px" class="form-control">
                            @foreach ($trainees as $tr)
                                <option value="{{ $tr->id }}">{{ $tr->fname }} {{ $tr->lname }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="input-icon">
                        <select name="course_id" style="width:260px" class="form-control">
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <input type="date" name="att_date" id="att_date" class="form-c rounded-0 border-top-0 border-right-0 border-left-0" required>
                </div>
                <div class="form-group">
                    <input type="time" name="att_time" id="att_time" class="form-c rounded-0 border-top-0 border-right-0 border-left-0" required>
                </div>
                <div class=" submit-area ">
                    <button type="submit " class="tm-submit-area"> Create </button>
                </div>
            </fieldset>
        </form>
    </div>
@endsection

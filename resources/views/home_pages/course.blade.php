@extends('home_pages.app')
@section('content')
    <br><br><br><br><br><br>
    <div style="padding-left:30%">
        <table >
            @foreach($courses as $course)
                <tr>
                    <div class="HR">
                        <a href="/course_data/{{ $course->id }}">
                            <div class="HR-Course-One">
                                <img class="card-img" src="https://www.changeboard.com/images/6730/default/shutterstock_157706513-1-.jpg" alt="">
                                <div class="card-img-overlay d-flex align-items-left justify-content-center flex-column">
                                    <p style="font-weight: bold;color:white;font-size:22px">{{ $course->name }}</p>
                                    <hr/>
                                </div>
                            </div>
                        </a>
                    </div>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

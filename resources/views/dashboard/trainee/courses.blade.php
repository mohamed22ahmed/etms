@extends('dashboard.app')
@section('content')
    <div class="about">
        <table>
            <tr>
                <th>course name</th>
                <th>course feedback</th>
                <th>start date</th>
                <th>end date</th>
                <th>start time</th>
                <th>end time</th>
                <th>Register</th>
            </tr>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->feedback }}</td>
                    <td>{{ $course->start_date }}</td>
                    <td>{{ $course->end_date }}</td>
                    <td>{{ $course->start_time }}</td>
                    <td>{{ $course->end_time }}</td>
                    <td><a href="register_course/{{ $course->id }}">Register</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

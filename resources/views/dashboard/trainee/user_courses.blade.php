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
            </tr>
            @foreach ($trainees as $tr)
                @foreach ($tr->courses as $course)
                    <tr>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->feedback }}</td>
                        <td>{{ $course->start_date }}</td>
                        <td>{{ $course->end_date }}</td>
                        <td>{{ $course->start_time }}</td>
                        <td>{{ $course->end_time }}</td>
                    </tr>
                @endforeach
            @endforeach
        </table>
    </div>
@endsection

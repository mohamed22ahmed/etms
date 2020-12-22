@extends('dashboard.app')
@section('content')
    <div class="about">
        <table>
            <tr>
                <th>attendance Time</th>
                <th>attendance Date</th>
            </tr>
            @foreach ($attendances as $attendance)
                <tr>
                    <td>{{ $attendance->att_time }}</td>
                    <td>{{ $attendance->att_date }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

@extends('dashboard.app')
@section('content')
    <div class="about">
        <table class="text-center">
            <tr>
                <th>Task Subject</th>
                <th>Report Subject</th>
            </tr>
            @foreach ($assignments as $assignment)
                <tr>
                    <td>{{ $assignment->task_sub }}</td>
                    <td>{{ $assignment->report_sub }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

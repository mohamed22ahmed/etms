@extends('home_pages.app')
@section('content')
    <br><br><br><br><br><br>
    <div style="padding-left:30%">
        <table>
            <tr>
                <div class="HR">
                    <div class="HR-Course-One">
                        <img class="card-img" src="https://www.changeboard.com/images/6730/default/shutterstock_157706513-1-.jpg" alt="">
                        <div style="color:black" class="card-img-overlay d-flex align-items-left justify-content-center flex-column">
                            <p style="font-weight: bold;font-size:22px">{{ $course->name }}</p>
                            <p style="font-size:18px">{{ $course->feedback }}</p>
                            <p style="font-size:18px">
                                <div style="float:left">
                                    <span >Start Date &nbsp;&nbsp;&nbsp;<span style="font-size:16px">{{ $course->start_date }}</span></span>
                                </div>
                                <div style="float:right">
                                    <span >End Date &nbsp;&nbsp;&nbsp;<span style="font-size:16px;padding-right:50px">{{ $course->start_date }}</span></span>
                                </div>
                            </p><br>
                            <p style="font-size:18px">
                                <div style="float:left">
                                    <span >Start Time &nbsp;&nbsp;&nbsp;<span style="font-size:16px">{{ $course->start_time }}</span></span>
                                </div>
                                <div style="float:right">
                                    <span >End Time &nbsp;&nbsp;&nbsp;<span style="font-size:16px;padding-right:50px">{{ $course->start_time }}</span></span>
                                </div>
                            </p><br><br>
                        </div>
                    </div>
                </div>
            </tr>
        </table>
    </div>
@endsection

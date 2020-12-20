@extends('home_pages.app')
@section('content')

    <section style=" text-align:left; " class="banner">
        <h2><strong>NFSS<strong</h2>
        <div class="intro-para text-center quote">
        <p style="color: rgb(8, 8, 8); font-family:cursive; font-size: 120%; text-align:left; padding-left:150px;"class="big-text">A Free Online employee Training Courses</p>
        </div class="actions"></div>
        @if(session()->has('success'))
        <div class="success alert-success">{{ session('success') }}</div>
    @endif
        <ul>
            <div style="text-align: right;" class="mouse">
                <p>
                    <a href="/login" style="color: #252525;-webkit-transition: 0.5s;transition: 0.5s;text-decoration: none !important; background-color:rgba(54, 117, 114, 0.384); border-radius:20px;  padding:8px; font-size:50%; text-align: center;" class="btn get-quote">
                        Get Started
                    </a>
                </p>
            </div>
            <a href="login.php" class="mouse-hover">
            </div>
            </a>
            </div>
            </div>
        </ul>
    </section>
@endsection

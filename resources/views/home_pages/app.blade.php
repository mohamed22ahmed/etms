<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Employee Training </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="training, employee, NFSS reword">
        <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
        <style type="text/css">
            body {
                background-image: url('https://blog.zoom.us/wp-content/uploads/2020/05/zoom-virtual-board-meeting.jpg');
                background-size: cover;
                background-attachment: fixed;
            }
        </style>
    </head>

    <body>
        <div id="tittle">NFSS</div>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <ul>
                        <li> <a href="/">Home</a></li>
                        <li> <a href="/about">About</a></li>
                        <li> <a href="/faqs">FAQs</a></li>
                        <li> <a href="courses"> Courses</a></li>
                        <li> <a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </body>
</html>

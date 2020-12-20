<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Employee Training </title>
        <meta name="keywords" content="training, employee, NFSS reword">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="js/script.js">
        </script>
        <style type="text/css">
            body {
                background-image: url('https://www.getfoundquick.com/wp-content/uploads/2018/03/shutterstock_374648065.jpg');
                background-size: cover;
                background-attachment: fixed;
            }

            .trainee-profile-nav {
                height: 100%;
                width: 200px;
                position: fixed;
                font-size: 27px;
                font-family: 'Times New Roman';
                font-style: italic;
                left: 0;
                background-color: rgba(238, 238, 238, 0.479);
            }

            .trainee-profile-nav a {
                background-color: rgba(238, 238, 238, 0);
                color: black;
                display: block;
                padding: 12px;
                text-decoration: none;
            }

            .trainee-profile-nav a:hover {
                background-color: #ccc;
            }

            .trainee-profile-nav a.shaih {
                background-color: rgb(15, 83, 85);
                color: white;
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

        <br><br><br><br><h1></h1>

        <div class="trainee-profile-nav">
            <a href="/profile" class="{{ url()->current()==url('/profile')?'shaih':''">Profile</a>
            <a href="/user_courses" class="{{ url()->current()==url('/user_courses')?'shaih':''">Courses</a>
            <a href="/attendance" class="{{ url()->current()==url('/attendance')?'shaih':''">Attendance</a>
            <a href="/assignment" class="{{ url()->current()==url('/assignment')?'shaih':''">Assignment</a>
            <a href="/settings" class="{{ url()->current()==url('/settings')?'shaih':''">Settings</a>
        </div>
        @yield('content')
    </body>
</html>

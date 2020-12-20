@extends('home_pages.app')
@section('content')
    <div style="text-align: center; table-layout: left;" class="contact ">
        <form method="POST" id="tmContactForm" class="tm-bg-white-transparent">@csrf
            <fieldset>
                <legend>
                    Contact Us
                </legend>
                <br>
                <br>
                <div class="form-groupp">
                    <input type="text" id="contact_name" name="name" class="form-c rounded-0 border-top-0 border-right-0 border-left-0" placeholder=" Full Name " required/>
                </div>
                <div class="form-groupp">
                    <input type="text" rows="9" s="20" id="phone" name="phone" class="form-c rounded-0 border-top-0 border-right-0 border-left-0" placeholder=" Phone Number " required/>
                </div>
                <div class="form-groupp">
                    <input type="text" id="contact_sub" name="subject" class="form-c rounded-0 border-top-0 border-right-0 border-left-0" placeholder=" Subject " required/>
                </div>
                <div class="form-groupp">
                    <input type="email" id="contact_email" name="email" class="form-c rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Email" required/>
                </div>
                <div class="form-groupp">
                    <textarea rows="5" id="contact_message" name="message" class="form-c rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Message" required></textarea>
                </div>
                <br>
                <br>
                <div class=" text-center">
                    <button type="submit" class="tm-btn-submit rounded-0 text-white">
                            Send Message Now
                    </button>
                </div>
            </fieldset>
        </form>
    </div>
    <footer>
        <div id="contact " class="footer ">
            <div class="container ">
                <div class="row pdn-top-30 ">
                    <div class="col-md-12 ">
                        <div class="footer-box ">
                            <div class="headinga ">
                                <h3>Address</h3>
                                <address>NFSS team .Alahsa Saudi Arabai <br>(+966 5400000001) </address>
                            </div>
                            <ul class="location_icon ">
                                <li>
                                    <a href="https://www.facebook.com "><img src="{{ asset('icon/facebook-3-24.ico') }}"></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com "><img src="{{ asset('icon/twitter-24.ico') }} "></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com "><img src="{{ asset('icon/linkedin-24.ico') }} "></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com "><img src="{{ asset('icon/instagram-24.ico') }} "></a>
                                </li>
                                <li>
                                    <a href="https://www.whatsapp.com "><img src="{{ asset('icon/whatsapp-24.ico') }} "></a>
                                </li>
                                <li>
                                    <a href="mailto:NFSSbusiness@gmail.com "><img src="{{ asset('icon/mail-24.ico') }} "></a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div style="table-layout: center; " class="copyright ">
                <div class="container ">
                    <p>Copyright &copy; 2020 All Rights Reserved Design By <a href="homePage.html">NFSS team</a></p>
                </div>
            </div>
        </div>
    </footer>
@endsection

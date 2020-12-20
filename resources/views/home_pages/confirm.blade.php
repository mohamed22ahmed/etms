@extends('home_pages.app')
@section('content')
    <div class="Sign">
        <div class="login">
            <form class="form-login" method="post">
                @csrf
                <fieldset>
                    <legend>
                        Reset Password Code
                    </legend>
                    @if(session()->has('error'))
                        <h3 style="color:red">{{ session('error') }}</h3>
                    @endif
                    <div class="form-group">
                        <div class="input-icon">
                            <i class="fa fa-user-o"> </i>
                            <input style="font-size: 40%px; color: rgba(0, 0, 0, 0.473);" type="text" id="id" name="code" placeholder="Enter Code " required>
                        </div>
                    </div>

                    <br>
                    <br>
                    <div class=" submit-area ">
                        <input type="submit" name="submit" value="Code" class="tm-submit-area" />
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection

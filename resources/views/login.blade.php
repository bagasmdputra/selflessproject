@extends('layouts.app')

@section('title', $title)



@section('content')
@include('components.banner',['pagename' => $pagename, 'imgurl' => $imgurl, 'page' => $title])
 <!-- Login Section -->
 <section id="Pricing" class="ptb ptb-sm-80">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2">
                <div class="tabs b-lrb-none">

                    <ul>
                        <li><a href="#tabs-1">Login</a></li>
                        <li><a href="#tabs-2">Register</a></li>
                    </ul>
                    <div class="ui-tab-content">
                        <div id="tabs-1" class="plr-0">
                            <h4>Customer Login</h4>
                            <form>
                                <div class="form-field-wrapper">
                                    <label for="login-email">Email address</label>
                                    <input type="email" required="" placeholder="Enter your Email" name="login-email" id="login-email" class="input-sm form-full" aria-required="true">
                                </div>
                                <div class="form-field-wrapper">
                                    <label for="login-pass">Password</label>
                                    <input type="password" required="" placeholder="Enter your Password" name="login-pass" id="login-pass" class="input-sm form-full" aria-required="true">
                                </div>
                                <button name="submit" id="Button1" type="submit" class="btn btn-md btn-black">Sign In</button>
                                <a class="float-right">Forgot password?</a>
                            </form>
                        </div>
                        <div id="tabs-2" class="plr-0">
                            <h4>Create Account</h4>
                            <form>
                                <div class="form-field-wrapper">
                                    <label for="login-email">Email address</label>
                                    <input type="text" required="" placeholder="Enter your Name" name="signup-name" id="signup-name" class="input-sm form-full" aria-required="true">
                                </div>
                                <div class="form-field-wrapper">
                                    <label for="signup-email">Email address</label>
                                    <input type="email" required="" placeholder="Enter your Email" name="signup-email" id="signup-email" class="input-sm form-full" aria-required="true">
                                </div>
                                <div class="form-field-wrapper">
                                    <label for="login-email">Choose Username</label>
                                    <input type="text" required="" placeholder="Enter your Username" name="signup-username" id="signup-username" class="input-sm form-full" aria-required="true">
                                </div>
                                <div class="form-field-wrapper">
                                    <label for="login-email">Phone</label>
                                    <input type="text" required="" placeholder="Enter your phone no." name="signup-phone" id="signup-phone" class="input-sm form-full" aria-required="true">
                                </div>
                                <div class="form-field-wrapper">
                                    <label for="signup-pass">Choose Password</label>
                                    <input type="password" required="" placeholder="Enter Password" name="signup-pass" id="signup-pass" class="input-sm form-full" aria-required="true">
                                </div>
                                <div class="form-field-wrapper">
                                    <label for="signup-pass">Re-enter Password</label>
                                    <input type="password" required="" placeholder="Enter Re-enter Password" name="signup-re-pass" id="signup-re-pass" class="input-sm form-full" aria-required="true">
                                </div>
                                <button name="submit" id="form-submit" type="submit" class="btn btn-md btn-black">Signup Now</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Login Section -->

@endsection
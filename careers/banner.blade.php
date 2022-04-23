<section class="home_sec_banner">
<video id="myVideo" autoplay="true" loop="true" controls="false" muted="" playsinline preload="metadata" data-wf-ignore="true" data-object-fit="cover" autobuffer>
    <!-- <source src="{{asset('alltalent_v1/images/web-2.mp4')}}" type="video/mp4" data-wf-ignore="true"></source>
    <source src="{{asset('alltalent_v1/images/web-3.webm')}}" type="video/webm"/>
    <source src="{{asset('alltalent_v1/images/web-1.ogg')}}" type="video/ogg"/> -->
    <source src="{{asset('alltalent_v1/images/new-updated-new.mp4')}}" type="video/mp4" data-wf-ignore="true"></source>
</video>

<!-- <video id="myVideo" autoplay="true" loop="true" controls="false" muted="" preload="none">
    <source src="{{asset('alltalent_v1/images/hm-video1.mp4')}}" type="video/mp4"></source>
</video> -->
    <!-- <video id="myVideo" autoplay loop muted>
    <source src="{{asset('alltalent_v1/images/hm-video.mp4')}}" type="video/mp4">
    <source src="{{asset('alltalent_v1/images/hm-video.mp4')}}" type="video/webm"/>
    <source src="{{asset('alltalent_v1/images/hm-video.mp4')}}" type="video/ogg"/>    
    </video> -->
    <div class="home_sec_banner_cont_new">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="home_sec_banner_cont_new_inner_logo">
                        <div class="hm_sec_logo_sec">
                            <a href="#">
                                <img src="{{asset('alltalent_v1/images/logo.png')}}" alt="" title="">
                            </a>
                        </div>
                        <div class="home_sec_banner_cont_right">
                            @if (!empty(Auth::user()->role_id))
                                <ul>
                                    <li><a href="{{route('frontend.logout')}}" class="sign_btn_new">Logout</a></li>
                                    <li><a href="javascript:void(0);" id="showmenu3" onclick="showMenu('menu3')" class="right_arrow_img new_remove"><img src="{{asset('alltalent_v1/images/right-arrow.png')}}"></a></li>
                                </ul>
                            @else
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);" id="showmenu1" onclick="showMenu('menu1','nav-home-tab')" class="login_btn_new new_remove">Log In</a>
                                    </li>
                                    <li><a href="javascript:void(0);" id="showmenu2" onclick="showMenu('menu1','nav-profile-tab')" class="sign_btn_new new_remove">Sign Up</a></li>
                                    <li><a href="javascript:void(0);" id="showmenu3" onclick="showMenu('menu3')" class="right_arrow_img new_remove"><img src="{{asset('alltalent_v1/images/right-arrow.png')}}"></a></li>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home_sec_banner_cont_new_main_bold">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="hm_banner_main_cont_sec">
                        <h1>Got Talent?<br> Get Discovered!</h1>
                        <div class="hm_banner_main_cont_sec_btn">
                            <a href="{{route('job.list')}}" class="simple_btn_black">Explore New Jobs</a>
                            <a href="{{route('job.list')}}" class="simple_btn">Explore New Jobs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home_sec_banner_cont_new_right">
        <div class="">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="home_sec_banner_cont_new_right_inner">
                        <a href="javascript:void(0);" class="new_remove" id="showmenu4" onclick="showMenu('menu4')">
                            <h3>ABOUT COMPANY</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu1 menu_hide" style="display: none;">
        <div class="login_sign_new_menu_sec">
            <div class="login_sign_new_menu_sec_single">
                <div class="login_sign_new_menu_sec_single_top">
                    <a href="javascript:void(0);" onclick="hideMenu('menu1');">
                        <i class="far fa-times"></i>
                    </a>
                    <div class="login_sign_new_menu_sec_single_top_tab">
                        <nav>
                            <div class="nav nav_tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Login</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Sign Up</a>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="tab-content tab_cont_sec_new" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <!-- <form method="POST" action="{{ route('login') }}"> -->
                        <form  autocomplete="off" action="#" class="register-form" id="login-form_new" data-parsley-validate>
                            @csrf
                            <div class="tab_inner_cont_des">
                                <h3>Welcome to All Talent!</h3>
                                <h5>Login to your account</h5>
                                <div class="tab_inner_cont_des_input new_ipad_hm">
                                    <div class="tab_inner_cont_des_input_single">
                                        <i class="fas fa-envelope"></i>
                                        <input type="text" name="username" id="your_name" placeholder="Email or Mobile No." value="" required="">
                                    </div>
                                    <hr class="spacer20px">
                                    <div class="tab_inner_cont_des_input_single">
                                        <i class="fas fa-lock-alt"></i>
                                        <input id="password" type="password" name="password" placeholder="Password" required="">
                                    </div>
                                </div>
                                <span class="error-msg-ajax"></span>
                                <hr class="spacer20px">
                                <div class="tab_inner_cont_des_input_check">
                                    <div class="new_check_box_sec">
                                        <label for="remember-me" class="container label-agree-term">Remember Me
                                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <a href="javascript:void(0)" onclick="openOtpModal('menu1','forgot-password-popup')" class="frgt_pass">Forgot your password?</a>
                                </div>
                                <p class="terms_cond_sec_new">By signing in, you agree to All Talent <a href="#"> Terms and Conditions & Privacy Policy.</a></p>
                                <h6 class="new_or_sec">OR</h6>
                                <hr class="spacer20px">
                                <a href="javascript:void(0)" class="login_button" onclick="openOtpModal('menu1','login-with-otp-popup')"><img src="{{asset('alltalent_v1/images/login_btn.svg')}}"> Login using OTP</a>
                                <!-- <button type="submit" class="sign_btn_linear">SIGN IN</button> -->
                                <input type="submit" name="signin" id="signin" class="sign_btn_linear login_btn" value="SIGN IN" >
                                <hr class="spacer10px">
                                <p class="sign_up_here_btn">Don't have an All Talent account ? <a href="javascript:void(0);" onclick="showMenu('menu1','nav-profile-tab')">Signup here</a></p>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="tab_inner_cont_des">
                            <h4>Create a Free Profile to apply for Talent Jobs</h4>
                            <form id="registration-form">
                                @csrf
                                <div class="tab_inner_cont_des_input new_ipad_hm">
                                    <!-- <div class="tab_inner_cont_des_input_single">
                                        <i class="fas fa-user-circle"></i>
                                        <input type="text" name="name" placeholder="Name" required="required">
                                    </div> -->
                                    <div class="signup_grid_2">
                                        <div class="tab_inner_cont_des_input_single">
                                            <i class="fas fa-user-circle"></i>
                                            <input type="text" name="first_name" placeholder="First Name">
                                        </div>
                                        <div class="tab_inner_cont_des_input_single">
                                            <i class="fas fa-user-circle"></i>
                                            <input type="text" name="last_name" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <hr class="spacer20px">
                                    <div class="tab_inner_cont_des_input_single">
                                        <i class="fas fa-envelope"></i>
                                        <input type="text" name="email" required="required" id="email_address" placeholder="Email ID">
                                    </div>
                                    <hr class="spacer20px">
                                    <div class="tab_inner_cont_des_input_single_grid">
                                        <div class="tab_inner_cont_des_input_single m_bg">
                                            <input type="tel" class="country_cont" placeholder="9865422312" name="contact_no" required="required" value="{{helper::getCountryCode()}}">
                                            <input type="hidden" id="contact_number_hidden" name="contact_number_hidden" value="">
                                            <button type="button" class="verify_btn_new get_otp" onclick="return getOtp()">Verify</button>
                                        </div>
                                    </div>
                                    <hr class="spacer20px">
                                    <div class="tab_inner_cont_des_input_single_grid_resend">
                                        <div class="tab_inner_cont_des_input_single_otp_sec">
                                            <div class="otp_single_sec">
                                                <input type="text" name="user_otp[]" class="otp-input-new" maxlength="1" required="required" placeholder="*">
                                            </div>
                                            <div class="otp_single_sec">
                                                <input type="text" name="user_otp[]" class="otp-input-new" maxlength="1" required="required" placeholder="*">
                                            </div>
                                            <div class="otp_single_sec">
                                                <input type="text" name="user_otp[]" class="otp-input-new" maxlength="1" required="required" placeholder="*">
                                            </div>
                                            <div class="otp_single_sec">
                                                <input type="text" name="user_otp[]" class="otp-input-new" maxlength="1" required="required" placeholder="*">
                                            </div>
                                            <div class="otp_single_sec">
                                                <input type="text" name="user_otp[]" class="otp-input-new" maxlength="1" required="required" placeholder="*">
                                            </div>
                                            <div class="otp_single_sec">
                                                <input type="text" name="user_otp[]" class="otp-input-new" maxlength="1" required="required" placeholder="*">
                                            </div>
                                        </div>
                                        <input type="button" name="" value="Resend OTP" onclick="return getOtp()" class="resend_otp_new">
                                    </div>
                                    <hr class="spacer20px">
                                    <div class="tab_inner_cont_des_input_single">
                                        <i class="fas fa-lock-alt"></i>
                                        <input type="password" maxlength="50" required="required" id="register-password" name="password" placeholder="Password">
                                    </div>
                                    <span class="error-msg-ajax" id="validation-errors-signup"></span>
                                </div>
                                <button class="sign_btn_linear" type="submit" id="register_btn">REGISTER NOW</button>
                            </form>
                            <hr class="spacer10px">
                            <p class="sign_up_here_btn">Already have an account? <a onclick="showMenu('menu1','nav-home-tab')">Login here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu3 menu_hide" style="display: none;">
        <div class="login_signup_menu">
            <div class="login_signup_menu_close">
                <a href="javascript:void(0);" onclick="hideMenu('menu3');">
                    <i class="far fa-times"></i>
                </a>
            </div>
            <ul>
                @if (!empty(Auth::user()->role_id) && Auth::user()->role_id == 5)
                    <li><a href="{{route('talent.profile',['slug'=>auth()->user()->slug])}}"><span><img src="{{asset('alltalent_v1/images/icn-user.png')}}">Profile</span><i class="fas fa-chevron-right"></i></a></li>
                    <li><a href="{{route('talent.settings')}}"><span><img src="{{asset('alltalent_v1/images/icn-user-settings.png')}}">Settings</span><i class="fas fa-chevron-right"></i></a></li>
                @elseif (!empty(Auth::user()->role_id) && Auth::user()->role_id == 7)
                    <li><a href="{{route('client.dashboard')}}"><span><img src="{{asset('alltalent_v1/images/icn-dashbord.png')}}">Dashboard</span><i class="fas fa-chevron-right"></i></a></li>
                    <li><a href="{{route('client.profile.settings')}}"><span><img src="{{asset('alltalent_v1/images/icn-user-settings.png')}}">Profile Settings</span><i class="fas fa-chevron-right"></i></a></li>
                @endif
                <!-- <li><a href="#"><span><img src="{{asset('alltalent_v1/images/icn-new-1.png')}}">Log In/Sign Up</span><i class="fas fa-chevron-right"></i></a></li> -->
                <li><a href="{{route('about-us')}}"><span><img src="{{asset('alltalent_v1/images/icn-new-3.png')}}">About Us</span><i class="fas fa-chevron-right"></i></a></li>
                <li><a href="{{route('job.list')}}"><span><img src="{{asset('alltalent_v1/images/icn-new-5.png')}}">Jobs</span><i class="fas fa-chevron-right"></i></a></li>
                <li><a href="{{route('success.story')}}"><span><img src="{{asset('alltalent_v1/images/icn-new-4.png')}}">Success</span><i class="fas fa-chevron-right"></i></a></li>
                <li><a href="{{route('frontend.contactus')}}"><span><img src="{{asset('alltalent_v1/images/icn-new-2.png')}}">Contact</span><i class="fas fa-chevron-right"></i></a></li>
                <!-- <li><a href="#"><span><img src="{{asset('alltalent_v1/images/icn-new-3.png')}}">Services</span><i class="fas fa-chevron-right"></i></a></li>
                <li><a href="#"><span><img src="{{asset('alltalent_v1/images/icn-new-2.png')}}">Blogs</span><i class="fas fa-chevron-right"></i></a></li> -->
            </ul>
            <div class="india_location">
                <p>India, Mumbai</p>
                <img src="{{asset('alltalent_v1/images/inr.svg')}}">
            </div>
        </div>
    </div>
    <div class="menu4 menu_hide" style="display: none;">
        <div class="about_company_sec">
            <button type="button" class="close_btn" onclick="hideMenu('menu4');">CLOSE<i class="far fa-times"></i></button>
            <ul class="compny_list">
                <li><a href="{{route('about-us')}}">About Us</a></li>
                <li><a href="{{route('frontend.contactus')}}">Contact Us</a></li>
                <!-- <li><a href="#">Career</a></li> -->
                <li><a href="{{route('privacy.policy')}}">Privacy Policy</a></li>
                <li><a href="{{route('privacy.termofuse')}}">Terms & Conditions</a></li>
                
            </ul>
            <hr class="spacer30px">
            <ul class="about_comp_social">
                <li><a href="https://www.instagram.com/alltalentagency/"><img src="{{asset('alltalent_v1/images/insta-new.png')}}"></a></li>
                <li><a href="https://www.facebook.com/alltalentagency"><img src="{{asset('alltalent_v1/images/fb-new.png')}}"></a></li>
            </ul>
        </div>
    </div>
    <div class="login-with-otp-popup menu_hide" style="display: none;">
        <div class="login_sign_new_menu_sec">
            <div class="login_sign_new_menu_sec_single">
                <div class="login_sign_new_menu_sec_single_top">
                    <a href="javascript:void(0);" onclick="hideMenu('login-with-otp-popup');">
                        <i class="far fa-times"></i>
                    </a>
                    <div class="login_sign_new_menu_sec_single_top_tab">
                        
                    </div>
                </div>
                <hr class="spacer10px">
                <div class="tab_inner_cont_des tab_cont_sec_new">
                    <h3>Log In with OTP</h3>
                    <form id="send_otp_form">
                        @csrf
                        <div class="tab_inner_cont_des_input">
                            <div class="tab_inner_cont_des_input_single">
                                <div class="custom_new_select">
                                    <select id="choose-login-select">
                                        <option value="mobile">Mobile No</option>
                                        <option value="email">Email</option>
                                        <option value="mobile">Mobile No</option>
                                    </select>
                                </div>
                                <input type="hidden" id="choose-login" name="medium" value="mobile">
                            </div>
                            <hr class="spacer20px">
                            <div class="tab_inner_cont_des_input_single" id="login-with-mobile">
                                <!-- <input type="tel" id="mobile_number1" class="" name="mobile_number1" value="" placeholder="Enter Mobile Number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10"> -->
                                <input type="tel" name="contact_no" value="{{ helper::getCountryCode() }}" class="country_cont"
                                id="" placeholder="Enter Mobile No.">
                                <button type="button" class="verify_btn_new get_otp" id="send_otp" onclick="return sendOtp()">Get OTP</button>
                            </div>
                            <div class="tab_inner_cont_des_input_single" id="login-with-email">
                                <i class="fas fa-envelope"></i>
                                <input type="text" name="email" id="your_name" placeholder="Enter Email" value="{{ old('username') }}" required />
                                <button type="button" class="verify_btn_new get_otp" id="send_otp" onclick="return sendOtp()">Get OTP</button>
                            </div>
                            <hr class="spacer20px">
                            <div class="tab_inner_cont_des_input_single">
                                <img src="{{asset('alltalent_v1/images/otp-btn-img.svg')}}">
                                <input type="text" name="user_otp_login" placeholder="OTP">
                            </div>
                        </div>
                    </form>
                    <span id="timer_login"></span>
                    <a href="javascript:void(0)" class="resend_otp" onclick="return sendOtp()" style="display:none">Resend OTP</a>
                    <input type="button" name="send_otp" id="login_with_otp_btn" class="sign_btn_linear" value="SIGN IN"  onclick="return LoginWithOtp()" />
                    <h6 class="new_or_sec">OR</h6>
                    <hr class="spacer30px">
                    <a href="#" class="login_button"><img src="{{asset('alltalent_v1/images/login_btn.svg')}}"> Login with Password</a>
                    <hr class="spacer30px">
                    <p class="sign_up_here_btn">Don't have an All Talent account ? <a href="javascript:void(0);" onclick="showMenu('menu1','nav-profile-tab')">Signup here</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="forgot-password-popup menu_hide" style="display: none;">
        <div class="login_sign_new_menu_sec">
            <div class="login_sign_new_menu_sec_single">
                <div class="login_sign_new_menu_sec_single_top">
                    <a href="javascript:void(0);" onclick="hideMenu('login-with-otp-popup');">
                        <i class="far fa-times"></i>
                    </a>
                    <div class="login_sign_new_menu_sec_single_top_tab"></div>
                </div>
                <hr class="spacer10px">
                <div class="tab_inner_cont_des tab_cont_sec_new">
                    <h3>Reset Password</h3>
                    <form id="forgot-password-form" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="tab_inner_cont_des_input">
                            <div class="tab_inner_cont_des_input_single">
                                <i class="fas fa-envelope"></i>
                                <input type="text" id="forgor_password_email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email">
                            </div>
                        </div>
                        <span class="error-msg-ajax"></span>
                        <input type="button" name="send_otp" onclick="forgotPassword()" id="login_with_otp_btn" class="sign_btn_linear" value="Send Reset Link"/>
                    </form>
                    <h6 class="new_or_sec">OR</h6>
                    <hr class="spacer30px">
                    <a href="#" class="login_button"><img src="{{asset('alltalent_v1/images/login_btn.svg')}}"> Login with Password</a>
                    <hr class="spacer30px">
                    <p class="sign_up_here_btn">Don't have an All Talent account ? <a href="javascript:void(0);" onclick="showMenu('menu1','nav-profile-tab')">Signup here</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="mob_head">  
        <div class="gee_mobile">
          <button class="gee_hamburger"><i class="fas fa-align-right"></i></button>
          <button class="gee_cross">&#735;</button>
        </div>
    </div>
    <div class="gee_menu">
        <ul>
            <li><a href="javascript:void(0);" id="showmenu5" onclick="showMenu('menu1')">Login/Sign Up<i class="fas fa-sign-in"></i></a></li>
            <li><a href="{{url('/')}}">Home<i class="fas fa-home"></i></a></li>
            <li><a href="{{route('about-us')}}">About us<i class="fas fa-address-card"></i></a></li>
            <li><a href="{{route('frontend.contactus')}}">Contact Us<i class="fas fa-address-book"></i></a></li>
            <!-- <li><a href="#">Career<i class="fas fa-scarecrow"></i></a></li> -->
            <li><a href="{{route('privacy.policy')}}">Privacy Policy<i class="fas fa-key"></i></a></li>
            <li><a href="{{route('privacy.termofuse')}}">Terms & Conditions<i class="fas fa-code-commit"></i></a></li>
            <!-- <li><a href="#">Return Policy<i class="fas fa-user-shield"></i></a></li> -->
            <li><a href="{{route('job.list')}}">jobs<i class="fas fa-user-md"></i></a></li>
            <li><a href="{{route('success.story')}}">Success<i class="fas fa-badge-check"></i></a></li>
            <!-- <li><a href="#">Services<i class="fas fa-concierge-bell"></i></a></li>
            <li><a href="#">Blog<i class="fas fa-blog"></i></a></li> -->
        </ul>
    </div>
</section>
<script src="{{asset('js/frontend/auth/login.js')}}"></script>
<script src="{{asset('js/login-with-otp.js')}}"></script>
<script src="{{asset('js/frontend/auth/signup.js')}}"></script>

<script>
    function forgotPassword(){
        const email = $('#forgor_password_email').val();
        if(email!=''){
            var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
            if (pattern.test(email)) {
                $.ajax({
                    url : '{{route("check-email-exist")}}',
                    type : 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        email : email
                    },
                    success: function(data) {
                        if(data==1){
                            $("#forgot-password-form").submit();
                        }else{
                            $('.error-msg-ajax').html('Sorry this email id is not registred with us.');
                            $('#forgor_password_email').focus();
                        }
                    }
                });
            }else{
                $('.error-msg-ajax').html('Please enter a valid email');
                $('#forgor_password_email').focus();
            }
        }else{
            $('.error-msg-ajax').html('Email Id is required.');
            $('#forgor_password_email').focus();
        }
    }

    
</script>

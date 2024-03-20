@extends('auth/layout.layout.app')

@section('title', 'Login')

@section('main_content')

<body>
    <div id="container" class="container">
        <div class="row">

            <div class="col align-items-center flex-col sign-up">
                <div class="form-wrapper align-items-center">
                </div>
            </div>

            <div class="col align-items-center flex-col sign-in">
                <div class="form-wrapper align-items-center">
                    <div class="form sign-in">

                            <div class="input-group">
                                <i class='bx bxs-user'></i>
                                <input type="email" name="email" placeholder="Email">
                            </div>
                            <div class="input-group">
                                <i class='bx bxs-lock-alt'></i>
                                <input type="password" name="password" placeholder="Password">
                            </div>
                            <button>
                                Sign in
                            </button>
                            <p>
                                <b>
                                    Forgot password?
                                </b>
                                <a href="#!"> Click here</a>
                            </p>
                            <p><a href="coordinatorLogin">Marketing Manager Login</a></p>
                            <p><a href="marketingManagerLogin">Marketing Coordinator Login</a></p>
                            <p><a href="studentLogin">Student Login</a></p>
                        
                    </div>

                </div>
            </div>

        </div>
        <div class="row content-row">
            <div class="col align-items-center flex-col">
                <div class="text sign-in">
                    <h2>
                        Marketing Manager 
                        <p>Login</p>
                    </h2>
                    <p>
                        Visit the school's website to come up with unique and 
                        creative ideas to create a better future!
                    </p>
                </div>
            </div>
            <div class="col align-items-center flex-col">

            </div>
        </div>
    </div>
</body>

@endsection
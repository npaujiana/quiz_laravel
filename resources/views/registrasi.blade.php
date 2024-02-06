<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>login</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous">

            <!-- my css -->
            <link rel="stylesheet" href="../assets/style/style.css">
    </head>
    <body>
        <div
            class="container-fluid vh-100 vw-100 d-flex justify-content-center align-items-center">
            <div class="container d-flex justify-content-center align-items-center" style="width: 85%; height:90%">
                <div
                    class="side-right bg-light z-1"
                    style="border-radius: 5% 5% 5% 5%; width: 50%;">
                    <div
                        class="login-box w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                        <h1 id="infoPage">Form Registrasi</h1>
                        <div class="button-container">

                          <a type="button" class="buttonMe"  href="{{route('redirectLogin')}}">Login</a><a type="button" class="buttonMe aktif"  href="#">Register</a>
                        </div>


                        <!-- Start Register Form -->

                        <form action="{{route('redirectLogin')}}" class="mt-3" id="registerForm">
                            <div class="mb-3">
                                <label for="username"
                                    class="form-label">Username: </label>
                                <input type="text" class="form-control"
                                    id="username" name="username"
                                    aria-describedby="usernameHelp">
                                <div id="usernameHelp" class="form-text">We'll
                                    never
                                    share your username with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="email"
                                    class="form-label">email: </label>
                                <input type="email" class="form-control"
                                    id="email" name="email"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="password"
                                    class="form-label">password</label>
                                <input type="password" class="form-control"
                                    id="Password" name="password">
                            </div>

                            <div class="mb-3 text-center">
                                <button type="submit"
                                    class="buttonSign"
                                    id="buttonRegister" value="register">Register
                                    <div class="arrow-wrapper">
                                        <div class="arrow"></div>
                                    </div>
                                </button>

                            </div>
                        </form>

                        <!-- End Register Form -->

                    </div>
                </div>
            </div>
        </div>

        <script src="../assets/js/loginProcess.js"></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    </body>
</html>

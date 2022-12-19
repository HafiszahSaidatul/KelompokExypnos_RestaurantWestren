<!doctype html>
<html lang="en">

<head>
    <title>Login & Sign up Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">

</head>

<body class="login-bg">


    <div class="container  p-4">
        <div class="row main mt-5">

            <!-- sign up form -->
            <div class="col-md-6 p-5 " id="signUp">
                <h1 class="display-4 text-center ">Sign up</h1>
                <form class="d-flex justify-content-center mt-4">
                    <div class="w-75 ">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email">
                        </div>
                        <div class="form-group my-4">
                            <label for="">Password</label>
                            <input type="password">
                        </div>
                        <button type="submit">Register</button>
                        <div class="d-flex justify-content-between mt-5">
                            <a class="links" href="#" id="loginLink">Already have an Account ?</a>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Login Form  -->

            <div class="col-md-6 p-5 " id="login">
                <button class="col-md-3 p2"><a href="/"></a>Back To Home</button>
                <h1 class="display-4 text-center ">Login</h1>
                <form class="d-flex justify-content-center mt-4">
                    <div class="w-75 ">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email">
                        </div>
                        <div class="form-group my-4">
                            <label for="">Password</label>
                            <input type="password">
                        </div>
                        <button type="submit">Login</button>
                        <div class="d-flex justify-content-between mt-5">
                            <a class="links" href="#" id="registerLink">Create an Account ?</a>
                            <a class="links" href="#">forget Password ?</a>
                        </div>
                    </div>
                </form>
            </div>
            <div id="overlay">

            </div>
        </div>

    </div>



    <script src="/js/script.js"></script>

</body>

</html>

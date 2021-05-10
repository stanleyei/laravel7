<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digipack-login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
        body {
            margin: 0;
            padding: 0;
            transition: 1s ease-in-out;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.2rem white;
        }

        #signinbtn:hover{
            background-color: #4F46E5;
        }

        @media screen and (max-width:992px) {
            #moveform {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
        }
    </style>
</head>

<body>
    <section class="d-flex overflow-hidden">
        <div style="background-color: #525252; width: 50%; height: 100vh;"
            class="d-flex justify-content-center flex-column position-relative col-12 col-lg-6 position-relative">
            <div class="px-5 mx-auto d-none d-lg-block">
                <h1 class="display-4 text-white">Keep it special</h1>
                <p class="h2 text-white">Capture your personal memory in unique way, anywhere.</p>
            </div>
            <div id="sns-link" class="mx-auto position-absolute  pb-lg-3 mb-5 mb-lg-0" style="bottom: 0; left: 50%; transform: translateX(-50%);">
                <span class="pr-3"><i class="fab fa-twitter text-white" style="font-size: 24px;"></i></span>
                <span class="pr-3"><i class="fab fa-facebook-f text-white" style="font-size: 24px;"></i></span>
                <span class="pr-3"><i class="fab fa-instagram text-white" style="font-size: 24px;"></i></span>
            </div>
        </div>
        <div class="d-flex" style="background-color: #162446; width: 50%; height: 100vh;">
            <div class="d-flex justify-content-center align-items-center flex-column col" id="moveform">
                <div class="pb-3">
                    <img src="./image/svgexport-4-white.svg" alt="">
                </div>
                <div class="d-flex py-3">
                    <div class="rounded-circle border border-white mr-2 text-center"
                        style="width: 40px; height: 40px; line-height: 40px;"><i
                            class="fab fa-facebook-f text-white"></i>
                    </div>
                    <div class="rounded-circle border border-white mr-2 text-center"
                        style="width: 40px; height: 40px; line-height: 40px;"><i
                            class="fab fa-google-plus-g text-white"></i></div>
                    <div class="rounded-circle border border-white text-center"
                        style="width: 40px; height: 40px;line-height: 40px;"><i
                            class="fab fa-linkedin-in text-white"></i></div>
                </div>
                <form class="col-12 col-md-10 col-lg-7" style="flex:0">
                    <div class="form-group m-0">
                        <div class="text-white text-center">
                            <label for="exampleInputEmail1">or use email your account</label>
                        </div>
                        <input type="email" class="form-control border-0 p-4" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Email"
                            style="background: black; height: 60px; font-size: 20px;">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control border-0 p-4" id="exampleInputPassword1"
                            placeholder="Password" style="background: black; height: 60px; font-size: 20px;">
                    </div>
                    <div class="form-group form-chec text-right"><a class="text-white" href="">Forgot your password?</a>
                    </div>
                    <button type="submit" id="siginbtn" class="btn btn-primary py-3"
                        style="width: 100%; border-color: transparent; border-radius: 30px; font-size: 18px; background: #6366F1;">SIGN
                        IN</button>
                </form>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
</body>

</html>
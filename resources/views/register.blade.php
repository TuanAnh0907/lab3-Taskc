<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @include('layout.style')

    @stack('style')
</head>

<body>
    <div class="font-roboto ">
        <div class="mx-auto w-full lg:w-1/5 lg:border border-gray px-5 my-0 lg:my-10 rounded-xl">
            <form class="login-form" method="POST">
                <ul>
                    <li>
                        <p class="text-center text-4xl my-10"><b>Register</b></p>
                    </li>
                    <li>
                        <div class="">
                            <i class="fa-regular fa-envelope absolute mt-9 ml-2"></i>
                            <input type="text" placeholder="User name" class="w-full h-10 my-6 pl-10 bg-gray-sl placeholder:" />
                        </div>
                    </li>
                    <li>
                        <div class="">
                            <i class="fa-regular fa-envelope absolute mt-9 ml-2"></i>
                            <input type="text" placeholder="Email" class="w-full h-10 my-6 pl-10 bg-gray-sl placeholder:" />
                        </div>
                    </li>
                    <li>
                        <div class="">

                            <i class="fa-solid fa-lock absolute mt-9 ml-2"></i>
                            <input type="password" placeholder="Password" class="w-full h-10 my-6 pl-10 bg-gray-sl placeholder:" />
                        </div>
                    </li>
                    <li>
                        <div class="">
                            <i class="fa-solid fa-circle-check absolute mt-9 ml-2"></i>
                            <input type="password" placeholder="Confirm Password" class="w-full h-10 my-6 pl-10 bg-gray-sl placeholder:" />
                        </div>
                    </li>
                    <li>
                        <button class="my-6 w-full h-12 text-white text-2xl bg-[#000000]"><b>Login</b></button>
                    </li>
                    <li>
                        <div class="inline-flex justify-between w-full my-10">
                            <div class="inline-flex text-blue gap-2 mx-4 px-4 py-2 border border-gray-sl ">
                                <div class="">
                                    <i class="fa-brands fa-square-facebook"></i>
                                </div>
                                <div>
                                    <p>facebook</p>
                                </div>
                            </div>
                            <div class="inline-flex text-blue gap-2 mx-4 px-4 py-2 border border-gray-sl">
                                <div class="">
                                    <i class="fa-brands fa-google"></i>
                                </div>
                                <div>
                                    <p>Google</p>
                                </div>
                            </div>
                        </div>
                    </li>

            </form>
        </div>
    </div>
</body>

</html>

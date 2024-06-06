<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Form Login Registrasi</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
        .content {
            height: 450px;
            width: 800px;
        }
        .container-form {
            height: 90%;
            width: 95%;
        }
        .img-login {
            width: 250px;
            height: 300px;
        }
        
    </style>
    
</head>
<body>
    <div class="w-full h-screen bg-gray-400 flex items-center justify-center ">
        <div class="content bg-white rounded flex justify-center items-center">
            <div class="container-form grid grid-cols-2 gap-5" >
                <div class=" rounded ">
                    @yield('content')
                </div>
                <div class="bg-blue-200 rounded-lg flex items-center justify-center">
                    <img src="{{ asset('icons/icons-login.png') }}" alt="" class="img-login">
                </div>  
            </div>
        </div>
        {{-- @if(session('error'))
                <div class="text-sm text-red-500 absolute top-10 w-52 h-20 bg-white rounded flex justify-center">{{ session('error') }}</div>
        @endif --}}
    </div>
    
</body>
</html>
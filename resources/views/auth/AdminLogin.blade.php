@extends('auth/login')

@section('content')
    <div class="w-full flex flex-col items-center ">
        <p class="text-2xl mt-2 mb-2 font-bold">Sign In Admin</p>
        
        <form action="{{ route('admin.loginSubmit') }}" method="post" 
            class="flex flex-col items-center w-full gap-5  mt-2">
            @csrf
            <div class="w-full flex flex-col gap-2">
                <p class="text-sm font-semibold ml-1">Username</p>
                <input 
                    type="text" 
                    name="username"
                    class="w-full h-10 border rounded-lg indent-3 text-sm focus:outline-blue-200" 
                    placeholder="Masukan Username"
                >

            </div>
            <div class="w-full flex flex-col gap-2">
                <p class="text-sm font-semibold ml-1">Password</p>
                <input 
                    type="text" 
                    name="password"
                    class="w-full h-10 border rounded-lg indent-3 text-sm focus:outline-blue-200" 
                    placeholder="Masukan Password"
                >
            </div>
                
            <button
                href=""
                class="mt-3 w-full h-10 bg-blue-400 rounded text-white font-bold text-lg flex items-center justify-center cursor-pointer hover:bg-blue-300">
                Sign In
             </button>
        </form>

            <a 
                href="{{ route('user.login') }}"
                class="mt-10 w-full h-10 border rounded text-black  text-sm flex items-center justify-center cursor-pointer hover:bg-blue-100">
                Sign In User?
            </a>
                
    </div>

    
@endsection
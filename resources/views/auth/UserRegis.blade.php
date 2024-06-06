@extends('auth/registrasi')

@section('content')
    <div class="w-full flex flex-col items-center ">
        <p class="text-2xl mt-1 mb-1 font-bold">Sign Up User</p>
        
        <form action="{{ route('user.regisSubmit') }}" method="POST" 
            class="flex flex-col items-center w-full gap-2  mt-1">
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
            <div class="w-full flex flex-col gap-2">
                <p class="text-sm font-semibold ml-1">Alamat</p>
                <input 
                    type="text" 
                    name="addres"
                    class="w-full h-10 border rounded-lg indent-3 text-sm focus:outline-blue-200" 
                    placeholder="Masukan Alamat"
                >
            </div>
            <div class="w-full flex flex-col gap-2">
                <p class="text-sm font-semibold ml-1">email</p>
                <input 
                    type="text" 
                    name="email"
                    class="w-full h-10 border rounded-lg indent-3 text-sm focus:outline-blue-200" 
                    placeholder="Masukan Email"
                >
            </div>
                
            <button
                href=""
                class="mt-3 w-full h-10 bg-blue-400 rounded text-white font-bold text-lg flex items-center justify-center cursor-pointer hover:bg-blue-300">
                Sign Up
             </button>
        </form>
        

                
    </div>

    
@endsection
@extends('admin/pagesAdmin')

@section('content')
<div class="content-header ">
  <div class="container-fluid ">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Master Data</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Pages</a></li>
          <li class="breadcrumb-item active">Master Data</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="content-header ">
  <div class="container-fluid flex justify-center">
    <div class="min-h-20 h-max  w-11/12 flex justify-center  ">

        <form action="{{ route('admin.MasterDataUpdateSubmit', $user->id) }}" 
            method="POST"
            class="w-96 h-max min-h-20 flex flex-col gap-4">
            @csrf
            <P class="text-lg font-bold mb-3">Update Data User</P>
            <div class="w-full flex flex-col gap-2">
                <p class="text-md">Username</p>
                <input 
                    type="text" 
                    name="username"
                    value="{{ $user->username }}"
                    class="w-full h-10 border rounded-lg indent-3 text-sm focus:outline-blue-200" 
                    placeholder="Masukan Username"
                >

            </div>
            <div class="w-full flex flex-col gap-2">
                <p class="text-md">Password</p>
                <input 
                    type="text" 
                    name="password"
                    value="{{ $user->password }}"
                    class="w-full h-10 border rounded-lg indent-3 text-sm focus:outline-blue-200" 
                    placeholder="Masukan Password"
                >
            </div>
            <div class="w-full flex flex-col gap-2">
                <p class="text-md">Alamat</p>
                <input 
                    type="text" 
                    name="addres"
                    value="{{ $user->addres }}"
                    class="w-full h-10 border rounded-lg indent-3 text-sm focus:outline-blue-200" 
                    placeholder="Masukan Alamat"
                >
            </div>
            <div class="w-full flex flex-col gap-2">
                <p class="text-md">Email</p>
                <input 
                    type="text" 
                    name="email"
                    value="{{ $user->email }}" 
                    class="w-full h-10 border rounded-lg indent-3 text-sm focus:outline-blue-200" 
                    placeholder="Masukan Email"
                >
            </div>
                
            <button
                href=""
                class="mt-3 w-full h-10 bg-blue-400 rounded text-white font-bold text-lg flex items-center justify-center cursor-pointer hover:bg-blue-300">
                Submit
            </button>
        </form>
    </div>
  </div>
</div>





@endsection
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

        <form action="{{ route('admin.MasterDataSubmit') }}" 
            method="POST"
            class="w-96 h-max min-h-20 flex flex-col gap-4">
            @csrf
            <P class="text-lg font-bold mb-3">Tambah Data User</P>
            <div class="w-full flex flex-col gap-2">
                <input 
                    type="text" 
                    name="username"
                    class="w-full h-10 border rounded-lg indent-3 text-sm focus:outline-blue-200" 
                    placeholder="Masukan Username"
                >

            </div>
            <div class="w-full flex flex-col gap-2">
                <input 
                    type="text" 
                    name="password"
                    class="w-full h-10 border rounded-lg indent-3 text-sm focus:outline-blue-200" 
                    placeholder="Masukan Password"
                >
            </div>
            <div class="w-full flex flex-col gap-2">
                <input 
                    type="text" 
                    name="addres"
                    class="w-full h-10 border rounded-lg indent-3 text-sm focus:outline-blue-200" 
                    placeholder="Masukan Alamat"
                >
            </div>
            <div class="w-full flex flex-col gap-2">
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
                Submit
            </button>
        </form>
    </div>
  </div>
</div>





@endsection
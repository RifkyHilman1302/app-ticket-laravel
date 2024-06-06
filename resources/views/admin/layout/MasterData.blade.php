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
    <div class="min-h-20 h-max  w-11/12 flex flex-col  ">
      <div class="mb-10 mt-3 flex flex-col gap-2 w-full h-max overflow-x-auto justify-start sm:justify-center lg:justify-start xl:justify-center ">
        <div class="h-10 w-full mt-2 mb-2  flex items-center justify-end">
          <a href="{{ route('admin.MasterDataTambah') }}" class="w-28  h-full bg-blue-400 hover:bg-blue-300 flex items-center justify-center rounded-md text-md font-bold text-white">
            Tambah User
          </a>
        </div>
        <table class="table-auto bg-white rounded-md ">
          <thead>
            <th class="px-8 py-3  opacity-70">No</th>
            <th class="px-8 py-3  opacity-70">Username</th>
            <th class="px-8 py-3  opacity-70">Password</th>
            <th class="px-8 py-3  opacity-70">Alamat</th>
            <th class="px-8 py-3  opacity-70">Email</th>
            <th class="px-8 py-3  opacity-70">Aksi</th>
          </thead>
          <tbody>
            @foreach ($users as $no => $data)
              <tr>
                <td class="px-8 py-3 border-t">{{ $no+1 }}</td>
                <td class="px-8 py-3 border-t">{{ $data->username }}</td>
                <td class="px-8 py-3 border-t">{{ $data->password }}</td>
                <td class="px-8 py-3 border-t">{{ $data->addres }}</td>
                <td class="px-8 py-3 border-t">{{ $data->email }}</td>
                <td class="px-8 py-3 border-t flex gap-1">
                  <a href="{{ route('admin.MasterDataUpdate', $data->id) }}" class="h-10">
                    <button class=" w-14 h-9 bg-green-500 hover:bg-green-400 rounded text-white text-sm">Update</button>
                  </a>
                  <form action="{{ route('admin.MasterDataDelete', $data->id ) }}" method="POST">
                    @csrf
                    <button class=" w-14 h-9 bg-red-500 hover:bg-red-400 rounded text-white text-sm">Hapus</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>





@endsection
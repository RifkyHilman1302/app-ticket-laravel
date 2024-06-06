@extends('admin/pagesAdmin')

@section('content')

  <!-- cards -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Concerts</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active">Concerts</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content-header ">
    <div class="container-fluid flex justify-center ">
        {{-- <div 
            style="max-width: 700px"
            class="min-h-20 h-max   w-11/12 flex flex-col items-center"
            >
            <div class="w-full h-14  flex flex-col justify-center items-end">
                <a href="{{ route('admin.ConcertsTambah') }}" class="flex items-center justify-center gap-2 bg-blue-400 hover:bg-blue-300 h-10 w-32 rounded text-white text-md" >
                    <i class="fa fa-plus font-sm" aria-hidden="true"></i>
                    Add Concerts
                </a>
            </div>
            <div class="w-11/12 h-max  mb-10 mt-3 flex flex-col gap-4">
                @foreach ($concert as $no => $data)
                <div class="flex items-center w-full h-36 bg-white rounded relative shadow-md">
                    <div class="h-full flex flex-col ml-4 mt-6  ">
                        <p class="  text-2xl text-purple-800 font-semibold">{{ $data->concerts_title }}</p>
                        <div class="flex items-center gap-2">
                            <i class="fa fa-map-marker text-sm text-purple-800" aria-hidden="true"></i>
                            <p class="text-sm text-gray-400 ">{{ $data->location }}</p>
                        </div>
                        <div class="flex items-center gap-2 mt-7">
                            <i class="fa fa-calendar-o text-sm text-purple-800" aria-hidden="true"></i>
                            <p class="text-sm text-gray-400 ">{{ $data->date }}</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa fa-clock-o text-sm text-purple-800" aria-hidden="true"></i>
                            <p class="text-sm text-gray-400 ">{{ $data->Time }}</p>
                        </div>
                        <a href="{{ route('admin.TicketTambah', $data->id) }}" class="h-8 w-20 rounded bg-purple-400 right-4 absolute bottom-3 flex items-center justify-center text-sm text-white" >Buat Tiket</a>
                        <div class="grid grid-cols-2 h-7  w-14 absolute right-4 top-3 ">
                            <a href="{{ route('admin.ConcertsUpdate', $data->id ) }}" class="flex items-center justify-center">
                                <i class="fa fa-pencil-square-o text-green-400" aria-hidden="true"></i>
                            </a>
                            <form action="{{ route('admin.ConcertsDelete', $data->id) }}" method="post" class="flex items-center justify-center cursor-pointer">
                                @csrf
                                <button type="submit" class="h-full w-full flex items-center justify-center bg-transparent border-none p-0 m-0">
                                    <i class="fa fa-trash-o text-red-500 text-md" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div> --}}
        <div class="min-h-20 h-max  w-11/12  ">
          <div class="mb-10 mt-3 flex  w-full h-14 ">
            <a href="{{ route('admin.ConcertsTambah') }}" class="flex items-center justify-center gap-2 bg-blue-400 hover:bg-blue-300 h-10 w-32 rounded text-white text-md" >
                <i class="fa fa-plus font-sm" aria-hidden="true"></i>
                Add Concerts
            </a>
          </div>
          <div class="mb-10 mt-3 flex  w-full h-max overflow-x-auto justify-start sm:justify-center lg:justify-start xl:justify-center ">
            <table class="table-auto bg-white rounded-md w-max ">
              <thead>
                <th class="px-8 py-3  opacity-70">No</th>
                <th class="px-8 py-3  opacity-70">Concert Title</th>
                <th class="px-8 py-3  opacity-70">Location</th>
                <th class="px-8 py-3  opacity-70">Date</th>
                <th class="px-8 py-3  opacity-70">Time</th>
                <th class="px-8 py-3  opacity-70">Ticket</th>
                <th class="px-8 py-3  opacity-70">Seats</th>
                <th class="px-8 py-3  opacity-70">Aksi</th>
              </thead>
              <tbody>
                @foreach ($concert as $no => $data)
                  <tr>
                    <td class="px-8 py-3 border-t">{{ $no+1 }}</td>
                    <td class="px-8 py-3 border-t">{{ $data->concerts_title }}</td>
                    <td class="px-8 py-3 border-t">{{ $data->location }}</td>
                    <td class="px-8 py-3 border-t">{{ $data->date }}</td>
                    <td class="px-8 py-3 border-t">{{ $data->Time }}</td>
                    <td class="px-8 py-3 border-t">
                      <a href="{{ route('admin.TicketTambah', $data->id) }}" class="h-9 w-20 rounded bg-blue-400  flex items-center justify-center text-sm text-white" >Buat Tiket</a>
                    </td>
                    <td class="px-8 py-3 border-t">
                      <a href="{{ route('admin.SeatsTambah', $data->id) }}" class="h-9 w-20 rounded bg-gray-400  flex items-center justify-center text-sm text-white" >Buat Seats</a>
                    </td>
                    <td class="px-8 py-3 border-t flex gap-1">
                      <a href="{{ route('admin.ConcertsUpdate', $data->id ) }}" class="h-10">
                        <button class=" w-14 h-9 bg-green-500 hover:bg-green-400 rounded text-white text-sm">Update</button>
                      </a>
                      <form action="{{ route('admin.ConcertsDelete', $data->id) }}" method="POST">
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
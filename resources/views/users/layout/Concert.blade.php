@extends('users/pagesUser')

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
        <div 
            style="max-width: 700px"
            class="min-h-20 h-max   w-11/12 flex flex-col items-center"
            >
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
                        <a href="{{ route('user.Ticket', $data->concerts_title) }}" class="h-8 w-20 rounded bg-purple-400 right-4 absolute bottom-3 flex items-center justify-center text-sm text-white" >Beli Tiket</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
  </div>
 
@endsection
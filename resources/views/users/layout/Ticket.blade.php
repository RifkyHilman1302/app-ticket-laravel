@extends('users/pagesUser')

@section('content')

  <!-- cards -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Ticket</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active">Ticket</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content-header">
    <div class="container-fluid flex flex-col gap-2 items-center justify-center">
        @foreach ($transactions as $transaction)
            <div class="h-60 min-w-96 w-max  flex rounded mb-4">
                <div class="w-20 h-full flex bg-purple-500 items-center justify-center">
                    <img src="{{ asset('images/barcode.png') }}" class="w-11/12 h-56">
                </div>
                <div class="w-96 h-full flex flex-col bg-white text-white">
                    <p class="mt-3 ml-8 text-2xl font-bold">{{ $transaction->concerts_title }}</p>
                    <p class="ml-8 text-lg font-semibold">Music Concert</p>
                    <p class="ml-8 mt-12 font-semibold text-sm">{{ $transaction->location }}</p>
                    <p class="ml-8 font-semibold text-sm">{{ $transaction->date }}</p>
                    <p class="ml-8 font-semibold text-sm">{{ $transaction->time }}</p>
                    <div class="flex items-center justify-end w-full h-10 mt-2">
                        <p class="mr-8 text-md font-semibold">{{ $transaction->seat_name }}/{{ $transaction->quantity }} ticket</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


 
@endsection
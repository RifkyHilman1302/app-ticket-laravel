@extends('admin/pagesAdmin')

@section('content')
<div class="content-header ">
  <div class="container-fluid ">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Seats</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Pages</a></li>
          <li class="breadcrumb-item active">Seats</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="content-header ">
  <div class="container-fluid flex justify-center">
    <div class="min-h-20 h-max  w-11/12 flex justify-center  ">

        <form action="{{ route('admin.SeatsUpdateSubmit', $seats->id) }}" 
            method="POST"
            class="w-96 h-max min-h-20 flex flex-col gap-4">
            @csrf
            <P class="text-lg font-bold mb-3">Update Seats</P>
            <div class="w-full flex flex-col gap-2">
                <p class="text-sm ">Id Concert</p>
                <input 
                    type="text" 
                    name="concert_id"
                    value="{{ $seats->concert_id }}"
                    class="w-full h-10 border rounded-lg indent-3 text-sm focus:outline-blue-200" 
                >

            </div>
            <div class="w-full flex flex-col gap-2">
                <p class="text-sm ">Nama Concert</p>
                <input 
                    type="text" 
                    name="concerts_title"
                    value="{{ $seats->concerts_title }}"
                    class="w-full h-10 border rounded-lg indent-3 text-sm focus:outline-blue-200" 
                >

            </div>
            <div class="w-full flex flex-col gap-2">
                <p class="text-sm ">Nama Seats</p>
                <input 
                    type="text" 
                    name="seat_name"
                    value="{{ $seats->seat_name }}"
                    class="w-full h-10 border rounded-lg indent-3 text-sm focus:outline-blue-200" 
                >
            </div>
            <div class="w-full flex flex-col gap-2">
                <p class="text-sm ">Harga Seats</p>
                <input 
                    type="text" 
                    name="price_seats"
                    value="{{ $seats->price_seats }}"
                    class="w-full h-10 border rounded-lg indent-3 text-sm focus:outline-blue-200" 
                >
            </div>
            <div class="w-full flex flex-col gap-2">
                <p class="text-sm ">Jumlah Seats</p>
                <input 
                    type="number"  
                    name="total_seats"
                    value="{{ $seats->total_seats }}"
                    class="w-full h-10 border rounded-lg indent-3 text-sm focus:outline-blue-200" 
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
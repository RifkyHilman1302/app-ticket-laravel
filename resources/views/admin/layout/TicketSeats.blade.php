@extends('admin/pagesAdmin')

@section('content')
<div class="content-header ">
  <div class="container-fluid ">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Ticket</h1>
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

        <form action="" 
            method="POST"
            class="w-96 h-max min-h-20 flex flex-col gap-4">
            @csrf
            <P class="text-lg font-bold mb-3">Add Seats Concerts</P>
            <div class="w-full flex flex-col gap-2">
                <p class="text-sm ">Id Concert</p>
                <input 
                    type="text" 
                    name="concert_id"
                    value="{{ $concert->id }}"
                    class="w-full h-10 border rounded-lg indent-3 text-sm focus:outline-blue-200" 
                >

            </div>
            <div class="w-full flex flex-col gap-2">
                <p class="text-sm ">VIP</p>
                <input 
                    type="date" 
                    name="expiration_date"
                    class="w-full h-10 border rounded-lg indent-3 text-sm focus:outline-blue-200" 
                >
            </div>
            <div class="w-full flex flex-col gap-2">
                <p class="text-sm ">Status Ticket Concert</p>
                <select name="status" class="w-full h-10 border rounded-lg indent-3 text-sm focus:outline-blue-200" required>
                    <option value="available">Available</option>
                    <option value="sold out">Sold Out</option>
                    <option value="expired">Expired</option>
                </select>
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
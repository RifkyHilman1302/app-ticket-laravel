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
  <div class="content-header ">
    <div class="container-fluid flex justify-center ">
        <div 
            style="max-width: 700px"
            class="min-h-20 h-max   w-11/12 flex flex-col items-center"
            >
            <div class="w-11/12 h-max  mb-10 mt-3 flex flex-col gap-4">
                <div class="card">
                  <form action="{{ route('user.TicketSubmit') }}" class="card-body" method="POST">
                      @csrf
                    <div class="mt-2 mb-3">
                      <input type="text" class="active:outline-none hover:outline-none text-lg" name="concerts_title" value="{{ $concert->concerts_title }}" >
                    </div>
                
                        <p class="flex items-center gap-3"><i class="fa fa-map-marker text-sm text-gray-800" aria-hidden="true"></i> {{ $concert->location }}</p>
                        <p class="flex items-center gap-3"><i class="fa fa-calendar-o text-sm text-gray-800" aria-hidden="true"></i>{{ $concert->date }}</p>
                        <p class="flex items-center gap-3"><i class="fa fa-clock-o text-sm text-gray-800" aria-hidden="true"></i> {{ $concert->Time }}</p>
                        <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                        <div class="flex flex-col gap-1 mt-2 ">
                            <p class="font-bold">Pilih Seats</p>
                            <select name="seat_name" id="seat" class="mr-3 border">
                                <option value="" disabled selected>Pilih Seats</option>
                                @if ($seats->isEmpty())
                                    <option disabled selected>Tidak ada data</option>
                                @else
                                    @foreach ($seats as $seat)
                                        <option value="{{ $seat->seat_name }}" data-price="{{ $seat->price_seats }}">
                                            {{ $seat->seat_name }} - Rp{{ number_format($seat->price_seats, 0, ',', '.') }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="flex flex-col gap-1 mt-2">
                            <p class="font-bold">Jumlah</p>
                            <input 
                                name="jumlah_ticket"
                                type="number"
                                placeholder="Masukan Jumlah Ticket"
                                class="text-sm  active:outline-none hover:outline-none border mr-3 h-8 indent-3" >
                        </div>
                        <div class="flex flex-col gap-1 mt-2">
                            <p class="font-bold">Pilih Metode Pembayaran</p>
                            <select name="payment_method" class="text-sm active:outline-none hover:outline-none border mr-3 h-8 indent-3">
                              <option value="dana">Dana</option>
                              <option value="bri">BRI</option>
                              <option value="ovo">OVO</option>
                              <option value="gopay">GoPay</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-1 mt-2">
                            <p class="font-bold">Total Harga</p>
                            <input 
                                name="total_price"
                                type="text"
                                readonly
                                class="text-sm  active:outline-none hover:outline-none border mr-3 h-8 indent-2" >
                        </div>
                        <div class="w-full h-10 mt-4 mb-2 flex items-center justify-end gap-3 ">
                            <a href="{{ route('user.concert') }}" class="w-20 h-10 bg-red-500 rounded flex text-white items-center justify-center hover:bg-red-400">Cancel</a>
                            <button type="submit" class="w-20 flex items-center justify-center text-white h-10 bg-green-500 rounded cursor-pointer hover:bg-green-400">
                                Beli Ticket
                            </button>
                        </div>
                    </form>
                             
                    
                </div>
               
                
            </div>
        </div>
    </div>
  </div>
 
@endsection
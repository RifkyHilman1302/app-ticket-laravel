@extends('admin/pagesAdmin')

@section('content')

  <!-- cards -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Transaction</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active">Transaction</li>
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
            style="max-width: 900px"
            class="min-h-20 h-max w-11/12 flex flex-col items-center"
            >
            <div class="w-full h-max mb-10 mt-3 flex flex-col gap-4">
                <div class="mb-10 mt-3 flex w-full h-max overflow-x-auto justify-start sm:justify-center lg:justify-start xl:justify-center ">
                    @if($transactions->isEmpty())
                        <p>Belum ada transaksi</p>
                    @else
                    <table class="table-auto bg-white rounded-md w-max">
                      <thead>
                        <tr>
                          <th class="px-8 py-3 opacity-70">No</th>
                          <th class="px-8 py-3 opacity-70">Username</th>
                          <th class="px-8 py-3 opacity-70">Concert Title</th>
                          <th class="px-8 py-3 opacity-70">Seat</th>
                          <th class="px-8 py-3 opacity-70">Jumlah</th>
                          <th class="px-8 py-3 opacity-70">Pembayaran</th>
                          <th class="px-8 py-3 opacity-70">Harga</th>
                          <th class="px-8 py-3 opacity-70">Harga Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($transactions as $no => $data)
                          <tr>
                            <td class="px-8 py-3 border-t">{{ $no+1 }}</td>
                            <td class="px-8 py-3 border-t">{{ $data->username }}</td>
                            <td class="px-8 py-3 border-t">{{ $data->concerts_title }}</td>
                            <td class="px-8 py-3 border-t">{{ $data->seat_name }}</td>
                            <td class="px-8 py-3 border-t">{{ $data->quantity }}</td>
                            <td class="px-8 py-3 border-t">{{ $data->payment_method }}</td>
                            <td class="px-8 py-3 border-t">Rp{{ number_format($data->price, 0, ',', '.') }}</td>
                            <td class="px-8 py-3 border-t">Rp{{ number_format($data->total_price, 0, ',', '.') }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    @endif
                </div>
                @if(!$transactions->isEmpty())
                <div class="w-full h-12 gap-4 flex items-center justify-end">
                    <p>Total Pendapatan</p>
                    <input type="text" class="indent-2 w-28 h-10 active:outline-none hover:outline-none" 
                    readonly value="{{ $totalPendapatanFormatted }}">
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

 
@endsection
@extends('admin/pagesAdmin')

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
    <div class="container-fluid flex justify-center">
        <div class="min-h-20 h-max w-11/12">
            <div class="mb-10 mt-3 flex w-full h-max overflow-x-auto justify-start sm:justify-center lg:justify-start xl:justify-center">
                @if($ticket->isEmpty())
                    <p>Belum ada ticket</p>
                @else
                    <table class="table-auto bg-white rounded-md w-max">
                        <thead>
                            <tr>
                                <th class="px-8 py-3 opacity-70">No</th>
                                <th class="px-8 py-3 opacity-70">Concert Id</th>
                                <th class="px-8 py-3 opacity-70">Concert Title</th>
                                <th class="px-8 py-3 opacity-70">Exp Ticket</th>
                                <th class="px-8 py-3 opacity-70">Status</th>
                                <th class="px-8 py-3 opacity-70">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ticket as $no => $data)
                                <tr>
                                    <td class="px-8 py-3 border-t">{{ $no+1 }}</td>
                                    <td class="px-8 py-3 border-t">{{ $data->concert_id }}</td>
                                    <td class="px-8 py-3 border-t">{{ $data->concerts_title }}</td>
                                    <td class="px-8 py-3 border-t">{{ $data->expiration_date }}</td>
                                    <td class="px-8 py-3 border-t">{{ $data->status }}</td>
                                    <td class="px-8 py-3 border-t flex gap-1">
                                        <a href="{{ route('admin.TicketUpdate', $data->id) }}" class="h-10">
                                            <button class="w-14 h-9 bg-green-500 hover:bg-green-400 rounded text-white text-sm">Update</button>
                                        </a>
                                        <form action="{{ route('admin.DeleteTicket', $data->id) }}" method="POST">
                                            @csrf
                                            <button class="w-14 h-9 bg-red-500 hover:bg-red-400 rounded text-white text-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>

 
@endsection
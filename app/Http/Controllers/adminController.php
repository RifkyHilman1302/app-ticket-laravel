<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\Concert;
use App\Models\Seat;
use App\Models\Ticket;
use App\Models\Transaction;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    function adminLogin() {
        return view('auth.AdminLogin');
    }
    function adminLoginSubmit(Request $request) {
        $credentials = $request->only('username', 'password');

        $user = admin::where('username', $credentials['username'])->first();

        if ($user && $credentials['password'] === $user->password) {
            // Jika username dan password cocok, maka login berhasil
            // Simpan username dalam sesi
            $request->session()->put('username', $user->username);
            
            // Redirect ke halaman dashboard
            return redirect()->route('admin.pages')->with('success', 'Login berhasil.');
        }

        return back()->with('error', 'Username atau password salah.');
    }

    //controller Admin Pages
    function adminpages() {
        $transactions = Transaction::all();
        $totalPendapatan = $transactions->sum('total_price');
        $totalPendapatanFormatted = "Rp" . number_format($totalPendapatan, 0, ',', '.');
        $jumlahDataTransactions = $transactions->count();
    
        $users = users::all();
        $jumlahDataUsers = $users->count();
    
        return view('admin.layout.DashboardAdmin', compact('totalPendapatanFormatted', 'jumlahDataTransactions', 'jumlahDataUsers'));
    }
    
    function MasterData() {
        $users = users::all();
        return view('admin.layout.MasterData', compact('users'));
    }
    //controller Admin Pages

    //Controller Master data Pages 
    function tambahUser() {
        return view('admin.layout.TambahData');
    }
    function updateUser($id) {
        $user = users::find($id);

        return view('admin.layout.UpdateData', compact('user'));
    }
    function updateUserSubmit(Request $request, $id) {
        $user = users::find($id);
        $user -> username = $request->username;
        $user -> password = $request->password;
        $user -> addres = $request->addres;
        $user -> email = $request->email;
        $user -> update();

        return redirect()->route('admin.MasterData');
    }
    function tambahUserSubmit(Request $request) {
        $user = new users();
        $user -> username = $request->username;
        $user -> password = $request->password;
        $user -> addres = $request->addres;
        $user -> email = $request->email;
        $user -> save();

        return redirect()->route('admin.MasterData')->with('success', 'Akun berhasil dibuat.');
    }
    function deleteUser($id) {
        $user = users::find($id);
        $user -> delete();
        return redirect()->route('admin.MasterData');
    }
    //Controller Master data Pages 

    //Controller Concerts Pages 
    function Concerts() {
        $concert = Concert::all();

        return view('admin.layout.Concert', compact('concert'));
    }
    function AddConcerts() {
        return view('admin.layout.addConcert');
    }

    function AddConcertsSubmit(Request $request) {
        $concert = new Concert();
        $concert -> concerts_title = $request -> concerts_title;
        $concert -> location = $request -> location;
        $concert -> date = $request -> date;
        $concert -> Time = $request -> Time;
        $concert -> save();

        return redirect()->route('admin.Concerts')->with('success', 'Akun berhasil dibuat.');
    }
    function DeleteConcerts($id) {
        $concert = Concert::find($id);
        $concert -> delete();
        return redirect()->route('admin.Concerts');
    }
    function updateConcerts($id) {
        $concert = Concert::find($id);

        return view('admin.layout.updateConcert', compact('concert'));
    }
    function updateConcertsSubmit(Request $request, $id) {
        $concert = Concert::find($id);
        $concert -> concerts_title = $request -> concerts_title;
        $concert -> location = $request -> location;
        $concert -> date = $request -> date;
        $concert -> Time = $request -> Time;
        $concert -> save();

        return redirect()->route('admin.Concerts');
    }
    //Controller Concerts Pages 

    //Controller Tickets 
    function addTicket($id) {
         // Mencari concert berdasarkan id
        $concert = Concert::find($id);

        // Jika concert ditemukan, tampilkan halaman dengan data concert
        if ($concert) {
            return view('admin.layout.addTicket', ['concert' => $concert]);
        }

        // Jika concert tidak ditemukan, arahkan kembali dengan pesan error
        return redirect()->route('admin.concerts')->with('error', 'Concert not found.');
    }

    function addTicketSubmit(Request $request) {
        $request->validate([
            'concert_id' => 'required|exists:concerts,id',
            'concerts_title' => [
                'required',
                'string',
                'max:255',
                function ($attribute, $value, $fail) use ($request) {
                    // Mengecek apakah concerts_title dan concert_id sudah ada di database
                    $existingTicket = Ticket::where('concerts_title', $value)
                                            ->where('concert_id', $request->concert_id)
                                            ->first();
                    if ($existingTicket) {
                        $fail('The combination of Concert ID and Concerts Title already exists.');
                    }
                },
            ],
            'expiration_date' => 'required|date',
            'status' => 'required|in:available,sold out,expired',
        ]);


        $ticket = new Ticket();
        $ticket -> concert_id = $request->concert_id; 
        $ticket -> concerts_title = $request->concerts_title; 
        $ticket -> expiration_date = $request->expiration_date; 
        $ticket -> status = $request->status; 
        $ticket -> save();

        return redirect()->route('admin.Concerts')->with('success', 'Akun berhasil dibuat.');
    }

    function Ticket() {
        $ticket = Ticket::all();

        return view('admin.layout.Ticket', compact('ticket'));
    }

    function TicketUpdate($id) {
        $ticket = Ticket::find($id);

        return view('admin.layout.TicketUpdate', compact('ticket'));
    }

    function TicketUpdateSubmit(Request $request, $id) {
        $ticket = Ticket::find($id);
        $ticket -> concert_id = $request->concert_id; 
        $ticket -> concerts_title = $request->concerts_title; 
        $ticket -> price = $request->price; 
        $ticket -> total_quantity = $request->total_quantity; 
        $ticket -> expiration_date = $request->expiration_date; 
        $ticket -> status = $request->status;
        $ticket -> update();

        return redirect()->route('admin.Ticket')->with('success', 'Akun berhasil dibuat.');
    }

    function DeleteTicket($id) {
        $ticket = Ticket::find($id);
        $ticket -> delete();

        return redirect()->route('admin.Ticket');
    }
    //Controller Tickets 

    //Controller Seats
    function addSeats($id) {
        $concert = Concert::find($id);

        // Jika concert ditemukan, tampilkan halaman dengan data concert
        if ($concert) {
            return view('admin.layout.addSeats', ['concert' => $concert]);
        }

        // Jika concert tidak ditemukan, arahkan kembali dengan pesan error
        return redirect()->route('admin.concerts')->with('error', 'Concert not found.');
    } 

    function addSeatsSubmit(Request $request) {
        $seats = new Seat();
        $seats -> concert_id = $request->concert_id; 
        $seats -> concerts_title = $request->concerts_title; 
        $seats -> seat_name = $request->seat_name; 
        $seats -> price_seats = $request->price_seats; 
        $seats -> total_seats = $request->total_seats; 
        $seats -> save();
        return redirect()->route('admin.Concerts')->with('success', 'Akun berhasil dibuat.');
    }

    function updateSeats($id) {
        $seats = Seat::find($id);

        return view('admin.layout.seatsUpdate', compact('seats'));
    }
    function updateSeatsSubmit(Request $request, $id) {
        $seats = Seat::find($id);
        $seats -> concert_id = $request->concert_id; 
        $seats -> concerts_title = $request->concerts_title; 
        $seats -> seat_name = $request->seat_name; 
        $seats -> price_seats = $request->price_seats; 
        $seats -> total_seats = $request->total_seats; 
        $seats -> update();

        return redirect()->route('admin.Seats');
    }

    function DeleteSeats($id) {
        $seats = Seat::find($id);
        $seats -> delete();

        return redirect()->route('admin.Seats');
    }

    function Seats() {
        $seats = Seat::all();

        return view('admin.layout.seats', compact('seats'));
    }
    //Controller Seats 

    //Conctroller Transaction
    function Transaction() {
        $transactions = Transaction::all();
        $totalPendapatan = $transactions->sum('total_price');
        $totalPendapatanFormatted = "Rp" . number_format($totalPendapatan, 0, ',', '.');

        return view('admin.layout.transaction', compact('transactions', 'totalPendapatanFormatted'));
    }
    //Conctroller Transaction
}

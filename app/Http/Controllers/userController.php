<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\Concert;
use App\Models\Ticket;
use App\Models\Seat;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;

class userController extends Controller
{

    //Controller Login User
    function userLogin() {
        return view('auth.Userlogin');
    }

    function userLoginSubmit(Request $request){
        $credentials = $request->only('username', 'password');

        $user = users::where('username', $credentials['username'])->first();

        if ($user && $credentials['password'] === $user->password) {
            // Jika username dan password cocok, maka login berhasil
            // Simpan username dalam sesi
            $request->session()->put('username', $user->username);
            
            // Redirect ke halaman dashboard
            return redirect()->route('user.pages')->with('success', 'Login berhasil.');
        }

        return back()->with('error', 'Username atau password salah.');
    }
    //Controller Login User

    //Controller Regis User
    function regisUser() {
        return view('auth.UserRegis');
    }

    function regisSubmit(Request $request) {
        $user = new users();
        $user -> username = $request->username;
        $user -> password = $request->password;
        $user -> addres = $request->addres;
        $user -> email = $request->email;
        $user -> save();

        return redirect()->route('user.login')->with('success', 'Akun berhasil dibuat.');
    }
    //Controller Regis User

    //Controller User Pages
    function userpages() {
        $username = session('username');
        
        // Mengambil jumlah transaksi
        $totalTransactions = Transaction::where('username', $username)->count();
        
        // Menghitung jumlah konser
        $totalConcerts = Concert::count();
        
        // Menghitung total harga transaksi
        $totalPrice = Transaction::where('username', $username)->sum('total_price');
        
        return view('users.layout.Dashboard', compact('totalTransactions', 'totalConcerts', 'totalPrice'));
    }

    function profilUser() {
        return view('users.layout.Profile');
    }
    //Controller User Pages
    
    //Concerts User
    function Concert() {
        $concert = Concert::all();
        $ticket = Ticket::all();

        return view('users.layout.Concert', compact('concert', 'ticket'));
    }
    //Concerts User

    //Ticket 
    public function buyTicket($concerts_title) {
        $concert = Concert::where('concerts_title', $concerts_title)->first();

        // Periksa apakah konser ditemukan
        if (!$concert) {
            return redirect()->back()->with('error', 'Concert not found.');
        }
        $seats = Seat::where('concert_id', $concert->id)->get();
        // Ambil semua kursi yang terkait dengan konser
        

            // Kirim data kursi ke tampilan
            return view('users.layout.beliTicket', compact('concert', 'seats'));
        }

        function buyTicketSubmit(Request $request) {
            $request->validate([
                'seat_name' => 'required',
                'jumlah_ticket' => 'required|integer|min:1',
                'concerts_title' => 'required',
                'payment_method' => 'required'
            ]);
        
            $username = session('username');
            $seat = Seat::where('seat_name', $request->seat_name)->first();
            $concert = $seat->concert;
        
            $user = users::where('username', $username)->first();
            $total_price = $seat->price_seats * $request->jumlah_ticket;
            $ticket = Ticket::where('concerts_title', $request->concerts_title)->first();

            // Ambil ID tiket yang sesuai dengan judul konser
            $concert = Concert::where('concerts_title', $request->concerts_title)->first();
            
            $transaction = new Transaction();
            $transaction->username = $username;
            $transaction->user_id = $user->id;
            $transaction->concert_id = $concert->id;
            $transaction->ticket_id = $ticket->id; // Menggunakan ID tiket dari model Ticket
            $transaction->concerts_title = $request->concerts_title; // Assign concerts_title from concert model
            $transaction->seat_name = $seat->seat_name;
            $transaction->quantity = $request->jumlah_ticket;
            $transaction->price = $seat->price_seats;
            $transaction->total_price = $total_price;
            $transaction->payment_method = $request->payment_method;
        
            $transaction->save();
        
            return redirect()->route('user.concert')->with('success', 'Ticket berhasil dibeli.');
        }

        function Ticket() {
            $username = session('username');
            $user = users::where('username', $username)->first();
            $transactions = Transaction::where('user_id', $user->id)
                ->join('concerts', 'transactions.concert_id', '=', 'concerts.id')
                ->select('transactions.*', 'concerts.concerts_title', 'concerts.date', 'concerts.time', 'concerts.location')
                ->get();
                
            return view('users.layout.Ticket', compact('transactions'));
        }
        
        
        
    
    //Ticket 

    //Transaction
    function transaction() {
        $username = session('username');
        $user = users::where('username', $username)->first();
        $transactions = Transaction::where('user_id', $user->id)->get();
        return view('users.layout.Transaction', compact('transactions'));
    }
    //Transaction

}

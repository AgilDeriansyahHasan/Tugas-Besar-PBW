<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voting;

class VotingController extends Controller
{
    // Menampilkan halaman hasil voting
    public function index() {
        // Mengambil semua data voting
        $votings = Voting::all();
        // Mengirim data voting ke view
        return view('voting.voting', compact('votings'));
    }

    // Menampilkan halaman form voting
    public function create() {
        return view('voting.create');
    }

    // Menyimpan hasil voting
    public function store(Request $request) {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:20',
            'pilihan' => 'required|string',
        ]);
    
        // Simpan voting ke database
        Voting::create($validatedData);
    
        // Redirect ke halaman hasil voting setelah voting berhasil
        return redirect()->route('voting.index')->with('success', 'Voting berhasil disimpan.');
    }
}

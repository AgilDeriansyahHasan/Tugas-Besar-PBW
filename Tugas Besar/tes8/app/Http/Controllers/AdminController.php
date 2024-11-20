<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voting;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    // Menampilkan halaman hasil voting
    public function show() {
        // Mengambil semua data voting
        $votings = Voting::all();
        // Mengirim data voting ke view
        return view('admin.voting', compact('votings'));
    }
}

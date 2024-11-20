<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

class CandidateController extends Controller
{
    public function index()
    {
        // Mengambil semua data kandidat
        $candidates = Candidate::all();
        // Mengirim data kandidat ke view 'candidate.index'
        return view('candidate.index', [
            'candidates' => $candidates,
        ]);
    }

    public function create()
    {
        // Menampilkan form untuk menambah kandidat
        return view('candidate.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validated = $request->validate([
            'nama' => ['required', 'string'],
            'profile' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);

        // Simpan data kandidat yang telah divalidasi
        Candidate::create($validated);

        // Redirect ke halaman kandidat setelah data disimpan
        return redirect()->route('candidate.index');
    }

    public function show(Candidate $candidate)
    {
        // Menampilkan detail kandidat
        return view('candidate.index', [
            'candidate' => $candidate,
        ]);
    }
    
}


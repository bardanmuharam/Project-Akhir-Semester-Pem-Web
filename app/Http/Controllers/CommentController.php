<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    // Metode untuk menampilkan form komentar
    public function create()
    {
        return view('Greenday'); // Ganti dengan nama view Anda
    }

    // Metode untuk menyimpan komentar
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);

        Comment::create($request->all());

        return redirect()->back()->with('success', 'Komentar berhasil dikirim!');
    }

    // Metode untuk menampilkan daftar komentar
    public function index()
    {
        $comments = Comment::all();
        return view('Greenday', compact('comments')); // Ganti dengan nama view Anda
    }
}

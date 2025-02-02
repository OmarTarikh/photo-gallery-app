<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Album;
use App\Models\Like;
use App\Models\Comment;
use Barryvdh\DomPDF\Facade\Pdf; // Ensure you're using the correct namespace
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class GaleriController extends Controller
{
    public function index(): View
    {
        $galeris = Galeri::with('album')->latest()->get();
        $albums = Album::all();

        return view('galeris.index', compact('galeris', 'albums'));
    }

    public function store(Request $request)
    {
        $this->validatePhoto($request);

        $image = $request->file('LokasiFile');
        $imagePath = $image->storeAs('public/galeris', $image->hashName());

        Galeri::create([
            'LokasiFile' => $image->hashName(),
            'JudulFoto' => $request->JudulFoto,
            'DeskripsiFoto' => $request->DeskripsiFoto,
            'TanggalUnggah' => $request->TanggalUnggah,
            'AlbumID' => $request->AlbumID,
        ]);

        return redirect()->route('galeris.index')->with('success', 'Photo added successfully!');
    }

    public function show(string $FotoID): View
    {
        $galeri = Galeri::with('album')->findOrFail($FotoID);
        return view('galeris.show', compact('galeri'));
    }

    public function edit(string $FotoID): View
    {
        $galeri = Galeri::findOrFail($FotoID);
        $albums = Album::all();

        return view('galeris.edit', compact('galeri', 'albums'));
    }

    public function update(Request $request, string $FotoID)
    {
        $this->validatePhoto($request, $FotoID);

        $galeri = Galeri::findOrFail($FotoID);

        if ($request->hasFile('LokasiFile')) {
            Storage::delete('public/galeris/' . $galeri->LokasiFile);
            $image = $request->file('LokasiFile');
            $image->storeAs('public/galeris', $image->hashName());
            $galeri->LokasiFile = $image->hashName();
        }

        $galeri->update($request->except('LokasiFile'));
        return redirect()->route('galeris.index')->with('success', 'Photo updated successfully!');
    }

    public function destroy(string $FotoID)
    {
        $galeri = Galeri::findOrFail($FotoID);
        Storage::delete('public/galeris/' . $galeri->LokasiFile);
        $galeri->delete();

        return redirect()->route('galeris.index')->with('success', 'Photo deleted successfully!');
    }

    public function storeLike(Request $request)
    {
        $request->validate([
            'id_foto' => 'required|exists:galeris,FotoID',
        ]);

        $existingLike = Like::where('id_foto', $request->id_foto)->where('id_user', Auth::id())->first();

        if ($existingLike) {
            return back()->with('error', 'You have already liked this photo!');
        }

        Like::create([
            'id_foto' => $request->id_foto,
            'id_user' => Auth::id(),
            'tanggal_like' => now(),
        ]);

        return back()->with('success', 'Photo liked successfully!');
    }

    public function storeComment(Request $request)
    {
        $request->validate([
            'id_foto' => 'required|exists:galeris,FotoID',
            'isi' => 'required|string|max:255',
        ]);

        Comment::create([
            'id_foto' => $request->id_foto,
            'id_user' => Auth::id(),
            'isi' => $request->isi,
            'tanggal' => now(),
        ]);

        return back()->with('success', 'Comment added successfully!');
    }

    private function validatePhoto(Request $request, $FotoID = null)
    {
        $rules = [
            'LokasiFile' => $FotoID ? 'image|mimes:jpeg,jpg,png|max:2048' : 'required|image|mimes:jpeg,jpg,png|max:2048',
            'JudulFoto' => 'required|min:5',
            'DeskripsiFoto' => 'required|min:10',
            'TanggalUnggah' => 'required|date',
            'AlbumID' => 'required|exists:albums,AlbumID',
        ];

        $request->validate($rules);
    }

    /**
     * Export gallery data to PDF.
     */
    public function exportToPDF()
    {
        $galeris = Galeri::with('album')->get();
        $pdf = Pdf::loadView('galeris.pdf', compact('galeris'));
        return $pdf->download('galeri_data.pdf');
    }
}

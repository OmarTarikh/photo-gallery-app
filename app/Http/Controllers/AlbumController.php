<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Galeri;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AlbumController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $albums = Album::with('galeris')->latest()->get();
    
        return view('albums.index', compact('albums'));
    }
    
    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('albums.create');
    }

    /**
     * store
     *
     * @param  Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate form
        $this->validate($request, [
            'NamaAlbum'     => 'required|min:5',
            'Deskripsi'     => 'nullable|min:10',
            'TanggalDibuat' => 'required|date',
        ]);

        // Create album
        Album::create([
            'NamaAlbum'     => $request->NamaAlbum,
            'Deskripsi'     => $request->Deskripsi,
            'TanggalDibuat' => $request->TanggalDibuat,
            'TotalFoto'     => 0, // Initialize TotalFoto as 0
        ]);

        // Redirect to index
        return redirect()->route('albums.index')->with(['success' => 'Data Album Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param  string $AlbumID
     * @return View
     */
    public function edit(string $AlbumID): View
    {
        // Get album by AlbumID
        $album = Album::findOrFail($AlbumID);

        // Render view with album
        return view('albums.edit', compact('album'));
    }

    /**
     * update
     *
     * @param  Request $request
     * @param  string $AlbumID
     * @return RedirectResponse
     */
    public function update(Request $request, string $AlbumID): RedirectResponse
    {
        // Validate form
        $this->validate($request, [
            'NamaAlbum'     => 'required|min:5',
            'Deskripsi'     => 'nullable|min:10',
            'TanggalDibuat' => 'required|date',
        ]);

        // Get album by AlbumID
        $album = Album::findOrFail($AlbumID);

        // Update album
        $album->update([
            'NamaAlbum'     => $request->NamaAlbum,
            'Deskripsi'     => $request->Deskripsi,
            'TanggalDibuat' => $request->TanggalDibuat,
        ]);

        // Redirect to index
        return redirect()->route('albums.index')->with(['success' => 'Data Album Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  string $AlbumID
     * @return RedirectResponse
     */
    public function destroy(string $AlbumID): RedirectResponse
    {
        // Get album by AlbumID
        $album = Album::findOrFail($AlbumID);

        // Delete album
        $album->delete();

        // Redirect to index
        return redirect()->route('albums.index')->with(['success' => 'Data Album Berhasil Dihapus!']);
    }
}

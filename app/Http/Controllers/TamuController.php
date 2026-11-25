<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tamus = Tamu::latest()->get();

        return view('admin.bukutamu', compact('tamus'));
    }

    public function dashboard()
    {
        $tamus = Tamu::latest()->take(10)->get();
        $totalTamu = Tamu::count();
        $kunjunganHariIni = Tamu::whereDate('created_at', today())->count();
        $tamuDisetujui = Tamu::where('persetujuan', true)->count();
        $tamuBelumDisetujui = Tamu::where('persetujuan', false)->count();

        return view('admin.dashboard', compact(
            'tamus',
            'totalTamu',
            'kunjunganHariIni',
            'tamuDisetujui',
            'tamuBelumDisetujui'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'status_pengunjung' => ['required', 'in:Orang Tua / Wali,Siswa,Alumni,Instansi,Umum'],
            'alamat' => ['required', 'string', 'max:255'],
            'pihak_yang_dituju' => ['required', 'string', 'max:255'],
            'keperluan' => ['required', 'string', 'max:1000'],
            'keterangan' => ['nullable', 'string', 'max:1000'],
            'persetujuan' => ['accepted'],
        ]);

        $validated['persetujuan'] = true;
        Tamu::create($validated);

        return redirect()->back()->with('success', 'Data kunjungan berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tamu $tamu)
    {
        return response()->json($tamu);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tamu $tamu)
    {
        return redirect()->route('bukutamu.index', ['edit' => $tamu->id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tamu $tamu)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'status_pengunjung' => ['required', 'in:Orang Tua / Wali,Siswa,Alumni,Instansi,Umum'],
            'alamat' => ['required', 'string', 'max:255'],
            'pihak_yang_dituju' => ['required', 'string', 'max:255'],
            'keperluan' => ['required', 'string', 'max:1000'],
            'keterangan' => ['nullable', 'string', 'max:1000'],
        ]);

        $validated['persetujuan'] = $request->boolean('persetujuan');
        $tamu->update($validated);

        return redirect()->back()->with('success', 'Data kunjungan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tamu $tamu)
    {
        $tamu->delete();

        return redirect()->back()->with('success', 'Data kunjungan berhasil dihapus.');
    }
}

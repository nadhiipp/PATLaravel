<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use database\Seeders\MuridSeeder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class ControllerMurid extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
   
{
   $search = $request->input('search');

    $murid = Murid::when($search, function ($query, $search) {
        return $query->where('nama', 'like', "%{$search}%")
                     ->orWhere('nis', 'like', "%{$search}%")
                     ->orWhere('kelas', 'like', "%{$search}%")
                     ->orWhere('jenis_kelamin', 'like', "%{$search}%")
                     ->orWhere('tgl_lahir', 'like', "%{$search}%")
                     ->orWhere('no_telp', 'like', "%{$search}%");
    })->paginate(10);

    // $murid = Murid::orderBy('id', 'asc')->paginate(10); // Ambil data dengan pagination, 10 per halaman
    // $murid->appends($request->only('search')); // Menambahkan query string pencarian ke pagination


    return view('user.murid.murid', compact('murid', 'search'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.murid.create', [
            'murid' => murid::get(),
            'user' => User::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate ([
            'nama' => 'required|string|max:255',
            'nis' => 'required|string|unique:murids,nis|max:20',
            'kelas' => 'required|string|max:50',
            'jenis_kelamin' => 'required|in:L,P',
            'tgl_lahir' => 'required|date',
            'no_telp' => 'required|string|max:15',
            
        ]);
        
        $user = User::create([
            'username' => $request->nis,
            'password' => bcrypt('password'),
            'role' => 'murid',
        ]); 
   
        
        
        Murid::create([
    
            'nama' =>  $request->nama,
            'nis' => $request->nis,
            'kelas' => $request->kelas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'no_telp' => $request->no_telp,
            'id_user' => $user->id,
         
        ]);

        return redirect()->route('murid.index')->with('success', 'Alhamdulilah Murid berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $murid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id )
    {
        return view('user.murid.update',[
             'murid' => murid::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $id)
    {
         $request->validate ([
            'nama' => 'required',
            'nis' => 'required',
            'kelas' => 'required',
            'jenis_kelamin' => 'required|in:L,P',
            'tgl_lahir' => 'required|date',
            'no_telp' => 'required|',
            
        ]);

    
 
    $murid = Murid::findOrFail($id);

    $user = User::find($murid->id_user);
    if ($user) {
        $user->update([
            'username' => $request->nis
        ]);
    }

    $murid->update([
        'nama' =>  $request->nama,
        'nis' => $request->nis,
        'kelas' => $request->kelas,
        'jenis_kelamin' => $request->jenis_kelamin,
        'tgl_lahir' => $request->tgl_lahir,
        'no_telp' => $request->no_telp,
   
    ]);

        return redirect()->route('murid.index')->with('success', 'Siswa berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)

    {
       $murid = Murid::findOrFail($id);

        // Hapus user yang terkait
        $murid->user->delete();

        // Hapus murid
        $murid->delete();

        return redirect()->route('murid.index')->with('success', 'Data murid dan user berhasil dihapus.');
      
    
    }
}
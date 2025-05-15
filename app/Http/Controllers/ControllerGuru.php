<?php

namespace App\Http\Controllers;
use App\Models\Guru;
use App\Models\User;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class ControllerGuru extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
          $search = $request->input('search');

     $guru = Guru::with('mataPelajaran')->get();
  
     $guru = Guru::when($search, function ($query, $search) {
        return $query->where('nama', 'like', "%{$search}%")
                     ->orWhere('nip', 'like', "%{$search}%")
                     ->orWhereHas('mataPelajaran', function ($q) use ($search) {
                         $q->where('mata_pelajaran', 'like', "%{$search}%");
                     })
                     ->orWhere('email', 'like', "%{$search}%")
                     ->orWhere('jenis_kelamin', 'like', "%{$search}%")
                     ->orWhere('tgl_lahir', 'like', "%{$search}%")
                     ->orWhere('no_telp', 'like', "%{$search}%");
    
  
      })->paginate(10);

    // $murid = Murid::orderBy('id', 'asc')->paginate(10); // Ambil data dengan pagination, 10 per halaman
    // $murid->appends($request->only('search')); // Menambahkan query string pencarian ke pagination


    return view('user.guru.guru', compact('guru', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.guru.create', [
            'guru' => Guru::get(),
            'user' => User::get(),
            'matapelajaran' => MataPelajaran::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         request()->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|unique:gurus,nip|max:20',
            'email' => 'required|string|max:50',
            'jenis_kelamin' => 'required|in:L,P',
            'tgl_lahir' => 'required|date',
            'no_telp' => 'required|string|max:15',
          
        ]);

        $user = User::create([
            'username' => $request->nip,
            'password' => bcrypt('password'),
            'role' => 'guru',
        ]);


        Guru::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'id_user' => $user->id,
            'id_mata_pelajaran' => $request->id_mata_pelajaran,
        ]);
        return redirect()->route('guru.index')->with('success', 'Data guru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    $guru = Guru::with('mataPelajaran')->get();
       return view('user.guru.update', [
            'guru' => Guru::findOrFail($id),
            'user' => User::get(),
            'matapelajaran' => MataPelajaran::get(),
            
        ]);
    

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:20',
            'email' => 'required|string|max:50',
            'jenis_kelamin' => 'required|in:L,P',
            'tgl_lahir' => 'required|date',
            'no_telp' => 'required|string|max:15',
          
        ]);

        User::where('id', $request->id_user)->update([
            'username' => $request->nip,
            'password' => bcrypt('password'),
            'role' => 'guru',
        ]);

        // Update data guru
        Guru::where('id', $id)->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            
            'id_mata_pelajaran' => $request->id_mata_pelajaran,
        ]);

        return redirect()->route('guru.index')->with('success', 'Data guru   berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $guru = Guru::findOrFail($id);

        // Hapus user yang terkait
        $guru->user->delete();

        // Hapus murid
        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Data guru dan user berhasil dihapus.');
    }
}

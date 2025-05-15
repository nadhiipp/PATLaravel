<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\MataPelajaran;
use App\Models\Guru;
use App\Models\Nilai;
use App\Models\Murid;


class ControllerUser extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
         // Ambil data dengan pagination, 10 per halaman

        $user = User::when($search, function ($query, $search) {
        return $query->where('username', 'like', "%{$search}%")
                     ->orWhere('role', 'like', "%{$search}%");
                    
    })->paginate(10);
    
    

    return view('user.user.user', compact('user', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.user.create', [
            'user' => User::get(),
            'mataPelajaran' => MataPelajaran::get(),
            'guru' => Guru::get(),
            'nilai' => Nilai::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'username' => 'required|string|max:255',
            'role' => 'required|in:admin,guru,murid',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'username' => $request->username,
            'role' => $request->role,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('user.index')->with('success', 'User Berhasil Ditambahkan');
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
        return view('user.user.update', [
            'user' => User::findOrFail($id),
            'guru' => Guru::get(),
            'murid' => Murid::get(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'username' => 'required|string|max:255',
            'password' => bcrypt('password'),
            'role' => 'required|in:admin,guru,murid',
           
          
        ]);

        Guru::where('id', $request->id_user)->update([
            'nip' => $request->nip,
          
        
        ]);

        Murid::where('id', $request->id_user)->update([
            'nis' => $request->nis,
        
        ]);

        User::where('id', $id)->update([
            'username' => $request->username,
            'role' => $request->role,
            'password' => bcrypt($request->password),
        ]);
      

        // Update data guru
      
        return redirect()->route('user.index')->with('success', 'Data user berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $user = User::findOrFail($id);

        // Hapus user yang terkait
        

        // Hapus murid
        $user->delete();

        return redirect()->route('user.index')->with('success', 'Data guru dan user berhasil dihapus.');
    }
}

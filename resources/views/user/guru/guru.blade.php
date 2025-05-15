
@extends('layout.template')

@section('content')

<div class="container-fluid py-4">
    <div class="card shadow">
        <div class="card-header bg-white py-3">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h5 class="mb-0 fw-bold text-danger">Data Guru</h5>
                    <p class="text-muted small mb-0">Kelola data Guru dalam sistem</p>
                </div>
                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                    <a href="#" class="btn btn-success btn-sm me-2" data-bs-toggle="modal" data-bs-target="#exportModal">
                        <i class="fas fa-file-export me-1"></i> Export
                    </a>
                    <a href="{{ route('guru.create') }}" class="btn btn-primary btn-sm" >
                        <i class="fas fa-plus me-1"></i> Tambah Guru
                    </a>
                </div>
            </div>
        </div>
        
        <form action="{{ route('guru.index') }}" method="GET" class="mb-3">
            @csrf
            <div class="card-header bg-light input-group">
                <h5 class="mb-0">Filter Data</h5>
            </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6 mb-2 mb-md-0">
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0">
                            <i class="fas fa-search text-muted"></i>
                        </span>
                        <input type="text" name="search" id="search" value="{{ request('search') }}" class="form-control border-start-0 ps-0" placeholder="Cari siswa..." aria-label="Search">
                    </div>
                </div>
        </form>
        @if(request('search'))
        <p class="mt-2">Menampilkan hasil untuk: <strong>{{ request('search') }}</strong></p>
        @endif

                
                <div class="col-md-2 ms-auto"></div>
            </div>

            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle" id="siswaTable">
                    <thead class="table-light">
                        <tr>
                         
                                <th class="text-center" style="width: 5%;">NO</th>
                                <th style="width: 10%;">NIP</th>
                                <th style="width: 18%;">Nama</th>
                                <th style="width: 18%;">Mapel</th>
                          
                                <th style="width: 10%;">Email</th>
                                <th style="width: 15%;">Jenis Kelamin</th>
                                <th style="width: 15%;">Tanggal Lahir</th>
                                <th style="width: 15%;">Nomor Telepon</th>
                                <th class="text-center" style="width: 10%;">Aksi</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guru as $nadhip)
                        <tr>
                            <td class="text-center">{{ $nadhip->id}}</td>

                            {{-- {{ $nadhip->firstItem() + $loop->index }} --}}
                       
                            <td>{{ $nadhip->nip }}</td>
                            <td>{{ $nadhip->nama }}</td>
                            <td>{{ $nadhip->mataPelajaran->mata_pelajaran ?? 'Tidak ada'  }}</td>
                         
                            <td>{{ $nadhip->email }}</td>
                            <td>
                                @if($nadhip->jenis_kelamin == 'L')
                                    <span class="badge bg-primary">Laki-laki</span>
                                @else
                                    <span class="badge bg-info">Perempuan</span>
                                @endif
                            </td>
                            <td>{{ \Carbon\Carbon::parse($nadhip->tgl_lahir)->format('d M Y') }}</td>
                            <td>{{ $nadhip->no_telp }}</td>

                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('guru.edit', $nadhip->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteSiswaModal{{ $nadhip->id }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- PAGINATION --}}
            
            {{ $guru->links() }}   

{{-- TUTUP PAGINATION --}}
              
            
           

<!-- Modal Export -->
<div class="modal fade" id="exportModal" tabindex="-1" aria-labelledby="exportModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="exportModalLabel">Export Data Siswa</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-grid gap-2">
                    <a href="#" class="btn btn-outline-success d-flex align-items-center justify-content-center">
                        <i class="fas fa-file-excel me-2"></i> Export to Excel
                    </a>
                    <a href="#" class="btn btn-outline-danger d-flex align-items-center justify-content-center">
                        <i class="fas fa-file-pdf me-2"></i> Export to PDF
                    </a>
                    <a href="#" class="btn btn-outline-primary d-flex align-items-center justify-content-center">
                        <i class="fas fa-file-csv me-2"></i> Export to CSV
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>



@foreach ($guru as $nadhip)

<!-- Delete Modal -->
<div class="modal fade" id="deleteSiswaModal{{ $nadhip->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Konfirmasi Hapus</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          

            </div>
            <div class="modal-body">
             <center>
                <br>
                 <p>Apakah Anda yakin ingin menghapus data siswa dengan nama :  <strong>{{ $nadhip->nama }}</strong>?</p>
                 <p class="text-danger"><small> Berbahaya</small></p>
            </center>       
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form id="formHapus" action="{{ route('guru.destroy', $nadhip->id)}}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

@push('scripts')
<script>
    // Search functionality
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const table = document.getElementById('siswaTable');
        const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
        
        searchInput.addEventListener('keyup', function() {
            const searchText = searchInput.value.toLowerCase();
            
            for (let i = 0; i < rows.length; i++) {
                const rowData = rows[i].textContent.toLowerCase();
                if (rowData.includes(searchText)) {
                    rows[i].style.display = '';
                } else {
                    rows[i].style.display = 'none';
                }
            }
            
            updateShowingEntries();
        });
        
        // Records per page dropdown
        const recordsPerPage = document.getElementById('recordsPerPage');
        recordsPerPage.addEventListener('change', function() {
            // In a real application, this would trigger pagination
            // For now, we'll just update the text
            updateShowingEntries();
        });
        
        function updateShowingEntries() {
            const showingEntriesElement = document.getElementById('showingEntries');
            let visibleCount = 0;
            
            for (let i = 0; i < rows.length; i++) {
                if (rows[i].style.display !== 'none') {
                    visibleCount++;
                }
            }
            
            showingEntriesElement.textContent = `1 to ${visibleCount}`;
        }
    });
</script>
@endpush
@endsection
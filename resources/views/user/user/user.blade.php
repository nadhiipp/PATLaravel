
@extends('layout.template')

@section('content')

<div class="container-fluid py-4">
    <div class="card shadow">
        <div class="card-header bg-white py-3">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h5 class="mb-0 fw-bold text-danger">Data User</h5>
                    <p class="text-muted small mb-0">Kelola data User dalam sistem</p>
                </div>
                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                    <a href="#" class="btn btn-success btn-sm me-2" data-bs-toggle="modal" data-bs-target="#exportModal">
                        <i class="fas fa-file-export me-1"></i> Export
                    </a>
                    <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm" >
                        <i class="fas fa-plus me-1"></i> Tambah user
                    </a>
                </div>
            </div>
        </div>
        
        <form action="{{ route('user.index') }}" method="GET" class="mb-3">
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
                        <input type="text" name="search" id="search" value="{{ request('search') }}" class="form-control border-start-0 ps-0" placeholder="Cari user..." aria-label="Search">
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
                          
                            <th style="width: 10%;">NIP / NIS</th>
                            <th style="width: 9%;">Role</th>
                            <th class="text-center" style="width: 10%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $nadhip)
                        <tr>
                            <td class="text-center">{{ $nadhip->id}}</td>

                            {{-- {{ $nadhip->firstItem() + $loop->index }} --}}
                       
                            <td>{{ $nadhip->username }}</td>
                            <td>
                            
                                @if($nadhip->role == 'admin')
                                    <span class="badge bg-primary">Admin</span>
                                @elseif($nadhip->role == 'guru')
                                    <span class="badge bg-success">Guru</span>
                                @elseif($nadhip->role == 'murid')
                                    <span class="badge bg-secondary">Murid</span>   
                                @else
                                    <span class="badge bg-danger">Unknown</span>
                                @endif
                            </td>

                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('user.edit', $nadhip->id) }}" class="btn btn-sm btn-warning">
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
            
            <div class="row mt-3">
                <div class="col-md-12 small text-muted">
                   {{ $user->links() }}  
                </div>

    </div>
</div>


              
            
           

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
                <form id="formHapus" action="{{ route('user.destroy', $nadhip->id)}}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>


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
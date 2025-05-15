@extends('layout.template')

@section('content') 
 
<br>
<div class="container py-4">
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-gradient text-white py-3" style="background-color: #6D2323;">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="mb-0"><i class="fas fa-chalkboard-teacher me-2"></i>Tambah Data Guru Baru</h4>
            </div>
        </div>
        
        
        <!-- ini bagian isi -->
        <div class="card-body" style="background-color: #ffffff;">
            <form action="{{ route('guru.update', $guru->id) }}" method="POST" class="needs-validation" novalidate>
                @csrf
                 @method('PUT')

                <div class="row g-4">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="nama" class="form-label fw-bold">Nama Lengkap <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" name="nama" id="nama" value="{{ $guru->nama }}" class="form-control"> 
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="nip" class="form-label fw-bold">NIP <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-fingerprint"></i></span>
                                    <input type="text"  name="nip" id="nip" value="{{ $guru->nip }}" class="form-control">
                                </div>
                            </div>

                          <div class="mb-3">
                            <label for="id_mata_pelajaran" class="form-label fw-bold">Mata Pelajaran <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-fingerprint"></i></span>
                                <select class="form-select" id="id_mata_pelajaran" name="id_mata_pelajaran">
                                    <option value="" selected disabled>Pilih Mata Pelajaran</option>
                                    @foreach ($matapelajaran as $mp)
                                        <option value="{{ $mp->id }}" {{ $guru->id_mata_pelajaran == $mp->id ? 'selected' : '' }}>
                                            {{ $mp->mata_pelajaran }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label fw-bold">Email<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-school"></i></span>
                                        <input type="email" class="form-control" id="email" name="email"  value="{{ $guru->email }}"
                                            placeholder="email" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="jenis_kelamin" class="form-label fw-bold">Jenis Kelamin <span class="text-danger">*</span></label>
                                    <div class="pt-2">
                                        <div class="form-check form-check-inline">

                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L" value="{{ $guru->jenis_kelamin}}">
                                            <label class="form-check-label" for="laki_laki">Laki-laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P" value="{{ $guru->jenis_kelamin }}">
                                            <label class="form-check-label" for="perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="tgl_lahir" class="form-label fw-bold">Tanggal Lahir <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                    <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir"  value="{{ $guru->tgl_lahir }}"
                                         required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="no_telp" class="form-label fw-bold">Nomor Telepon <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">+62</span>
                                    <input type="text" class="form-control" placeholder="Nomor Telepon"
                                        id="no_telp" name="no_telp" value="{{ $guru->no_telp }}">
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content -end gap-2 mt-4">
                                <a href="{{ route('guru.index') }}" class="btn btn-secondary px-4">
                                    <i class="fas fa-times me-1"></i> Batal
                                </a>
                                <button type="submit" class="btn text-white px-4" style="background-color: #6D2323;">
                                    <i class="fas fa-save me-1"></i> Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Column Create -->

@push('styles')
<style>
    body {
        background-color: #F8EEDF;
    }
    
    .card {
        border-radius: 10px;
        overflow: hidden;
    }
    
    .card-header {
        border-bottom: 0;
    }
    
    .form-control, .form-select, .input-group-text {
        border-radius: 8px;
    }
    
    .input-group > .form-control {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }
    
    .input-group > .input-group-text {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        background-color: #F8EEDF;
        border-right: 0;
    }
    
    .btn {
        border-radius: 8px;
        padding: 8px 20px;
        font-weight: 500;
        transition: all 0.2s;
    }
    
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
</style>
@endpush

@push('scripts')
<script>
    // Form validation
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
@endpush

@endsection
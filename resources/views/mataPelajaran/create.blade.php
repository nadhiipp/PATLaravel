@extends('layout.template')

@section('content') 
 
<br>
<div class="container py-4">
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-gradient text-white py-3" style="background-color: #6D2323;">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="mb-0"><i class="fas fa-user-plus me-2"></i>Tambah Mata Pelajaran Baru</h4>
            </div>
        </div>
        
        
        <!-- ini bagian isi -->
        <div class="card-body" style="background-color: #ffffff;">
            <form action="{{ route('mataPelajaran.store') }}" method="POST" class="needs-validation" novalidate>
                @csrf

                <div class="row g-4">
                    <div class="col-md-12">
                        <div class="card-body">

                            
                            <div class="mb-3">
                                <label for="kode" class="form-label fw-bold">Kode <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" name="kode" id="kode"  class="form-control"> 
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="mata_pelajaran" class="form-label fw-bold">Nama Mata Pelajaran <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-fingerprint"></i></span>
                                    <input type="text"  name="mata_pelajaran" id="mata_pelajaran" class="form-control">
                                </div>
                            </div>
                            
                            
                            <div class="d-flex justify-content -end gap-2 mt-4">
                                <a href="{{ route('mataPelajaran.index') }}" class="btn btn-secondary px-4">
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
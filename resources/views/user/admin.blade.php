@extends('layout.template')
@section('content')
    
   <br>
      
        
        <!-- Statistics Cards -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card h-100">
                    <div class="stat-card user">
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h6>TOTAL PENGGUNA</h6>
                        <h2 class="animate__animated animate__fadeIn">150</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <div class="stat-card document">
                        <div class="icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h6>DOKUMEN BARU</h6>
                        <h2 class="animate__animated animate__fadeIn">24</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <div class="stat-card completed">
                        <div class="icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h6>PENILAIAN SELESAI</h6>
                        <h2 class="animate__animated animate__fadeIn">45</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <div class="stat-card pending">
                        <div class="icon">
                            <i class="fas fa-hourglass-half"></i>
                        </div>
                        <h6>PENILAIAN PENDING</h6>
                        <h2 class="animate__animated animate__fadeIn">12</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Charts Section -->
        <div class="row mb-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="section-title">Statistik Penilaian</h5>
                        <div class="chart-container">
                            <canvas id="assessmentChart" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="section-title">Distribusi Kategori</h5>
                        <div class="chart-container text-center">
                            <canvas id="categoryChart"></canvas>
                            <div class="mt-3">
                                <div class="category-label">
                                    <span class="category-color bg-keuangan"></span>Keuangan
                                </div>
                                <div class="category-label">
                                    <span class="category-color bg-pemasaran"></span>Pemasaran
                                </div>
                                <div class="category-label">
                                    <span class="category-color bg-produk"></span>Produk
                                </div>
                                <div class="category-label">
                                    <span class="category-color bg-sdm"></span>SDM
                                </div>
                                <div class="category-label">
                                    <span class="category-color bg-lainnya"></span>Lainnya
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Latest Assessments -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="section-title">Penilaian Terbaru</h5>
                        <div class="latest-assessments">
                            <div class="assessment-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="assessment-title">Evaluasi Kinerja Keuangan Q1 2025</div>
                                        <div class="assessment-meta">
                                            <span><i class="far fa-user me-1"></i>Ahmad Rizal</span>
                                            <span class="ms-2"><i class="far fa-calendar me-1"></i>08 Mei 2025</span>
                                        </div>
                                    </div>
                                    <div class="assessment-status status-completed">Selesai</div>
                                </div>
                            </div>
                            
                            <div class="assessment-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="assessment-title">Laporan Strategi Pemasaran Digital</div>
                                        <div class="assessment-meta">
                                            <span><i class="far fa-user me-1"></i>Siti Rahayu</span>
                                            <span class="ms-2"><i class="far fa-calendar me-1"></i>07 Mei 2025</span>
                                        </div>
                                    </div>
                                    <div class="assessment-status status-pending">Pending</div>
                                </div>
                            </div>
                            
                            <div class="assessment-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="assessment-title">Analisis Pengembangan Produk Baru</div>
                                        <div class="assessment-meta">
                                            <span><i class="far fa-user me-1"></i>Budi Santoso</span>
                                            <span class="ms-2"><i class="far fa-calendar me-1"></i>06 Mei 2025</span>
                                        </div>
                                    </div>
                                    <div class="assessment-status status-completed">Selesai</div>
                                </div>
                            </div>
                            
                            <div class="assessment-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="assessment-title">Evaluasi Program Pelatihan SDM</div>
                                        <div class="assessment-meta">
                                            <span><i class="far fa-user me-1"></i>Dewi Lestari</span>
                                            <span class="ms-2"><i class="far fa-calendar me-1"></i>05 Mei 2025</span>
                                        </div>
                                    </div>
                                    <div class="assessment-status status-completed">Selesai</div>
                                </div>
                            </div>
                            
                            <div class="assessment-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="assessment-title">Laporan Audit Internal Sistem</div>
                                        <div class="assessment-meta">
                                            <span><i class="far fa-user me-1"></i>Hendra Wijaya</span>
                                            <span class="ms-2"><i class="far fa-calendar me-1"></i>04 Mei 2025</span>
                                        </div>
                                    </div>
                                    <div class="assessment-status status-pending">Pending</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script>
        // Line Chart for Assessment Statistics
        const assessmentCtx = document.getElementById('assessmentChart').getContext('2d');
        const assessmentChart = new Chart(assessmentCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Penilaian',
                    data: [35, 42, 28, 56, 48, 60, 55, 62, 78, 92, 85, 90],
                    fill: true,
                    backgroundColor: 'rgba(109, 35, 35, 0.1)',
                    borderColor: '#6D2323',
                    tension: 0.4,
                    pointBackgroundColor: '#6D2323',
                    pointBorderColor: '#fff',
                    pointRadius: 4,
                    pointHoverRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: '#6D2323',
                        titleColor: '#fff',
                        bodyColor: '#fff',
                        titleFont: {
                            family: 'Poppins',
                            size: 13
                        },
                        bodyFont: {
                            family: 'Poppins',
                            size: 12
                        },
                        padding: 10,
                        displayColors: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)'
                        },
                        ticks: {
                            font: {
                                family: 'Poppins',
                                size: 11
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: {
                                family: 'Poppins',
                                size: 11
                            }
                        }
                    }
                }
            }
        });
        
        // Pie Chart for Category Distribution
        const categoryCtx = document.getElementById('categoryChart').getContext('2d');
        const categoryChart = new Chart(categoryCtx, {
            type: 'doughnut',
            data: {
                labels: ['Keuangan', 'Pemasaran', 'Produk', 'SDM', 'Lainnya'],
                datasets: [{
                    data: [35, 25, 20, 12, 8],
                    backgroundColor: [
                        '#6D2323',
                        '#9D5353', 
                        '#C77D7D',
                        '#E9AEA2',
                        '#F8CBAD'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: '#6D2323',
                        titleColor: '#fff',
                        bodyColor: '#fff',
                        titleFont: {
                            family: 'Poppins',
                            size: 13
                        },
                        bodyFont: {
                            family: 'Poppins',
                            size: 12
                        },
                        padding: 10
                    }
                },
                cutout: '65%'
            }
        });
    </script>
@endsection


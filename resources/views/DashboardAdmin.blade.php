@extends('layout.template')
@section('content')


<!-- Statistics Cards -->
<div class="row mb-4">
    <div class="col-md-3">
      <a href="{{ url('/murid') }}">
            <div class="card h-100">
                <div class="stat-card user">
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                      <h6>Data Siswa</h6>
                    <h2 class="animate__animated animate__fadeIn">{{$siswa}}</h2>
                </div>
            </div>
        </a>
        </div>

    <div class="col-md-3">
        <div class="card h-100">
            <div class="stat-card document">
                <div class="icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h6>Data Guru</h6>
                <h2 class="animate__animated animate__fadeIn">{{$guru}}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card h-100">
            <div class="stat-card completed">
                <div class="icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h6>Mata Pelajaran</h6>
                <h2 class="animate__animated animate__fadeIn">{{$mapel}}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card h-100">
            <div class="stat-card pending">
                <div class="icon">
                    <i class="fas fa-hourglass-half">{{$totalHistory}}</i>
                </div>
                <h6>History</h6>
                <h2 class="animate__animated animate__fadeIn"></h2>
            </div>
        </div>
    </div>
</div>
 
    <div class="row mt-4">
        <div class="col-lg-8 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <h6>Statistik Penilaian</h6>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <h6>Distribusi Kategori</h6>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="chart-pie" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Penilaian Terbaru</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dokumen</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kategori</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <i class="fas fa-file-pdf me-3"></i>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Laporan Kuartal 2</h6>
                                                <p class="text-xs text-secondary mb-0">laporan_q2.pdf</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Keuangan</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">85</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">08/05/2025</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="badge bg-success">Selesai</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <i class="fas fa-file-word me-3"></i>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Proposal Kerja Sama</h6>
                                                <p class="text-xs text-secondary mb-0">proposal_kerjasama.docx</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Pemasaran</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-warning">72</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">07/05/2025</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="badge bg-success">Selesai</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <i class="fas fa-file-excel me-3"></i>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Data Penjualan Bulanan</h6>
                                                <p class="text-xs text-secondary mb-0">penjualan_mei.xlsx</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Keuangan</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-primary">80</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">06/05/2025</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="badge bg-warning">Dalam Review</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <i class="fas fa-file-powerpoint me-3"></i>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Presentasi Produk Baru</h6>
                                                <p class="text-xs text-secondary mb-0">presentasi_produk.pptx</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Produk</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-secondary">-</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">05/05/2025</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="badge bg-secondary">Menunggu</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Line Chart
        var ctx1 = document.getElementById("chart-line").getContext("2d");
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Penilaian",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#6D2323",
                    backgroundColor: "rgba(109, 35, 35, 0.3)",
                    fill: true,
                    data: [50, 40, 65, 51, 80, 45, 42, 75, 82, 68, 71, 92],
                    maxBarThickness: 6
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

        // Pie Chart
        var ctx2 = document.getElementById("chart-pie").getContext("2d");
        new Chart(ctx2, {
            type: "pie",
            data: {
                labels: ['Keuangan', 'Pemasaran', 'Produk', 'SDM', 'Lainnya'],
                datasets: [{
                    data: [40, 25, 15, 12, 8],
                    backgroundColor: [
                        '#6D2323',
                        '#9A3E3E',
                        '#C75959',
                        '#F37373',
                        '#FF8C8C'
                    ],
                    borderWidth: 0
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            },
        });
    });
</script>
@endsection

<!-- End of Statistics Cards -->
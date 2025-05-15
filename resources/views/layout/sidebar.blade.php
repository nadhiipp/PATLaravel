
<br>
     <!-- Sidebar -->
    <div class="sidebar">
       <br><br>
        <div class="sidebar-menu">
            <a href="{{ url('/DashboardAdmin') }}" class="nav-link" onclick="setActiveLink(this); localStorage.setItem('activeMenu', 'dashboard');">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>

            <a href="{{ url('/user') }}" class="nav-link" onclick="setActiveLink(this); localStorage.setItem('activeMenu', 'dashboard');">
                <i class="fas fa-tachometer-alt"></i>
                <span>Data User</span>
            </a>
            
            <div class="nav-heading">Guru & Mapel</div>

            <a href="{{ url('/guru') }}" class="nav-link" onclick="setActiveLink(this); localStorage.setItem('activeMenu', 'guru');">
                <i class="fas fa-chalkboard-teacher"></i>
                <span>Data Guru</span>
            </a>
            
            <a href="{{ url('/matapelajaran') }}" class="nav-link" onclick="setActiveLink(this); localStorage.setItem('activeMenu', 'hakakses');">
                <i class="fas fa-key"></i>
                <span>Mata Pelajaran</span>
            </a>
            
            
            <div class="nav-heading">Siswa</div>
            
            <a href="{{ url('/murid') }}" class="nav-link" onclick="setActiveLink(this); localStorage.setItem('activeMenu', 'murid');">
                <i class="fas fa-user"></i>
                <span>Data Siswa</span>
            </a>
            

            <a href="{{ url('/nilai') }}" class="nav-link" onclick="setActiveLink(this); localStorage.setItem('activeMenu', 'pengguna');">
                <i class="fas fa-users"></i>
                <span>Nilai Siswa</span>
            </a>
            
            <div class="nav-heading">LAPORAN</div>
            
            <a href="#" class="nav-link" onclick="setActiveLink(this); localStorage.setItem('activeMenu', 'statistik');">
                <i class="fas fa-chart-line"></i>
                <span>Statistik Penilaian</span>
            </a>
            
            <a href="#" class="nav-link" onclick="setActiveLink(this); localStorage.setItem('activeMenu', 'export');">
                <i class="fas fa-file-export"></i>
                <span>Export Data</span>
            </a>
            
            <div class="nav-heading">PENGATURAN</div>
            
            <a href="#" class="nav-link" onclick="setActiveLink(this); localStorage.setItem('activeMenu', 'pengaturan');">
                <i class="fas fa-cog"></i>
                <span>Pengaturan Sistem</span>
            </a>
        </div>
    </div>
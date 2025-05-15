<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SisPenInfo - Admin Dashboard</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #6D2323;
            --secondary: #F8EEDF;
            --primary-light: #8D4343;
            --primary-dark: #5D1313;
            --text-dark: #333333;
            --text-light: #ffffff;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            color: var(--text-dark);
        }
        
        .sidebar {
             width: 250px;
            background-color: #6D2323;
            color: white;
            transition: all 0.3s;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            position: fixed;
            height: 100vh;
        }
           .sidebar h1 {
            padding: 20px 15px;
            font-size: 24px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .sidebar-menu {
            padding: 0 10px;
        }
        
        .sidebar-header {
            padding: 10px 15px;
            text-align: center;
            margin-bottom: 30px;
        }
        
        .sidebar-logo {
            background-color: var(--secondary);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px auto;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .sidebar-logo span {
            color: var(--primary);
            font-weight: bold;
            font-size: 20px;
        }
        
        .sidebar-title {
            color: var(--secondary);
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 1px;
        }
        
        .nav-heading {
           padding: 15px 10px 5px;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.6);
            font-weight: 600;
        }
        
        .nav-link {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 5px;
            transition: all 0.2s;
        }
        
        .nav-link:hover, .nav-link.active {
             background-color: rgba(255, 255, 255, 0.1);
            background-color: #F8EEDF;
            color: #6D2323;
            font-weight: 600;
        }
        
        .nav-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        
        .navbar {
            background-color: var(--primary);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            color: var(--secondary);
            font-weight: 600;
            font-size: 22px;
        }

          
        .content {
            flex: 1;
            padding: 20px;
            margin-left: 250px;
        }
        
        .topbar-right .nav-link {
            color: var(--secondary);
        }
        
        .notification-badge {
            background-color: #FF6B6B;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            position: absolute;
            top: 5px;
            right: 5px;
        }
        
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .stat-card {
            padding: 20px;
            border-radius: 12px;
            color: var(--text-light);
            position: relative;
            overflow: hidden;
            background: var(--primary);
            height: 100%;
        }

        footer {
            background-color: var(--primary-color);
            color: var(--text-light);
            padding: 1rem;
            text-align: center;
            margin-left: var(--sidebar-width);
            font-size: 0.9rem;
        }
        
        .stat-card.user {
            background: linear-gradient(45deg, #6D2323, #8D4343);
        }
        
        .stat-card.document {
            background: linear-gradient(45deg, #6D2323, #9D5353);
        }
        
        .stat-card.completed {
            background: linear-gradient(45deg, #2D8D50, #41BF71);
        }
        
        .stat-card.pending {
            background: linear-gradient(45deg, #FFB636, #FFD166);
            color: #333;
        }
        
        .stat-card .icon {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 40px;
            opacity: 0.3;
        }
        
        .stat-card h6 {
            font-size: 13px;
            opacity: 0.8;
            margin-bottom: 10px;
            font-weight: 500;
        }
        
        .stat-card h2 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 0;
        }
        
        .section-title {
            color: var(--primary);
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .chart-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .category-label {
            display: inline-block;
            margin-right: 15px;
        }
        
        .category-color {
            display: inline-block;
            width: 12px;
            height: 12px;
            margin-right: 5px;
            border-radius: 2px;
        }
        
        .bg-keuangan { background-color: #6D2323; }
        .bg-pemasaran { background-color: #9D5353; }
        .bg-produk { background-color: #C77D7D; }
        .bg-sdm { background-color: #E9AEA2; }
        .bg-lainnya { background-color: #F8CBAD; }
        
        .latest-assessments {
            background-color: #fff;
            border-radius: 12px;
            padding: 20px;
        }
        
        .assessment-item {
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 10px;
            background-color: var(--secondary);
            border-left: 4px solid var(--primary);
        }
        
        .assessment-item:last-child {
            margin-bottom: 0;
        }
        
        .assessment-title {
            font-weight: 600;
            margin-bottom: 3px;
            font-size: 14px;
        }
        
        .assessment-meta {
            font-size: 12px;
            color: #777;
        }
        
        .assessment-status {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: 500;
        }
        
        .status-completed {
            background-color: rgba(45, 141, 80, 0.1);
            color: #2D8D50;
        }
        
        .status-pending {
            background-color: rgba(255, 182, 54, 0.1);
            color: #FF9900;
        }
         /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
            }
            
            .sidebar h1 {
                font-size: 18px;
                text-align: center;
                padding: 15px 5px;
            }
            
            .nav-link span, .nav-heading {
                display: none;
            }
            
            .nav-link {
                justify-content: center;
                padding: 15px 5px;
            }
            
            .nav-link i {
                margin-right: 0;
                font-size: 18px;
            }
            
            .content {
                margin-left: 70px;
            }
        }

         footer {
                margin-left: 0;
            }
    </style>
</head>
<body>
    


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Custom JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Sidebar toggle for mobile
            const sidebarToggle = document.getElementById('sidebar-toggle');
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main-content');
            const footer = document.querySelector('footer');
            
            if (sidebarToggle) {
                sidebarToggle.addEventListener('click', function() {
                    sidebar.classList.toggle('show');
                    mainContent.classList.toggle('sidebar-open');
                    footer.classList.toggle('sidebar-open');
                });
            }
       });
         
        // Function to set active link
  
        // Function to set active link
        function setActiveLink(element) {
            // Remove active class from all nav links
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.classList.remove('active');
            });
            
            // Add active class to clicked link
            element.classList.add('active');
        }
        
        // Function to check current URL and set active menu
        function checkCurrentUrl() {
            const currentPath = window.location.pathname;
            let activeMenuId = '';
            
            // Determine active menu based on current URL
            if (currentPath === '/' || currentPath === '') {
                activeMenuId = 'dashboard';
            } else if (currentPath.includes('/murid')) {
                activeMenuId = 'murid';
            } else if (currentPath.includes('/guru')) {
                activeMenuId = 'guru';
            } else {
                // Use previously stored active menu if available
                activeMenuId = localStorage.getItem('activeMenu') || 'dashboard';
            }
            
            // Store active menu ID
            localStorage.setItem('activeMenu', activeMenuId);
            
            // Activate the corresponding menu item
            activateMenuItem(activeMenuId);
        }
        
        // Function to activate menu item based on ID
        function activateMenuItem(menuId) {
            const navLinks = document.querySelectorAll('.nav-link');
            let menuFound = false;
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                
                // Match menu by URL or content
                if (
                    (menuId === 'dashboard' && link.getAttribute('href') === '/dashboard') ||
                    (menuId === 'murid' && link.getAttribute('href') === '/murid') ||
                    (menuId === 'guru' && link.getAttribute('href') === '/guru') ||
                    (menuId === 'kriteria' && link.textContent.trim().includes('Kriteria')) ||
                    (menuId === 'pengguna' && link.textContent.trim().includes('Pengguna')) ||
                    (menuId === 'hakakses' && link.textContent.trim().includes('Hak Akses')) ||
                    (menuId === 'statistik' && link.textContent.trim().includes('Statistik')) ||
                    (menuId === 'export' && link.textContent.trim().includes('Export')) ||
                    (menuId === 'pengaturan' && link.textContent.trim().includes('Pengaturan'))
                ) {
                    link.classList.add('active');
                    menuFound = true;
                }
            });
            
            // If no menu matched, set dashboard as active
            if (!menuFound) {
                const dashboardLink = document.querySelector('a[href="/dashboard"]');
                if (dashboardLink) {
                    dashboardLink.classList.add('active');
                }
            }
        }
        
        // Run when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            checkCurrentUrl();
        });

   
    </script>
    
    @yield('scripts')
</body>
</html>
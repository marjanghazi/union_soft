<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Dashboard - {{ config('app.name', 'Union Soft') }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|raleway:400,500,600,700" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Admin Dashboard Styles -->
    <style>
        :root {
            --primary-mint: #3BEB9A;
            --secondary-mint: #3ED1A2;
            --dark-navy: #0D3141;
            --blue-green: #5199AE;
            --sidebar-width: 250px;
            --sidebar-collapsed: 70px;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        .admin-container {
            display: flex;
            min-height: 100vh;
            background-color: #f5f7fa;
        }

        /* Sidebar Styles */
        .admin-sidebar {
            width: var(--sidebar-width);
            background: var(--dark-navy);
            color: white;
            transition: all 0.3s ease;
            position: fixed;
            height: 100vh;
            z-index: 100;
            overflow-y: auto;
        }

        .admin-sidebar.collapsed {
            width: var(--sidebar-collapsed);
        }

        .sidebar-header {
            padding: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
        }

        .sidebar-logo {
            font-family: 'Raleway', sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            color: white;
        }

        .sidebar-logo span {
            color: var(--primary-mint);
        }

        .sidebar-menu {
            padding: 20px 0;
        }

        .sidebar-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-menu li {
            margin-bottom: 5px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        .sidebar-menu a:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-left-color: var(--primary-mint);
        }

        .sidebar-menu a.active {
            background: rgba(59, 235, 154, 0.1);
            color: var(--primary-mint);
            border-left-color: var(--primary-mint);
        }

        .sidebar-menu a i {
            width: 24px;
            margin-right: 12px;
            text-align: center;
        }

        .admin-sidebar.collapsed .menu-text {
            display: none;
        }

        .admin-sidebar.collapsed .sidebar-menu a {
            justify-content: center;
            padding: 15px;
        }

        .admin-sidebar.collapsed .sidebar-menu a i {
            margin-right: 0;
            font-size: 1.2rem;
        }

        .toggle-sidebar {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .admin-sidebar.collapsed .toggle-sidebar {
            left: 50%;
            transform: translateX(-50%);
        }

        /* Main Content Area */
        .admin-main {
            flex: 1;
            margin-left: var(--sidebar-width);
            transition: margin-left 0.3s ease;
        }

        .admin-main.expanded {
            margin-left: var(--sidebar-collapsed);
        }

        /* Top Navbar */
        .admin-navbar {
            background: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 0 30px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .navbar-left h1 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--dark-navy);
            margin: 0;
        }

        .navbar-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .user-dropdown {
            position: relative;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            padding: 8px 12px;
            border-radius: 6px;
            transition: background 0.3s ease;
        }

        .user-info:hover {
            background: #f5f5f5;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary-mint);
            color: var(--dark-navy);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .user-details {
            display: flex;
            flex-direction: column;
        }

        .user-name {
            font-weight: 600;
            color: var(--dark-navy);
        }

        .user-role {
            font-size: 0.8rem;
            color: #666;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            right: 0;
            background: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 10px 0;
            min-width: 200px;
            display: none;
            z-index: 1000;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-item {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            color: var(--dark-navy);
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .dropdown-item:hover {
            background: #f5f5f5;
        }

        .dropdown-item i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        /* Content Area */
        .admin-content {
            padding: 30px;
            min-height: calc(100vh - 70px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .admin-sidebar {
                transform: translateX(-100%);
            }
            
            .admin-sidebar.mobile-open {
                transform: translateX(0);
            }
            
            .admin-main {
                margin-left: 0;
            }
            
            .admin-sidebar.collapsed {
                transform: translateX(-100%);
            }
            
            .mobile-menu-toggle {
                display: block;
                background: none;
                border: none;
                font-size: 1.5rem;
                color: var(--dark-navy);
                cursor: pointer;
            }
        }

        @media (min-width: 769px) {
            .mobile-menu-toggle {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <aside class="admin-sidebar" id="adminSidebar">
            <div class="sidebar-header">
                <div class="sidebar-logo">
                    <span>Union</span>Soft
                </div>
            </div>
            
            <nav class="sidebar-menu">
                <ul>
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                            <i class="fas fa-tachometer-alt"></i>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.projects') }}" class="{{ request()->routeIs('admin.projects') ? 'active' : '' }}">
                            <i class="fas fa-project-diagram"></i>
                            <span class="menu-text">Projects</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-users"></i>
                            <span class="menu-text">Team Members</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-calendar"></i>
                            <span class="menu-text">Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-chart-bar"></i>
                            <span class="menu-text">Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-cog"></i>
                            <span class="menu-text">Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <button class="toggle-sidebar" id="toggleSidebar">
                <i class="fas fa-chevron-left"></i>
            </button>
        </aside>

        <!-- Main Content -->
        <main class="admin-main" id="adminMain">
            <!-- Top Navbar -->
            <nav class="admin-navbar">
                <div class="navbar-left">
                    <button class="mobile-menu-toggle" id="mobileMenuToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h1>{{ $header ?? 'Admin Dashboard' }}</h1>
                </div>
                
                <div class="navbar-right">
                    <div class="user-dropdown" id="userDropdown">
                        <div class="user-info" onclick="toggleDropdown()">
                            <div class="user-avatar">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </div>
                            <div class="user-details">
                                <span class="user-name">{{ Auth::user()->name }}</span>
                                <span class="user-role">Administrator</span>
                            </div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        
                        <div class="dropdown-menu" id="dropdownMenu">
                            <a href="{{ route('profile.edit') }}" class="dropdown-item">
                                <i class="fas fa-user"></i>
                                <span>Profile</span>
                            </a>
                            <a href="{{ route('home') }}" class="dropdown-item">
                                <i class="fas fa-home"></i>
                                <span>View Website</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" 
                                   class="dropdown-item"
                                   onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span>Logout</span>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <div class="admin-content">
                {{ $slot }}
            </div>
        </main>
    </div>

    <script>
        // Sidebar Toggle
        const toggleSidebar = document.getElementById('toggleSidebar');
        const adminSidebar = document.getElementById('adminSidebar');
        const adminMain = document.getElementById('adminMain');
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');

        if (toggleSidebar) {
            toggleSidebar.addEventListener('click', () => {
                adminSidebar.classList.toggle('collapsed');
                adminMain.classList.toggle('expanded');
                
                // Rotate chevron icon
                const icon = toggleSidebar.querySelector('i');
                if (adminSidebar.classList.contains('collapsed')) {
                    icon.classList.remove('fa-chevron-left');
                    icon.classList.add('fa-chevron-right');
                } else {
                    icon.classList.remove('fa-chevron-right');
                    icon.classList.add('fa-chevron-left');
                }
            });
        }

        // Mobile Menu Toggle
        if (mobileMenuToggle) {
            mobileMenuToggle.addEventListener('click', () => {
                adminSidebar.classList.toggle('mobile-open');
            });
        }

        // User Dropdown
        function toggleDropdown() {
            const dropdownMenu = document.getElementById('dropdownMenu');
            dropdownMenu.classList.toggle('show');
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            const dropdownMenu = document.getElementById('dropdownMenu');
            const userDropdown = document.getElementById('userDropdown');
            
            if (!userDropdown.contains(e.target)) {
                dropdownMenu.classList.remove('show');
            }
        });

        // Active sidebar link highlighting
        function setActiveSidebarLinks() {
            const currentPath = window.location.pathname;
            const sidebarLinks = document.querySelectorAll('.sidebar-menu a');
            
            sidebarLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href === currentPath || (href !== '/' && currentPath.startsWith(href))) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            setActiveSidebarLinks();
            
            // Close mobile sidebar when clicking on a link
            if (window.innerWidth <= 768) {
                const sidebarLinks = document.querySelectorAll('.sidebar-menu a');
                sidebarLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        adminSidebar.classList.remove('mobile-open');
                    });
                });
            }
        });

        // Close mobile sidebar on window resize
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768) {
                adminSidebar.classList.remove('mobile-open');
            }
        });
    </script>
</body>
</html>
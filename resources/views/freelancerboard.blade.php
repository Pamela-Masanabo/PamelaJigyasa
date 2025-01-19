<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="https://camblish.co.za/wp-content/uploads/2023/02/1.-Camblish-Orginal-Logo-1418x1536.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .dashboard-header {
            background: linear-gradient(to right, #007bff, #0056b3);
            color: white;
            padding: 2rem;
            text-align: center;
        }
        .dashboard-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            justify-content: center;
            padding: 2rem;
        }
        .dashboard-card {
            flex: 1 1 calc(33% - 1.5rem);
            max-width: 350px;
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.2s ease-in-out;
        }
        .dashboard-card:hover {
            transform: translateY(-5px);
        }
        .dashboard-card h5 {
            font-size: 1.25rem;
            font-weight: bold;
        }
        .dashboard-card .card-body {
            padding: 1.5rem;
        }
        .dashboard-card .btn {
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">Freelancer Dashboard</a>
            <div class="dropdown ms-auto">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="moreOptionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    More Options
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreOptionsDropdown">
                    <li><a class="dropdown-item" href="/userprofile/edit"><i class="fas fa-user-edit"></i> Profile Settings</a></li>
                    <li><a class="dropdown-item" href="/projects/history"><i class="fas fa-folder-open"></i> Project History</a></li>
                    <li><a class="dropdown-item" href="/support"><i class="fas fa-life-ring"></i> Support</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="dashboard-header">
        <h1>Welcome, <span class="fw-bold">Freelancer Name</span></h1>
        <p>Manage your projects, earnings, and more!</p>
    </header>

    <!-- Main Content -->
    <div class="dashboard-container">
        <!-- Ongoing Projects -->
        <div class="dashboard-card">
            <div class="card-body text-center">
                <h5>Ongoing Projects</h5>
                @forelse ($projects as $project)
                    <p>{{ $project->name }}<br><small>Deadline: {{ $project->deadline }}</small></p>
                @empty
                    <p>You have no assigned projects yet.</p>
                @endforelse
                <a href="/projects" class="btn btn-primary mt-3">View All Projects</a>
            </div>
        </div>

        <!-- Earnings -->
        <div class="dashboard-card">
            <div class="card-body text-center">
                <h5>Earnings</h5>
                <p>Total Earnings: <span class="fw-bold text-success">${{ $earnings }}</span></p>
                <a href="{{ route('earnings.history') }}" class="btn btn-success mt-3">View Earnings History</a>
            </div>
        </div>

        <!-- Messages -->
        <div class="dashboard-card">
            <div class="card-body text-center">
                <h5>Messages</h5>
                <p><i class="fas fa-envelope fa-3x text-info"></i></p>
                <p>Check your latest messages and stay connected.</p>
                <a href="{{ route('freelancer.messages') }}" class="btn btn-info mt-3">View Messages</a>
            </div>
        </div>

        <!-- Notifications -->
        <div class="dashboard-card">
            <div class="card-body text-center">
                <h5>Notifications</h5>
                <p><i class="fas fa-bell fa-3x text-warning"></i></p>
                <p>You have <span class="fw-bold"> </span> new notifications.</p>
                <a href= "#" class="btn btn-warning mt-3">View Notifications</a>
            </div>
        </div>

        <!-- Statistics Overview -->
        <div class="dashboard-card">
            <div class="card-body text-center">
                <h5>Statistics</h5>
                <ul class="list-unstyled">
                    <li>Completed Projects: <span class="fw-bold"></span></li>
                    <li>Hours Worked: <span class="fw-bold"><span></li>
                    <li>Average Rating: <span class="fw-bold text-warning"></span></li>
                </ul>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="dashboard-card">
            <div class="card-body text-center">
                <h5>Quick Actions</h5>
                <button class="btn btn-outline-primary mt-2">Create New Project</button>
                <button class="btn btn-outline-secondary mt-2">Submit Invoice</button>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="dashboard-card">
            <div class="card-body">
                <h5 class="text-center">Search</h5>
                <form action=" " method="GET">
                    <input type="text" class="form-control" name="query" placeholder="Search projects, clients..." required>
                    <button class="btn btn-primary mt-3 w-100">Search</button>
                </form>
            </div>
        </div>

        <!-- Dark Mode Toggle -->
        <div class="dashboard-card">
            <div class="card-body text-center">
                <h5>Dark Mode</h5>
                <button class="btn btn-dark" onclick="toggleDarkMode()">Toggle Dark Mode</button>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="text-center py-3 mt-4">
        <p class="text-muted">© {{ date('Y') }} Banstech Freelancer Platform. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap 5 and FontAwesome Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script>
        function toggleDarkMode() {
            document.body.classList.toggle('bg-dark');
            document.body.classList.toggle('text-white');
        }
    </script>
</body>
</html>

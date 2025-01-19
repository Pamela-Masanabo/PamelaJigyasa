<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="https://camblish.co.za/wp-content/uploads/2023/02/1.-Camblish-Orginal-Logo-1418x1536.png" type="image/x-icon">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            /* background-image: url(''); */
            background-color: #343a40;
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
            max-width: 300px;
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
        .navbar {
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .dropdown-menu {
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color:rgb(78, 79, 80);
            color: white;
            padding: 1rem 0;
            text-align: center;
        }
        footer a {
            color: #ffc107;
            text-decoration: none;
        }
        .card {
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            height: 300px;
            display: flex;
            flex-direction: column;
        }
        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        }
        .card-img-top {
            object-fit: cover;
            height: 120px;
        }
        .card-body {
            flex-grow: 1;
            padding: 15px;
            text-align: center;
        }
        .card-title {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }
        .card-text {
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
        .btn-custom {
            font-size: 0.9rem;
            padding: 8px 15px;
            border-radius: 5px;
        }
        .section-header {
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 1.8rem;
            margin-bottom: 2rem;
        }
        @media (max-width: 768px) {
            .card {
                height: 250px;
            }
            .card-img-top {
                height: 100px;
            }
            .section-header {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">Customer Dashboard</a>
            <div class="dropdown ms-auto">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="moreOptionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    More Options
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreOptionsDropdown">
                    <li><a class="dropdown-item" href="/userprofile/edit"><i class="fas fa-user-edit"></i> Profile Settings</a></li>
                    <li><a class="dropdown-item" href="/projects/history"><i class="fas fa-folder-open"></i> Project History</a></li>
                    <li><a class="dropdown-item" href="{{ url('/builders/catalog') }}"><i class="fas fa-hammer"></i> Browse Builders</a></li>
                    <li><a class="dropdown-item" href="/messages"><i class="fas fa-comments"></i> Messages</a></li>
                    <li><a class="dropdown-item" href="/notifications"><i class="fas fa-bell"></i> Notifications</a></li>
                    <li><a class="dropdown-item" href="/tasks"><i class="fas fa-tasks"></i> Task Manager</a></li>
                    <li><a class="dropdown-item" href="/support"><i class="fas fa-life-ring"></i> Support</a></li>
                    <li><a class="dropdown-item" href="/"><i class="fas fa-sign-out"></i> Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Dashboard Content -->
    <header class="text-center py-5 bg-primary text-white">
    <h1>Welcome, 
    @if (auth()->check())
        <span class="fw-bold">{{ auth()->user()->name }}</span>
    @else
        Guest
    @endif
</h1>

        <p>Manage your projects, browse builders, and much more!</p>
    </header>       
   
    <!-- Builder Catalog Section -->
    <section id="catalog" class="py-5">
        <div class="container">
            <h2 class="text-center section-header">Builder Catalog</h2>
            <div class="row">
                <!-- Catalog Items -->
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card shadow-sm"  style="background-color: transparent; border: none; box-shadow: none;">
                    <img src=
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtxQ0Fx-lb1LdLefuuJrbyPT47wRQ8vvTOrg&s" class="card-img-top" alt="carpenter Image">
                    <div class="card-body bg-white">
                            <h5 class="card-title">Carpenter</h5>
                            <p class="card-text">Expert in woodwork and furniture crafting.</p>
                            <a href="{{url('/builders/carpenter')}}" class="btn btn-outline-primary btn-custom">View Profile</a>
                        </div>
                    </div>
                </div>
                <!-- Electrician -->
                <div class="col-md-4 col-sm-6 mb-3">
                <div class="card shadow-sm" style= "background-color: transparent; border: none; box-shadow: none;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDkeMcT_BQC9opbncS5NlA7WVmKEUJiV3zBGdU16zaCHwAWa2cvcZ4HTJPSwxqPWroIXc&usqp=CAU" class="card-img-top" alt="Electrician Image">
                    <div class="card-body bg-white">
                        <h5 class="card-title">Electrician</h5>
                        <p class="card-text">Specialist in electrical installations and repairs.</p>
                        <a href="{{url('/builders/electricianservice')}} " class="btn btn-outline-primary btn-custom">View Profile</a>
                    </div>
                </div>
            </div>  
            <!-- Painter -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card shadow-sm" style="background-color: transparent; border: none; box-shadow: none;">
                    <img src="https://i.insider.com/60f9d4f80729770012b96825?width=700" class="card-img-top" alt="Painter Image">
                    <div class="card-body bg-white">
                        <h5 class="card-title">Painter</h5>
                        <p class="card-text">Expert in interior and exterior painting.</p>
                        <a href="{{url('/builders/painter')}} " class="btn btn-outline-primary btn-custom">View Profile</a>
                    </div>
                </div>
            </div>
            <!-- Plasterer -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card shadow-sm"  style="background-color: transparent; border: none; box-shadow: none;">
                    <img src="data:image/jpeg;base64,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" 
                    class="card-img-top" alt="Plasterer Image">
                    <div class="card-body bg-white" >
                        <h5 class="card-title">Plasterer</h5>
                        <p class="card-text">Skilled in wall finishing and plastering.</p>
                        <a href="{{url('/builders/plasterer')}} " class="btn btn-outline-primary btn-custom">View Profile</a>
                    </div>
                </div>
            </div>
            <!-- Tailer -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card shadow-sm"  style="background-color: transparent; border: none; box-shadow: none;">
                    <img src="data:image/jpeg;base64,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"
                     class="card-img-top" alt="Tiler Image">
                    <div class="card-body bg-white">
                        <h5 class="card-title">Tiler</h5>
                        <p class="card-text">Specialist in wall and floor tiling.</p>
                        <a href="{{url('/builders/tilerservice')}} " class="btn btn-outline-primary btn-custom">View Profile</a>
                    </div>
                </div>
            </div>
            <!-- Plumber -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card shadow-sm"  style="background-color: transparent; border: none; box-shadow: none;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeXF3jssfHBpU5twiHRv3ylmAj8Ko5CBfrNw&s"
                     class="card-img-top" alt="Plumber Image">
                    <div class="card-body bg-white">
                        <h5 class="card-title">Plumber</h5>
                        <p class="card-text">Expert in water systems and piping solutions.</p>
                        <a href="{{url('/builders/plumblerservice') }}" class="btn btn-outline-primary btn-custom">View Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            
    <!-- Footer -->
    <footer>
        <p>&copy; {{date('Y')}} Customer Dashboard. All rights reserved.</p>
        <p>
            <a href="/privacy-policy">Privacy Policy</a> | 
            <a href="/terms-of-service">Terms of Service</a> | 
            <a href="/contact">Contact Us</a>
        </p>
    </footer>

    <!-- Bootstrap 5 and FontAwesome Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>

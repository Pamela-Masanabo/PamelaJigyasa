<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Builder Catalog</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
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

<section id="catalog" class="py-5">
    <div class="container">
        <h2 class="text-center section-header">Builder Catalog</h2>
        <div class="row">
            <!-- Catalog Items -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Carpenter Image">
                    <div class="card-body">
                        <h5 class="card-title">Carpenter</h5>
                        <p class="card-text">Expert in woodwork and furniture crafting.</p>
                        <a href="{{url('/builders/carpenter')}} " class="btn btn-outline-primary btn-custom">View Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Electrician Image">
                    <div class="card-body">
                        <h5 class="card-title">Electrician</h5>
                        <p class="card-text">Specialist in electrical installations and repairs.</p>
                        <a href="{{url('/builders/electricianservice')}} " class="btn btn-outline-primary btn-custom">View Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Painter Image">
                    <div class="card-body">
                        <h5 class="card-title">Painter</h5>
                        <p class="card-text">Expert in interior and exterior painting.</p>
                        <a href="{{url('/builders/painter')}} " class="btn btn-outline-primary btn-custom">View Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Plasterer Image">
                    <div class="card-body">
                        <h5 class="card-title">Plasterer</h5>
                        <p class="card-text">Skilled in wall finishing and plastering.</p>
                        <a href="{{url('/builders/plasterer')}} " class="btn btn-outline-primary btn-custom">View Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Tiler Image">
                    <div class="card-body">
                        <h5 class="card-title">Tiler</h5>
                        <p class="card-text">Specialist in wall and floor tiling.</p>
                        <a href="{{url('/builders/tilerservice')}} " class="btn btn-outline-primary btn-custom">View Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Plumber Image">
                    <div class="card-body">
                        <h5 class="card-title">Plumber</h5>
                        <p class="card-text">Expert in water systems and piping solutions.</p>
                        <a href="{{url('/builders/plumblerservice') }}" class="btn btn-outline-primary btn-custom">View Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

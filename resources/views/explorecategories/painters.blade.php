<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painters - Building Job Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        header {
            background: url('https://via.placeholder.com/1500x300?text=Painters') no-repeat center center;
            background-size: cover;
            height: 300px;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }
        header h1 {
            line-height: 300px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Painters</h1>
    </header>

    <div class="container my-5">
        <h2 class="text-center mb-4">Why Choose Our Painters?</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <img src="https://i.insider.com/60f9d4f80729770012b96825?width=700" alt="Painter at work" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <p class="text-muted">
                    Painters add beauty and protection to your spaces. Their tasks include:
                </p>
                <ul class="list-group mb-4">
                    <li class="list-group-item">Painting walls, ceilings, and doors.</li>
                    <li class="list-group-item">Applying special finishes like textured paints and wallpapers.</li>
                    <li class="list-group-item">Preparing surfaces for painting and touch-ups.</li>
                </ul>
                <p class="text-muted">
                    Our painters deliver vibrant and long-lasting finishes, whether for residential or commercial spaces.
                </p>
            </div>
        </div>

        <hr class="my-5">

        <h3>Pricing and Service Details</h3>
        <table class="table table-bordered mt-3">
            <thead class="table-primary">
                <tr>
                    <th>Service</th>
                    <th>Estimated Cost</th>
                    <th>Average Time Required</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Interior wall painting (per sq. ft.)</td>
                    <td>$1 - $5</td>
                    <td>1-3 days</td>
                </tr>
                <tr>
                    <td>Exterior painting (per sq. ft.)</td>
                    <td>$2 - $6</td>
                    <td>3-5 days</td>
                </tr>
                <tr>
                    <td>Wallpaper installation</td>
                    <td>$2 - $7</td>
                    <td>1-2 days</td>
                </tr>
            </tbody>
        </table>

        <div class="text-center mt-5">
            <a href="{{ route('register') }}" class="btn btn-lg btn-primary shadow-lg">Connect to a Painter</a>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        &copy; {{ date('Y') }} Building Job Catalog. All rights reserved.
    </footer>
</body>
</html>

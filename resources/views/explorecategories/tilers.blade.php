<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tilers - Building Job Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        header {
            background: url('https://via.placeholder.com/1500x300?text=Tilers') no-repeat center center;
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
        <h1>Tilers</h1>
    </header>

    <div class="container my-5">
        <h2 class="text-center mb-4">Why Choose Our Tilers?</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <img src="data:image/jpeg;base64,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"
                 alt="Tiler at work" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <p class="text-muted">
                    Tilers specialize in creating flawless, long-lasting tiled surfaces. Their tasks include:
                </p>
                <ul class="list-group mb-4">
                    <li class="list-group-item">Installing wall and floor tiles for kitchens, bathrooms, and more.</li>
                    <li class="list-group-item">Repairing damaged tiles and re-grouting surfaces.</li>
                    <li class="list-group-item">Choosing materials and designs that match your style.</li>
                </ul>
                <p class="text-muted">
                    Our tilers are experts in delivering precision and beauty to every project, ensuring satisfaction.
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
                    <td>Bathroom tiling</td>
                    <td>$300 - $700</td>
                    <td>1-3 days</td>
                </tr>
                <tr>
                    <td>Floor tiling (per sq. ft.)</td>
                    <td>$5 - $15</td>
                    <td>Depends on area</td>
                </tr>
                <tr>
                    <td>Tile repair and re-grouting</td>
                    <td>$50 - $200</td>
                    <td>2-4 hours</td>
                </tr>
            </tbody>
        </table>

        <div class="text-center mt-5">
            <a href="{{ route('register') }}" class="btn btn-lg btn-primary shadow-lg">Connect to a Tiler</a>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        &copy; {{ date('Y') }} Building Job Catalog. All rights reserved.
    </footer>
</body>
</html>

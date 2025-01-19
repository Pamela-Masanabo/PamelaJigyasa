<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plasterers - Building Job Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        header {
            background: url('https://via.placeholder.com/1500x300?text=Plasterers') no-repeat center center;
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
        <h1>Plasterers</h1>
    </header>

    <div class="container my-5">
        <h2 class="text-center mb-4">Why Choose Our Plasterers?</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <img src="data:image/jpeg;base64,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" alt="Plasterer at work" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <p class="text-muted">
                    Plasterers specialize in creating smooth and beautiful wall and ceiling surfaces. Their tasks include:
                </p>
                <ul class="list-group mb-4">
                    <li class="list-group-item">Plastering walls and ceilings to create a smooth finish.</li>
                    <li class="list-group-item">Applying decorative plasterwork for enhanced aesthetics.</li>
                    <li class="list-group-item">Repairing cracks and holes in walls and ceilings.</li>
                </ul>
                <p class="text-muted">
                    Our expert plasterers ensure that your walls are flawless and ready for paint, adding both function and style to your space.
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
                    <td>Wall plastering (per sq. ft.)</td>
                    <td>$3 - $10</td>
                    <td>1-2 days</td>
                </tr>
                <tr>
                    <td>Ceiling plastering (per sq. ft.)</td>
                    <td>$4 - $12</td>
                    <td>1-2 days</td>
                </tr>
                <tr>
                    <td>Decorative plaster finishes</td>
                    <td>$100 - $500</td>
                    <td>Depends on design</td>
                </tr>
            </tbody>
        </table>

        <div class="text-center mt-5">
            <a href="{{ route('register') }}" class="btn btn-lg btn-primary shadow-lg">Connect to a Plasterer</a>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        &copy; {{ date('Y') }} Building Job Catalog. All rights reserved.
    </footer>
</body>
</html>

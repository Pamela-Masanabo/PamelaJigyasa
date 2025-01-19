<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plumbers - Building Job Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        header {
            background: url('https://via.placeholder.com/1500x300?text=Plumbers') no-repeat center center;
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
        <h1>Plumbers</h1>
    </header>

    <div class="container my-5">
        <h2 class="text-center mb-4">Why Choose Our Plumbers?</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeXF3jssfHBpU5twiHRv3ylmAj8Ko5CBfrNw&s"
                   alt="Plumber at work" class="img-fluid rounded shadow col-md-12">
            </div>
            <div class="col-md-6">
                <p class="text-muted">
                    Plumbers are essential professionals who handle a variety of critical tasks, including:
                </p>
                <ul class="list-group mb-4">
                    <li class="list-group-item">Installing and repairing pipes and plumbing systems.</li>
                    <li class="list-group-item">Fixing leaks and ensuring water flow is uninterrupted.</li>
                    <li class="list-group-item">Maintaining and servicing water heaters and boilers.</li>
                    <li class="list-group-item">Diagnosing and resolving plumbing emergencies.</li>
                </ul>
                <p class="text-muted">
                    Whether it's a minor repair or a large-scale plumbing installation, our experienced plumbers have got you covered. We ensure quality, efficiency, and reliability in every service.
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
                    <td>Fixing a leaking pipe</td>
                    <td>$50 - $100</td>
                    <td>1-2 hours</td>
                </tr>
                <tr>
                    <td>Installing a water heater</td>
                    <td>$500 - $1,000</td>
                    <td>4-6 hours</td>
                </tr>
                <tr>
                    <td>Emergency plumbing services</td>
                    <td>$100 - $200 (extra fees may apply)</td>
                    <td>Varies based on issue</td>
                </tr>
            </tbody>
        </table>

        <hr class="my-5">

        <h3>What Makes Us Stand Out?</h3>
        <p class="text-muted">
            Our team of plumbers is certified, experienced, and committed to delivering exceptional service. We pride ourselves on:
        </p>
        <ul class="list-unstyled">
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Transparent pricing with no hidden fees.</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> 24/7 availability for emergency services.</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> High-quality materials and tools used in every project.</li>
        </ul>

        <div class="text-center mt-5">
            <a  href="{{ route('register') }}" class="btn btn-lg btn-primary shadow-lg">Connect to a Plumber</a>
        </div>
    </div>        

    <footer class="bg-dark text-white text-center py-3 mt-5">
        &copy; {{ date('Y') }} Building Job Catalog. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

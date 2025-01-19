<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carpenters - Building Job Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        header {
            background: url('https://via.placeholder.com/1500x300?text=Carpenters') no-repeat center center;
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
        <h1>Carpenters</h1>
    </header>

    <div class="container my-5">
        <h2 class="text-center mb-4">Why Choose Our Carpenters?</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtxQ0Fx-lb1LdLefuuJrbyPT47wRQ8vvTOrg&s" alt="Carpenter at work" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <p class="text-muted">
                    Carpenters are skilled professionals who create and repair wooden structures. Their tasks include:
                </p>
                <ul class="list-group mb-4">
                    <li class="list-group-item">Building and installing furniture, doors, and windows.</li>
                    <li class="list-group-item">Repairing wooden structures and fixtures.</li>
                    <li class="list-group-item">Constructing frameworks for buildings and homes.</li>
                </ul>
                <p class="text-muted">
                    Our carpenters provide precise craftsmanship, ensuring all wooden projects are durable and aesthetically pleasing.
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
                    <td>Furniture building (per item)</td>
                    <td>$50 - $500</td>
                    <td>1-2 days</td>
                </tr>
                <tr>
                    <td>Door and window installations</td>
                    <td>$100 - $400</td>
                    <td>3-5 hours</td>
                </tr>
                <tr>
                    <td>Home framework construction</td>
                    <td>$2,000 - $10,000</td>
                    <td>1-3 weeks</td>
                </tr>
            </tbody>
        </table>

        <div class="text-center mt-5">
            <a href="{{ route('register') }}" class="btn btn-lg btn-primary shadow-lg">Connect to a Carpenter</a>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        &copy; {{ date('Y') }} Building Job Catalog. All rights reserved.
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricians - Building Job Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        header {
            background: url('https://via.placeholder.com/1500x300?text=Electricians') no-repeat center center;
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
        <h1>Electricians</h1>
    </header>

    <div class="container my-5">
        <h2 class="text-center mb-4">Why Choose Our Electricians?</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDkeMcT_BQC9opbncS5NlA7WVmKEUJiV3zBGdU16zaCHwAWa2cvcZ4HTJPSwxqPWroIXc&usqp=CAU" alt="Electrician at work" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <p class="text-muted">
                    Electricians provide essential electrical services for homes and businesses. Their tasks include:
                </p>
                <ul class="list-group mb-4">
                    <li class="list-group-item">Wiring new homes or commercial spaces.</li>
                    <li class="list-group-item">Fixing electrical faults and power outages.</li>
                    <li class="list-group-item">Installing lighting, switches, and electrical appliances.</li>
                </ul>
                <p class="text-muted">
                    With years of experience, our electricians ensure your electrical systems are safe, efficient, and up to code.
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
                    <td>Electrical wiring for new homes</td>
                    <td>$1,000 - $3,000</td>
                    <td>2-4 days</td>
                </tr>
                <tr>
                    <td>Electrical fault repair</td>
                    <td>$50 - $200</td>
                    <td>1-3 hours</td>
                </tr>
                <tr>
                    <td>Lighting and fixture installation</td>
                    <td>$100 - $500</td>
                    <td>3-5 hours</td>
                </tr>
            </tbody>
        </table>

        <div class="text-center mt-5">
            <a href="{{ route('register') }}" class="btn btn-lg btn-primary shadow-lg">Connect to an Electrician</a>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        &copy; {{ date('Y') }} Building Job Catalog. All rights reserved.
    </footer>
</body>
</html>

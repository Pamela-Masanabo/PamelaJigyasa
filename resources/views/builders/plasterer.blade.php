<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plasterer Services</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .service-img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1>Plasterer Services</h1>
    <p>Get smooth and flawless walls and ceilings with our professional plastering services. Our skilled plasterers ensure precision and quality in every project.</p>
    
    <div class="row">
        <div class="col-md-4">
            <h3>Wall Plastering</h3>
            <img src="wall-plastering.jpg" alt="Wall Plastering" class="service-img">
            <p>Achieve perfectly smooth walls ready for painting or wallpapering with our expert wall plastering services.</p>
            <button class="btn btn-primary add-to-cart">Add a Service</button>
        </div>
        <div class="col-md-4">
            <h3>Ceiling Plastering</h3>
            <img src="ceiling-plastering.jpg" alt="Ceiling Plastering" class="service-img">
            <p>Our plasterers provide high-quality ceiling plastering services, ensuring a seamless and durable finish.</p>
            <button class="btn btn-primary add-to-cart">Add a Service</button>
        </div>
        <div class="col-md-4">
            <h3>Repair and Restoration</h3>
            <img src="repair-restoration.jpg" alt="Repair and Restoration" class="service-img">
            <p>Fix cracks, holes, or damaged plaster with our repair and restoration services to restore your surfaces to their original condition.</p>
            <button class="btn btn-primary add-to-cart">Add a Service</button>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', () => {
            const service = button.parentElement.querySelector('h3').textContent;
            alert(service + ' has been added to your cart!');
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

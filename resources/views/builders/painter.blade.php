<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painter Services</title>
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
    <h1>Painter Services</h1>
    <p>Transform your space with a fresh coat of paint! Our expert painters will provide professional, high-quality painting services for your home or business.</p>
    
    <div class="row">
        <div class="col-md-4">
            <h3>Interior Painting</h3>
            <img src="interior-painting.jpg" alt="Interior Painting" class="service-img">
            <p>Give your interior spaces a new look with professional painting. We offer a variety of colors and finishes to suit your style.</p>
            <button class="btn btn-primary add-to-cart">Add a Service</button>
        </div>
        <div class="col-md-4">
            <h3>Exterior Painting</h3>
            <img src="exterior-painting.jpg" alt="Exterior Painting" class="service-img">
            <p>Enhance the curb appeal of your property with exterior painting. We use high-quality paints that withstand the elements.</p>
            <button class="btn btn-primary add-to-cart">Add a Service</button>
        </div>
        <div class="col-md-4">
            <h3>Touch-Up Painting</h3>
            <img src="touch-up-painting.jpg" alt="Touch-Up Painting" class="service-img">
            <p>Need to touch up a few areas? We provide fast and efficient touch-up painting services for a seamless finish.</p>
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

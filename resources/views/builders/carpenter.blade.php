<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carpenter Services</title>
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
    <h1>Carpenter Services</h1>
    <p>Enhance your home with custom woodwork! Our professional carpenters offer top-notch craftsmanship for all your woodworking needs.</p>
    
    <div class="row">
        <div class="col-md-4">
            <h3>Furniture Making</h3>
            <img src="furniture-making.jpg" alt="Furniture Making" class="service-img">
            <p>From tables to chairs, our carpenters create high-quality, custom-made furniture to suit your taste and style.</p>
            <button class="btn btn-primary add-to-cart">Add a Service</button>
        </div>
        <div class="col-md-4">
            <h3>Cabinet Installation</h3>
            <img src="cabinet-installation.jpg" alt="Cabinet Installation" class="service-img">
            <p>Upgrade your kitchen or bathroom with custom cabinets that are built to last and tailored to your needs.</p>
            <button class="btn btn-primary add-to-cart">Add a Service</button>
        </div>
        <div class="col-md-4">
            <h3>Deck Construction</h3>
            <img src="deck-construction.jpg" alt="Deck Construction" class="service-img">
            <p>Enhance your outdoor space with a custom-built deck, perfect for enjoying the weather or entertaining guests.</p>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiler Services</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .hero-section {
            background: #007bff;
            color: white;
            padding: 50px 20px;
            text-align: center;
        }
        .services-section {
            padding: 30px 20px;
        }
        .card {
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        }
        .card-img-top {
            object-fit: cover;
            height: 150px;
        }
        .btn-custom {
            font-size: 0.9rem;
            padding: 8px 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<section class="hero-section">
    <h1>Welcome to Our Tiler Services</h1>
    <p>Expert tiling services to bring your space to life.</p>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <h2 class="text-center mb-4">Our Tiling Services</h2>
        <div class="row">
            <!-- Service Item -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Floor Tiling">
                    <div class="card-body">
                        <h5 class="card-title">Floor Tiling</h5>
                        <p class="card-text">Professional floor tiling for residential and commercial spaces.</p>
                        <select class="form-control mb-2">
                            <option value="100">Basic Floor Tiling - $100</option>
                            <option value="150">Premium Floor Tiling - $150</option>
                        </select>
                        <button class="btn btn-primary btn-custom add-to-cart" data-service="Floor Tiling">Add a Service</button>
                    </div>
                </div>
            </div>
            <!-- Service Item -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Wall Tiling">
                    <div class="card-body">
                        <h5 class="card-title">Wall Tiling</h5>
                        <p class="card-text">Expert wall tiling services for kitchens, bathrooms, and more.</p>
                        <select class="form-control mb-2">
                            <option value="80">Basic Wall Tiling - $80</option>
                            <option value="120">Luxury Wall Tiling - $120</option>
                        </select>
                        <button class="btn btn-primary btn-custom add-to-cart" data-service="Wall Tiling">Add a Service</button>
                    </div>
                </div>
            </div>
            <!-- Service Item -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Tile Repair">
                    <div class="card-body">
                        <h5 class="card-title">Tile Repair</h5>
                        <p class="card-text">Fix cracks, chips, or damaged tiles with professional repair services.</p>
                        <select class="form-control mb-2">
                            <option value="50">Tile Repair - $50</option>
                            <option value="100">Full Tile Replacement - $100</option>
                        </select>
                        <button class="btn btn-primary btn-custom add-to-cart" data-service="Tile Repair">Add a Service</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cart Section -->
        <h3 class="mt-5">Your Cart</h3>
        <ul id="cart" class="list-group mb-4">
            <li class="list-group-item">No services added yet.</li>
        </ul>
        <button class="btn btn-success" id="checkout-btn" style="display: none;">Checkout</button>
    </div>
</section>

<script>
    const cart = document.getElementById('cart');
    const checkoutBtn = document.getElementById('checkout-btn');

    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', () => {
            const cardBody = button.parentElement;
            const service = button.getAttribute('data-service');
            const price = cardBody.querySelector('select').value;

            // Add service to cart
            const li = document.createElement('li');
            li.className = 'list-group-item d-flex justify-content-between align-items-center';
            li.textContent = `${service} - $${price}`;

            const removeBtn = document.createElement('button');
            removeBtn.className = 'btn btn-danger btn-sm';
            removeBtn.textContent = 'Remove';
            removeBtn.addEventListener('click', () => {
                li.remove();

                // Hide checkout button if cart is empty
                if (cart.children.length === 0) {
                    const emptyMessage = document.createElement('li');
                    emptyMessage.className = 'list-group-item';
                    emptyMessage.textContent = 'No services added yet.';
                    cart.appendChild(emptyMessage);
                    checkoutBtn.style.display = 'none';
                }
            });

            li.appendChild(removeBtn);
            cart.appendChild(li);

            // Show checkout button if hidden
            checkoutBtn.style.display = 'block';

            // Remove "No services added yet" if present
            if (cart.firstChild && cart.firstChild.textContent === 'No services added yet.') {
                cart.firstChild.remove();
            }
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

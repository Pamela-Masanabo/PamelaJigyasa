<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plumber Services</title>
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
    <h1>Welcome to Our Plumber Services</h1>
    <p>Professional and reliable plumbing services tailored to your needs.</p>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <h2 class="text-center mb-4">Our Services</h2>
        <div class="row">
            <!-- Service Item -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Pipe Repairs">
                    <div class="card-body">
                        <h5 class="card-title">Pipe Repairs</h5>
                        <p class="card-text">Expert solutions for leaking or broken pipes.</p>
                        <select class="form-control mb-2">
                            <option value="50">Minor Leak Repair - $50</option>
                            <option value="100">Major Pipe Replacement - $100</option>
                            <option value="150">Full Pipe System Overhaul - $150</option>
                        </select>
                        <button class="btn btn-primary btn-custom add-to-cart" data-service="Pipe Repairs">Add a Service</button>
                    </div>
                </div>
            </div>
            <!-- Service Item -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Drain Cleaning">
                    <div class="card-body">
                        <h5 class="card-title">Drain Cleaning</h5>
                        <p class="card-text">Quick and effective drain cleaning services.</p>
                        <select class="form-control mb-2">
                            <option value="75">Basic Drain Unclogging - $75</option>
                            <option value="150">Complete Drain Overhaul - $150</option>
                            <option value="200">Sewer Line Cleaning - $200</option>
                        </select>
                        <button class="btn btn-primary btn-custom add-to-cart" data-service="Drain Cleaning">Add a Service</button>
                    </div>
                </div>
            </div>
            <!-- Service Item -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Water Heater Installation">
                    <div class="card-body">
                        <h5 class="card-title">Water Heater Installation</h5>
                        <p class="card-text">Professional water heater installation services.</p>
                        <select class="form-control mb-2">
                            <option value="200">Standard Installation - $200</option>
                            <option value="300">Premium Installation with Warranty - $300</option>
                            <option value="350">Tankless Water Heater Installation - $350</option>
                        </select>
                        <button class="btn btn-primary btn-custom add-to-cart" data-service="Water Heater Installation">Add a Service</button>
                    </div>
                </div>
            </div>
            <!-- Service Item -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Faucet Installation/Repair">
                    <div class="card-body">
                        <h5 class="card-title">Faucet Installation/Repair</h5>
                        <p class="card-text">Installation and repair of kitchen and bathroom faucets.</p>
                        <select class="form-control mb-2">
                            <option value="40">Faucet Repair - $40</option>
                            <option value="80">Faucet Replacement - $80</option>
                            <option value="100">Luxury Faucet Installation - $100</option>
                        </select>
                        <button class="btn btn-primary btn-custom add-to-cart" data-service="Faucet Installation/Repair">Add a Service</button>
                    </div>
                </div>
            </div>
            <!-- Service Item -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Toilet Repairs">
                    <div class="card-body">
                        <h5 class="card-title">Toilet Repairs</h5>
                        <p class="card-text">Fixing leaks, clogs, and flushing issues.</p>
                        <select class="form-control mb-2">
                            <option value="60">Basic Repair - $60</option>
                            <option value="120">Advanced Repair - $120</option>
                            <option value="150">Full Toilet Replacement - $150</option>
                        </select>
                        <button class="btn btn-primary btn-custom add-to-cart" data-service="Toilet Repairs">Add a Service</button>
                    </div>
                </div>
            </div>
            <!-- Service Item -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Leak Detection">
                    <div class="card-body">
                        <h5 class="card-title">Leak Detection Services</h5>
                        <p class="card-text">Advanced tools to find hidden leaks in your home.</p>
                        <select class="form-control mb-2">
                            <option value="100">Standard Detection - $100</option>
                            <option value="200">Comprehensive Inspection - $200</option>
                            <option value="250">Advanced Leak Detection - $250</option>
                        </select>
                        <button class="btn btn-primary btn-custom add-to-cart" data-service="Leak Detection Services">Add a Service</button>
                    </div>
                </div>
            </div>
            <!-- Service Item -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Sewer Line Inspection">
                    <div class="card-body">
                        <h5 class="card-title">Sewer Line Inspection</h5>
                        <p class="card-text">Inspection and maintenance of sewer lines to prevent clogs and backups.</p>
                        <select class="form-control mb-2">
                            <option value="150">Basic Inspection - $150</option>
                            <option value="250">Advanced Sewer Camera Inspection - $250</option>
                        </select>
                        <button class="btn btn-primary btn-custom add-to-cart" data-service="Sewer Line Inspection">Add a Service</button>
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

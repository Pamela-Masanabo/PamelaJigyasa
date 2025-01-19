<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User/Freelancer Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .cover-photo {
            height: 250px;
            background: url('https://via.placeholder.com/1200x300') no-repeat center center;
            background-size: cover;
            border-radius: 15px 15px 0 0;
            position: relative;
        }

        .profile-picture-wrapper {
            position: absolute;
            top: 150px;
            left: 20px;
            display: flex;
            align-items: center;
        }

        .profile-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 4px solid white;
            object-fit: cover;
        }

        .upload-btn {
            margin-left: 15px;
        }

        .highlighted-skill {
            background-color: #007bff;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            margin: 5px;
            display: inline-block;
        }

        footer {
            background-color: #f8f8f8;
            color: #555;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #ddd;
        }

        footer a {
            color: #007bff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header class="bg-primary text-white text-center py-4">
        <h1>User/Freelancer Profile</h1>
    </header>

    <div class="container mt-4">
        <div class="card">
            <!-- Cover Photo -->
            <div class="cover-photo"></div>

            <div class="card-body">
                <!-- Profile Section -->
                <div class="profile-picture-wrapper">
                    <img src="https://via.placeholder.com/150" alt="Profile Picture" class="profile-photo">
                    <div class="ms-3">
                        <label for="profilePicture" class="btn btn-primary upload-btn">Change Profile Picture</label>
                        <input type="file" id="profilePicture" class="d-none">

                        <label for="coverPhoto" class="btn btn-secondary upload-btn">Change Cover Photo</label>
                        <input type="file" id="coverPhoto" class="d-none">
                    </div>
                </div>

                <div class="mt-5 text-center">
                    <h2>User/Freelancer</h2>
                    <p>Freelance Builder</p>
                </div>

                <!-- Bio Section -->
                <div class="mt-4">
                    <h3>Bio</h3>
                    <textarea class="form-control" placeholder="Write a short bio about yourself..." rows="5"></textarea>
                </div>

                <!-- Skills Section -->
                <div class="mt-4">
                    <h3>Skills</h3>
                    <select id="skillsDropdown" class="form-select" multiple>
                        <option value="Carpentry">Carpentry</option>
                        <option value="Plumbing">Plumbing</option>
                        <option value="Electrical">Electrical</option>
                        <option value="Masonry">Masonry</option>
                        <option value="Welding">Welding</option>
                        <option value="Roofing">Roofing</option>
                        <option value="Tiling">Tiling</option>
                        <option value="Painting">Painting</option>
                        <option value="Drywall">Drywall</option>
                        <option value="HVAC">HVAC</option>
                        <option value="Landscaping">Landscaping</option>
                    </select>
                </div>

                <!-- Portfolio Upload -->
                <div class="mt-4">
                    <h3>Portfolio</h3>
                    <input type="file" class="form-control" multiple>
                </div>
            </div>
        </div>
    </div>

    <footer class="mt-5">
        <p><strong>Banstec</strong></p>
        <p>About | Privacy | Terms</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

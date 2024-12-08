<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">EnerLogs Employees & Product Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container text-center">
            <h2>About Us</h2>
            <p>Welcome to Suryalogix, your premier solution provider for the Power and Energy Sector. We offer a diverse
                range of innovative products tailored to meet the evolving needs of modern infrastructure. With a
                comprehensive suite of offerings spanning Communication, Asset Management, CMS/CMSS, Performance
                Analysis, Intelligent and Hybrid Controllers, and Weather Sensors, we are committed to revolutionizing
                the industry.

                SuryaLogix is a pioneering product development company in the field of renewables, at the forefront of
                leveraging cutting-edge technologies such as IoT, AI, and wireless communication. We specialize in
                addressing our clients pain points in remote monitoring and management, smart/hybrid controllers, asset
                management, SCADA, and more. Our innovative products are designed to optimize and digitalize green
                energy generation, ultimately enhancing ROI for our clients.</p>
        </div>
    </section>
    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>

</html>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap einbinden -->
    <link href="https://utensils.samwilliam.de/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Hero-Bereich -->
    <div class="hero">
        <div class="text-center py-5 bg-success text-white">
            <h1 class="display-4">Willkommen auf meiner Webseite</h1>
            <p class="lead">Dies ist ein Beispiel für eine Webseite mit Bootstrap.</p>
            <a href="#" class="btn btn-primary btn-lg">Mehr erfahren</a>
        </div>
    </div>

    <!-- Navigation -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <img src="https://utensils.samwilliam.de/bootstrap/img/bootstrap-logo.svg" alt="Bootstrap Logo" width="30" height="24" class="d-inline-block align-text-top">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hauptinhalt -->
    <main class="flex-grow-1 container-fluid mt-4">
        <div class="row gx-2 gy-2">

            <!-- Linke Seitenleiste -->
            <div class="col-md-3">
                <div class="bg-light border rounded h-100">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">Home</a>
                        <a href="#" class="list-group-item list-group-item-action">Profile</a>
                        <a href="#" class="list-group-item list-group-item-action">Messages</a>
                        <a href="#" class="list-group-item list-group-item-action">Settings</a>
                    </div>
                </div>
            </div>

            <!-- Rechter Hauptbereich -->
            <div class="col-md-9">
                <div class="bg-light p-4 border rounded h-100">

                    <h1>Willkommen auf meiner Webseite</h1>
                    <p>Dies ist ein Beispiel für eine Webseite mit Bootstrap.</p>
                    <button class="btn btn-primary">Klick mich</button>
                    <button class="btn btn-secondary">Oder mich</button>

                    <!-- Cards -->
                    <h3 class="mt-4">Weitere Inhalte</h3>
                    <p>Hier könnten weitere Inhalte stehen, wie z.B. Bilder, Texte oder Formulare.</p>
                    <div class="row gx-2 gy-2">
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="https://picsum.photos/200" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="https://picsum.photos/300" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="https://picsum.photos/500" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kontaktformular -->
                    <div class="bg-white p-4 border rounded mt-4">
                    <h3 class="mt-4">Kontaktieren Sie uns</h3>
                    <form class="mt-3">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Ihr Name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-Mail-Adresse</label>
                            <input type="email" class="form-control" id="email" placeholder="Ihre E-Mail-Adresse">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Nachricht</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Ihre Nachricht"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Absenden</button>
                    </form>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-light text-center py-3 mt-4">
        <p>&copy; 2024 Meine Webseite. Alle Rechte vorbehalten.</p>
        <a href="#" class="text-decoration-none">Impressum</a> | <a href="#" class="text-decoration-none">Datenschutz</a> | <a href="#" class="text-decoration-none">Kontakt</a>
        <div class="social-icons mt-2">
            <a href="#" class="text-decoration-none me-2"><i class="bi bi-facebook"></i> Facebook</a>
            <a href="#" class="text-decoration-none me-2"><i class="bi bi-twitter"></i> Twitter</a>
            <a href="#" class="text-decoration-none"><i class="bi bi-instagram"></i> Instagram</a>
        </div>
    </footer>

    <!-- Bootstrap Bundle mit Popper einbinden -->
    <script src="https://utensils.samwilliam.de/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

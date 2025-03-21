<!-- contact.php -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Antonin Depardieu</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Header section -->
    <header>
        <nav>
            <!-- Ton menu de navigation ici -->
            <a href="index.php">Accueil</a>
            <a href="Book.php">Book</a>
            <a href="showreel.php">Showreel</a>
            <a href="About.php">About</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <!-- Main contact section -->
    <section class="contact-section">
        <h1>Contactez-moi</h1>

        <form action="send_message.php" method="POST">
            <div>
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <div>
                <button type="submit">Envoyer</button>
            </div>
        </form>

        <!-- Info additional -->
        <div class="contact-info">
            <h2>Informations supplémentaires</h2>
            <p>Vous pouvez également me contacter à :</p>
            <ul>
                <li>Email : <a href="mailto:depardieuantonin@gmail.com">depardieuantonin@gmail.com</a></li>
                <li>Téléphone : +33 1 23 45 67 89</li>
                <li>Adresse : 123 Rue Exemple, Paris, France</li>
            </ul>
        </div>
    </section>

    <!-- Footer section -->
    <footer>
        <!-- Footer content here -->
    </footer>

</body>

</html>

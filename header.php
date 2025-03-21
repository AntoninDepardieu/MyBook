<!-- header.php -->
<section class="section1">
    <div class="home-bar">
        <div class="titre-div"><a class="titre" href="About.php">Antonin Depardieu</a></div>
        <div class="icon-div"><a class="iconbutton" href="index.php"><img src="Logo.png" class="icon"></a></div>

        <div class="menu">
            <a href="Book.php" class="<?= basename($_SERVER['PHP_SELF']) == 'Book.php' ? 'active' : '' ?>">Book</a>
            <a href="showreel.php" class="<?= basename($_SERVER['PHP_SELF']) == 'showreel.php' ? 'active' : '' ?>">Showreel</a>
            <a href="About.php" class="<?= basename($_SERVER['PHP_SELF']) == 'About.php' ? 'active' : '' ?>">About</a>
            <!-- <a href="Contact.php" class="<?= basename($_SERVER['PHP_SELF']) == 'Contact.php' ? 'active' : '' ?>">Contacts</a> -->
        </div>
    </div>
</section>

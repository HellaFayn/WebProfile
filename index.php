<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $name = "Alyssa May A. Valderosa";
    $profession = "Web Developer";
    $bio = "A passionate and aspiring web developer with a passion for creating interactive and user-friendly websites. I'm currently honing my skills in HTML, CSS and PHP, and I love experimenting with new technologies. My journey into web development started out of curiosity, and now it's a path I'm excited to explore further. I'm eager to learn more about front-end and back-end development, and I’m always up for a challenge that helps me grow. When I’m not coding, I enjoy watching YouTube tutorials, exploring design trends, and contributing to open-source projects.";
    $skills = ["HTML", "CSS", "PHP", "MySQL"];
    $contactEmail = "alyssamayvalderosa12@gmail.com";
    $profilePicture = "profile.jpg";
    $githubProfile = "https://github.com/HellaFayn"
    ?>

    <header>
        <div class="container">
            <div class="profile-picture">
                <img src="<?php echo $profilePicture; ?>" alt="<?php echo $name; ?>'s picture">
            </div>
            <h1><?php echo $name; ?></h1>
            <p><?php echo $profession; ?></p>
        </div>
    </header>

    <section class="about">
        <div class="container">
            <h2>About Me</h2>
            <p><?php echo $bio; ?></p>
        </div>
    </section>

    <section class="skills">
        <div class="container">
            <h2>Skills</h2>
            <ul>
                <?php foreach ($skills as $skill): ?>
                    <li><?php echo $skill; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <section class="github">
        <div class="container">
            <h2>GitHub Repositories</h2>
            <p>You can find all my projects and contributions on my <a href="<?php echo $githubProfile; ?>" target="_blank">GitHub Profile</a>.</p>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <h2>Contact</h2>
            <p>Email: <a href="mailto:<?php echo $contactEmail; ?>"><?php echo $contactEmail; ?></a></p>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 <?php echo $name; ?></p>
        </div>
    </footer>
</body>
</html>
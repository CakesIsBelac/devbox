<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Codespaces</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/style.css" media="all" />
    <script src="/assets/script.js"></script>
</head>
<body class="about">
    <div id="main" class="about">
        <a href="/"><img src="/assets/codespaces.png" alt="Codespaces logo" /></a>
        <div class="about__container">
            <div class="about__left">
                <img src="/assets/Photo.jpeg" alt="Photo of Caleb" />
            </div>
            <div class="about__right">
                <h1>About Me</h1>
                <h3 class="about-name">Caleb</h3>
                <p>Welcome to my about page! Here you can find more information about my background, skills, and interests.</p>
                <p>I'm a 15-year-old homeschool student from Virginia. I grew up with my two parents and one sibling. I enjoy sports such as soccer, Jiu Jitsu, and playing volleyball with my friends.</p>
                <p>In my free time, I like playing games such as Dungeons and Dragons and Assassin's Creed. I also enjoy listening to a podcast where they create their own Dungeons and Dragons campaigns and play them. I love it because they are very creative and funny.</p>

                <table bgcolor="black">
                    <thead>
                        <tr bgcolor="white">
                            <th>Hobby</th>
                            <th>About</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr bgcolor="white">
                            <td>D&D</td>
                            <td>D&D is a popular combat roleplaying game where you can make up your own world and then the players can interact with the world that you have made. There are also premade campaigns that you can play but in my opinion they arent as fun. </td>
                        </tr>
                        <tr bgcolor="white">
                            <td>Gaming</td>
                            <td>I like playing games such as Assassin's Creed, Clash Royale and Fall Guys. I like those games so much because you need strategy and skill to win.</td>
                        </tr>
                        <tr bgcolor="white">
                            <td>Listening to podcasts</td>
                            <td>I enjoy listening to podcasts such as Just Roll With It and Distractible. Just Roll With It is a Dungeons and Dragons Podcast where they make their own campaigns for D&D. Distractible is a podcast where they just chat and play fun games for points to see who will be the next host for the next episode.</td>
                    </tbody>
                </table>
                     
                <div class="about__socials">
                    </p>
                </form>
            </div>

            <?php
            // Set socials.
            $socials = [
                'instagram' => 'https://www.instagram.com',
                'snapchat'  => 'https://www.snapchat.com',
                'facebook'  => 'https://www.facebook.com',
                'imessage'  => 'tel:540-616-7590'
            ];

            // Loop.
            foreach ($socials as $social_id => $social_url) {
                echo '<a href="' . $social_url . '" class="about-social" target="_blank">';
                echo '<pfp="/assets/' . $social_id . '.svg" alt="' . ucfirst($social_id) . ' icon" />';
                echo '</a>';
            }
            ?>
                </div> <!-- about__socials -->
            </div> <!-- about__right -->
        </div> <!-- about__container -->
    </div> <!-- main -->
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta name= viewport content= "width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Voorbeeld.css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    footer {
        text-align: center;
        background-color: #333;
        color: #fff;
        padding: 0px;
        bottom: 0;
        width: 100%;
        /* position: fixed;
        z-index: 1; */
    }
</style>
<body>
<header>
<nav id="navbar">
    <div class="menu">
    <a href="index.php">Home</a>
    <a href="">Over Mij</a>
    <a href="">Opleidingen</a>
    <a href="">Contact Me</a>
    </div>
</nav>
    <div class="header-content" id="home">
        <h1 class="animated fadeInDown">PleurHierJeNaam</h1>
        <h2 class="animated fadeInUp">WatJeWiltWordenOfzo</h2>

        <hr> <!-- Tussen Spatie -->

        <!-- Social Links en nog wat -->
        <div class="social-links">
            <a href="https://github.com/JeDing" target="_blank" class="github-link"><i class="fa fa-github" aria-hidden="true"></i></a>
            <a href="https://facebook.com/jenaam" target="_blank" class="fcc-link"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/in/JeLinkedIn" target="_blank" class="linkedin-link"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a href="https://twitter.com/JeTwitter" target="_blank" class="twitter-link"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="mailto:JeEmailAdress"><i class="email-link fa fa-envelope-o" aria-hidden="true"></i></a>
        </div>
    </div>
</header>
    <h1>Ode to a Large Tuna in the Market</h1>
    <h2>By Pablo Neruda</h2>
<article>
    <p>Here,<br />among the market vegetables,<br />this torpedo<br />from the ocean<br />depths,<br />a missile<br />that swam,<br />now<br />lying in front of me<br />dead.</p>
    <p>Surrounded<br />by the earth's green froth<br />—these lettuces,<br />bunches of carrots—<br />only you<br />lived through<br />the sea's truth, survived<br />the unknown, the<br />unfathomable<br />darkness, the depths<br />of the sea,<br />the great<br />abyss,<br /><em>le grand abîme</em>,<br />only you:<br />varnished<br />black-pitched<br />witness<br />to that deepest night.</p>
    <p>Only you:<br />dark bullet<br />barreled
        <br />from the depths,<br />carrying<br />only<br />your<br />one wound,<br />but resurgent,<br />always renewed,<br />locked into the current,<br />fins fletched<br />like wings<br />in the torrent,<br />in the coursing<br />of<br />the<br />underwater<br />dark,<br />like a grieving arrow,<br />sea-javelin, a nerveless<br />oiled harpoon.</p>
    <p>Dead<br />in front of me,<br />catafalqued king<br />of my own ocean;<br />once<br />sappy as a sprung fir<br />in the green turmoil,<br />once seed<br />to sea-quake,<br />tidal wave, now<br />simply<br />dead remains;<br />in the whole market<br />yours<br />was the only shape left<br />with purpose or direction<br />in this<br />jumbled ruin<br />of nature;<br />you are<br />a solitary man of war<br />among these frail vegetables,<br />your flanks and prow<br />black<br />and slippery<br />as if you were still<br />a well-oiled ship of the wind,<br />the only<br />true<br />machine<br />of the sea: unflawed,<br />undefiled,<br />navigating now<br />the waters of death.</p>
</article>
<footer>
    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script>, Bere kanters</p>
</footer>
</body>
<script>
    window.onscroll = () => {
        const nav = document.querySelector('#navbar');
        if(this.scrollY <= 10) nav.className = ''; else nav.className = 'scroll';
    };
</script>
</html>
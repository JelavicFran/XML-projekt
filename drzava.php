<?php
$ponude = json_decode(file_get_contents('ponude.json'), true);

$rim = array_filter($ponude, function($ponuda) {
    return $ponuda['id'] === 5; 
});

if (!empty($rim)) {
    $rim = reset($rim);
}
?>



<!DOCTYPE html>
<html>
<head>
<title>Jeldirects</title>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@100..900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">

<meta charset="UTF-8"> 

</head>
<body>
<header>
    <ul>
        <li><a href="index.html">Početna</a></li>
        <li><a href="ponude.php">Ponude</a></li>
        <li style="float:right"><a href="onama.php">O nama</a></li>
      </ul>
</header>
<main style="padding-top:50px"> 
    <h1>PUTOVANJE U RIM</h1>
<img src="images/ita1.png" height="100%"; width="100%" style="box-shadow: 0px 3px 1px rgba(2, 33, 33, 1);border-radius:5px;">
    <article>
        <h2>Istražiti jedan od najljepših gradova u svijetu, prepun povijesti, kulture i nevjerojatnih znamenitosti.        </h2>
<p>Rim je grad bogate povijesti, umjetnosti i kultur. Od antičkih ruševina do baroknih palača, svaki kamenčić Rima priča priču. Nalazište nekih od najvećih umjetničkih blaga, kao što su Vatikanski muzej i Koloseum. Uživajte u jedinstvenoj atmosferi uličnih trgova, fontana i znamenitosti, istražujući ovaj nevjerojatan grad.</p>
        <h2>PLAN I PROGRAM</h2>
    <h3>1. dan: Dolazak u Rim</h3>
    <h3>2. dan: Razgledavanje antičkih znamenitosti</h3>
    <h3>3. dan: Vatikan i umjetničke znamenitosti</h3>
    <h3>4. dan: Trgovi, fontane i šetnja gradom</h3>
    <h3>5. dan: Villa Borghese i šetnja parkom</h3>
    <h3>6. dan: Slobodno vrijeme i odlazak</h3>

    </article>
    <div style="padding-top:30px">
    <img src="images/ita2.png" height="500"; width="44%" style="box-shadow: 0px 3px 1px rgba(2, 33, 33, 1);border-radius:5px">
    <aside style="font-size:20px">
    <h2><?php echo $rim['grad']; ?>, <?php echo $rim['drzava']; ?></h2>
    <p><strong>Datum polaska:</strong> <?php echo $rim['datumpolaska']; ?></p>
    <p><strong>Mjesto polaska:</strong> <?php echo $rim['mjestopolaska']; ?></p>
    <p><strong>Hotel:</strong> <?php echo $rim['hotel']; ?></p>
    <p><strong>Trajanje:</strong> <?php echo $rim['trajanje']; ?></p>
    <p><strong>Cijena:</strong> <?php echo $rim['cijena']; ?></p>
<a href="#"><button style="float:right">REZERVIRAJ</button></a>
</aside>

</div>
</main> 
<footer>
    <h2>Fran Jelavić</h2>    
</footer> 
</body>
</html> 
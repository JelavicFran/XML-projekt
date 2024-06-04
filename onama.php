<?php

$onama = json_decode(file_get_contents('onama.json'), true);

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
        <li style="float:right" class="active"><a href="#">O nama</a></li>
      </ul>
</header>
<main> 
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1012.3339435639326!2d15.968879546172241!3d45.79523976126559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d68b441ce2df%3A0x54e2a03adf42446f!2sZagreb%20University%20of%20Applied%20Sciences!5e0!3m2!1sen!2shr!4v1717519714638!5m2!1sen!2shr" width="44%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
    <aside>
        <h2>Nađite nas na lokacijama</h2>
        <table class="lokacije">
           <thead>
             <tr >
               <th  id="gra" scope="col"></th>
               <th  id="ul" scope="col"></th>
               <th id="rad1" scope="col"></th>
               <th id="rad2" scope="col"></th>

             </tr>
           </thead>
           <tbody>
           <?php if ($onama !== null): ?>  <?php foreach($onama as $onama): ?>
                   <tr>
                       <td><?php echo $onama['lok1']; ?></td>
                       <td><?php echo $onama['lok2']; ?></td>
                       <td><?php echo $onama['lok3']; ?></td>
                       <td><?php echo $onama['lok4']; ?></td>

                   </tr>
               <?php endforeach; ?>
           <?php endif; ?>             </tbody>
          </table>
    </aside>
    <article>
        <h1>TKO SMO MI?</h1>
        <p> Dobrodošli u Jeldirects, vašu pouzdanu turističku agenciju koja vam pomaže otkriti najljepša mjesta na svijetu. Naša agencija je osnovana s ciljem pružanja nezaboravnih putničkih iskustava i vrhunske usluge našim klijentima.</p>
        <h1>Naša misija</h1>
        <p>   Naša misija je stvoriti jedinstvene i prilagođene putničke aranžmane koji zadovoljavaju želje i potrebe svakog putnika. Bilo da tražite avanturu, opuštanje, kulturno obogaćenje ili obiteljski odmor, mi smo tu da vam pružimo najbolje moguće iskustvo.</p>
        <h2> Kontaktirajte nas</h2>
        <p>   kontakt@jeldirects.com</p>
        <p>   091-123-1234</P>
    </article>
</main> 
<footer>
    <h2>Fran Jelavić</h2>    
</footer> 
</body>
</html> 
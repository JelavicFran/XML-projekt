<?php

$ponude = json_decode(file_get_contents('ponude.json'), true);

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
        <li><a href="#"  class="active">Ponude</a></li>
        <li style="float:right"><a href="onama.php">O nama</a></li>
      </ul>
</header>
<main> 
<article>
    <table class="table">
       <thead>
         <tr>
           <th id="drz" scope="col"></th>
           <th id="gra" scope="col"></th>
           <th id="hot" scope="col"></th>
           <th id="dat" scope="col"></th>
           <th id="mje" scope="col"></th>
           <th id="tra" scope="col"></th>
           <th id="cij" scope="col"></th>
         </tr>
       </thead>
       <tbody id="ponudeBody">
       <?php if ($ponude !== null): ?>
           <?php foreach(array_slice($ponude, 0, 6) as $ponuda): ?>
            <tr>
                   <td> <a href="drzava.php"><?php echo $ponuda['drzava']; ?></a></td>
                   <td> <a href="drzava.php"><?php echo $ponuda['grad']; ?></a></td>
                   <td> <a href="drzava.php"><?php echo $ponuda['hotel']; ?></a></td>
                   <td> <a href="drzava.php"><?php echo $ponuda['datumpolaska']; ?></a></td>
                   <td> <a href="drzava.php"><?php echo $ponuda['mjestopolaska']; ?></a></td>
                   <td> <a href="drzava.php"><?php echo $ponuda['trajanje']; ?></a></td>
                   <td> <a href="drzava.php"><?php echo $ponuda['cijena']; ?></a></td>
               </tr>
       
           <?php endforeach; ?>
       <?php endif; ?>
       </tbody>
    </table>
        
    <div class="gumbi">
        <button id="prviG">1.</button>
        <button id="drugiG">2.</button>
    </div>
</article> 

<script>
var prvi = <?php echo json_encode(array_slice($ponude, 0, 6)); ?>;
var drugi = <?php echo json_encode(array_slice($ponude, 6)); ?>;

document.getElementById('prviG').addEventListener('click', function() {
    var tbody = document.getElementById('ponudeBody');
    tbody.innerHTML = ''; 
    prvi.forEach(function(ponuda) {
        var sljdeca = document.createElement('tr');
        sljdeca.innerHTML = `
            <td><a href="drzava.php">${ponuda['drzava']}</a></td>
            <td><a href="drzava.php">${ponuda['grad']}</a></td>
            <td><a href="drzava.php">${ponuda['hotel']}</a></td>
            <td><a href="drzava.php">${ponuda['datumpolaska']}</a></td>
            <td><a href="drzava.php">${ponuda['mjestopolaska']}</a></td>
            <td><a href="drzava.php">${ponuda['trajanje']}</a></td>
            <td><a href="drzava.php">${ponuda['cijena']}</a></td>
        `;
        tbody.appendChild(sljdeca);
    });
});

document.getElementById('drugiG').addEventListener('click', function() {
    var tbody = document.getElementById('ponudeBody');
    tbody.innerHTML = ''; 
    drugi.forEach(function(ponuda) {
        var sljdeca = document.createElement('tr');
        sljdeca.innerHTML = `
        <td><a href="drzava.php">${ponuda['drzava']}</a></td>
            <td><a href="drzava.php">${ponuda['grad']}</a></td>
            <td><a href="drzava.php">${ponuda['hotel']}</a></td>
            <td><a href="drzava.php">${ponuda['datumpolaska']}</a></td>
            <td><a href="drzava.php">${ponuda['mjestopolaska']}</a></td>
            <td><a href="drzava.php">${ponuda['trajanje']}</a></td>
            <td><a href="drzava.php">${ponuda['cijena']}</a></td>
        `;
        tbody.appendChild(sljdeca);
    });
});
</script>

</main> 
<footer>
    <h2>Fran Jelavić</h2>    
</footer> 
</body>
</html> 
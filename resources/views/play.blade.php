<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <title>Escape Room</title>
    <link href="https://fonts.googleapis.com/css?family=Bangers|Cutive+Mono&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css'><link rel="stylesheet" href="./app.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

</head>
<body>
    <div id="container">
        <h1>Escape Room</h1>
        <h2>Faire face au harcèlement sexuel dans le milieu professionel</h2>
        <p>Réalisé par Axel, Noé, Alexis, William, Cyprien</p>
            <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo" required>
            <br>
            <button id="startButton" class="play-button" onclick=redirectToGame()>Start</button>

    </div>
</body>
</html>
<script>
        function redirectToGame() {
        const pseudo = document.getElementById('pseudo').value;
        if (pseudo) {
        window.location.href = `/game/${pseudo}`;
    } else {
        // Gérer le cas où le champ pseudo est vide
        alert('Veuillez saisir un pseudo avant de commencer.');
    }
    }
</script>

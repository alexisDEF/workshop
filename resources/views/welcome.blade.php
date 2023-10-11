<head>
    <title>Chronomètre</title>
</head>
<body>
<h1>Chronomètre</h1>
<div id="chronometre">0:00</div>
<button id="startStop">Démarrer</button>
<button id="reset">Réinitialiser</button>

<script>
    let isRunning = false;
    let seconds = 0;
    let minutes = 0;
    let timerInterval;

    const chronometreElement = document.getElementById('chronometre');
    const startStopButton = document.getElementById('startStop');
    const resetButton = document.getElementById('reset');

    function updateChronometre() {
        seconds++;
        if (seconds === 60) {
            seconds = 0;
            minutes++;
        }
        chronometreElement.textContent = minutes + ':' + (seconds < 10 ? '0' : '') + seconds;
    }

    startStopButton.addEventListener('click', function () {
        if (isRunning) {
            clearInterval(timerInterval);
            startStopButton.textContent = 'Démarrer';
        } else {
            timerInterval = setInterval(updateChronometre, 1000);
            startStopButton.textContent = 'Arrêter';
        }
        isRunning = !isRunning;
    });

    resetButton.addEventListener('click', function () {
        clearInterval(timerInterval);
        isRunning = false;
        seconds = 0;
        minutes = 0;
        chronometreElement.textContent = '0:00';
        startStopButton.textContent = 'Démarrer';
    });
</script>
</body>
</html>
<style>
    .image-en-premier-plan {
        position: absolute; /* Vous pouvez également utiliser "relative" en fonction de votre mise en page */
        top: 0;
        left: 0;
        z-index: 9999; /* La valeur de z-index détermine la profondeur de l'élément, un nombre plus élevé signifie qu'il sera au-dessus des éléments avec un z-index plus bas */
    }
</style>

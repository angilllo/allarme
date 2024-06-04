<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allarme - Risultato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Allarme di sicurezza</h1>
        <hr>
        <navbar>
            <a href="index.html" class="current-page">Home</a>
            <a href="relazione.html">Relazione</a>
        </navbar>
        <hr>
        <p>
          Ti spareranno? ... Scopriamolo insieme
        </p>
    </header>

    <main>
        <form action="02.06.2024.php" method="post">
            <fieldset>
                <legend>Inserire la distanza:</legend>
                <table border="0">
                    <tr>
                        <td>
                            <input type="text" name="distanza" size="20">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="invia" value="Invia">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
        <div class="left">
            <?php

            if (isset($_POST["distanza"]))
            {
                $distanza = intval($_POST["distanza"]);

                if ($distanza == 0)
                {
                    echo '<img src="0.png" width="1280" height="720" alt="Allarme 0">';
                } elseif ($distanza <= 20)
                {
                    echo '<img src="20.png" width="1280" height="720" alt="Allarme 20">';
                } elseif ($distanza <= 40)
                {
                    echo '<img src="40.png" width="1280" height="720" alt="Allarme 40">';
                } elseif ($distanza <= 60)
                {
                    echo '<img src="60.png" width="1280" height="720" alt="Allarme 60">';
                } elseif ($distanza <= 80)
                {
                    echo '<img src="80.png" width="1280" height="720" alt="Allarme 80">';
                } elseif ($distanza <= 100)
                {
                    echo '<img src="100.png" width="1280" height="720" alt="Allarme 100">';
                } elseif ($distanza <= 120)
                {
                    echo '<img src="120.png" width="1280" height="720" alt="Allarme 120">';
                } elseif ($distanza <= 140)
                {
                    echo '<img src="140.png" width="1280" height="720" alt="Allarme 140">';
                } elseif ($distanza <= 160)
                {
                    echo '<img src="160.png" width="1280" height="720" alt="Allarme 160">';
                } elseif ($distanza <= 180)
                {
                    echo '<img src="180.png" width="1280" height="720" alt="Allarme 180">';
                } elseif ($distanza <= 200)
                {
                    echo '<img src="200.png" width="1280" height="720" alt="Allarme 200">';
                } elseif ($distanza <= 220)
                {
                    echo '<img src="220.png" width="1280" height="720" alt="Allarme 220">';
                } elseif ($distanza <= 240)
                {
                    echo '<img src="240.png" width="1280" height="720" alt="Allarme 240">';
                } elseif ($distanza <= 260)
                {
                    echo '<img src="260.png" width="1280" height="720" alt="Allarme 260">';
                } elseif ($distanza <= 280)
                {
                    echo '<img src="280.png" width="1280" height="720" alt="Allarme 280">';
                } elseif ($distanza <= 300)
                {
                    echo '<img src="300.png" width="1280" height="720" alt="Allarme 300">';
                } elseif ($distanza <= 320)
                {
                    echo '<img src="320.png" width="1280" height="720" alt="Sirene">';
                } else
                {
                    echo '<p>Nessun allarme necessario.</p>';
                }
            } else
            {
                echo '<p>Inserire una distanza valida.</p>';
            }
            ?>
        </div>

    </main>

    <button id="scrollToBottomBtn">Visualizza l'immagine</button>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let scrollToBottomBtn = document.getElementById('scrollToBottomBtn');
        
            scrollToBottomBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: document.body.scrollHeight,
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <footer>
        <p>&copy; 2024 - Carlesso, Cecchin, Tognonato - Il sito "Allarme di sicurezza". Tutti i diritti riservati.</p>
    </footer>

</body>
</html>

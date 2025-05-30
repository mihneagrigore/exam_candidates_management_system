<?php
require_once('/home/moisilro/admitere.moisil.ro/dashboard/global/library.php');
FormTools\Core::init(array("start_sessions" => false));
FormTools\Modules::includeModule("data_visualization");
$width  = 600;
$height = 300;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Visualization</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        #countdown {
            font-size: 20px;
            color: #555;
            margin-bottom: 20px;
        }
        .visualization {
            margin: 20px auto;
            border: 1px solid #ddd;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 620px;
        }
    </style>
    <script>
        // Countdown timer and auto-refresh functionality
        let countdown = 30;

        function updateCountdown() {
            const countdownElement = document.getElementById('countdown');
            if (countdown > 0) {
                countdown--;
                countdownElement.textContent = `Urmatoarea actualizare in ${countdown} secunde`;
            } else {
                // Reload the page when countdown reaches 0
                location.reload();
            }
        }

        // Start the countdown timer
        setInterval(updateCountdown, 1000);
    </script>
</head>
<body>
    <div id="countdown">Urmatoarea actualiare in 30 de secunde.</div>
    <div class="visualization">
        <?php
        // Display the second visualization
        FormTools\Modules\DataVisualization\Visualizations::displayVisualization(2, $width, $height);
        ?>
    </div>
    <div class="visualization">
        <?php
        // Display the first visualization
        FormTools\Modules\DataVisualization\Visualizations::displayVisualization(3, $width, $height);
        ?>
    </div>
    
</body>
</html>

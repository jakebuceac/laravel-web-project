<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Your Last Donation</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
<form method="POST" action="/last_donation">
    @csrf
    <div id="container">
        <h1>Your Last Donation</h1>
        <div id="platelet">
            <h2>Platelet</h2>
            <div id="top-row">

                <div class="top-row-boxes">
                    <label><input type="text" name="pressure">Pressure</label>
                </div>
                <div class="top-row-boxes">
                    <label><input type="number" name="hemoglobin" min="0" step=".01">Hemoglobin</label>
                </div>
                <div class="top-row-boxes">
                    <label><input type="number" name="pulse">Pulse</label>
                </div>

            </div>

            <div id="bottom-row">
                <div class="bottom-row-boxes">
                    <label><input type="number" name="covid" min="0" max="1" placeholder="0">COVID-19 Antibody Test</label>
                </div>

                <div class="bottom-row-boxes">
                    <label><input type="number" name="sickle" min="0" max="1" placeholder="0">Sickle Cell Test</label>
                </div>
            </div>
        </div>
    </div>

    <div>
        <button type="submit">CREATE APPOINTMENT</button>
    </div>
</form>
</body>
</html>

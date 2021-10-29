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
    <form method="GET" action="/last_donation">
    <div id="container">
        <h1>Your Last Donation</h1>
        <p>{{$created}}</p>
        <div id="platelet">
            <h2>Platelet</h2>
            <div id="top-row">

                <div class="top-row-boxes">
                    <p>
                        Pressure: <br>
                        <b>{{$pressure}}</b>
                    </p>
                </div>
                <div class="top-row-boxes">
                    <p>
                        Hemoglobin: <br>
                        <b>{{$hemoglobin . 'gm/dL'}}</b>
                    </p>
                </div>
                <div class="top-row-boxes">
                    <p>
                        Pulse: <br>
                        <b>{{$pulse . 'bpm'}}</b>
                    </p>
                </div>

            </div>

            <div id="bottom-row">
                <div class="bottom-row-boxes">
                    <p>
                        COVID-19 Antibody Test:
                        @if($covid)
                            <b>Positive</b>
                        @else
                            <b>Negative</b>
                        @endif
                    </p>
                </div>

                <div class="bottom-row-boxes">
                    <p>
                        Sickle Cell Test:
                        @if($sickle)
                            <b>Positive</b>
                        @else
                            <b>Negative</b>
                        @endif
                    </p>
                </div>

                <div id="location">
                    <a href="https://www.google.co.uk/maps/place/Sunnyvale+Town+Hall/@32.7915124,-96.5645972,17z/data=!3m1!4b1!4m5!3m4!1s0x864eaf6be74c21f5:0x71ff32d82bf3ba70!8m2!3d32.7914834!4d-96.5621054">Sunnyvale Town Hall, Collins Road, Sunnyvale, TX, USA</a>
                </div>
            </div>
        </div>
    </div>

    <div>
        <button type="submit">SCHEDULE NEW APPOINTMENT</button>
    </div>
    </form>
    </body>
</html>

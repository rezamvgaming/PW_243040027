<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kotak Bertangga</title>
    <style>
        .grid {
            display: grid;
            grid-template-columns: repeat(5, 45px);
            grid-template-rows: repeat(5, 45px);
            gap: 3px;
            align-items: center;
            justify-items: center;
            margin: 50px;
        }
        .kotak {
            width: 45px;
            height: 45px;
            background-color: blue;
            color: red;
            font-size: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 3px solid black;
        }
        .ke-1 {
            grid-column: 1 / 2;
            grid-row: 1 / 2;
        }
        .ke-2-1 {
            grid-column: 1 / 2;
            grid-row: 2 / 3;
        }
        .ke-2-2 {
            grid-column: 2 / 3;
            grid-row: 2 / 3;
        }.ke-3-1 {
            grid-column: 1 / 2;
            grid-row: 3 / 4;
        }
        .ke-3-2 {
            grid-column: 2 / 3;
            grid-row: 3 / 4;
        }
        .ke-3-3 {
            grid-column: 3 / 4;
            grid-row: 3 / 4;
        }
    </style>    
</head>
    <div>
        <div class="grid">
        <div class="kotak ke-1">1</div>
        <div class="kotak ke-2-1">2</div>
        <div class="kotak ke-2-2">2</div>
        <div class="kotak ke-3-1">3</div>
        <div class="kotak ke-3-2">3</div>
        <div class="kotak ke-3-3">3</div>
    </div>
<body>
</body>
</html>
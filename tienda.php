<?php include 'nav/menu.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Granjita | Tienda</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(180deg, rgba(248, 154, 12, 0.00) 0%, #F89A0C 46.46%);
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .white-box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            margin:20px;
            height: 100vh;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .chicken-item {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            margin: 10px;
            width: 200px; /* Puedes ajustar el ancho según tus necesidades */
            text-align: center;
        }
    </style>
</head>
<body>
    
    <div class="white-box">
        <div class="chicken-item">
            <h3>Pollo Asado</h3>
            <p>Delicioso pollo asado con especias especiales.</p>
        </div>

        <div class="chicken-item">
            <h3>Nuggets de Pollo</h3>
            <p>Crujientes y deliciosos nuggets de pollo.</p>
        </div>

        <div class="chicken-item">
            <h3>Pollo a la Parrilla</h3>
            <p>Exquisito pollo a la parrilla con aderezo especial.</p>
        </div>

        <div class="chicken-item">
            <h3>Alitas de Pollo</h3>
            <p>Alitas de pollo picantes y deliciosas.</p>
        </div>

        <div class="chicken-item">
            <h3>Pollo Frito</h3>
            <p>Pollo crujiente y dorado, perfecto para disfrutar.</p>
        </div>
    </div>
</body>
</html>

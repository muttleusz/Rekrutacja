<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 1</title>
</head>
<body>
    <?php ?>

        <h1><?= $client->name ?></h1>
        <p>Email: <?= $client->email ?></p>

        <h2>Pracownik</h2>
        <p>Imię i nazwisko: <?= $employee->name ?></p>
        <p>Email: <?= $employee->email ?></p>

        <h2>Ostatnie zamówienia</h2>
        <?php foreach($orders as $order): ?>
            <h3>Zamówienie nr <?= $order->id ?></h3>
            <p>Produkt: <?= $order->product ?></p>
            <p>Data zamówienia: <?= $order->created_at->format('Y-m-d') ?></p>
            <p>Pracownik obsługujący: <?= $order->employee->name ?></p>
        <?php endforeach; ?>

        <h2>Przypisane samochody</h2>
        <?php foreach($car->users as $user): ?>
            <h3><?= $user->name ?></h3>
            <p>Data rozpoczęcia korzystania: <?= $user->pivot->start_date ?></p>
        <?php endforeach; ?>
    
    <?php ?>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Country Name</th>
                <th>Continent</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($countries_data as $c): ?>
                <tr>
                    <td><?=$c->Name ?></td>
                    <td><?=$c->Continent ?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>
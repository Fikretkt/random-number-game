<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Number Generator Game</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>🎲 Random Number Generator Game</h1>

    <h2>FOR Loop</h2>
    <ul>
        <?php
        $forArray = [];
        for ($i = 0; $i < 5; $i++) {
            $num = rand(1, 100);
            $forArray[] = $num;
            echo "<li>$num</li>";
        }
        ?>
    </ul>

    <h2>WHILE Loop</h2>
    <ul>
        <?php
        $whileArray = [];
        $i = 0;
        while ($i < 5) {
            $num = rand(1, 100);
            $whileArray[] = $num;
            echo "<li>$num</li>";
            $i++;
        }
        ?>
    </ul>

    <h2>DO-WHILE Loop</h2>
    <ul>
        <?php
        $doArray = [];
        $i = 0;
        do {
            $num = rand(1, 100);
            $doArray[] = $num;
            echo "<li>$num</li>";
            $i++;
        } while ($i < 5);
        ?>
    </ul>

    <h2>Tüm Sayılar</h2>
    <table>
        <thead>
            <tr>
                <th>For</th>
                <th>While</th>
                <th>Do-While</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < 5; $i++) {
                echo "<tr>
                        <td>{$forArray[$i]}</td>
                        <td>{$whileArray[$i]}</td>
                        <td>{$doArray[$i]}</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

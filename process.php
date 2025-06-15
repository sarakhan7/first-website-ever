<!DOCTYPE html>
<html lang="en">
<head>    
    <title>CYBERIA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url(bg.jpg)">
    <div id="wrapper">
        <header>
            <h1 align="center" style="color: rgb(64, 78, 86);">CYBERIA</h1><br class="clearright">
        </header>
        <nav>
            <a href="index.html">home</a>
            <a href="clothes.html">clothing</a>
            <a href="shoes.html">shoes</a>
            <a href="accessories.html">accessories</a>
        </nav>
        <main>
            <div>
                <h2>Submitted Information</h2>
                <table>
                    <tr>
                        <th>Form value</th>
                        <th>Form name</th>
                    </tr>
                    <?php
                    foreach ($_POST as $n => $v) {
                        echo "<tr>
                                <td>$v</td>
                                <td>$n</td>
                              </tr>";
                    }
                    ?>
                </table>
            </div>
        </main>
        <footer>
            <p>Copyright&copy;2024</p>
        </footer>
    </div><!-- end of wrapper -->
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Submitted Information</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="wrapper">
        <header>
            <h1 align="center">Submitted Information</h1>
        </header>
        <main>
            <div>
                <h2>Submitted Information</h2>
                <table>
                    <tbody>
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
                    </tbody>
                </table>
            </div>
        </main>
        <footer>
            <p>&copy; 2024</p>
        </footer>
    </div><!-- end of wrapper -->
</body>
</html>


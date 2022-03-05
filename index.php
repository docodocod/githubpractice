<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="C:\Bitnami\wampstack-8.0.15-0\apache2\htdocs\php\style.css">
    <title>연습용</title>
</head>
<body id="target">
    <header>
        <h1><a href="C:\Bitnami\wampstack-8.0.15-0\apache2\htdocs\php\index.php">Javascript</a></h1>
    </header>
    <nav>
        <ul>
            <?php
                echo file_get_contents("list.txt");
            ?>
        </ul>
    </nav>
    <div id="control">
        <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
        <input type="button" value="black" onclick="document.getElementById('target').className='black'"/>
    </div>
</body>
</html>
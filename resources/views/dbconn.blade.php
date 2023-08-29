<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Db connection</title>
</head>
<body>
    <div>
        <?php
        if(DB::connection()->getPdo()){
            echo "Successfully connected to the database => ".DB::connection()->getDatabaseName();
        }
        ?>
    </div>
</body>
</html>
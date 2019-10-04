<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
</head>
<body>
    <h1>About Page: Controller + View</h1>
    <p>First name: <?php echo $fname; ?></p>
    <p>Last name: <?php echo $lname; ?></p>
    <p>Route::get(
    '/aboutctrlview',
    ['uses' => 'AboutController@about', 'as' => 'about']);</p>
</body>
</html>

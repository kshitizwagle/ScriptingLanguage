<html>

<head>
    <title>Update Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="update.php" method="post">
        <p>
            <label>Id</label>
            <input type="number" name="id">
        </p>
        <p>
            <label>Name</label>
            <input type="text" name="name">
        </p>
        <p>
            <label>Address</label>
            <input type="text" name="address">
        </p>
        <p>
            <label>Email</label>
            <input type="email" name="email">
        </p>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>

</html>
<html>

<head>
    <title>Registration Form</title>
    <style>
        form {
            display: table;
        }

        p {
            display: table-row;
        }

        label {
            display: table-cell;
        }

        input {
            display: table-cell;
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <form action="action.php" method="post">
        <p>
            <label>Name</label>
            <input name="name" type="text">
        </p>
        <p>
            <label>Phone Number</label>
            <input name="phone" type="number">
        </p>
        <p>
            <label>Email</label>
            <input name="email" type="email">
        </p>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>

</html>
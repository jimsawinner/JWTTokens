<html>
<head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/jwt.js"></script>
        <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>JWT Data</h1>
    <form>
        <textarea type="text" id="encodedToken" name="encodedToken" rows="10"></textarea>
        <input type="button" value="decode data" id="decodeBtn" />
    </form>

    <div id='decoded-jwt'>

    </div>
</body>
</html>
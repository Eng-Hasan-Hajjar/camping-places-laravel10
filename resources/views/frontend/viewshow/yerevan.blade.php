<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> yerevan </title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">


    </div>
    <div class="container">
        <h1 class="display-3 text-white animated slideInDown">yerevan</h1>
        <img src="{{ asset('frontendAsset/img/regions/yerevan.jpeg') }}" alt="Your Image" class="center-image">

        <button class="back-button" onclick="goBack()"> back </button>
    </div>
    <script src="scripts.js"></script>
</body>
</html>

<style>

body {
    padding: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 10px;
    background-color: #d0ff6b;
}

.container {
    text-align: center;
}

.center-image {
    max-width: 100%;
    height: 500px;
    margin-bottom: 20px;
    border-block-style: solid;
    border-style: solid;
    border-width: 10px;
    border-radius: 60px;
}

.back-button {
    background-color: #ffffff;
    color: rgb(0, 0, 0);
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 5px;
}

.back-button:hover {
    background-color: #0056b3;
}

</style>




<script>
function goBack() {
    window.history.back();
}

</script>

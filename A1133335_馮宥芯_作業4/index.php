<!DOCTYPE html>
<html>

<head>

    <title>Spam Mail System</title>
    <style>
        body{
        font-family: Arial;
        background:#f2f2f2;
    }

    .container{
        width:500px;
        margin:auto;
        background:white;
        padding:20px;
        margin-top:50px;
        border-radius:10px;
    }

    input, textarea{
        width:100%;
        padding:10px;
        margin-top:10px;
    }

    button{
        padding:10px;
        margin-top:10px;
    }
    </style>

</head>

<body>

<div class="container">

<h1>Spam Mail System</h1>

<h2>Add Email</h2>

<form action="add_email.php" method="POST">

    <input type="email"
           name="email"
           placeholder="Enter Email"
           required>

    <button type="submit">
        Save Email
    </button>

</form>

<hr>

<h2>Send Email</h2>

<form action="send.php" method="POST">

    <input type="text"
           name="subject"
           placeholder="Subject"
           required>

    <textarea name="message"
              placeholder="Message"
              required></textarea>

    <input type="number"
           name="delay"
           placeholder="Delay Seconds"
           value="1">

    <input type="number"
           name="random_count"
           placeholder="Random Count">

    <button type="submit"
            name="all">

        Send All

    </button>

    <button type="submit"
            name="random">

        Send Random

    </button>

</form>

</div>

</body>

</html>
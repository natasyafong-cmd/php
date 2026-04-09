<html>
<head>
<title>Summer Camp Application Form</title>
</head>

<body>

<h2>Summer Camp Application Form</h2>

<form method="post" action="result.php">

Name:
<input type="text" name="name" placeholder="Your Name" required>
<br><br>

Gender:
男 <input type="radio" name="gender" value="male" required>
女 <input type="radio" name="gender" value="female">
<br><br>

Where are you from:
<select name="city" required>
<option value="">請選擇</option>
<option value="Taipei">台北</option>
<option value="Taichung">台中</option>
<option value="Kaohsiung">高雄</option>
</select>
<br><br>

Date of Birth:
<input type="date" name="birthday" required>
<br><br>

Phone Number:
<input type="tel" name="phone" required>
<br><br>

Age:
<input type="number" name="age" required>
<br><br>

Email:
<input type="email" name="email" required>
<br><br>

Any Suggestions:
<br>
<textarea name="suggestion" rows="5" cols="40" placeholder="Write your suggestions here..."></textarea>
<br><br>

<input type="submit" value="Submit">
</form>

</body>
</html>
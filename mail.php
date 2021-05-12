<!DOCTYPE html>
<html>
<head>
	<title>Mail</title>
</head>
<body>

<div class="body">
	<form method="post" action="formmail.php">
        <label for="name">Name : </label><br>
        <input type="text" id="name" name="name" placeholder="Name" required><br>

        <label for="mobile">Phone No : </label><br>
        <input type="tel" id="mobile" name="mobile" placeholder="1234567890" maxlength="10" required><br>

        <label for="email">E-Mail : </label><br>
        <input type="email" id="email" name="email" placeholder="abc@xyz.com" required=""><br>

        <label for="subject">Subject : </label><br>
        <input type="text" id="subject" name="subject" placeholder="Subject" required><br>

        <label for="message">Message : </label><br>
        <textarea id="message" name="message" rows="2" cols="50"  placeholder="How Can We Help You" required></textarea><br>
        
        <button type="submit" name="submit">Submit</button>
      </form>
</div>


</body>
</html>
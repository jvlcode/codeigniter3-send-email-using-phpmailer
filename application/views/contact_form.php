<!DOCTYPE html>
<html>
<style>
input[type=text],textarea, select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h1>Contact us</h1>

<div>
  <form method="POST" action="<?=base_url('email/send_email')?>">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

	<label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email..">

    <label for="subject">Subject</label>
    <input type="text" id="subject" name="subject" placeholder="Subject">

	<label for="message">Message
   	<textarea name="message" id="message" cols="30" rows="10"></textarea></label>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>

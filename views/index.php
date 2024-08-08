<?php
include __DIR__ . '/layouts/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../BIBLIOTECHA/public/assets/css/style1.css">
</head>
<body>
    <div class="container">
        <div style="text-align:center">
          <h2>Contact Us</h2>
          <p>Swing by our library, or leave us a message:</p>
        </div>
        <div class="row">

          <div class="column" style="margin-left: 300px;">
            <form action="/action_page.php">
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Your name..">
              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="lastname" placeholder="Your last name..">
              <label for="country">Country</label>
              <select id="country" name="country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Other">other</option>
              </select>
              <label for="subject">Subject</label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
              <input type="submit" value="Submit">
            </form>
          </div>
        </div>
      </div>
</body>
</html>
<?php
include __DIR__ . '/layouts/footer.php';
?>
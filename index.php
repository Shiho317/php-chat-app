<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
  <link rel="stylesheet" href="style.css">
  <title>Realtime Chat App | CodingNepal</title>
</head>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Realtime Chat App</header>
      <form action="#">
        <div class="error-text">
          
        </div>
        <div class="name-details">
          <div class="field input">
            <label for="">First Name</label>
            <input type="text" name='fname' placeholder="First Name" required>
          </div>
          <div class="field input">
            <label for="">Last Name</label>
            <input type="text" name="lname" placeholder="Last Name" required>
          </div>
        </div>
        <div>
          <div class="field input">
            <label for="">Email Address</label>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="field input">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>
            <i class="fas fa-eye"></i>
          </div>
          <div class="field image">
            <label for="">Select Image</label>
            <input type="file" name="image" required>
          </div>
          <div class="field button">
            <input type="submit" value="Continue to Chat">
          </div>
        </div>
      </form>
      <div class="link">
        Already signed up?
        <a href="#">Login now</a>
      </div>
    </section>
  </div>
  <script src="./javascript/pass-ahow-hide.js"></script>
  <script src="./javascript//signup.js"></script>
</body>
</html>
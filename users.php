<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
  <link rel="stylesheet" href="./style.css">
  <title>Realtime Chat App | CodingNepal</title>
</head>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <img src="#" alt="">
          <div class="details">
            <span>Coding Nepal</span>
            <p>Active now</p>
          </div>
        </div>
        <a href="#" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">
          Select an user to start chat
        </span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
        <a href="#">
          <div class="content">
            <img src="#" alt="">
            <div class="details">
              <span>Coding Nepal</span>
              <p>Active now</p>
            </div>
          </div>
          <div class="status-dot">
            <i class="fas fa-circle"></i>
          </div>
        </a>
      </div>
    </section>
  </div>
  <script src="./javascript/users.js"></script>
</body>
</html>
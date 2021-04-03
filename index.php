<?php
if (!empty($_GET['q'])) {
  switch ($_GET['q']) {
    case 'info':
      phpinfo();
      exit;
      break;
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Laragon</title>

  <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">

  <style>
    html,
    body {
      height: 100%;
    }

    body {
      margin: 0;
      padding: 0;
      width: 100%;
      display: table;
      font-weight: 100;
      font-family: 'Karla';
    }

    .container {
      text-align: center;
      display: table-cell;
      vertical-align: middle;
    }

    .content {
      text-align: center;
      display: inline-block;
    }

    .title {
      font-size: 70px;
    }

    .opt {
      margin-top: 30px;
    }

    .opt a {
      text-decoration: none;
      font-size: 150%;
    }

    a:hover {
      color: red;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="content">
      <div class="title" title="Laragon">PPID BAWASLU</div>

      <div class="info"><br />
        Wesite resmi PPID Bawaslu Purwakarta

      </div>
      <div class="opt">
        <div><a title="Getting Started" href="#">Coming Soon...</a></div>
      </div>
    </div>

  </div>
</body>

</html>
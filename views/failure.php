<body class="d">
  <p id="g">Erro!</p>
  <svg id="f" xmlns="http://www.w3.org/2000/svg" width="210" height="210" viewBox="0 0 70 70">
    <circle cx="35" cy="35" r="24" stroke="#fff" stroke-width="2" fill="#fff"/>
    <polyline fill="ff4e5c" stroke="#ff4e5c" stroke-width="4" points="27 27 43 43"/>
    <polyline fill="ff4e5c" stroke="#ff4e5c" stroke-width="4" points="43 27 27 43"/>
  </svg>
  <p id="h"><?= $e->getMessage() ?></p>
  <div id="i">
    <p>Crie o usuário '<?= $usr  ?>' no banco de dados:</p>
    <code>$ mysql -u root</code>
    <code>mysql> CREATE USER '<?= $usr ?>'@'localhost' IDENTIFIED BY '<?= $pwd ?>';</code>
  </div>
</body>

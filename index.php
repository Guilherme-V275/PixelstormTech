<?php include 'produtos.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>PixelStorm_produtos</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding-top: 70px;
      /* espaço para o menu fixo */
      text-align: center;
      margin-left: 10px;
    }

    nav {
      background-color: #333;
      padding: 10px 0;
      position: flex;
      top: 0;
      width: 100%;
      z-index: 1000;
    }

    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
    }

    nav ul li {
      margin: 0 15px;
    }

    nav ul li a {
      text-decoration: none;
      color: #ffffff;
      font-weight: bold;
      padding: 5px 10px;
      transition: background-color 0.3s;
    }

    nav ul li a:hover {
      background-color: #555;
      border-radius: 5px;
    }

    h1 {
      margin-bottom: 20px;
      text-align: center;
    }

    .produto {
      border: 1px solid #ccc;
      padding: 10px;
      margin: 10px;
      width: 200px;
      display: flex;
      text-align: center;
    }

    .produto img {
      max-width: 100%;
      height: auto;
      margin-left: 10px;
    }
  </style>
</head>

<body>

  <nav>
    <ul>
      <li><a href="incicio_site.html">Início</a></li>
      <li><a href="sobre_o_site.html2.html">Sobre</a></li>
      <li><a href="https://localhost/trabalho_flavio/index.php">Produtos</a></li>
      <li><a href="pagina_de_novidades.html">Novidades</a></li>
      <li><a href="pagina_de_contato - Copia.html">Contatos</a></li>
    </ul>
  </nav>

  <h1>Produtos</h1>

  <?php foreach ($produtos as $produto): ?>
    <div class="produto">
      <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
      <h2><?php echo $produto['nome']; ?></h2>
      <p><?php echo $produto['descricao']; ?></p>
      <strong>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></strong>
    </div>
  <?php endforeach; ?>

</body>

</html>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Modelo</title>
  <link rel="stylesheet" href="../../public/css/style.css">


</head>

<body>

  <section class="container">
    <form action="/tarefas/create" method="POST">
      <input type="text" name="nome" placeholder="Insira">
      <button type="submit">Enviar</button>
    </form>
    <table>
      <tr>
        <th class="id">ID</th>
        <th class="nome">Nome</th>
        <th class="deletar">Deletar</th>
      </tr>
      <?php foreach ($tarefas as $tarefa) : ?>
        <tr>
          <td class="id"> <?= $tarefa->id ?></td>
          <td class="nome"> <?= $tarefa->nome ?> </td>
          <td class="deletar">
            <form action="/tarefas/delete" method="POST">
              <input type="hidden" value="<?= $tarefa->id ?>" name="id">
              <button class="btn-delete" type="submit">Deletar</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </section>

</body>

</html>
<div class="container mt-5">

  <div>
    <h1 class="text-center">Editar Contato</h1>
  </div>


  <form method="POST">
    <div class="mb-3">
      <label for="name">Nome</label>
      <input type="text" name="name" value="<?php echo $dados[0]; ?>" class="form-control" id="name"
        placeholder="Ex: Thiago Galhardo" required>
    </div>

    <div class="mb-3">
      <label for="lastName">Sobrenome</label>
      <input type="text" name="lastName" value="<?php echo $dados[1]; ?>" class="form-control" id="name"
        placeholder="Ex: Thiago Galhardo" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Seu Email</label>
      <input type="email" name="email" value="<?php echo $dados[2]; ?>" class="form-control" id="email"
        placeholder="Ex: example@example.com" required>
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Seu Telefone</label>
      <input type="phone" name="phone" value="<?php echo $dados[3]; ?>" class="form-control" id="phone"
        placeholder="Ex: 11 98888-8888" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>

</div>
<div class="container mt-5">

  <div>
    <h1 class="text-center">Cadastro</h1>
  </div>


  <form method="POST">
    <div class="mb-3">
      <label for="name">Nome</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Ex: João" required>
    </div>

    <div class="mb-3">
      <label for="lastName">Sobrenome</label>
      <input type="text" name="lastName" class="form-control" id="name" placeholder="Ex: Silva" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Seu Email</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Ex: example@example.com" required>
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Seu Telefone</label>
      <input type="phone" name="phone" class="form-control" id="phone" placeholder="Ex: 11 98888-8888" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>

</div>
<?= getFlash('message') ?>

<h2>contato</h2>

<form action="pages/form/contato.php" method="POST" role="form">
    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Insira seu nome">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Insira seu Email">
    </div>
    <div class="form-group">
        <label for="">Assunto</label>
        <input type="text" class="form-control" name="subject" placeholder="Insira o assunto">
    </div>
    <div class="form-group">
        <label for="">mensagem</label>
        <textarea name="message" cols="30" rows="10" placeholder="Digite a sua mensagem:" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
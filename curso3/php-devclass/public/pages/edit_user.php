<?= getFlash('message'); ?>

<?php 
$user = find('users', 'id', $_GET['id']);
?>

<div class="container">
<form action="pages/form/update_user.php" method="POST" role="form" class="flex flex-col mt-10 pb-10">
    <input type="hidden" name="id" value="<?= $user->id?>">
    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Insira seu nome"  value="<?= $user->name?>">
    </div>
    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" class="form-control" name="lastname" class="" placeholder="Insira seu sobrenome" value="<?= $user->lastname?>"> 
    </div>
    <div class="form-group">
    <label for="">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Insira seu Email" value="<?= $user->email?>">
    </div>
    <div class="form-group">
        <label for="">Senha</label>
        <input type="text" name="password" class="form-control" value="<?= $user->password?>">
    </div>
    <button type="submit" class="bg-[#ffffff] text-black p-4 rounded-xl transition-color duration-500 hover:bg-[#575757] hover:text-white">cadastrar</button>
</form>
</div>

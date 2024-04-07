<?php

// require "../../../bootstrap.php";

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$deletado = delete('users', 'id', $id);

if ($deletado) {
	return redirect('home');
}

flash('message', 'Erro ao deletar');
redirectToHome();
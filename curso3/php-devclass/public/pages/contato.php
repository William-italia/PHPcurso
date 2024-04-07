<title>Contato</title>
</head>
<body>



<div class="flex flex-col items-center justify-center h-screen">
    <div class="flex flex-col justify-center bg-[#ffa142] px-16 py-4 rounded-xl text-white shadow-xl w-1/2">
    <p class="text-center p-10">
    <?= getFlash('message') ?>
    </p>

<h2 class="text-6xl font-bold text-center mb-4 p-2 border-y-[3px]">Contato</h2>

<form action="pages/form/contato.php" method="POST" role="form" class="flex flex-col mt-10 pb-10">
    <div class="flex flex-col space-x-2 md:flex-row">
    <div class="form-group md:w-1/2">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Insira seu nome">
    </div>
    <div class="form-group md:w-1/2">
        <label for="">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Insira seu Email">
    </div>
    </div>
    <div class="form-group">
        <label for="">Assunto</label>
        <input type="text" class="form-control" name="subject" placeholder="Insira o assunto">
    </div>
    <div class="form-group">
        <label for="">mensagem</label>
        <textarea name="message" cols="30" rows="10" placeholder="Digite a sua mensagem:" class="form-control"></textarea>
    </div>
    <button type="submit" class="bg-[#ffffff] text-black p-4 rounded-xl transition-color duration-500 hover:bg-[#575757] hover:text-white">Submit</button>
</form>
    </div>
</div>

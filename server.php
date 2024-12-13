<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Inseridos</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    
    <header>
        <nav>
            <h2>SUPREMETRAINING</h2>
            <a href="index.html"> Pagina Inicial</a>
            <a href="desenvolvedores.html">Desenvolvedores</a>
        
        </nav>
    </header>
    
    <main>
        <h2>Dados Cadastrados</h2>
       
        <ul>
            <li><strong>email: </strong> <?php echo $_POST['login']; ?></li>
            <li><strong>Senha: </strong> <?php echo $_POST['senha']; ?></li>
            <li><strong>Nome: </strong> <?php echo $_POST['nome']; ?></li>
            <li><strong>Nascimento: </strong> <?php echo $_POST['nascimento']; ?></li>
            <li><strong>Celular: </strong> <?php echo $_POST['celular']; ?></li>
            <li><strong>Cpf: </strong> <?php echo $_POST['cpf']; ?></li>
            <li><strong>Número: </strong> <?php echo $_POST['numero']; ?></li>
            <li><strong>Meses: </strong> <?php echo $_POST['mese']; ?></li>
        </ul>       


    </main>


    <footer>

        <p>IFRN campus Santa Cruz</p>
        <p>Trabalho de Autoria Web</p>
        <p>Prof. Marcelo Figueiredo Barbosa Júnior.</p>

        <ul>Alunos:
            <li>Guilherme Silva</li>
            <li>Renato Ferreira</li>
            <li>Thobias Henrique</li>
        </ul>

        <nav>Referencias:
            <a href=""></a>
        </nav>

    </footer>

</body>

</html>

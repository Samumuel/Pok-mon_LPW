<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>

    <h1 class="h3 mb-3 fw-normal">Cadastre o Pokémon</h1>
    <form action="card.php" method="POST">

        <input type="text" placeholder="Nome do Pokémon" name="nome">

        <br><br>

        <input type="text" placeholder="Nome descrição do pokémon" name="descricao">

        <br><br>

        <input type="text" placeholder="Informe o link da imagem" name="link">

        <br><br>

        <input type="number" placeholder="Informe o estágio de evolução" name="evolucao">

        <br><br>

        <select name="tipo1">
            <option value="">Selecione o tipo</option>
            <option value="No">Normal</option>
            <option value="Fo">Fogo</option>
            <option value="Ag">Água</option>
            <option value="El">Elétrico</option>
            <option value="Gr">Grama</option>
            <option value="Ge">Gelo</option>
            <option value="Lu">Lutador</option>
            <option value="Ve">Veneno</option>
            <option value="Te">Terra</option>
            <option value="Vo">Voador</option>
            <option value="Ps">Psíquico</option>
            <option value="In">Inseto</option>
            <option value="Fa">Fada</option>
            <option value="Dr">Dragão</option>
            <option value="Me">Metal</option>
        </select>

        <br><br>

        <select name="tipo2">
            <option value="">Selecione o tipo</option>
            <option value="No">Normal</option>
            <option value="Fo">Fogo</option>
            <option value="Ag">Água</option>
            <option value="El">Elétrico</option>
            <option value="Gr">Grama</option>
            <option value="Ge">Gelo</option>
            <option value="Lu">Lutador</option>
            <option value="Ve">Veneno</option>
            <option value="Te">Terra</option>
            <option value="Vo">Voador</option>
            <option value="Ps">Psíquico</option>
            <option value="In">Inseto</option>
            <option value="Fa">Fada</option>
            <option value="Dr">Dragão</option>
            <option value="Me">Metal</option>
            <option value="Nenhum">Não Tem</option>
        </select>

        <br><br>
        <br>
        <button style="color: green;">Enviar</button>
    </form>


</body>

</html>

<img class="mb-4" src="https://e7.pngegg.com/pngimages/337/240/png-clipart-pokeball-pokemon-battle-revolution-pikachu-entei-pokeball-sphere-pokemon-thumbnail.png" alt="" width="72" height="57">
<h1 class="h3 mb-3 fw-normal">Please sign in</h1>
<div class="form-floating"> <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"> <label for="floatingInput">Email address</label> </div>
<div class="form-floating"> <input type="password" class="form-control" id="floatingPassword" placeholder="Password"> <label for="floatingPassword">Password</label> </div>
<div class="form-check text-start my-3"> <input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault"> <label class="form-check-label" for="checkDefault">
        Remember me
    </label> </div>
<button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
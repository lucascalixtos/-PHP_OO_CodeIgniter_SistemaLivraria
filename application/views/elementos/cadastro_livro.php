<div class="container col-md-5 mx-auto">
    <form class="border border-light p-5" method="post">

        <p class="h4 mb-4 text-center"><?= $titulo ?></p>

        <input type="text" value="<?= isset($livro['titulo']) ? $livro['titulo'] : '' ?>" name="titulo" id="titulo" class="form-control" placeholder="Nome do livro">

        <input type="text" value="<?= isset($livro['autor']) ? $livro['autor'] : '' ?>" name="autor" id="autor" class="form-control" placeholder="Autor">
        
        <input type="text" value="<?= isset($livro['genero']) ? $livro['genero'] : '' ?>" name="genero" id="genero" class="form-control" placeholder="Gênero">

        <input type="text" value="<?= isset($livro['ano']) ? $livro['ano'] : '' ?>" name="ano" id="ano" class="form-control" placeholder="Ano de Lançamento">
        
        <input type="text" value="<?= isset($livro['idioma']) ? $livro['idioma'] : '' ?>" name="idioma" id="idioma" class="form-control" placeholder="Idioma">

        <input type="text" value="<?= isset($livro['capa']) ? $livro['capa'] : '' ?>" name="capa" id="capa" class="form-control" value=".jpg" placeholder="Capa">
        
        <input type="text" value="<?= isset($livro['descr']) ? $livro['descr'] : '' ?>" name="descr" id="descr" class="form-control" placeholder="Descrição">
        
        <input type="text" value="<?= isset($livro['preco']) ? $livro['preco'] : '' ?>" name="preco" id="preco" class="form-control" placeholder="Preço">

        <button class="btn btn-info my-4 btn-block" type="submit"><?= $acao ?></button>

    </form>
</div>
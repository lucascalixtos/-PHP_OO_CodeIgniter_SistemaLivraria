<div class="container mx-auto">
<form class="border border-light p-5" method="POST">

    <div class="text-center">
        <p class="h4 mb-4">Modificar cards</p>
    </div>

    <small id="helper" class="form-text text-muted mb-4">Card 1</small>

    <label for="textInput">Imagem</label>
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <span class="input-group-text">Selecione a imagem 1</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="img1" id="img1" aria-describedby="fileInput">
                <label class="custom-file-label" for="file-with-current"></label>
            </div>
        </div>

    <label for="textInput">Titulo</label>
    <input type="text" name="title1" id="title1" class="form-control mb-4" placeholder="Titulo">

    <label for="textInput">Conteúdo</label>
    <input type="text" name="label1" id="label1" class="form-control mb-4" placeholder="Texto">

    <small id="helper" class="form-text text-muted mb-4">Card 2</small>

    <label for="textInput">Imagem</label>
    <div class="input-group mb-4">
            <div class="input-group-prepend">
                <span class="input-group-text">Selecione a imagem 1</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="img2" id="img2" aria-describedby="fileInput">
                <label class="custom-file-label" for="file-with-current"></label>
            </div>

    </div>

    <label for="textInput">Titulo</label>
    <input type="text" name="title2" id="title2" class="form-control mb-4" placeholder="Titulo">

    <label for="textInput">Conteúdo</label>
    <input type="text" name="label2" id="label2" class="form-control mb-4" placeholder="Texto">

    <small id="helper" class="form-text text-muted mb-4">Card 3</small>

    <label for="textInput">Imagem</label>
    <div class="input-group mb-4">
            <div class="input-group-prepend">
                <span class="input-group-text">Selecione a imagem 1</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="img3" id="img3" aria-describedby="fileInput">
                <label class="custom-file-label" for="file-with-current"></label>
            </div>

    </div>

    <label for="textInput">Titulo</label>
    <input type="text" name="title3" id="title3" class="form-control mb-4" placeholder="Titulo">

    <label for="textInput">Conteudo</label>
    <input type="text" name="label3" id="label3" class="form-control mb-4" placeholder="Texto">

    <button class="btn btn-info btn-block" type="submit">Alterar</button>
</form>
</div>
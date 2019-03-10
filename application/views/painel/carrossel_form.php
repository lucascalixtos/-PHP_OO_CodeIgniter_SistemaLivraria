<div class="container mx-auto">
    <form class="border border-light p-5" method="POST">

        <div class="text-center">
            <p class="h4 mb-4">Configurar carrossel</p>
        </div>

        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <span class="input-group-text">Selecione a imagem 1</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="img1" id="img1" aria-describedby="fileInput">
                <label class="custom-file-label" for="file-with-current"></label>
            </div>
        </div>

        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <span class="input-group-text">Selecione a imagem 2</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="img2" id="img2" aria-describedby="fileInput">
                <label class="custom-file-label" for="file-with-current"></label>
            </div>
        </div>

        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <span class="input-group-text">Selecione a imagem 3</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="img3" id="img3" aria-describedby="fileInput">
                <label class="custom-file-label" for="file-with-current"></label>
            </div>
        </div>

        <button class="btn btn-info btn-block" type="submit">Salvar Mudanças</button>
    </form>
</div>
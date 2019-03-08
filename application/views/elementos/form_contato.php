
<form class="text-center border border-light p-5">

    <p class="h4 mb-4">Contact us</p>

    <!-- Name -->
    <input type="text" name="nome"  id="nome" class="form-control mb-4" placeholder="Name">

    <!-- Email -->
    <input type="email" name="email" id="email" class="form-control mb-4" placeholder="E-mail">

    <!-- Subject -->
    <label>Assunto</label>
    <select class="browser-default custom-select mb-4" id="assunto" name="assunto">
        <option value="" disabled>Escolha uma opção</option>
        <option value="1" selected>Feedback</option>
        <option value="2">Reclamção</option>
        <option value="3">Opinião</option>
        <option value="4">Pedido</option>
    </select>

    <!-- Message -->
    <div class="form-group">
        <textarea class="form-control rounded-0" name="mensagem" id="mensagem" rows="3" placeholder="Mensagem"></textarea>
    </div>

    <!-- Copy -->
    <div class="custom-control custom-checkbox mb-4">
        <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
        <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message</label>
    </div>

    <!-- Send button -->
    <button class="btn btn-info btn-block" type="submit">Enviar</button>

</form>
<!-- Default form contact -->
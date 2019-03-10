
<div class="container mx-auto mt-5">
        
        <div class="linha">
            
            <div class="coluna co16">
            <h1>Alterar configurações básicas </h2>
            <?php
                if($msg = get_msg()):
                    echo '<p>'.$msg.'</p>';
                endif;
                echo form_open();
                echo form_label('nome para login:', 'login');
                echo form_input('login', set_value('login'), array('autofocus' => 'autofocus'));
                echo form_label('Email do administrador:', 'email');
                echo form_input('email', set_value('email'));
                echo form_label('Senha:', 'senha');
                echo form_password('senha');
                echo form_label('Repita a Senha:', 'senha2');
                echo form_password('senha2');
                echo form_submit('enviar', "Salvar dados", array('class' => 'botao'));
                echo form_close();
            ?>
            </div>
        </div>
    </div>

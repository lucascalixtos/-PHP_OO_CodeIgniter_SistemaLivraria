
    <div class="container mx-auto">
        
        <div class="linha">
            
            <div class="coluna co16">
            <h1>Login</h2>
            <?php
                if($msg = get_msg()):
                    echo '<p>'.$msg.'</p>';
                endif;
                echo form_open();
                echo form_label('Usuário:', 'login');
                echo form_input('login', set_value('login'), array('autofocus' => 'autofocus'));
                echo form_label('Senha:', 'senha');
                echo form_password('senha');
                echo form_submit('enviar','Autenticar', "Salvar dados", array('class' => 'botao'));
                echo form_close();
            ?>
            </div>
        </div>
    </div>

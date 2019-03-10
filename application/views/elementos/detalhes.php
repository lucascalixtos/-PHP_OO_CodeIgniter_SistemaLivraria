<h5 class='p-2 m-2 bg-warning text-white text-center'><?= $titulo ?></h5>			  
			  <div class='container text-black'>
			  		<div class='row m-2 p-2'>
			        	<div class='col text-center my-auto'><img src='<?= $capa ?>' width='250' /></div>
			        </div>
                    <div class='row'>
						<div class='col'>
							<div class='text-center font-weight-bold my-auto'>Genero: </div>
						  	<div class='text-center'><?= $genero ?></div>
					  	</div>
					  	<div class='col'>
							<div class='text-center font-weight-bold my-auto'>Autor: </div>
						  	<div class='text-center'><?= $autor ?></div>
					  	</div>
					  	<div class='col'>
							<div class='text-center font-weight-bold my-auto'>Ano: </div>
						  	<div class='text-center'><?= $ano ?></div>
					  	</div>
					  	<div class='col'>
							<div class='text-center font-weight-bold my-auto'>Idioma: </div>
						  	<div class='text-center'><?= $idioma ?></div>
					  	</div>
					  	<div class='col'>
							<div class='text-center font-weight-bold my-auto'>Valor: </div>
						  	<div class='text-center'>R$ <?= $preco ?></div>
					  	</div>

					</div>
			  </div>
			<br />
<p><input type='submit' value='Voltar' onClick='history.go(-1)' /> </p>
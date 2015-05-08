<?php include('header.php') ?>
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<form action="#">
                            <h2>Meus Dados:</h2>
							<input type="text" placeholder="Nome de usuário" />
                            <input type="text" placeholder="Sobrenome" />
                            <input type="text" placeholder="CPF/CNPJ" />
                            <input type="text" placeholder="RG" />
                            <input type="text" placeholder="Data de Nascimento (DD/MM/YYYY)" />
                            <select id="select">
                              <option value="">Sexo</option>
                                <option value="">Feminino</option>
                                <option value="">Masculino</option>
                            </select>
							<input type="password" placeholder="Senha" />
                            <input type="password" placeholder="Confirmação de Senha" />
                                
                            <h2>Contato:</h2>
							<input type="text" placeholder="Email" />
                            <select id="select">
                              <option value="">Tipo de Contato</option>
                              <option value="residencial">Residencial</option>
                              <option value="comercial">Comercial</option>
                              <option value="celular">Celular</option>
                            </select>
                            <input type="telefone" placeholder="Telefone" />
                                
                            <h2>Localização:</h2>
							<input type="text" placeholder="CEP" />
                            <input type="text" placeholder="Endereço" />
                            <input type="text" placeholder="Número" />
                            <input type="text" placeholder="Complemento" />
                            <select id="select">
                              <option value="">Estado</option>
                              <option value="ac">Acre</option>
                              <option value="rj">Rio de Janeiro</option>
                              <option value="sp">São Paulo</option>
                            </select>
                            <select id="select">
                              <option value="">Cidade</option>
                            </select>
                            
                            <span>
								<input type="checkbox" class="checkbox"> 
                                    Desejo receber notificações de ofertas do iAchei							
                            </span>
							
							<button type="submit" class="btn btn-default">Registrar</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OU</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Login</h2>
						<form action="#">
                            <input type="text" placeholder="Nome de usuário" />
							<input type="password" placeholder="Senha" />
							<button type="submit" class="btn btn-default">Entrar</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
<?php include('footer.php'); ?>

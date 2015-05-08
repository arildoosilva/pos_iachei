<?php include('header.php') ?>
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Entre na sua conta</h2>
						<form action="#">
							<input type="text" placeholder="Nome de usuário" />
							<input type="password" placeholder="Senha" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Mantenha-me logado
							</span>
							<button type="submit" class="btn btn-default">Entrar</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OU</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Registre-se!</h2>
						<form action="#">
							<button type="submit" class="btn btn-default">Registrar</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
<?php include('footer.php'); ?>
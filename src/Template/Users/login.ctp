<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create(['class'=>'login100-form validate-form p-b-33 p-t-5'] ) ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
	<div class="wrap-input100 validate-input" data-validate = "Enter username">
        
        <?= $this->Form->input('username',['class'=>'input100']) ?>
    </div>
	<div class="wrap-input100 validate-input" data-validate = "Enter username">
        <?= $this->Form->input('password',['class'=>'input100']) ?>
    </div>
    </fieldset>


<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div>


<form class="login100-form validate-form p-b-33 p-t-5">

	<div class="wrap-input100 validate-input" data-validate = "Enter username">
		<input class="input100" type="text" name="username" placeholder="User name">
		<span class="focus-input100" data-placeholder="&#xe82a;"></span>
	</div>

	<div class="wrap-input100 validate-input" data-validate="Enter password">
		<input class="input100" type="password" name="pass" placeholder="Password">
		<span class="focus-input100" data-placeholder="&#xe80f;"></span>
	</div>

	<div class="container-login100-form-btn m-t-32">
		<button class="login100-form-btn">
			Login
		</button>
	</div>

</form>
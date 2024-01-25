<?php
/** @var $model \app\models\User */
?>

<h1>Register</h1>

<?php $form = \app\app\Form\Form::begin('', "post") ?>
    <div class="row">
        <div class="col"><?php echo $form->field($model, 'firstname') ?></div>
        <div class="col"><?php echo $form->field($model, 'lastname')->lnameLabel() ?></div>
    </div>
    <?php echo $form->field($model, 'email')->emailLabel() ?>
    <?php echo $form->field($model, 'password')->passwordField()->passwordLabel() ?>
    <?php echo $form->field($model, 'repeatPassword')->passwordField()->repeatPasswordLabel() ?>
    <button type="submit" class="btn btn-primary">Submit</button>
<?php \app\app\Form\Form::end() ?>

<!--
<form action="" method="post" >
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" name="fname" class="form-control" id="fname">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" name="lname" class="form-control" id="lname">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password">
    </div>
    <div class="mb-3">
        <label for="repeatPassword" class="form-label">Repeat Password</label>
        <input type="password" name="repeatPassword" class="form-control" id="repeatPassword">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
-->
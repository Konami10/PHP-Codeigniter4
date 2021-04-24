<!-- Login Start -->
<div class="login">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="login-form">
                    <?= view('Myth\Auth\Views\_message_block') ?>
                    <form action="<?= route_to('login') ?>" method="post">
                        <?= csrf_field() ?>
                        <h2 class="text-center">Login</h2>
                        <div class="row">
                            <?php if ($config->validFields === ['username', 'email']) : ?>
                                <div class="col-md-6">
                                    <label for="login"><?= lang('Auth.email') ?></label>
                                    <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>" autocomplete="off">
                                    <div class="invalid-feedback">
                                        <?= session('errors.login') ?>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="col-md-6">
                                    <label for="login"><?= lang('Auth.email') ?></label>
                                    <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>" autocomplete="off" autofocus>
                                    <div class="invalid-feedback">
                                        <?= session('errors.login') ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="col-md-6">
                                <label for="password"><?= lang('Auth.password') ?></label>
                                <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="password">ID Confirmation</label>
                                <input type="password" name="ID_Random" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="ID Confirmation">
                            </div>
                            <div class="col-md-12">
                                <button class="btn" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="<?= route_to('register') ?>" method="post">
                    <input type="hidden" name="Group" value="Vendor">
                    <?= csrf_field(); ?>
                    <div class="register-form">
                        <?= view('Myth\Auth\Views\_message_block') ?>
                        <h2 class="text-center">Register</h2>
                        <div class="row">
                            <!-- <div class="col-md-6">
                                <label>First Name</label>
                                <input class="form-control" type="text" placeholder="First Name" name="First_Name">
                            </div>
                            <div class="col-md-6">
                                <label>Last Name</label>
                                <input class="form-control" type="text" placeholder="Last Name" name="Last_Name">
                            </div> -->
                            <div class="col-md-6">
                                <label for="email"><?= lang('Auth.email') ?></label>
                                <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" autocomplete="off">
                                <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                            </div>
                            <div class="col-md-6">
                                <label for="username"><?= lang('Auth.username') ?></label>
                                <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" autocomplete="off">
                            </div>
                            <div class="col-md-6">
                                <label for="password"><?= lang('Auth.password') ?></label>
                                <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                            </div>
                            <div class="col-md-6">
                                <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                                <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                            </div>

                            <div class="col-md-12">
                                <button class="btn" type="submit">Register</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Login End -->
<?php require view('static/header') ?>

<div class="container">
    <div class="row justify-content-md-center mt-4">

        <div class="col-md-4">
            <form action="" method="get">
<!--                <h3 class="mb-3">SQL Injection GET</h3>-->
                <h4 class="mb-3">Bilgilerinizi görmek için kullanıcı adınızı giriniz.</h4>
                <?php if ($err = error()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $err ?>
                    </div>
                <?php endif; ?>
                <?php if ($success = success()): ?>
                    <div class="alert alert-success" role="alert">
                        <?= $success ?>
                    </div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="username">Kullanıcı Adınız</label>
                    <input type="text" value="<?= $_GET['id'] ?>" class="form-control" name="id"
                           id="id" placeholder="Kullanıcı adınızı yazın..">
                </div>
                <!--                <div class="form-group">-->
                <!--                    <label for="email">E-posta Adresiniz</label>-->
                <!--                    <input type="text" class="form-control" id="email"placeholder="E-posta adresinizi yazın..">-->
                <!--                </div>-->
                <input type="hidden" name="submit" value="1">
                <button type="submit" class="btn btn-primary">Giriş Yap</button>
            </form>
        </div>
    </div>
</div>

<?php require view('static/footer') ?>






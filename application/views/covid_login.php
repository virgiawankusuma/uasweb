    <div class="logout" data-logout="<?= $this->session->flashdata('logout'); ?>"></div>
    <?php if ($this->session->flashdata('logout')): ?>
    <?php endif ?>

    <div class="validlogin" data-validlogin="<?= $this->session->flashdata('validlogin'); ?>"></div>
    <?php if ($this->session->flashdata('validlogin')): ?>
    <?php endif ?>
    <body class="bg-light">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4"><?= $judul ;?></h3></div>
                                    <div class="card-body">
                                        <form action="<?= base_url('covid/login') ;?>" method="post" autocomplete="off">
                                            <div class="form-group">
                                                <label class="small mb-1" for="username">Username</label>
                                                <input class="form-control py-4" id="username" type="text" placeholder="Enter username" name="username" value="<?= set_value('username') ;?>" />
                                                <?= form_error('username', '<small class="text-danger">', '</small>') ;?>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="password">Password</label>
                                                <input class="form-control py-4" id="password" type="password" placeholder="Enter password" name="password" />
                                                <?= form_error('password', '<small class="text-danger">', '</small>') ;?>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                                            </div>
                                            <div class="form-group">
                                                <p class="small text-center mb-0 mt-2">- OR -</p>
                                                <a href="<?= base_url() ;?>" class="small nav-link text-center"><i class="fas fa-arrow-left"></i> Kembali ke home</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
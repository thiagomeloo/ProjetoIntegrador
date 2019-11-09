<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>S W E - Sistema Web Escola</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login-full-page-bs4.css">
</head>

<body>
    <div class="container-fluid main-panel">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <div class="login-panel" style="margin-top: 50px;">
                    <div class="login-user-avatar" style="filter: saturate(150%);"></div>
                    <div class="login-form">
                        <form action="/validaUser" method="post">
                            <div class="form-group">
                                <div class="input-group"><input readonly class="form-control-plaintext text-center" type="text" id="login-username" value="<?=$_GET['email']?>" name="email" required=""></div>
                                <div class="input-group"><input class="form-control text-center" type="text" name="codigo" required="" placeholder="Codigo de Validação"></div>
                                <div class="input-group"><input class="form-control text-center" type="text" name="senha" required="" placeholder="Senha"></div>
                                <button class="btn btn-primary btn-block mt-2" type="submit" style="background-color: rgb(242,99,34);">VALIDAR CONTA</button>
                            </div>
                        </form>
                    </div>
                    <div class="login-response has-error"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/login-full-page-bs4.js"></script>

</body>

</html>
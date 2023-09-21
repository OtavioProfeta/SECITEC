<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css\app.css")}}">
    <link rel="stylesheet" href="{{asset("css\bootstrap\bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset('css\templatemo-leadership-event.css')}}">
    <title>SECITEC</title>
</head>
<body style="background-color: rgba(150, 150, 150, 0.192);">

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
                    <form method="POST" action="{{url('/admin/entrar')}}" class="login">
                        @csrf
                        @method("POST")
                        <div class="form-floating mb-3">
                            <input type="text" name="txtNome" placeholder="Informe o Nome:" class="form-control" required>
                            <label for="floatingInput">Nome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="txtSenha" placeholder="Informe a senha:" class="form-control" required>
                            <label for="floatingPassword">Senha</label>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                            <label class="form-check-label" for="rememberPasswordCheck">
                                Lembrar senha
                            </label>
                        </div>
                        <div class="d-grid">
                            <input type="submit" value="Entrar" class="btn text-light bg-dark btn-login text-uppercase fw-bold" type="submit"> <br>
                            <input type="reset" value="Limpar" class="btn text-light bg-dark btn-login text-uppercase fw-bold" type="submit">
                        </div>
                        <hr class="my-4">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
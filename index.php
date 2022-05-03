<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Greensite_test</title>
</head>

<style>
.info{
    height: 160px;
    padding: 8px;
}

.form{
    border: 1px solid black;
    padding: 10px;
    border-radius: 15px;
}

</style>

<body>
    <div class="container">
        <div class="row align-items-center justify-content-center">

            <div class="info"></div>

            <form method="post" class="form col-6">
                <legend>Форма регистрации</legend>

                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Имя</label>
                    <input type="text" class="form-control" id="exampleInputName" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputSurname" class="form-label">Фамилия</label>
                    <input type="text" class="form-control" id="exampleInputSurname" name="surname">
                </div>


                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email адрес</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
                    <input type="password" class="form-control" id="exampleInputPassword2" name="repass">
                </div>

                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div>
    </div>
</body>

<script src="./main.js"></script>

</html>
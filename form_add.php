<?php
require_once 'vendor/autoload.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Форма регистрации</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">



    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">
    <main>
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h2>Форма регистрации</h2>
            <p class="lead">Форма с использованием сторинних компонентов.</p>
        </div>

        <div class="row g-3">

            <div class="col-md-12 col-lg-11">
                <h4 class="mb-3">Billing address</h4>
                <form method="POST" class="needs-validation" novalidate  action="add.php" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-sm-5">
                            <label for="firstName" class="form-label">Имя</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Имя" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <label for="lastName" class="form-label">Фамилия</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Фамилия" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <label for="thrName" class="form-label">Отчество</label>
                            <input type="text" class="form-control" id="thrName" name="thrName" placeholder="Отчество" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <!--                        <div class="col-12">
                                                    <label for="username" class="form-label">Username</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">@</span>
                                                        <input type="text" class="form-control" id="username" placeholder="Username" required>
                                                        <div class="invalid-feedback">
                                                            Your username is required.
                                                        </div>
                                                    </div>
                                                </div>-->

                        <div class="col-12">
                            <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Адрес</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="zip" class="form-label">Индекс</label>
                            <input type="text" value="zip" class="form-control" id="zip" name="zip" placeholder="" required>
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>

                        <div class="col-md-5">
                            <label for="kurs" class="form-label">Курс</label>
                            <select class="form-select" id="kurs" name="kurs" required>
                                <option value="">Выбирите курс...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <div class="invalid-feedback">
                                Просьба выбрать курс.
                            </div>
                        </div>

                        <div class="col-md-5">
                            <label for="faculty" class="form-label">Факультет</label>
                            <select class="form-select" id="faculty" name="faculty" required>
                                <option value="">Выбирите факультет...</option>
                                <option value="1">факультет 1</option>
                                <option value="2">факультет 2</option>
                                <option value="3">факультет 3</option>
                                <option value="4">факультет 4</option>
                                <option value="5">факультет 5</option>
                            </select>
                            <div class="invalid-feedback">
                                Просьба выбрать факультет.
                            </div>
                        </div>

                        <!--                        <div class="col-md-4">
                                                    <label for="state" class="form-label">State</label>
                                                    <select class="form-select" id="state" required>
                                                        <option value="">Choose...</option>
                                                        <option>California</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid state.
                                                    </div>
                                                </div>-->


                    </div>

                    <hr class="my-4">

                    <!--                    <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="same-address" name="same-address">
                                            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
                                        </div>-->

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="saveinfo" name="saveinfo" value="1">
                        <label class="form-check-label" for="saveinfo">Рассылать мне почту</label>
                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3">Кто вы?</h4>

                    <div class="my-3">
                        <div class="form-check">
                            <input id="people" value="1" name="whois" type="radio" class="form-check-input" checked required>
                            <label class="form-check-label" for="people">Ученик</label>
                        </div>
                        <div class="form-check">
                            <input id="teacher" value="2" name="whois" type="radio" class="form-check-input" required>
                            <label class="form-check-label" for="teacher">Педагог</label>
                        </div>
                        <!--                        <div class="form-check">
                                                    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                                    <label class="form-check-label" for="paypal">PayPal</label>
                                                </div>-->
                    </div>

                    <!-- <div class="row gy-3">
                         <div class="col-md-6">
                             <label for="cc-name" class="form-label">Name on card</label>
                             <input type="text" class="form-control" id="cc-name" name="cc-name" placeholder="" required>
                             <small class="text-muted">Full name as displayed on card</small>
                             <div class="invalid-feedback">
                                 Name on card is required
                             </div>
                         </div>

                         <div class="col-md-6">
                             <label for="cc-number" class="form-label">Credit card number</label>
                             <input type="text" class="form-control" id="cc-number" name="number" placeholder="" required>
                             <div class="invalid-feedback">
                                 Credit card number is required
                             </div>
                         </div>

                         <div class="col-md-3">
                             <label for="cc-expiration" class="form-label">Expiration</label>
                             <input type="text" class="form-control" id="cc-expiration" name="cc-expiration" placeholder="" required>
                             <div class="invalid-feedback">
                                 Expiration date required
                             </div>
                         </div>

                         <div class="col-md-3">
                             <label for="cc-cvv" class="form-label">CVV</label>
                             <input type="text" class="form-control" id="cc-cvv" name="cc-cvv" placeholder="" required>
                             <div class="invalid-feedback">
                                 Security code required
                             </div>
                         </div>-->file_input
            </div>

            <hr class="my-4">
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile01" name="image">
            </div>
            <button class="w-100 btn btn-primary btn-lg" type="submit">Зарегистироваться</button>
            </form>
        </div>
</div>
</main>

</div>


<script src="dist/js/bootstrap.bundle.min.js"></script>

<script src="form-validation.js"></script>
</body>
</html>

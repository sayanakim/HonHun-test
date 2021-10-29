<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HoneyHunters</title>
    <link rel="shortcut icon" href="./image/favicon.ico">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,500&display=swap" rel="stylesheet" />
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
</head>

<body>
<div class="wrapper">
    <header class="header">
        <div class="header__container _container">
            <div class="header__top">
                <div class="header__logo">
                    <a href="#">
                        <img src="./image/logo_header.png" alt="HoneyHunter.logo">
                    </a>
                </div>
                <div class="header__contact-icon">
                    <img src="./image/contactIcon%20.png" alt="contact_icon.svg">
                </div>
            </div>
            <div class="header__bottom">
                <div class="header__bottom-form form">

                    <form class="form__body" id="form" method="post" action="#">
                        <div class="form__item">
                            <div class="form__column">
                                <label for="name_id">Имя</label>
                                <input type="text" class="input input__name _req" name="name" id="name_id">

                                <label for="email_id">E-mail</label>
                                <input type="email" class="input input__mail _req _email" autocomplete="off" name="email" id="email_id">
                            </div>
                            <div class="form__column">
                                <label for="comment_id">Комментарий</label>
                                <textarea name="comment" class="input _req" id="comment_id"></textarea>
                            </div>
                        </div>
                        <div class="form__btn">
                            <button type="button" id="send" class="btn btn-danger" name="submit-form">Записать</button>
                        </div>
                    </form>
                    <div id="errorMes"></div>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="main__container _container">
            <h2 class="main__title">Выводим комментарии</h2>
            <div class="cards">
                <div class="cards__container">

                        <?php

                        $conn = new PDO("mysql:host=localhost;dbname=honeyhunters", 'root', 'root');

                        $sql = "SELECT * FROM message";
                        if ($messages = $conn->query($sql)) {
                            foreach ($messages as $message) {
                                echo "<div class='card__column'>";
                                    echo "<div class='cards__body'>";
                                        echo "<div class='cards__title'>" . $message['name'] . "</div>";
                                        echo "<div class='cards__email'>" . $message['email'] . "</div>";
                                        echo "<div class='cards__text'>" . $message['comment'] . "</div>";
                                    echo "</div>";
                                echo "</div>";
                            }
                        } else {
                            echo "Ошибка: " . $conn->errorInfo();
                        }

                        ?>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer__container _container">
            <div class="footer__body">
                <a href="#" class="footer__logo">
                    <img src="./image/logo_footer.png" alt="logof.svg" class="footer__logo">
                </a>
                <div class="footer__social-list">
                    <div class="footer__social-item">
                        <a href="#" class="footer__social-link">
                            <span class="footer__social-icon footer__social-icon-vk"></span>
                        </a>
                    </div>
                    <div class="footer__social-item">
                        <a href="#" class="footer__social-link">
                            <span class="footer__social-icon footer__social-icon-fb"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/ajax.js"></script>
<!--<script src="./js/script.js"></script>-->
<!--<script src="./js/test.js"></script>-->
</body>

</html>
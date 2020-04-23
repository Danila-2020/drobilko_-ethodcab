<?php
include'template/header.php';
include'template/nav.php';

$mysqli = new mysqli("localhost","root","1","db_job");
$mysqli->set_charset("utf8");
?>
    <div class="row">
		<div class="row about">
                        <div class="col-lg-4 col-md-4 col-sm-12 bg-myphoto">
                            <div class="reg">
                            <h1 color="red">Регистрация работодателя</h1>
                            </div>
                        </div>

						<div class="col-lg-4 col-md-4 col-sm-12 desc">
                            <form method="POST" action="#" class="form-control bordered">
                                <input type="text" name="login" placeholder="Логин" class="form-control mr-sm-2" required />
                                <input type="password" name="password" placeholder="Пароль" class="form-control" required />
                                <br>
                                <button type="submit" name="btn_sign" class="form-control bg-warning">Вход</button>
                            </form>
                            <form method="POST" action="#" class="form-control bordered">
                                <h1>Регистрация</h1>
                                <input type="text" name="reglogin" placeholder="Логин" class="form-control mr-sm-2" required />
                                <input type="password" name="regpassword" placeholder="Пароль" class="form-control mr-sm-2" required />
                                <input type="text" name="city" placeholder="Город" class="form-control" required />
                                <input type="text" name="nazv" placeholder="Название компании" class="form-control mr-sm-2" required />
                                <input type="text" name="site" placeholder="Сайт" class="form-control mr-sm-2" required />
                                <input type="text" name="contface" placeholder="Контактное лицо" class="form-control mr-sm-2" required />
                                <input type="text" name="youremail" placeholder="YourEmail" class="form-control mr-sm-2" required />
                                <input type="text" id="phone" name="phone" placeholder="Номер телефона" class="form-control mr-sm-2" required /><br>
                                <script>
                                    function(){
                                        $("#phone").mask("8(999) 999-9999");
                                    }
                                </script>
                                <button type="submit" name="btn_reg" class="btn btn-warning form-control mr-sm-2">Отправить</button>

                        <h3><font color="#3AC1EF">D.John</h3>
                        <?php
                            if(!empty($_POST)){
                                $city = $_POST['city'];
                                $reglogin = $_POST['reglogin'];
                                $regpassword  = $_POST['regpassword'];
                                $nazv = $_POST['nazv'];
                                $site = $_POST['site'];
                                $contface = $_POST['contface'];
                                $youremail = $_POST['youremail'];
                                $phone = $_POST['phone'];

                                $query = $mysqli->query("insert into employer(company, contact_person, tel, email, site, user_name, passw, city) values('$nazv','$contface','$phone','$youremail','$site','$reglogin','$regpassword','$city')");
                                $result = $mysqli->query($query);
                                echo'<script>alert("Регистрация работодателя прошла успешно. ")</script>';
                            }
                            ?>
                            </form>
                            <p>
                                В век бурного развития Интернета и онлайн-технологий фрилансеру жизненно необходимо иметь свой собственный сайт.
                                Здесь представлено портфолио моих работ.<br>
                                Узнать больше о моих работах или посмотреть портфолио можно на сайте www.me.ru.
                            </p>
						</div>
		</div>
    </div>
    <table class="table table-striped">
        <tr>
            <td>ID Работадателя</td>
            <td>Город</td>
            <td>Компания</td>
            <td>Контактное лицо</td>
            <td>Номер телефона</td>
            <td>E-MAIL адрес</td>
            <td>Сайт</td>
        </tr>
        <?php
        $queryn=$mysqli->query("select *from employer");
        while($row=$queryn->fetch_array())
        {
            echo'<tr>
            <td>'.$row['ID_employer'].'</td>
            <td>'.$row['city'].'</td>
            <td>'.$row['company'].'</td>
            <td>'.$row['contact_person'].'</td>
            <td>'.$row['tel'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['site'].'</td>
            </tr>';
        };
        $queryn->free();
        $mysqli->close();
        ?>
    </table>
<?php
include'template/footer.php';
?>
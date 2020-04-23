<?php
include'template/header.php';
include'template/nav.php';

$mysqli = new mysqli("localhost","root","1","db_job");
$mysqli->set_charset("utf8");
?>
	<div class="row">
		<div class="row about">
                        <div class="col-lg-4 col-md-4 col-sm-12 bg-myphoto">
                        <h1 color="red">Регистрация Соискателя</h1>    
                        </div>

						<div class="col-lg-8 col-md-8 col-sm-12 desc">
                            <form method="POST" action="#" class="form-control bordered">
                                <img src="../img/Bezymyannyj-1.png" alt="" class="img-fluid">
                                <h1>Регистрация</h1>
                                <label for="birst_date">Дата рождения:</label>
                                <input type="date" name="birst_date" class="form-control mr-sm-2" required /><br>
                                <input type="text" name="education" placeholder="Образование" class="form-control mr-sm-2" required /><br>
                                <input type="text" name="email" placeholder="Email" class="form-control mr-sm-2" required /><br>
                                <input type="number" min="0" name="experience" placeholder="Опыт работы" class="form-control mr-sm-2" required /><br>
                                <input type="text" name="firstname" placeholder="Имя" class="form-control mr-sm-2" required /><br>
                                <input type="text" name="lastname" placeholder="Фамилия" class="form-control mr-sm-2" required /><br>
                                <input type="text" name="tel" id="tel" placeholder="Номер телефона" class="form-control mr-sm-2" required /><br>
                                <input type="text" name="username" placeholder="Логин" class="form-control mr-sm-2" required /><br>
                                <input type="text" name="password" placeholder="Пароль" class="form-control mr-sm-2" required /><br>
                                <br>
                                <button type="submit" name="btn_reg" class="btn btn-warning form-control mr-sm-2">Отправить</button>
                        <?php
                            if(!empty($_POST)){
                                $birstdate = $_POST['birst_date'];
                                $education = $_POST['education'];
                                $email = $_POST['email'];
                                $experience = $_POST['experience'];
                                $firstname = $_POST['firstname'];
                                $lastname = $_POST['lastname'];
                                $tel = $_POST['tel'];
                                $username = $_POST['username'];
                                $password = $_POST['password'];
                                $query = $mysqli->query("INSERT INTO klient (Lastname,Firstname,Tel,Email,User_name,Password, education, birst_date, experience) VALUES ('$lastname', '$firstname', '$tel', '$email', '$username', '$password', '$education', '$birstdate', '$experience')");
                                $result=$mysqli->query($query);
                                echo("<script>alert('Добавление соискателя произведено успешно!')</script>");
                                echo('<script>window.location.href="Reg_jobseeker.php"</script>');
                            }
                            ?>
                            </form>
						</div>
		</div>
    </div>
    <table class="table table-striped">
        <tr>
            <td>ID Соискателя</td>
            <td>Фамилия</td>
            <td>Имя</td>
            <td>Номер телефона</td>
            <td>E-Mail адрес</td>
        </tr>
        <?php
        $queryn=$mysqli->query("select *from klient");
        while($row=$queryn->fetch_array())
        {
            echo'<tr>
            <td>'.$row['ID_klient'].'</td>
            <td>'.$row['Lastname'].'</td>
            <td>'.$row['Firstname'].'</td>
            <td>'.$row['Tel'].'</td>
            <td>'.$row['Email'].'</td>
            </tr>';
        };
        $queryn->free();
        $mysqli->close();
        ?>
    </table>
<?php
include'template/footer.php';
?>
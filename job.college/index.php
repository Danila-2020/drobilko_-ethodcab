<?php
include'template/header.php';
include'template/nav.php';
$mysqli = new mysqli("localhost","root","1","db_job");
$mysqli->set_charset("utf8");
?>
    
    <header class="header">
    <div class="overlay">
        <div class="jumbotron bg-img" style="margin-bottom:0">
        <h1 style="color: #fff;">Работа найдётся для каждого</h1>
        <p><button type="submit" class="btn btn-outline-warning"><b>Разместить резюме</b></button></p> 
        </div>
        <div class="blog">
            <div class="container">
            <h1 class="text-center" style="color: brown;">Наши партнёры</h1>
             <div class="row">
              <div class="col-md-4 col-lg-4 col-sm-12">
               <div class="card">
                <div class="card-img">
                 <img align="center" src="img/мегафон.jpg" class="img-fluid">
                </div>
                
                <div class="card-body">
                <h4 class="card-title">Мегафон</h4>
                 <p class="card-text">
                    Российская телекоммуникационная компания, предоставляющая услуги сотовой связи, а также местной телефонной связи, широкополосного доступа в Интернет, кабельного телевидения и ряд сопутствующих услуг.
                 </p>
                </div>
                <div class="card-footer">
                 <a href="" class="card-link">Узнать больше</a>
                </div>
               </div>
              </div>
              <div class="col-md-4 col-lg-4 col-sm-12">
               <div class="card">
                <div class="card-img">
                 <img align="center" src="img/билайн.jpg" class="img-fluid">
                </div>
                
                <div class="card-body">
                   <h4 class="card-title">Билайн</h4>
                 <p class="card-text">
                    Торговая марка компании ВымпелКом, под которой её дочерние компании оказывают телекоммуникационные услуги в России и странах СНГ.
                 </p>
                </div>
                <div class="card-footer">
                 <a href="" class="card-link">Узнать больше</a>
                </div>
               </div>
              </div>
              <div class="col-md-4 col-lg-4 col-sm-12">
               <div class="card">
                <div class="card-img">
                 <img align="center" src="img/мтс.jpg" class="img-fluid">
                </div>
                
                <div class="card-body">
                <h4 class="card-title">МТС</h4>
                 <p class="card-text">
                    Российская телекоммуникационная компания, оказывающая услуги в России и странах СНГ под торговой маркой «МТС». Компания оказывает услуги сотовой связи, услуги проводной телефонной связи, широкополосного доступа в Интернет, мобильного телевидения, кабельного телевидения, спутникового телевидения, цифрового телевидения и сопутствующие услуги, в частности услуги по продаже контента. По состоянию на март 2019 года компания во всех странах своего присутствия обслуживала 104,7 млн абонентов.
                 </p>
                </div>
                <div class="card-footer">
                 <a href="" class="card-link">Узнать больше</a>
                </div>
               </div>
              </div>
              
             </div>
            </div>
           </div>
    </div>
    </header>
    <br>
    

    <?php
    include'template/footer.php';
    ?>
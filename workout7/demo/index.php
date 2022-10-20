<?php include("includes/header.php") ?>
    <div class="sectiune 1">
        <div id="carouselExampleControls" class="carousel slide p-0" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class= "slide1" style="background-image: url(https://images.unsplash.com/photo-1629119236727-36156dcc0ab0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80);"></div>
                </div>
              <div class="carousel-item">
                <div class= "slide1" style="background-image: url(https://images.unsplash.com/photo-1664663751485-c58e9276ccce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1767&q=80);"></div>
            </div>
              <div class="carousel-item">
                <div class= "slide1" style="background-image: url(https://images.unsplash.com/photo-1481079015880-9cce04aad0dc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80);"></div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class = "col-lg-6 col-md-10 text-center">
                        <h1 class="text-center">Arta de a cauta info pe Google!</h1>
                        <h2 class="text-center">Curs revolutionar</h2>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus diam, feugiat quis pretium quis, eleifend eget erat. Nulla lobortis dui vitae cursus placerat. Fusce laoreet mi vel auctor imperdiet. Nulla vitae tempor enim. Ut aliquam lacus tortor, id finibus nulla porta in. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <button class="buton px-1 btn btn-primary">Inscrie-te acum</button>
                        <button class="buton px-1 btn btn-outline-secondary">Cere detalii</button>
                </div>
            </div>

        </div>
    </div>  
        

    <div class="section_2 py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12 col-md-4 text-center">
                    <div class="image"></div>
                    <br>
                    <h4>Lorem ipsum</h4>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ris.</p>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="image"></div>
                    <br>
                    <h4>Lorem ipsum</h4>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ris.</p>
                </div>

                <div class="col-sm-6 col-md-4 text-center">
                    <div class="image"></div>
                    <br>
                    <h4>Lorem ipsum</h4>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ris.</p>
                </div>
            </div>
                
            </div>
    </div>

    <div class="section3 py-5">
        <div class="row text-center">
            <div class="col-md-6 col-lg-3">
                <h3>
                    <?php
                        $a = 12345;
                        echo  number_format ($a,0,",",".");
                        $modul = 1;
                    ?>
                    </h3>
                <p><?php
                    $text = "participanți la modulul ";
                    echo $text . $modul;

                    ?>                
                </p>
            </div>
            <div class="col-3 col-md-6 col-lg-3">
                <h3>
                    <?php
                            $b = 123;
                            echo  number_format ($b,0,",",".");
                            ?>
                </h3>
                <p><?php
                    echo $text . ++$modul;

                    ?>                
                </p>
            </div>
            <div class="col-md-6 col-lg-3">
                 <h3>
                    <?php
                            $c = 1208;
                            echo  number_format ($c,0,",",".");
                            ?>
                 </h3>
                 <p><?php
                    echo $text . ++$modul;

                    ?>                
                </p>

            </div>
            <div class="col-md-6 col-lg-3">
                 <h3>
                    <?php
                                $d = $a + $b + $c;
                                if($d > 50000) {
                                    echo  "<strong>". number_format ($d,0,",","."). "</strong>";
                                }else echo number_format ($d,0,",",".")
                                ?>
                 </h3>
                 <p> Total participanti</p>

            </div>
        </div>
    </div>


<?php include("includes/footer.php") ?>

<?php
$this->layout("_theme", ["categories" => $categories]);
?>
    <!-- Price Plan Section Begin -->
    

   
    <section class="price-section spad set-bg">

    <div class="container">
        <div class="row">
        <?php
        foreach ($plans as $plan) {
    ?>
                <div class="col-lg-4">
                    <div class="single-price-plan">
                        <h4><?= $plan->name; ?></h4>
                        <div class="price-plan">
                            <h2> <?= $plan->price; ?></h2>
                        </div>
                        <ul>
                            <li><?= $plan->description; ?></li>
                        </ul>
                        <a href="#" class="primary-btn price-btn">Começar agora</a>
                    </div>
                </div>
                <?php
         }
         ?>

        </div>
    </div>
        
            
        </div>
    </section>
    <!-- Price Plan Section End -->
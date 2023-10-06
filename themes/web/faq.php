<?php
   $this->layout("_theme");
?>

<section class="spacing">

<div class="container">
         <h1>Perguntas frequentes</h1>

         <table class = "table table-striped">
            <tr>
                <th scope="col">Pergunta</th>
                <th scope="col">Resposta</th>
            </tr>
         </table>
         <tbody>
            <?php
            foreach($faqs as $faq){
            ?>
            <tr>
                <td><?= $faq->question; ?></td>
                <td><?= $faq->answer; ?></td>
            </tr>
            <?php
            }
            ?>
         </tbody>
         </tablr>
</div>
  
</section>
<?php 
$contact = get_page_by_title('contato');
$product = get_page_by_title('produtos');
?>

<div class="orcamento-dados grid-8">
    <h3>Dados</h3>
    <span><?php the_field('telephone', $contact); ?></span>
    <span class="dados-email"><?php the_field('email', $contact); ?></span>
    <h3>Monte a sua Bikcraft</h3>
    <p>Escolha as especificações</p>
   <?php the_field('items_orcamento', $product); ?>
</div>
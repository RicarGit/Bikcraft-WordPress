<section class="orcamento" id="orcamento">
    <div data-anime="1600" class="container fadeInDown">
        <h2 class="subtitle">Orçamento</h2>
        <form id="form-orcamento" method="POST" action="<?php echo get_template_directory_uri(); ?>" class="form grid-8 formphp">
            <label for="name">Nome</label>
            <input type="text" id="name" name="nome" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <label for="telephone">Telefone</label>
            <input type="text" id="telephone" name="telefone">
            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" required></textarea>
            <button id="enviar" type="submit" class="btn">Enviar</button>
        </form>

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
    </div>
</section>
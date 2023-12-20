<?php
$portifolio = get_page_by_title('portifolio');

if ($portifolio) :
    ?>
    <ul class="portfolio_lista rslides_portfolio">
        <?php if (have_rows('item_portifolio', $portifolio)): while (have_rows('item_portifolio', $portifolio)) : the_row(); ?>
                <li>
                    <div class="grid-8"><img src="<?php the_sub_field('portifolio_imagem1'); ?>" alt="<?php the_sub_field('portifolio_imagem_descricao1'); ?>"></div>
                    <div class="grid-8"><img src="<?php the_sub_field('portifolio_imagem2'); ?>" alt="<?php the_sub_field('portifolio_imagem_descricao2'); ?>"></div>
                    <div class="grid-16"><img src="<?php the_sub_field('portifolio_imagem3'); ?>" alt="<?php the_sub_field('portifolio_imagem_descricao3'); ?>"></div>
                </li>
            <?php endwhile; else : ?>
            <!-- No rows found -->
        <?php endif; ?>
    </ul>

    <?php if (!is_page('portifolio')) : ?>
        <div class="call">
            <p><?php echo get_field('chamada_portifolio', $portifolio); ?></p>
            <a href="/bikcraft/portifolio/" class="btn">Portfólio</a>
        </div>
    <?php endif; ?>

<?php endif; ?>

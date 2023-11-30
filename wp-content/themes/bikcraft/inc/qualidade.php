<?php $sobre = get_page_by_title('sobre'); ?>
<section class="qualidade container">
			<h2 class="subtitulo"><?php the_field('qualidade', $sobre); ?></h2>
			<img src="<?php the_field('logo_bikcraft', $sobre); ?>" alt="Bikcraft">
			<ul class="qualidade_lista">
      <?php if(have_rows('item_qualidade', $sobre)): while(have_rows('item_qualidade', $sobre)) : the_row(); ?>
				<li class="grid-1-3">
					<h3><?php the_sub_field('titulo_item_qualidade'); ?></h3>
					<p><?php the_sub_field('descricao_item_qualidade'); ?></p>
				</li>
        <?php endwhile; else : endif; ?>
				<li class="grid-1-3">
					<h3>Design</h3>
					<p>Feitas sob medida para o melhor conforto e eficiência. Adaptamos a sua Bikcraft para o seu corpo.</p>
				</li>
				<li class="grid-1-3">
					<h3>Sustentabilidade</h3>
					<p>Além de ajudar a cuidar do meio ambiente, tirando carros da rua, toda a produção é sustentável.</p>
				</li>
			</ul>
      <?php if (!is_page('sobre')) { ?>
        <div class="call">
          <p><?php the_sub_field('chamada_sobre', $sobre); ?></p>
          <a href="/bikcraft/sobre/" class="btn btn-preto">Sobre</a>
        </div>
      </section>
      <?php } ?>
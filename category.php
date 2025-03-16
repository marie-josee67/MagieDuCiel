<?php get_header(); ?>

<main class="category-articles">
    <h1><?php single_cat_title(); ?></h1>
    
    <?php if (have_posts()) : ?>
        <div class="article-list">
            <?php while (have_posts()) : the_post(); ?>
                <article class="article-item">
                    <div class="article-thumbnail">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                        <?php endif; ?>
                    </div>

                    <div class="article-content">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="article-excerpt"><?php the_excerpt(); ?></p>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>

    <?php else : ?>
        <p>Aucun article trouvé dans cette catégorie.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>


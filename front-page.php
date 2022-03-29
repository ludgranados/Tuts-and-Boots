<?php
get_header();
?>

<section class="Section-1">
    <?php $hero_1 = get_field('hero_1'); ?>
    <?php $backgroundImg = $hero_1['background_image'] ? 'url(' . $hero_1['background_image']['url'] . ') ' : ''; ?>

    <div class="hero-1" style="background: #1a4f77 <?php echo $backgroundImg; ?> no-repeat center / cover ; ">
        
        <div class="title" style="">
            <p><?php echo $hero_1['subhead']; ?></p>
        </div>
        <div class="paragraph-text" style="">
            <p><?php echo $hero_1['paragraph_text']; ?></p>
        </div>

            <?php if (!empty($hero_1['button_link'])): ?>
                <a style="" href="<?php echo esc_url($hero_1['button_link']) ?>" class="btn" role="link">
                    <?php echo $hero_1['button_label']; ?>
                </a>
            <?php endif; ?>

    </div>
</section>

<section class="2">

</section>

<section class="3">

</section>

<section class="4">

</section>

<section class="5">

</section>

<section class="6">

</section>

<section class="7">

</section>

<section class="8">
    
</section>

<?php
get_footer();
?>
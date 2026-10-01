
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

<?php wp_body_open(); ?>


<header class="site-header">

    <div class="container header-container">

        <a
            href="<?php echo esc_url(home_url('/')); ?>"
            class="logo"
        >

            <span class="logo-symbol">
                SL
            </span>

            <span class="logo-name">
                Siti Lutfia Wardani
            </span>

        </a>


        <nav class="main-navigation">

            <a
                href="<?php echo esc_url(home_url('/')); ?>"
                class="active"
            >
                Beranda
            </a>

            <a
                href="<?php echo esc_url(
                    home_url('/#tentang')
                ); ?>"
            >
                Tentang
            </a>

            <a
                href="<?php echo esc_url(
                    home_url('/#postingan')
                ); ?>"
            >
                Postingan
            </a>

            <a
                href="<?php echo esc_url(
                    home_url('/#kontak')
                ); ?>"
                class="contact-link"
            >
                Kontak
            </a>

        </nav>

    </div>

</header>
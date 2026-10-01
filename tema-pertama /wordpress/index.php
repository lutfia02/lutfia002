<?php get_header(); ?>

<main>

    <!-- HERO -->
    <section class="hero-section">

        <div class="container hero-container">

            <div class="hero-content">

                <p class="hero-label">
                    PERSONAL WEBSITE
                </p>

                <h1>
                    Siti Lutfia<br>
                    <span>Wardani.</span>
                </h1>

                <p class="hero-description">
                    Selamat datang di website pribadi saya.
                    Website ini dibuat menggunakan WordPress
                    sebagai media untuk belajar, berkarya,
                    dan mengembangkan kemampuan di bidang web.
                </p>

                <div class="hero-buttons">

                    <a
                        href="#tentang"
                        class="button button-dark"
                    >
                        Tentang Saya
                        <span>→</span>
                    </a>

                    <a
                        href="#postingan"
                        class="button button-light"
                    >
                        Lihat Postingan
                    </a>

                </div>

            </div>


            <div class="hero-side">

                <div class="portrait-box">

                    <div class="portrait-content">
                        SLW
                    </div>

                </div>

                <div class="side-caption">
                    <span>01</span>

                    <p>
                        Creative<br>
                        WordPress Project
                    </p>
                </div>

            </div>

        </div>

    </section>


    <!-- INTRO -->
    <section
        id="tentang"
        class="intro-section"
    >

        <div class="container">

            <div class="intro-grid">

                <div class="intro-number">
                    01
                </div>

                <div class="intro-title">

                    <p class="small-title">
                        TENTANG SAYA
                    </p>

                    <h2>
                        Sebuah website sederhana
                        dengan tampilan yang
                        <em>modern.</em>
                    </h2>

                </div>

                <div class="intro-text">

                    <p>
                        Saya adalah Siti Lutfia Wardani.
                        Website ini merupakan salah satu
                        project pembelajaran WordPress yang
                        dibuat dari dasar menggunakan PHP,
                        HTML, CSS, dan WordPress.
                    </p>

                    <a
                        href="#kontak"
                        class="text-link"
                    >
                        Hubungi Saya
                        <span>↗</span>
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- FEATURES -->
    <section class="features-section">

        <div class="container">

            <div class="section-top">

                <div>
                    <p class="small-title">
                        WHAT I USE
                    </p>

                    <h2>
                        Dibangun dengan
                        teknologi web.
                    </h2>
                </div>

                <span class="section-number">
                    02
                </span>

            </div>


            <div class="features-grid">

                <div class="feature">

                    <span class="feature-number">
                        01
                    </span>

                    <div class="feature-icon">
                        &lt;/&gt;
                    </div>

                    <h3>
                        HTML & CSS
                    </h3>

                    <p>
                        Struktur halaman dan tampilan
                        website dibuat dengan HTML dan CSS
                        yang responsif.
                    </p>

                </div>


                <div class="feature">

                    <span class="feature-number">
                        02
                    </span>

                    <div class="feature-icon">
                        PHP
                    </div>

                    <h3>
                        PHP
                    </h3>

                    <p>
                        Menggunakan PHP untuk membangun
                        struktur tema WordPress secara
                        dinamis.
                    </p>

                </div>


                <div class="feature">

                    <span class="feature-number">
                        03
                    </span>

                    <div class="feature-icon">
                        W
                    </div>

                    <h3>
                        WordPress
                    </h3>

                    <p>
                        WordPress digunakan sebagai sistem
                        pengelolaan konten website.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- POSTS -->
    <section
        id="postingan"
        class="posts-section"
    >

        <div class="container">

            <div class="section-top">

                <div>

                    <p class="small-title">
                        BLOG
                    </p>

                    <h2>
                        Postingan terbaru.
                    </h2>

                </div>

                <span class="section-number">
                    03
                </span>

            </div>


            <?php if (have_posts()) : ?>

                <div class="posts-list">

                    <?php while (have_posts()) : the_post(); ?>

                        <article class="post-item">

                            <div class="post-date">
                                <?php echo get_the_date('d'); ?>
                                <span>
                                    <?php echo get_the_date('M Y'); ?>
                                </span>
                            </div>


                            <div class="post-main">

                                <p class="post-category">
                                    WORDPRESS
                                </p>

                                <h3>
                                    <a
                                        href="<?php the_permalink(); ?>"
                                    >
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <div class="post-excerpt">

                                    <?php
                                    echo wp_trim_words(
                                        get_the_excerpt(),
                                        25
                                    );
                                    ?>

                                </div>

                            </div>


                            <a
                                href="<?php the_permalink(); ?>"
                                class="post-arrow"
                                aria-label="Baca postingan"
                            >
                                ↗
                            </a>

                        </article>

                    <?php endwhile; ?>

                </div>

            <?php else : ?>

                <div class="no-posts">

                    <span>✦</span>

                    <h3>
                        Belum ada postingan.
                    </h3>

                    <p>
                        Tambahkan postingan melalui
                        dashboard WordPress.
                    </p>

                    <a
                        href="<?php echo esc_url(
                            admin_url('post-new.php')
                        ); ?>"
                        class="button button-dark"
                    >
                        Tambah Postingan
                        <span>→</span>
                    </a>

                </div>

            <?php endif; ?>

        </div>

    </section>


    <!-- CONTACT -->
    <section
        id="kontak"
        class="contact-section"
    >

        <div class="container">

            <div class="contact-inner">

                <div>

                    <p class="small-title">
                        KONTAK
                    </p>

                    <h2>
                        Mari terhubung
                        <span>bersama.</span>
                    </h2>

                </div>

                <div class="contact-right">

                    <p>
                        Terima kasih telah mengunjungi
                        website saya. Jika ingin
                        menghubungi saya, silakan kirim
                        pesan melalui email.
                    </p>

                    <a
                        href="mailto:emailkamu@example.com"
                        class="contact-button"
                    >
                        Kirim Email
                        <span>↗</span>
                    </a>

                </div>

            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>
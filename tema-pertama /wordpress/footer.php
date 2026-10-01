
<footer class="site-footer">

    <div class="container">

        <div class="footer-top">

            <div class="footer-brand">

                <a
                    href="<?php echo esc_url(
                        home_url('/')
                    ); ?>"
                    class="logo footer-logo"
                >

                    <span class="logo-symbol">
                        SL
                    </span>

                    <span class="logo-name">
                        Siti Lutfia Wardani
                    </span>

                </a>

                <p>
                    Personal website yang dibuat
                    menggunakan WordPress.
                </p>

            </div>


            <div class="footer-navigation">

                <p>
                    NAVIGASI
                </p>

                <a
                    href="<?php echo esc_url(
                        home_url('/')
                    ); ?>"
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
                >
                    Kontak
                </a>

            </div>


            <div class="footer-navigation">

                <p>
                    KONTAK
                </p>

                <a href="mailto:emailkamu@example.com">
                    Email ↗
                </a>

                <a href="#kontak">
                    Contact ↗
                </a>

            </div>

        </div>


        <div class="footer-bottom">

            <span>
                © <?php echo date('Y'); ?>
                Siti Lutfia Wardani
            </span>

            <span>
                Built with WordPress
            </span>

        </div>

    </div>

</footer>


<?php wp_footer(); ?>

</body>

</html>
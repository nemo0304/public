
        <footer class="footer">
            <div class="levy-container">

                <div class="mapa-container">
                    <h3>KDE NÁS NAJDETE?</h3>
                    <?php dynamic_sidebar('mapa-footer'); ?>
                </div>

                <div class="pravy-container">
                    <div class="kontakty-container">
                        <h3>KONTAKTNÍ INFORMACE</h3>
                        <p>Letní tábor Sopka</p>
                        <p>Zlámaniny u Nové Paky</p>
                        <p>PSČ 509 01, okres Jičín</p>

                        <p>Daria Čiháková</p>
                        <p>Tel.: +420 777 910 470</p> 
                        <p>E-mail: taborsopka@gmail.com</p>

                        <div class="ikonky-container">
                            <a href="https://www.facebook.com/tabor.sopka1"><span class="fab fa-facebook-f"></span></a>
                        </div>
                    </div>

                    <div class="logo-container">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/logo_sopka.png">
                    </div>
                </div>

                <div class="copyright-container">
                <p>&copy; Copyright <?php echo date('Y'); ?> Všechna práva vyhrazena - Letní dětský tábor Sopka 1.turnus</p>
                </div>
            </div>
        </footer>

    <?php wp_footer();?>

    </body>
</html>
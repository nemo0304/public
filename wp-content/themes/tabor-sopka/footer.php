
        <footer class="footer w-100">
            <div class="row g-0">
                <div class="col-12 col-lg-6 bg-hover p-3 p-lg-5">
                    <div class="mapa-container mx-auto" style="max-width: 480px;">
                        <h3 class="mb-4 text-center text-black">KDE NÁS NAJDETE?</h3>
                        <div class="ratio ratio-16x9 overflow-hidden">
                            <?php echo get_field('footer_mapa', 'option');?>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 bg-primary pravy-container d-flex flex-column justify-content-center p-4 p-lg-5">

                    <div class="kontakty-container mx-auto w-100" style="max-width: 600px;">

                        <div class="d-flex flex-column flex-sm-row align-items-start gap-4 ">

                                <div class="cely-kontakt flex-grow-1 text-sm-start ">
                                    <h3 class="mb-4 text-black">KONTAKTNÍ INFORMACE</h3>
                                    <div class="mb-3 adresa">
                                        <p class="mb-0"><?php echo get_field('footer_adresa1','option');?></p>
                                        <p class="mb-0"><?php echo get_field('footer_adresa2','option');?></p>
                                        <p class="mb-0"><?php echo get_field('footer_adresa3','option');?></p>
                                    </div>
                                    
                                    <div class="kontakt">
                                        <p class="mb-0 mt-3"><?php echo get_field('footer_kontakt','option');?></p>
                                        <p class="mb-0 mt-1 fw-bold"><?php echo get_field('footer_telefon','option');?></p>
                                        <p class="mb-0 fw-bold"><?php echo get_field('footer_email','option');?></p>
                                    </div>
                                </div>

                                <div class="logo-container mt-4 mt-sm-0 align-self-center align-self-sm-auto">
                                    <img class="img-fluid" style = "max-width: 216px;" src="<?php echo get_template_directory_uri();?>/assets/images/logo_sopka.png">
                                </div>
                        </div>
                    </div>
                </div>
            </div>

                <div class="copyright-container text-center py-3 bg-copyright">
                    <p class="mb-0">&copy; Copyright <?php echo date('Y'); ?> Všechna práva vyhrazena - Letní dětský tábor Sopka 1.turnus</p>
                </div>
        </footer>

    <?php wp_footer();?>

    </body>
</html>


        </main>
        <footer>
            <div class="footerMain">
                <div class="container">
                    <div class="row"></div>
                </div>
            </div>
            <div class="footerBottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>&copy; Copyright <?=bloginfo();?> <?= date('Y');?> | All Rights Reserved</p>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            <p>
                                Site by <a href='' target='_blank' rel='nofollow'>Company Name Here</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer();?>
        <script>
            new WOW().init();
        </script>
    </body>
</html>
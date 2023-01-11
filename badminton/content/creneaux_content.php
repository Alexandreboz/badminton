<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">planing</span>
                        <span class="section-heading-lower">Jeu libre</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <?php
                        foreach ($array as $day => $hours) {
                            echo '<li class="list-unstyled-item list-hours-item d-flex">' . "$day" . '<span class="ms-auto">' . "$hours" . "<br>";
                        }
                        ?>
                    </ul>

                    <p class="address mb-5">
                        <em>
                            <strong>Gymnase Jean Mermoz</strong>
                            <br />
                            717 Av.Jean Mermoz, 34000 Montpellier
                        </em>
                    </p>
                    <div style="width: 100%"><iframe width="300" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=300&amp;height=200&amp;hl=en&amp;q=717%20Avenue%20Jean%20Mermoz,%20Montpellier,%20France+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html"></a></iframe></div>
                    <p class="mb-0">
                        <small><em>Contact</em></small>
                        <br />
                        (+33) 6.45.78.32.45
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'content/equipe_content.php';
?>
<script src="js/scripts.js"></script>
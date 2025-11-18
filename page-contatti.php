<?php
/* Template Name: Pagina Contatti */

get_header();
?>

<div class="content-area" style="max-width:800px;margin:50px auto;padding:20px;">

    <h1>Contattaci</h1>
    <p>Compila il modulo qui sotto e ti risponderemo il prima possibile.</p>

    <?php
    // Mostra il form WPForms con ID 18
    if ( function_exists( 'wpforms_display' ) ) {
        wpforms_display(18);
    } else {
        echo '<p>WPForms non è attivo!</p>';
    }
    ?>
    
</div>

<?php get_footer(); ?>

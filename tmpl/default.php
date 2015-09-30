<?php
defined( '_JEXEC' ) or die;

?>
<h3>Astronomy</h3>
<ul class = "<?php echo $listclass; ?>" >
<?php foreach( $cats as $c ){
        
            echo '<li>';
            echo '<a href = "' . JURI::base() . 'gallery/' . $c["alias"] . '" >';
            echo '<img src = "' . JURI::base() . 'images/gallery/thumbnails/' . $c["catpath"] . '/' . $c["imgfilename"] . '" alt = "' . $c["name"] . '">';
            echo '</a>';
            echo  '<h3>';
            echo '<a href = "' . JURI::base() . 'gallery/' . $c["alias"] . '" >';
            echo $c["name"];
            echo '</a>';
            echo '</h3>';
            echo  '</li>';
        }
        echo '</ul>';

?>

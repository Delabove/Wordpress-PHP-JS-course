<!-- <?php
    function greet($name, $color) {
     echo "<p>Hi, my $name is blank and my favorite color is $color.</p>";
    }

greet("John", "green");
greet("Jane", "pink");
?>

<h1><?php bloginfo(); ?></h1>
<p><?php bloginfo('description'); ?></p> -->

<!--
<?php
    $names = array('DeLayne', 'Grayson', 'Tuck', 'Mia');
    $count = 0;
    while($count < count($names)){
        echo "<li>Hi, my name is $names[$count]!</li>";
        $count++;

    }
?>
<p>Hello, <?php echo $names[2]; ?>!</p> -->

<?php
    while(have_posts()){
        the_post(); ?>

    <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
    <hr>
        <?php
    }


?>
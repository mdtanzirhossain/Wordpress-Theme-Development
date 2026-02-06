
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<?php
wp_head();
?>
</head>
<body>
    <?php
echo "<h1>Hello World</h1>";
echo "<p>Hello World</p>";
echo wp_get_theme()->get('Version');
?>
<img src="<?php echo esc_url()?>" alt=""> //kono url
<?php
wp_footer();
?>
</body>
</html>
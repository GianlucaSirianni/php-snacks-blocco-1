<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo -->

<?php

$paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum voluptatibus tempora voluptates cumque sequi officia cupiditate ad quae voluptas cum ducimus quibusdam alias at nihil voluptate perferendis, nemo deserunt corporis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum voluptatibus tempora voluptates cumque sequi officia cupiditate ad quae voluptas cum ducimus quibusdam alias at nihil voluptate perferendis, nemo deserunt corporis.';


$newParagraph =  explode(("."), $paragraph);


echo "<pre>";
print_r($newParagraph);
echo "</pre>";


?>
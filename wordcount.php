<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word count</title>
</head>
<body>
    
<?php
    $word='  This Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, eveniet molestiae corrupti harum hic aliquam culpa,
     accusantium pariatur itaque cumque delectus? Beatae similique vitae culpa. Hic atque quibusdam numquam This Lorem, ipsum dolor sit amet
      consectetur adipisicing elit. Officiis quae, eveniet molestiae corrupti harum hic aliquam culpa, accusantium pariatur itaque cumque delectus?
       Beatae similique vitae culpa. Hic atque quibusdam numquamThis Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, 
       eveniet molestiae corrupti harum hic aliquam culpa, accusantium pariatur itaque cumque delectus? Beatae similique vitae culpa.
        Hic atque quibusdam numquam. This here is a set of seven words plus';
    $wordCount=str_word_count($word);
    echo $wordCount;
    echo "<br/>";
    if($wordCount < 100){
        echo "Invalid word length, less than 100";
    }
    else if ($wordCount>100){
        echo "More than 100 words";
    }
    else{
        echo "100 words ";
    }
?>

</body>
</html>
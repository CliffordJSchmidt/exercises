<?php 

$books = array(
    array(
        'author' => 'Milo Yiannopoulos',
        'title' => 'Dangerous',
        'price' => '$15.62'
    ),
    array(
        'author' => 'Margaret Atwood',
        'title' => 'The Handmaid\'s Tale',
        'price' => '$8.69'
    ),
    array(
        'author' => 'George Orwell',
        'title' => '1984',
        'price' => '$7.09'
    ),
    array(
        'author' => 'Rupi Kaur',
        'title' => 'Milk and Honey',
        'price' => '$8.99'
    ),
    array(
        'author' => 'Neil Gaiman',
        'title' => 'Norse Mythology',
        'price' => '$15.57'
    )
);

//var_dump ($books);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
</head>
<body>
    <?php if (count($books) > 0): ?> 
        <table>
            <thead>
                <tr>
                    <th><?php echo implode('</th><th>', array_keys(current($books))); ?> </th>
        
                </tr>

            </thead>
        
            <tbody>
                    <?php foreach ($books as $row): array_map('htmlentities', $row); ?>
                        <tr>
                        <td><?php echo implode('</td><td>', $row); ?></td>
                        </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

<!--
    Do not know why this works, probaly not a good thing to always have to cut and paste... found it on the following website. 
 http://stackoverflow.com/questions/4746079/how-to-create-a-html-table-from-a-php-array
-->

</body>
</html>
<?php 
$posts = [
    [
        'title' => 'Tech news 1',
        'body' => 'Tech news body 1',
        'created_at' => 'May 24, 2020',
        'author' => 'Chris'
    ],
    [
        'title' => 'Tech news 2',
        'body' => 'Tech news body 2',
        'created_at' => 'December 14, 2020',
        'author' => 'Kaspar'
    ],
    [
        'title' => 'Tech news 3',
        'body' => 'Tech news body 3',
        'created_at' => 'August 12, 2020',
        'author' => 'Martin'
    ],
    [
        'title' => 'Tech news 4',
        'body' => 'Tech news body 4',
        'created_at' => 'September 1, 2021',
        'author' => 'Pets'
    ],
    [
        'title' => 'Tech news 5',
        'body' => 'Tech news body 5',
        'created_at' => 'June 8, 2023',
        'author' => 'Vello'
    ],
];

?>

<?php include './partials/header.php' ?>

<h1>Tech news</h1>
<?php include './partials/posts.php' ?>

<?php include './partials/pagefoot.php' ?>
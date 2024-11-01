<?php 
$posts = [
    [
        'title' => 'U.S news 1',
        'body' => 'U.S news body 1',
        'created_at' => 'May 24, 2020',
        'author' => 'Chris'
    ],
    [
        'title' => 'U.S news 2',
        'body' => 'U.S news body 2',
        'created_at' => 'December 14, 2020',
        'author' => 'Kaspar'
    ],
    [
        'title' => 'U.S news 3',
        'body' => 'U.S news body 3',
        'created_at' => 'August 12, 2020',
        'author' => 'Martin'
    ],
    [
        'title' => 'U.S news 4',
        'body' => 'U.S news body 4',
        'created_at' => 'September 1, 2021',
        'author' => 'Pets'
    ],
    [
        'title' => 'U.S news 5',
        'body' => 'U.S news body 5',
        'created_at' => 'June 8, 2023',
        'author' => 'Vello'
    ],
];

?>

<?php include './partials/header.php' ?>

<h1>U.S news</h1>
<?php include './partials/posts.php' ?>

<?php include './partials/pagefoot.php' ?>
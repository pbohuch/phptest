<?php require_once('../vendor/autoload.php');

class Greeter {
    public function greet(string $greeting = 'Hello'): string {
        return $greeting . ' World';
    }
}

$greeter = new Greeter;

?>

<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <title><?= $greeter->greet() ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>


<body class="d-flex flex-column h-100">
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <a style="float:right" href="/mysql" class="btn btn-primary" target="_blank">MySQL Admin</a>
            <h1 class="mt-5"><?= $greeter->greet('Greetings') ?></h1>
            <p>Some helpful starting points...</p>
            <ul>
                <li><a href="https://www.php.net/manual/en/langref.php" target="_blank">PHP Language Reference</a></li>
                <li><a href="https://getcomposer.org/doc/03-cli.md" target="_blank">Composer Reference</a></li>
                <li><a href="https://getbootstrap.com/docs/4.5/getting-started/introduction/" target="_blank">Bootstrap Reference</a></li>
                <li><a href="https://www.packagist.org" target="_blank">Packagist</a></li>
            </ul>
        </div>
    </main>
</body>

</html>

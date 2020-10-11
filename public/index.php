<?php require_once('../vendor/autoload.php');

class Greeter
{
    public string $whom;

    public function greet(string $greeting = 'Hello'): string
    {
        return $greeting . ' ' . $this->whom;
    }
}

$greeter = new Greeter;
$greeter->whom = 'World';

// If you want to see your Apache console produce an error, comment out line 14 and watch
// it respond to a greeting without a recipient.

$resources = [
    'https://www.php.net/manual/en/langref.php' => 'PHP Language Reference',
    'https://phptherightway.com/' => 'PHP "The Right Way"',
    'https://getcomposer.org/doc/03-cli.md' => 'Composer Reference',
    'https://getbootstrap.com/docs/4.5/getting-started/introduction/' => 'Bootstrap Reference',
    'https://www.packagist.org' => 'Packagist',
    'https://reactjs.org/docs/hello-world.html' => 'Introduction to React',
    'https://www.gitpod.io/docs/tips-and-tricks/' => 'Gitpod Tips and Tricks',
    'https://www.gitpod.io/docs/git/' => 'Gitpod Git Usage',
];

// MySQL is available in the environment with "root" username and no password

?>

<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <title><?= $greeter->greet('Greetings') ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
</head>

<body class="d-flex flex-column h-100">
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <a style="float:right" href="/mysql" class="btn btn-primary" target="_blank">MySQL Admin</a>
            <h1 class="mt-5"><?= $greeter->greet() ?></h1>
            <p>Some helpful starting points...</p>
            <ul>
                <?php foreach ($resources as $url => $title) : ?>
                    <li>
                        <a href="<?= $url ?>" target="_blank">
                            <?= $title ?>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
            <a href="/" target="_blank">Open New Window</a>
            <hr/>
            
            <h3>Try React</h3>
            <p>
                React is our preferred JavaScript View library. Here's an example of a React
                component embedded in a page.
            </p>
            <div id="react"></div>
        </div>
    </main>
</body>


<script type="text/babel">

    function Timer(props) {
        const [tick, setTick] = React.useState(0);

        React.useEffect(
            function() {
                // This function will run once, when the component is mounted.
                // Set an timer to update the ticks once per second.
                const timeout = setInterval(function() {
                    setTick(function(tick) {
                        return tick + 1;
                    });
                }, 1000);

                return function() {
                    // This function will run when the component unmounts.
                    // Here we free the resources we started above.
                    clearTimeout(timeout);
                };
            }, []);

        return <div>{tick} seconds have elapsed</div>;
    }

    ReactDOM.render(<Timer/>, 
        document.querySelector('#react'));
</script>

</html>

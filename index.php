<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>The World of UndeadScythes</title>
        <link rel="stylesheet" type="text/css" href="website.css">
    </head>
    <body>
        <?php 
        include('header.php');
        include('navbar.php');
        if(isset($_GET['page'])) {
            $x = $_GET['page'];
        } else {
            $x = 'home';
        }
        switch($x) {
            case 'minecraft':
                $title = 'UndeadScythe\'s Minecraftopia';
                break;
            case 'home':
                $title = 'The World of UndeadScythes';
                break;
            case 'twitch':
                $title = 'Dave.tv';
                break;
            case 'forum':
                $title = 'The Official UDS Forum';
                break;
            default:
                $title = 'What\'s a '.$x.'?';
                break;
        }
        include('title.php');
        ?>
        <div id="main">
            <?php 
            switch($x) {
                case 'twitch':
                    include('twitch.php');
                    break;
                case 'forum':
                    include('forum.php');
                    break;
                default:
                    include('home.php');
                    break;
            }
            ?>
        </div>
        <div id="split"></div>
        <?php include('footer.php');?>
    </body>
</html>

<?php

require_once("Game.php");

session_start();
$game = new Game($_SESSION["sticksLeft"]);

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf8'>
		<title>$this->title</title>
	</head>
	<body>
    <form name="form" action="" method="get">
        Sticks: <input type="number" name="Sticks" min="1" max="19">
        <input type="submit" name="Submit" value="Sticks"/>
    </form>
		<?php

    $game->playerRemoveSticks($_GET["Sticks"]);
    echo "Player removed " . $_GET["Sticks"] . " sticks, {" .$game->sticksLeft() ." } left ";

    $game->AIRemoveSticks();
    echo "AI removed 1 sticks, {" . $game->sticksLeft() . "} left ";
    $_SESSION["sticksLeft"] = $game->sticksLeft();

    if ($_SESSION["sticksLeft"] <= 0) {
      $_SESSION["sticksLeft"] = 21;
    }

    echo $test->gameResult();
		?>
	</body>
</html>

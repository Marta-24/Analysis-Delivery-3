<?php
// Function manager
if (isset($_POST['function'])) {
	switch ($_POST['function']) {
		case 'NewPlayer':
            if (isset($_POST['dateTime']))
				NewPlayer($_POST['dateTime']);
            else
                echo "No data for NewPlayer";
			break;
        case 'NewPosition':
            if (isset($_POST['dateTime']) && isset($_POST['playerID']) && isset($_POST['x']) && isset($_POST['y']) && isset($_POST['z']) && isset($_POST['name']))
                NewPosition($_POST['dateTime'], $_POST['playerID'], $_POST['x'], $_POST['y'], $_POST['z'], $_POST['name']);
            else
                echo "No data for NewPosition";
            break;
        case 'NewJump':
            if (isset($_POST['dateTime']) && isset($_POST['playerID']) && isset($_POST['x']) && isset($_POST['y']) && isset($_POST['z']) && isset($_POST['name']))
                NewJump($_POST['dateTime'], $_POST['playerID'], $_POST['x'], $_POST['y'], $_POST['z'], $_POST['name']);
            else
                echo "No data for NewJump";
            break;
        case 'NewAttack':
            if (isset($_POST['dateTime']) && isset($_POST['playerID']) && isset($_POST['x']) && isset($_POST['y']) && isset($_POST['z']) && isset($_POST['name']))
                NewAttack($_POST['dateTime'], $_POST['playerID'], $_POST['x'], $_POST['y'], $_POST['z'], $_POST['name']);
            else
                echo "No data for NewAttack";
            break;
        case 'NewDeath':
            if (isset($_POST['dateTime']) && isset($_POST['playerID']) && isset($_POST['x']) && isset($_POST['y']) && isset($_POST['z']) && isset($_POST['name']))
                NewDeath($_POST['dateTime'], $_POST['playerID'], $_POST['x'], $_POST['y'], $_POST['z'], $_POST['name']);
            else
                echo "No data for NewDeath";
            break;
        case 'NewHit':
            if (isset($_POST['dateTime']) && isset($_POST['playerID']) && isset($_POST['x']) && isset($_POST['y']) && isset($_POST['z']) && isset($_POST['name']))
                NewHit($_POST['dateTime'], $_POST['playerID'], $_POST['x'], $_POST['y'], $_POST['z'], $_POST['name']);
            else
                echo "No data for NewHit";
            break;
        case 'NewHeal':
            if (isset($_POST['dateTime']) && isset($_POST['playerID']) && isset($_POST['x']) && isset($_POST['y']) && isset($_POST['z']) && isset($_POST['currentHealth']))
                NewHeal($_POST['dateTime'], $_POST['playerID'], $_POST['x'], $_POST['y'], $_POST['z'], $_POST['currentHealth']);
            else
                echo "No data for NewHeal";
            break;
        case 'NewCheckpoint':
            if (isset($_POST['dateTime']) && isset($_POST['playerID']) && isset($_POST['x']) && isset($_POST['y']) && isset($_POST['z']) && isset($_POST['currentHealth']))
                NewCheckpoint($_POST['dateTime'], $_POST['playerID'], $_POST['x'], $_POST['y'], $_POST['z'], $_POST['currentHealth']);
            else
                echo "No data for NewCheckpoint";
            break;
        case 'NewInteractuable':
            if (isset($_POST['dateTime']) && isset($_POST['playerID']) && isset($_POST['x']) && isset($_POST['y']) && isset($_POST['z']) && isset($_POST['interactuableName']))
                NewInteractuable($_POST['dateTime'], $_POST['playerID'], $_POST['x'], $_POST['y'], $_POST['z'], $_POST['interactuableName']);
            else
                echo "No data for NewInteractuable";
		default:
			echo "No function defined. " . $_POST['function'];
			break;
	}
}
else
{
    echo "failed.";
    exit;
}

// New PLayer
function NewPlayer($dateTime)
{
    include_once("db_connect.php");

	$sql = "INSERT INTO `D3_Players` (`date`) VALUES ('$dateTime')";
	if ($conn->query($sql) === TRUE) {
		// Last inserted id
		echo $conn->insert_id;
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

// New Position
function NewPosition($dateTime, $playerID, $posX, $posY, $posZ, $name)
{
    include_once("db_connect.php");

    $posX = str_replace(",", ".", $posX);
    $posY = str_replace(",", ".", $posY);
    $posZ = str_replace(",", ".", $posZ);

    $sql = "INSERT INTO `D3_Positions` (`playerID`, `name`, `posX`, `posY`, `posZ`, `date`) VALUES ('$playerID', '$name', '$posX', '$posY', '$posZ', '$dateTime')";
    if ($conn->query($sql) === TRUE) {
        // Last inserted id
        echo "Position inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// New Jump
function NewJump($dateTime, $playerID, $posX, $posY, $posZ, $name)
{
    include_once("db_connect.php");

    $posX = str_replace(",", ".", $posX);
    $posY = str_replace(",", ".", $posY);
    $posZ = str_replace(",", ".", $posZ);

    $sql = "INSERT INTO `D3_Jumps` (`playerID`, `name`, `posX`, `posY`, `posZ`, `date`) VALUES ('$playerID', '$name', '$posX', '$posY', '$posZ', '$dateTime')";
    if ($conn->query($sql) === TRUE) {
        // Last inserted id
        echo "Jump inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// New Attack
function NewAttack($dateTime, $playerID, $posX, $posY, $posZ, $name)
{
    include_once("db_connect.php");

    $posX = str_replace(",", ".", $posX);
    $posY = str_replace(",", ".", $posY);
    $posZ = str_replace(",", ".", $posZ);

    $sql = "INSERT INTO `D3_Attacks` (`playerID`, `name`, `posX`, `posY`, `posZ`, `date`) VALUES ('$playerID', '$name', '$posX', '$posY', '$posZ', '$dateTime')";
    if ($conn->query($sql) === TRUE) {
        // Last inserted id
        echo "Attack inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// New Death
function NewDeath($dateTime, $playerID, $posX, $posY, $posZ, $name)
{
    include_once("db_connect.php");

    $posX = str_replace(",", ".", $posX);
    $posY = str_replace(",", ".", $posY);
    $posZ = str_replace(",", ".", $posZ);

    $sql = "INSERT INTO `D3_Deaths` (`playerID`, `name`, `posX`, `posY`, `posZ`, `date`) VALUES ('$playerID', '$name', '$posX', '$posY', '$posZ', '$dateTime')";
    if ($conn->query($sql) === TRUE) {
        // Last inserted id
        echo "Death inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// New Hit
function NewHit($dateTime, $playerID, $posX, $posY, $posZ, $name)
{
    include_once("db_connect.php");

    $posX = str_replace(",", ".", $posX);
    $posY = str_replace(",", ".", $posY);
    $posZ = str_replace(",", ".", $posZ);

    $sql = "INSERT INTO `D3_Hits` (`playerID`, `name`, `posX`, `posY`, `posZ`, `date`) VALUES ('$playerID', '$name', '$posX', '$posY', '$posZ', '$dateTime')";
    if ($conn->query($sql) === TRUE) {
        // Last inserted id
        echo "Hit inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// New Heal
function NewHeal($dateTime, $playerID, $posX, $posY, $posZ, $currentHealth)
{
    include_once("db_connect.php");

    $posX = str_replace(",", ".", $posX);
    $posY = str_replace(",", ".", $posY);
    $posZ = str_replace(",", ".", $posZ);

    $sql = "INSERT INTO `D3_Heals` (`playerID`, `currentHealth`, `posX`, `posY`, `posZ`, `date`) VALUES ('$playerID', '$currentHealth', '$posX', '$posY', '$posZ', '$dateTime')";
    if ($conn->query($sql) === TRUE) {
        // Last inserted id
        echo "Heal inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// New Checkpoint
function NewCheckpoint($dateTime, $playerID, $posX, $posY, $posZ, $currentHealth)
{
    include_once("db_connect.php");

    $posX = str_replace(",", ".", $posX);
    $posY = str_replace(",", ".", $posY);
    $posZ = str_replace(",", ".", $posZ);

    $sql = "INSERT INTO `D3_Checkpoints` (`playerID`, `currentHealth`, `posX`, `posY`, `posZ`, `date`) VALUES ('$playerID', '$currentHealth', '$posX', '$posY', '$posZ', '$dateTime')";
    if ($conn->query($sql) === TRUE) {
        // Last inserted id
        echo "Checkpoint inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// New Interactuable
function NewInteractuable($dateTime, $playerID, $posX, $posY, $posZ, $interactuableName)
{
    include_once("db_connect.php");

    $posX = str_replace(",", ".", $posX);
    $posY = str_replace(",", ".", $posY);
    $posZ = str_replace(",", ".", $posZ);

    $sql = "INSERT INTO `D3_Interactuables` (`playerID`, `interactuableName`, `posX`, `posY`, `posZ`, `date`) VALUES ('$playerID', '$interactuableName', '$posX', '$posY', '$posZ', '$dateTime')";
    if ($conn->query($sql) === TRUE) {
        // Last inserted id
        echo "Interactuable inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}





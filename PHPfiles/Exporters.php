<?php
// Function manager
if (isset($_POST['function'])) {
	switch ($_POST['function']) {
        case 'GetPositions':
            GetPositions($_POST['playerID']);
            break;
        case 'GetJumps':
            GetJumps($_POST['playerID']);
            break;
        case 'GetAttacks':
            GetAttacks($_POST['playerID']);
            break;
        case 'GetHits':
            GetHits($_POST['playerID']);
            break;
        case 'GetDeaths':
            GetDeaths($_POST['playerID']);
            break;
        case 'GetHeals':
            if (isset($_POST['playerID']))
                GetHeals($_POST['playerID']);
            else
                GetHeals(null);
            break;
        case 'GetCheckpoints':
            if (isset($_POST['playerID']))
                GetCheckpoints($_POST['playerID']);
            else
                GetCheckpoints(null);
            break;
        case 'GetInteractuables':
            GetInteractuables($_POST['playerID']);
            break;
		default:
			echo "No function defined.";
			break;
	}
}
else
{
    echo "Failed.";
}

// Get Positions
function GetPositions($playerID)
{
    include_once("db_connect.php");

    if (is_null($playerID))
        $sql = "SELECT * FROM `D3_Positions`";
    else
        $sql = "SELECT * FROM `D3_Positions` WHERE `playerID` = '$playerID'";

    $result = $conn->query($sql);

    $lineSeparator = "|*|";
    $valueSeparator = "|/|";
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row["name"] . $valueSeparator . $row["posX"] . $valueSeparator . $row["posY"] . $valueSeparator . $row["posZ"] . $lineSeparator;
        }
    } else {
        echo "0 results";
    }
}

// Get Jumps
function GetJumps($playerID)
{
    include_once("db_connect.php");

    if (is_null($playerID))
        $sql = "SELECT * FROM `D3_Jumps`";
    else
        $sql = "SELECT * FROM `D3_Jumps` WHERE `playerID` = '$playerID'";

    $result = $conn->query($sql);

    $lineSeparator = "|*|";
    $valueSeparator = "|/|";
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row["name"] . $valueSeparator . $row["posX"] . $valueSeparator . $row["posY"] . $valueSeparator . $row["posZ"] . $lineSeparator;
        }
    } else {
        echo "0 results";
    }
}

// Get Attacks
function GetAttacks($playerID)
{
    include_once("db_connect.php");

    if (is_null($playerID))
        $sql = "SELECT * FROM `D3_Attacks`";
    else
        $sql = "SELECT * FROM `D3_Attacks` WHERE `playerID` = '$playerID'";

    $result = $conn->query($sql);

    $lineSeparator = "|*|";
    $valueSeparator = "|/|";
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row["name"] . $valueSeparator . $row["posX"] . $valueSeparator . $row["posY"] . $valueSeparator . $row["posZ"] . $lineSeparator;
        }
    } else {
        echo "0 results";
    }
}

// Get Deaths
function GetDeaths($playerID)
{
    include_once("db_connect.php");

    if (is_null($playerID))
        $sql = "SELECT * FROM `D3_Deaths`";
    else
        $sql = "SELECT * FROM `D3_Deaths` WHERE `playerID` = '$playerID'";

    $result = $conn->query($sql);

    $lineSeparator = "|*|";
    $valueSeparator = "|/|";
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row["name"] . $valueSeparator . $row["posX"] . $valueSeparator . $row["posY"] . $valueSeparator . $row["posZ"] . $lineSeparator;
        }
    } else {
        echo "0 results";
    }
}

// Get Hits
function GetHits($playerID)
{
    include_once("db_connect.php");

    if (is_null($playerID))
        $sql = "SELECT * FROM `D3_Hits`";
    else
        $sql = "SELECT * FROM `D3_Hits` WHERE `playerID` = '$playerID'";

    $result = $conn->query($sql);

    $lineSeparator = "|*|";
    $valueSeparator = "|/|";
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row["name"] . $valueSeparator . $row["posX"] . $valueSeparator . $row["posY"] . $valueSeparator . $row["posZ"] . $lineSeparator;
        }
    } else {
        echo "0 results";
    }
}

// Get Interactuables
function GetInteractuables ($playerID)
{
    include_once("db_connect.php");

    if (is_null($playerID))
        $sql = "SELECT * FROM `D3_Interactuables`";
    else
        $sql = "SELECT * FROM `D3_Interactuables` WHERE `playerID` = '$playerID'";

    $result = $conn->query($sql);

    $lineSeparator = "|*|";
    $valueSeparator = "|/|";
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row["interactuableName"] . $valueSeparator . $row["posX"] . $valueSeparator . $row["posY"] . $valueSeparator . $row["posZ"] . $lineSeparator;
        }
    } else {
        echo "0 results";
    }
}

// Get Checkpoints
function GetCheckpoints ($playerID)
{
    include_once("db_connect.php");

    if (is_null($playerID))
        $sql = "SELECT * FROM `D3_Checkpoints`";
    else
        $sql = "SELECT * FROM `D3_Checkpoints` WHERE `playerID` = '$playerID'";

    $result = $conn->query($sql);

    $lineSeparator = "|*|";
    $valueSeparator = "|/|";
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row["currentHealth"] . $valueSeparator . $row["posX"] . $valueSeparator . $row["posY"] . $valueSeparator . $row["posZ"] . $lineSeparator;
        }
    } else {
        echo "0 results";
    }
}

// Get Heals
function GetHeals ($playerID)
{
    include_once("db_connect.php");

    if (is_null($playerID))
        $sql = "SELECT * FROM `D3_Heals`";
    else
        $sql = "SELECT * FROM `D3_Heals` WHERE `playerID` = '$playerID'";

    $result = $conn->query($sql);

    $lineSeparator = "|*|";
    $valueSeparator = "|/|";
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row["currentHealth"] . $valueSeparator . $row["posX"] . $valueSeparator . $row["posY"] . $valueSeparator . $row["posZ"] . $lineSeparator;
        }
    } else {
        echo "0 results";
    }
}
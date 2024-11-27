<?php
function SelectCandy() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT CandyID, Name, Type, Price, ManufacturerID FROM candy");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function insertCandy($cName, $cType, $cPrice, $cManufacturerID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO candy (Name, Type, Price, ManufacturerID) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssdi", $cName, $cType, $cPrice, $cManufacturerID);
        $success =  $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateCandy($cName, $cType, $cPrice, cManufacturerID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE candy SET Name = ?, Type = ?, Price = ?, ManudacturerID = ? WHERE CandyID = ?");
        $stmt->bind_param("ssdi", $cName, $cType, $cPrice, cManufacturerID);
        $success =  $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteCandy($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM candy WHERE CandyID = ?");
        $stmt->bind_param("i", $cid);
        $success =  $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

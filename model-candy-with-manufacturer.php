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

function SelectManufacturerByCandy($mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT m.ManufacturerID, m.Name AS ManuName, m.Country, c.Name AS CandyName, c.Price FROM candy c join manufacturer m on c.ManufacturerID = m.ManufacturerID WHERE c.CandyID = ?");
        $stmt->bind_param("i", $mid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function SelectManuForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT ManufacturerID, Name FROM manufacturer ORDER BY Name" );
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertCanManu($mName, $mCountry, $mid, $cName, $cPrice, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO manufacturer (Name, Country, ManufacturerID) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $mName, $mCountry, $mid);
        $success =  $stmt->execute();

        $stmt = $conn->prepare("INSERT INTO candy (Name, Price, CandyID) VALUES (?, ?, ?)");
        $stmt->bind_param("sdi", $cName, $cPrice, $cid);
        $success =  $stmt->execute();
        
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateCanManu($mName, $mCountry, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE manufacturer SET Name = ?, Country = ? WHERE CandyID = ?");
        $stmt->bind_param("ssi", $mName, $mCountry, $cid);
        $success =  $stmt->execute();

        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteCanManu($cid) {
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

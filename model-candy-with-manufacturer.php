<?php
function SelectCandy() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT RestaurantID, Name, Rating, FoodType FROM tacobell");
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
?>

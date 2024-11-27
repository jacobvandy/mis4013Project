<?php
function SelectManufacturerByCandy($mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT m.ManufacturerID, m.Name, m.Country, c.Name, c.Price FROM candy c join manufacturer m on c.ManufacturerID = m.ManufacturerID WHERE c.CandyID = ?");
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

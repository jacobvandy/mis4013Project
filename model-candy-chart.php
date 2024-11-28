<?php
function SelectCandy() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Name, count(c.CandyID) as Candy_Count from candy c group by Name");
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

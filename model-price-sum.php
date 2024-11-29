<?php
function SelectCandys() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Price From candy order by Price");
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

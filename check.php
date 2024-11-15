<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "centraldb";
$response = array('success' => 0, 'message' => 'Something went wrong.');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "CREATE TABLE IF NOT EXISTS Harwood_Table (
            first_name VARCHAR(100),
            last_name VARCHAR(100),
            email VARCHAR(100),
            phone VARCHAR(11),
            postal_code VARCHAR(13),
            isbroker VARCHAR(8),
            withbroker VARCHAR(8),
            brokerage VARCHAR(100),
            casl VARCHAR(8)
        )";
        $conn->exec($sql);

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $postal_code = $_POST['postal'];
        $isbroker = isset($_POST['is_broker']) ? 'yes' : 'no';
        $with_broker = isset($_POST['with_broker']) ? 'yes' : 'no';
        $brokerage = $_POST['brokerage'];
        $casl = isset($_POST['casl']) ? 'yes' : 'no';

        $stmt = $conn->prepare("SELECT COUNT(*) FROM Harwood_Table WHERE email = :email");
        $stmt->execute(['email' => $email]);
        if ($stmt->fetchColumn() > 0) {
            $response['message'] = 'Error: Email already exists.';
        } else {
            $sql = "INSERT INTO Harwood_Table (first_name, last_name, email, phone, postal_code, isbroker, withbroker, brokerage, casl)
                    VALUES (:first_name, :last_name, :email, :phone, :postal_code, :isbroker, :withbroker, :brokerage, :casl)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                ':first_name' => $first_name,
                ':last_name' => $last_name,
                ':email' => $email,
                ':phone' => $phone,
                ':postal_code' => $postal_code,
                ':isbroker' => $isbroker,
                ':withbroker' => $with_broker,
                ':brokerage' => $brokerage,
                ':casl' => $casl
            ]);

            $response['success'] = 1;
            $response['message'] = 'Form submitted successfully!';
        }
    } catch (PDOException $e) {
        $response['message'] = "Connection failed: " . $e->getMessage();
    }
}
echo json_encode($response);
?>

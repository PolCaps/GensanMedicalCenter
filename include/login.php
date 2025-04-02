<?php
session_start();
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['email-username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "Please fill in all fields.";
        header("Location: ../AdminLogin.php?loginstatus=empty");
        exit();
    }

    // Prepare SQL statement to prevent SQL injection
    $query = "SELECT * FROM users WHERE username = ? OR email = ? LIMIT 1";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("ss", $username, $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                // Store user session after successful login
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['username'] = $user['username'];

                // Capture login details
                function getBrowserAndDevice($user_agent)
                {
                    if (strpos($user_agent, 'Firefox') !== false) {
                        $browser = "Firefox";
                    } elseif (strpos($user_agent, 'Chrome') !== false) {
                        $browser = "Chrome";
                    } elseif (strpos($user_agent, 'Safari') !== false) {
                        $browser = "Safari";
                    } else {
                        $browser = "Other";
                    }

                    if (strpos($user_agent, 'Mobile') !== false) {
                        $device = "Mobile";
                    } elseif (strpos($user_agent, 'Tablet') !== false) {
                        $device = "Tablet";
                    } else {
                        $device = "Desktop";
                    }

                    return [$browser, $device];
                }

                function getLocation($ip)
                {
                    $response = @file_get_contents("http://ip-api.com/json/{$ip}");
                    $data = json_decode($response, true);

                    if ($data && isset($data['city']) && isset($data['country'])) {
                        return $data['city'] . ', ' . $data['country'];
                    } else {
                        return "Unknown Location"; // Fallback in case API fails
                    }
                }

                $user_id = $_SESSION['user_id'];
                $ip_address = $_SERVER['REMOTE_ADDR'];
                $user_agent = $_SERVER['HTTP_USER_AGENT'];
                list($browser, $device) = getBrowserAndDevice($user_agent);
                $location = getLocation($ip_address);

                // Insert login record **after** authentication
                $sql = "INSERT INTO login_devices (user_id, ip_address, browser, device, location) VALUES (?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("issss", $user_id, $ip_address, $browser, $device, $location);
                $stmt->execute();

                header("Location: ../Dashboard.php?loginstatus=success");
                exit();
            } else {
                $_SESSION['error'] = "Invalid password.";
                header("Location: ../AdminLogin.php?loginstatus=error");
                exit();
            }
        } else {
            $_SESSION['error'] = "No Username found.";
            header("Location: ../AdminLogin.php?loginstatus=error2");
            exit();
        }

        $stmt->close();
    } else {
        $_SESSION['error'] = "Database error. Please try again.";
        header("Location: ../AdminLogin.php?loginstatus=db_error");
        exit();
    }
}
?>
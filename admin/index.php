<?php
// Simulate login details
$loginDetails = [
    [
        'Id' => 1,
        'Sitename' => 'Example Site',
        'Email' => 'user@example.com',
        'Password' => 'password123',
        'Otp' => '',
        'Cookie' => 'cookie-data',
        'UserAgent' => 'Mozilla/5.0',
        'Landing_url' => 'https://example.com',
        'Time' => 'Just now'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Login Details</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Sitename</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Otp</th>
                    <th>Cookie</th>
                    <th>UserAgent</th>
                    <th>Landing_url</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($loginDetails as $detail): ?>
                <tr>
                    <td><?php echo htmlspecialchars($detail['Id']); ?></td>
                    <td><?php echo htmlspecialchars($detail['Sitename']); ?></td>
                    <td><?php echo htmlspecialchars($detail['Email']); ?></td>
                    <td><?php echo htmlspecialchars($detail['Password']); ?></td>
                    <td><?php echo htmlspecialchars($detail['Otp']); ?></td>
                    <td><?php echo htmlspecialchars($detail['Cookie']); ?></td>
                    <td><?php echo htmlspecialchars($detail['UserAgent']); ?></td>
                    <td><?php echo htmlspecialchars($detail['Landing_url']); ?></td>
                    <td><?php echo htmlspecialchars($detail['Time']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
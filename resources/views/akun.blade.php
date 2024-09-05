<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .profile-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }
        .profile-container img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        .profile-container h2 {
            margin: 15px 0;
            font-size: 24px;
        }
        .profile-container p {
            margin: 5px 0;
            color: #666;
        }
        .profile-container button {
            margin-top: 20px;
            padding: 10px 20px;
            border: none;
            background-color: #007BFF;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        .profile-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <img src="https://i.pinimg.com/236x/18/72/d2/1872d271c318b8bb06fe30c05ddbeac0.jpg" alt="Profile Picture">
        <h2>CelParfume</h2>
        <p>Email: celparfume@gmail.com</p>
        <a href="/editakun">
        <button style="background-color: rgb(177, 159, 138);">Edit Profile</button>
        </a>
    </div>
</body>
</html>

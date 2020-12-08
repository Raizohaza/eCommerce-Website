<?php 
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ERROR | E_PARSE);

// autoload
require_once './vendor/autoload.php';
function findUserByUserName($email)
{
    global $db;
    $stmt = $db->prepare("SELECT * FROM users WHERE email=?");
    $stmt->execute(array($email));
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function findUserById($userId)
{
    global $db;
    $stmt = $db->prepare("SELECT * FROM users WHERE id=?");
    $stmt->execute(array($userId));
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


function getCurrentUser()
{
    if(isset($_SESSION['email']))
        return findUserByUserName($_SESSION['email']);
    return null;
}

function getCurrentUserId()
{
    if(isset($_SESSION['id']))
        return findUserByUserName($_SESSION['id']);
    return null;
}


function existsUsername($email){
    return findUserByUserName($email);
}

function createUser($email,$password)
{
    global $db;

    $stmt = $db->prepare("INSERT INTO users (email, password) VALUES (?,?)");
    echo $email;
    echo $password;
    $stmt->execute(array($email, $password));
    return findUserByUserName($email);
}

function resizeImage($filename, $max_width, $max_height)
{
  list($orig_width, $orig_height) = getimagesize($filename);

  $width = $orig_width;
  $height = $orig_height;

  # taller
  if ($height > $max_height) {
      $width = ($max_height / $height) * $width;
      $height = $max_height;
  }

  # wider
  if ($width > $max_width) {
      $height = ($max_width / $width) * $height;
      $width = $max_width;
  }

  $image_p = imagecreatetruecolor($width, $height);

  $image = imagecreatefromjpeg($filename);

  imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $orig_width, $orig_height);

  return $image_p;
}
function requireLoggedIn()
{
    global $currentUser;
    if ($currentUser){
        header('Location:index.php');
        exit();
    }
}

function getPosts()
{
    global $db;
    global $id;
    global $currentUser;
    $user = findUserByUserName($currentUser['email']);
    $stmt = $db->prepare("SELECT * FROM posts where UserId = ?");
    $stmt->execute(array($user['id']));
    // Lấy hết toàn bộ dữ liệu
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function createPost($content,$userId)
{
    global $db;
    $stmt = $db->prepare("INSERT INTO posts ( content, createdAt, UserId) VALUES (?, ?, ?)");
    $stmt->execute(array($content, `CURRENT_TIMESTAMP`, $userId));
}

function changePwd($password)
{
    global $db;
    global $currentUser;
    $stmt = $db->prepare("UPDATE users SET password = ? WHERE users.email = ?");
    $stmt->execute(array($password,$currentUser['email']));
    return findUserByUserName($currentUser);
}

function updatePassword($id, $password)
{
    global $db;
    $stmt = $db->prepare("UPDATE users SET password = ? WHERE id = ?");
    return $stmt->execute(array($password, $id));
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
// 'laptrinhweb100@gmail.com';                     // SMTP email
//         $mail->Password   = 'T04n123#';           
function sendMail($to, $subject, $content)
{
    $mail = new PHPMailer(true);

    try {                     // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'laptrinhweb100@gmail.com';                     // SMTP email
        $mail->Password   = 'Toan18600015';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        $mail->CharSet = 'UTF-8';
        //Recipients
        $mail->setFrom('laptrinhweb100@gmail.com', 'Toàn Phạm Web');
        $mail->addAddress($to);     // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $content;

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"] ?? '');
    $email = htmlspecialchars($_POST["email"] ?? '');
    $purpose = htmlspecialchars($_POST["purpose"] ?? '');
    $message = htmlspecialchars($_POST["message"] ?? '');

    $to = "info@msdeaf.org.my";
    $subject = "Borang Hubungi: $purpose dari $name";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-type: text/plain; charset=UTF-8";
    $body = "Nama: $name\nE-mel: $email\nTujuan: $purpose\nMesej:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Terima kasih kerana menghubungi kami. Kami akan membalas secepat mungkin.</p>";
    } else {
        echo "<p>Maaf, ada masalah semasa penghantaran. Sila cuba lagi.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="ms">
<head>
  <meta charset="UTF-8" />
  <title>Hubungi Kami</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    .contact-section {
      padding: 60px 20px;
      max-width: 700px;
      margin: auto;
      background-color: #f8f9fa;
    }
    .contact-section h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    .contact-section form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    .contact-section input,
    .contact-section textarea,
    .contact-section select {
      padding: 10px;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .contact-section button {
      background-color: #007acc;
      color: white;
      padding: 12px;
      font-size: 1rem;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .contact-section button:hover {
      background-color: #005c99;
    }
    .contact-info-box {
      margin: 0 auto 40px;
      background: #fff;
      padding: 20px;
      border-left: 5px solid #007acc;
      border-radius: 5px;
      line-height: 1.6;
      max-width: 700px;
    }
    iframe {
      width: 100%;
      height: 400px;
      border: 0;
      display: block;
      margin-bottom: 0;
    }
  </style>
</head>
<body style="background-color: #f8f9fa;">

  <!-- Full Google Map -->
  <iframe
    src="https://www.google.com/maps?q=No+9-2,+Jalan+Dwitasik+2,+Dataran+Dwitasik,+Bandar+Sri+Permaisuri,+56000+Kuala+Lumpur,+Malaysia&output=embed"
    allowfullscreen>
  </iframe>

  <!-- Contact Info Section -->
  <div class="contact-info-box" style="background-color: #f8f9fa;">
    <h3>Pejabat Kami - MSDeaf</h3>
    <p><strong>Alamat:</strong><br>
    No 9-2, Jalan Dwitasik 2,<br>
    Dataran Dwitasik, Bandar Sri Permaisuri,<br>
    56000 Kuala Lumpur, Malaysia</p>

    <p><strong>Telefon:</strong> (+60) 9171 0502</p>

    <p><strong>E-Mel:</strong><br>
    secgen@msdeaf.org.my<br>
    info@msdeaf.org.my</p>
  </div>

  <!-- Contact Form Section -->
  <section class="contact-section">
    <h2>Hubungi Kami</h2>
    <form action="contact.php" method="POST">
      <input type="text" name="name" placeholder="Nama Anda" required />
      <input type="email" name="email" placeholder="E-mel Anda" required />
      <select name="purpose" required>
        <option value="">-- Tujuan --</option>
        <option value="Pertanyaan Umum">Pertanyaan Umum</option>
        <option value="Sokongan Teknikal">Sokongan Teknikal</option>
        <option value="Pendaftaran Sukan">Pendaftaran Sukan</option>
        <option value="Lain-lain">Lain-lain</option>
      </select>
      <textarea name="message" rows="6" placeholder="Mesej Anda" required></textarea>
      <button type="submit">Hantar Mesej</button>
    </form>
  </section>
</body>
</html>

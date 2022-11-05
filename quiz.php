<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz</title>
  <style>
    *{
      box-sizing: border-box;
      margin: 0;
      padding: 10px;
    }
  </style>
</head>

<body>
    <form action="" method="post">


      <p>1. Dibawah ini yang tidak termasuk aplikasi untuk browsing adalah...</p>
      <div>
        <input type="radio" name="soal1" id="soal1" value="Biru">
        <label  for="soal1">
          A. Chrome
        </label>
      </div>
      <div>
        <input type="radio" name="soal1" id="soal1" value="Merah">
        <label  for="soal1">
          B. Mozilla Firefox
        </label>
      </div>
      <div>
        <input type="radio" name="soal1" id="soal1" value="Kuning">
        <label  for="soal1">
          C. Microsoft Edge
        </label>
      </div>
      <div>
        <input type="radio" name="soal1" id="soal1" value="Ungu">
        <label  for="soal1">
          D. Microsoft Office
        </label>
      </div>


      <p >2. Yang termasuk alat input adalah...</p>
      <div>
        <input type="radio" name="soal2" id="soal2" value="">
        <label  for="soal2">
          A. Keyboard 
        </label>
      </div>
      <div>
        <input type="radio" name="soal2" id="soal2" value="">
        <label  for="soal2">
          B. Printer
        </label>
      </div>
      <div>
        <input type="radio" name="soal2" id="soal2" value="">
        <label  for="soal2">
          C. Monitor
        </label>
      </div>
      <div>
        <input type="radio" name="soal2" id="soal2" value="">
        <label  for="soal2">
          D. Proyektor
        </label>
      </div>


      <p >3. Bagian/alat komputer komputer yang berfungsi untuk mensupply listrik adalah...</p>
      <div>
        <input type="radio" name="soal3" id="soal3" value="">
        <label for="soal3">
          A. Motherboard
        </label>
      </div>
      <div>
        <input type="radio" name="soal3" id="soal3" value="">
        <label for="soal3">
         B. Processor
        </label>
      </div>
      <div>
        <input type="radio" name="soal3" id="soal3" value="">
        <label for="soal3">
          C. Power Supply
        </label>
      </div>
      <div>
        <input  type="radio" name="soal3" id="soal3" value="">
        <label  for="soal3">
          D. Harddisk
        </label>
      </div>


      <p >4. Yang bukan merupakan hardware komputer adalah...</p>
      <div >
        <input  type="radio" name="soal4" id="soal4" value="">
        <label for="soal4">
          A. Power Supply
        </label>
      </div>
      <div >
        <input type="radio" name="soal4" id="soal4" value="">
        <label  for="soal4">
          B. Windows
        </label>
      </div>
      <div >
        <input  type="radio" name="soal4" id="soal4" value="">
        <label  for="soal4">
          C. Monitor
        </label>
      </div>
      <div >
        <input type="radio" name="soal4" id="soal4" value="">
        <label  for="soal4">
          D. CD ROOM
        </label>
      </div>


      <p>5. Tombol power yang berfungsi untuk menghidupkan komputer terletak pada...</p>
      <div >
        <input type="radio" name="soal5" id="soal5" value="">
        <label for="soal5">
          A. Monitor
        </label>
      </div>
      <div >
        <input type="radio" name="soal5" id="soal5" value="">
        <label  for="soal5">
          B. Stabilizer
        </label>
      </div>
      <div >
        <input type="radio" name="soal5" id="soal5" value="">
        <label  for="soal5">
          C. CPU
        </label>
      </div>
      <div>
        <input type="radio" name="soal5" id="soal5" value="">
        <label for="soal5">
          D. CD ROOM
        </label>
      </div>

      <div>
        <button type="submit" name="submit" id="submit">Lihat Hasil</button>
      </div>
    </form>
    <?php
    if (isset($_POST['submit'])) {
      $soal1 = $_POST['soal1'];
      $soal2 = $_POST['soal2'];
      $soal3 = $_POST['soal3'];
      $soal4 = $_POST['soal4'];
      $soal4 = $_POST['soal5'];
      $correct = 0;
      $note = "";
      $jawabanInput = array($soal1, $soal2, $soal3, $soal4, $soal5);
      $jawaban = array("Microsoft Office", "Keyboard", "Power Supply", "Windows","CPU");
      for ($i = 0; $i < count($jawabanInput); $i++) {
        if ($jawabanInput[$i] == $jawaban[$i]) {
          $correct += 20;
        }
      }
      switch ($correct) {
        case 100:
          $note = "Sangat Baik";
          break;
        case 80:
          $note = "Baik";
          break;
        case 60:
          $note = "Cukup";
          break;
        case 40:
          $note = "Kurang";
          break;
        case 20:
          $note = "Kurang Sekali";
          break;
        default:
          $note = "Semua Jawaban Salah";
          break;
      }
      echo "<h4 class='text-primary mt-4'>Nilai anda: $correct</h4>";
      echo "<h4 class='text-primary' >Keterangan: $note </h4>";
    }
    ?>
</body>

</html>
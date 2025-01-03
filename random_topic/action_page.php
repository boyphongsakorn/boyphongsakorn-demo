<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<?php
include 'config.php';
if (!isset($_POST["name"])) {

  while ( $row = mysqli_fetch_array($com_rt_re, MYSQLI_ASSOC) ) {

    $update = "UPDATE topic SET bywho = '".$_POST["name"]."' WHERE id  = ".$row["id"];
    $superresult = $mysqli -> query($update);

?>
    <script>
    /*alert("คุณได้หัวข้อที่ <?php echo $row["id"]; ?> <?php echo $row["title"]; ?>");
    window.location = "https://pwisetthon.com/random_mis.php";*/

    Swal.fire({
      title: 'คุณได้หัวข้อที่ <?php echo $row["id"]; ?> <?php echo $row["title"]; ?>',
      icon: 'success',
      showCancelButton: false,
      confirmButtonText: 'โอเค'
    }).then((result) => {
      if (result.value) {
        window.location = "https://pwisetthon.com/random_mis.php";
      }   
    })

    </script>
<?php
  }
}else{
  ?>
  <script>
  /*alert("คุณได้หัวข้อที่ <?php echo $row["id"]; ?> <?php echo $row["title"]; ?>");
  window.location = "https://pwisetthon.com/random_mis.php";*/

  Swal.fire({
    title: 'คุณได้หัวข้อที่ <?php echo $row["id"]; ?> <?php echo $row["title"]; ?>',
    icon: 'success',
    showCancelButton: false,
    confirmButtonText: 'โอเค'
  }).then((result) => {
    if (result.value) {
      window.location = "https://pwisetthon.com/random_mis.php";
    }   
  })

  </script>
  <?php
}
?>
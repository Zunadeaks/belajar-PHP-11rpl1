<?php
      if ( isset($_GET["nis"]) ){
            $nis = $_GET["nis"];

            $query = "
                  DELETE FROM datanilai
                  WHERE nis = '$nis';
            ";
            
            include ('./input-config.php');
            $delete = mysqli_query($mysqli, $query);

            if($delete){
                  echo "
                        <script>
                        alert('Data berhasil dihapus');
                        window.location='input-nilai.php';
                        </script>
                  ";
            }else{
                  echo "
                        <script>
                        alert('Data gagal');
                        window.location='input-nilai.php';
                        </script>
                  ";
            }
      }
?>  
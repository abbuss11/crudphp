<?php include ('dbcon.php'); ?>


<?php
  
      if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "DELETE  from `students` where `id` = '$id'  ";

        $result = mysqli_query($con, $query);

        if(!$result) {
            die ("Requete echouée".mysqli_error());
        }

        else {
            header('location: index.php?delete_msg= Vous avez supprimer une ligne');
        }

      }

  ?>
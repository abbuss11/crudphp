<?php   include('header.php');  ?>
<?php   include('dbcon.php');  ?> 


      <?php

      if(isset($_GET['id'])) {
        $id = $_GET['id'];
     
        $query = " SELECT * from  `students` where `id`  =  '$id' ";
     
        $result = mysqli_query($con, $query);
     
        if (!$result) {
           die ("erreur de requete".mysqli_error());
        } 
        else {
          $row = mysqli_fetch_assoc($result) ;
        
            print_r($row);
      }
  }     
      ?>

      <?php 

      if(isset($_POST['update_students'])) {

        if (isset($_GET['id_new'])) {
            $idnew = $_GET ['id_new'];
        }

         $nom = $_POST['nom'];
         $prenom = $_POST['prenom'];
         $age = $_POST['age'];

         $query = "UPDATE `students` set `nom`= '$nom', `prenom` = '$prenom', `age`= '$age' Where  `id` = '$idnew' ";

         $result = mysqli_query($con, $query);
     
         if (!$result) {
            die ("erreur de requete".mysqli_error());
         } 
         else {
            header ('location:index.php?update_msg= Mise a jour Avec succes');
         }

      }
      
      ?>




      <form action="update_page1.php?id_new=<?php echo $id;  ?>" method="post" >
      <div class="form-group">
              <label for="nom">Nom</label>
              <input type="text" name="nom" id="" class="form-control" value="<?php echo $row['nom'] ?>"  >
          </div>

          <div class="form-group">
              <label for="Prenom">Prenom</label>
              <input type="text" name="prenom" id="" class="form-control"  value="<?php echo $row['prenom'] ?>" >
          </div>

          <div class="form-group">
              <label for="age">Age</label>
              <input type="text" name="age" id="" class="form-control"  value="<?php echo $row['age'] ?>"  >
          </div>
          <input type="submit" class="btn btn-success" name="update_students" value="Update">

          </form>




<?php include('footer.php'); ?>
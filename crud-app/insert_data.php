<?php
 include 'dbcon.php';
   if(isset($_POST['add_students'])) {

    $nom  = $_POST['nom'];
    $prenom  = $_POST['prenom'];
    $age = $_POST['age'];

        if ($nom == "" || empty($nom)) {
            header('location:index.php?message= Nom requise');
            

        }

        else {

            $query = " INSERT INTO `students` (`nom`, `prenom`, `age`) VALUES ('$nom', '$prenom', '$age') ";

            $result = mysqli_query($con,$query);

            if (!$result){
                die("Requete Echouée ".mysqli_error());
            }
            else {
                header ('location:index.php?insert_msg=Ajouter avec succés');
            }
        }
   }

?>
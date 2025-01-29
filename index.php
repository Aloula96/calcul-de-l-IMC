<?php include_once "header.php";?>
<?php include_once "footer.php"
?>

<div class="container mt-5">
    <h1 class="display-4 text-center">Calculer votre IMC</h1>
    
    <div class="card shadow-lg p-4">
        <div class="card-body">
            <form class="form" method="POST" action="">
                <div class="mb-3">
                    <label class="form-label">Âge :</label>
                    <input type="number" name="age" id="age" class="form-control" placeholder="Âge">
                </div>

                <div class="mb-3">
                    <label class="form-label">Poids (kg) :</label>
                    <input type="number" name="poid" id="poid" class="form-control" placeholder="Poids en kg">
                </div>

                <div class="mb-3">
                    <label class="form-label">Taille (cm) :</label>
                    <input type="number" name="taille" id="taille" class="form-control" placeholder="Taille en cm">
                </div>

                <button class="btn btn-primary w-100" type="submit">Calculer</button>
            </form>

<?php
if (isset($_POST['age'])&& isset($_POST['poid'])&& isset($_POST['taille'])){
  $age= $_POST['age'];
  // echo "<p> $age </p>";
  $poid=$_POST['poid'];
  // echo "<p>$poid </p>";
  $taille=$_POST['taille'];
  // echo "<p> $taille </p>";

 
  
  $meters = intval($taille) / 100;
  if ($meters != 0) {
    $resultat = intval($poid) / ($meters*$meters);
    if( $resultat<18.5){
      $sentence = "Votre IMC est en Insuffisance pondérale (maigreur)";
    } else if($resultat >= 18.5 && $resultat < 25){
      $sentence = "Votre IMC est en Corpulence normale";
    } else if($resultat >= 25 && $resultat <30 ){
      $sentence="  Votre IMC est en Surpoids ";
    } else if($resultat >= 30 && $resultat <35  ){
      $sentence=" Votre IMC est en Obésité modérée";
    }else if($resultat >= 35 && $resultat <40 ){
      $sentence= " Votre IMC est en Obésité sévère ";
    } else if($resultat >40  ){
      $sentence= "Votre IMC est en Obésité morbide ou massive ";}
            echo $sentence;
            echo  round($resultat,2);
          }      
  }
            ?>
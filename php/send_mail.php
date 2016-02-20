<?php
if(isset($_POST[‘identifiant’], $_POST[‘objet’], $_POST[‘email’], $_POST[‘message’])){
  mail(votreadressemail@domaine.extension, $_POST[‘objet’], $_POST[‘message’]) ;
}else {
  [‘flash’][‘danger’] = « Oups, il semble y avoir un soucis dans votre demande, veuillez vérifier les données rentrées » ;
}
?>

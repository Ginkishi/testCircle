<?php
function fAge($date) {
  $datetime1 = new DateTime("today");
  $datetime2 = new DateTime($date);
  $interval = $datetime2->diff($datetime1);
  return $interval->format('%y');
  }  ?>
<main role="main" class="container">
    <div class="starter-template">
      <h1>Affichage d'un employé</h1>
    </div>

<!--
object(stdClass)[6]
  public 'EmployeeID' => string '270' (length=3)
  public 'NationalIDNumber' => string '56920285' (length=8)
  public 'ContactID' => string '1004' (length=4)
  public 'LoginID' => string 'adventure-works\sharon0' (length=23)
  public 'ManagerID' => string '3' (length=1)
  public 'Title' => null
  public 'BirthDate' => string '1951-06-03 00:00:00' (length=19)
  public 'MaritalStatus' => string 'M' (length=1)
  public 'Gender' => string 'F' (length=1)
  public 'HireDate' => string '2001-02-18 00:00:00' (length=19)
  public 'SalariedFlag' => string '1' (length=1)
  public 'VacationHours' => string '4' (length=1)
  public 'SickLeaveHours' => string '22' (length=2)
  public 'CurrentFlag' => string '1' (length=1)
  public 'rowguid' => string '�c���vK�����L' (length=16)
  public 'ModifiedDate' => string '2001-02-10 23:00:00' (length=19)
  public 'NameStyle' => string '0' (length=1)
  public 'FirstName' => string 'Sharon' (length=6)
  public 'MiddleName' => string 'B' (length=1)
  public 'LastName' => string 'Salavaria' (length=9)
  public 'Suffix' => null
  public 'EmailAddress' => string 'sharon0@adventure-works.com' (length=27)
  public 'EmailPromotion' => string '2' (length=1)
  public 'Phone' => string '970-555-0138' (length=12)
  public 'PasswordHash' => string 'C319012D5AA85B7AF4406D05C96463F34163154F' (length=40)
  public 'PasswordSalt' => string 'dhGWm88=' (length=8)
  public 'AdditionalContactInfo' => null
  public 'ETitle' => string 'Design Engineer' (length=15)
  public 'CTitle' => null
  public 'EMTitle' => string 'Engineering Manager' (length=19)
  public 'CMTitle' => null
  public 'CMFirstName' => string 'Roberto' (length=7)
  public 'CMMiddleName' => null
  public 'CMLastName' => string 'Tamburello' (length=10)
-->

  <br/>
  <div class="row">
    <h3>
      <?php if (isset($e->EmployeeID)) echo '('.$e->EmployeeID.') '; ?>
      <?php if (isset($e->CTitle)) echo $e->CTitle.' '; ?>
      <?php if (isset($e->FirstName)) echo $e->FirstName.' '; ?>
      <?php if (isset($e->MiddleName)) echo $e->MiddleName.' '; ?>
      <?php if (isset($e->LastName)) echo $e->LastName.' '; ?>
      <?php if (isset($e->Suffix)) echo $e->Suffix; ?>
      <?php if (isset($e->EmployeeID)) echo ' <a href="index.php?c=employee&m=edit&id='.$e->EmployeeID.'" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Modifier l\'employé"><i class="fas fa-edit"></i> Modifier</a>';?>
    </h3>
  </div>

  <div class="row">
    <label class="col-md-4 control-label">Numéro sécurité sociale :</label>
    <div class="col-md-8">
      <?php if (isset($e->NationalIDNumber)) echo $e->NationalIDNumber; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">LoginID :</label>
    <div class="col-md-8">
      <?php if (isset($e->LoginID)) echo $e->LoginID; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">Date de naissance :</label>
    <div class="col-md-8">
      <?php if (isset($e->BirthDate)) echo date('d/m/Y',strtotime($e->BirthDate)). ' ('.fAge($e->BirthDate).' ans)'; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">Date d'entrée dans l'entreprise :</label>
    <div class="col-md-8">
      <?php if (isset($e->HireDate)) echo date('d/m/Y',strtotime($e->HireDate)). ' ('.fAge($e->HireDate).' ans d\'ancienneté)'; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">Statut marital :</label>
    <div class="col-md-8">
      <?php if (isset($e->MaritalStatus)) echo $e->MaritalStatus; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">Sexe :</label>
    <div class="col-md-8">
      <?php if (isset($e->Gender)) echo $e->Gender; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">Nombre d'heure de vacances :</label>
    <div class="col-md-8">
      <?php if (isset($e->VacationHours)) echo $e->VacationHours; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">Nombre d'heure de maladie :</label>
    <div class="col-md-8">
      <?php if (isset($e->SickLeaveHours)) echo $e->SickLeaveHours; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">Adresse mail :</label>
    <div class="col-md-8">
      <?php if (isset($e->EmailAddress)) echo $e->EmailAddress; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">EmailPromotion :</label>
    <div class="col-md-8">
      <?php if (isset($e->EmailPromotion)) echo $e->EmailPromotion; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">Téléphone :</label>
    <div class="col-md-8">
      <?php if (isset($e->Phone)) echo $e->Phone; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">Poste occupé :</label>
    <div class="col-md-8">
      <?php if (isset($e->ETitle)) echo $e->ETitle; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">Manager :</label>
    <div class="col-md-8">
      <?php if (isset($e->CMTitle)) echo $e->CMTitle; ?>
      <?php if (isset($e->CMFirstName)) echo ' '.$e->CMFirstName; ?>
      <?php if (isset($e->CMMiddleName)) echo ' '.$e->CMMiddleName; ?>
      <?php if (isset($e->CMLastName)) echo ' '.$e->CMLastName; ?>
      <?php if (isset($e->EMTitle)) echo ' ('.$e->EMTitle.')'; ?>
      <?php if (isset($e->ManagerID)) echo ' <a href="index.php?c=employee&m=view&id='.$e->ManagerID.'" class="btn btn-success btn-sm" data-toggle="tooltip" title="Modifier l\'employé"><i class="fas fa-eye"></i> Voir</a>';?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">Dernière modification :</label>
    <div class="col-md-8">
      <?php if (isset($e->ModifiedDate)) echo $e->ModifiedDate; ?>
    </div>
  </div>

</main><!-- /.container -->
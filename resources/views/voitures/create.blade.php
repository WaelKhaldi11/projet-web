<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--

TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/templatemo-klassy-cafe.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">

    </head>

    <body>
<div class="contact-form">
    <form id="contact" action="{{route('voitures.store')}}" method="post" enctype="multipart/form-data">
        @csrf <!-- {{ csrf_field() }} -->
      <div class="row">
        <div class="col-lg-12">
            <h4>Ajouter voiture</h4>
        </div>
        <div class="col-lg-6 col-sm-12">
          <fieldset>
            <input name="marque" type="text" id="marque" placeholder="Marque" required="">
          </fieldset>
        </div>
        <div class="col-lg-6 col-sm-12">
          <fieldset>
          <input name="modele" type="text" id="modele"  placeholder="Modele" required="">
        </fieldset>
        </div>
        <div class="col-lg-6 col-sm-12">
          <fieldset>
            <input name="matricule" type="text" id="matricule" placeholder="Matricule" required="">
          </fieldset>
        </div>
        <div class="col-md-6 col-sm-12">
          <fieldset>
            <select value="carburant" name="carburant" id="carburant" >
                <option name="essance" id="essance">Essance</option>
                <option name="Gasoil" id="Gasoil">Gasoil</option>
            </select>
          </fieldset>
        </div>
        <div class="col-lg-6 col-sm-12">
            <fieldset>
              <input name="couleur" type="text" id="couleur" placeholder="Couleur" required="">
            </fieldset>
          </div>
          <div class="col-lg-6 col-sm-12">
            <fieldset>
              <input name="prix_jour" type="text" id="prix_jour" placeholder="Prix de jour" required="">
            </fieldset>
          </div>
          <div class="col-lg-6 col-sm-12">
            <fieldset>
              <input name="nbr_place" type="text" id="nbr_place" placeholder="Nombre de places" required="" accept="image/*">
            </fieldset>
          </div>
          <div class="col-lg-6 col-sm-12">
            <fieldset>
              <input name="image" type="file" id="image" placeholder="Image de voiture" required="">
            </fieldset>
          </div>
        <div class="col-lg-12 mt-3">
          <fieldset>
            <button type="submit" id="form-submit" class="main-button-icon">Ajouter voiture</button>
          </fieldset>
        </div>
      </div>
    </form>
</div>
</body>
</html>

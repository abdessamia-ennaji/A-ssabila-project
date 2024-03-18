@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
        <h1>Gestion Transport A-ssabila</h1>
    </div>
<div class="container">
    <div class="row gy-2 my-2">
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100">
          <a href="/liste/chauffeur">
            <img class="card-img-top" src="https://media.istockphoto.com/id/831270492/fr/vectoriel/chauffeur-de-bus-caucasien-assis-au-volant.jpg?s=612x612&w=0&k=20&c=tGLVNpUI0yrAookRVTqxviGlJ1kha7twOZgks2igbRY=" alt="Card image cap">
          </a>
            <div class="card-body">
            <h5 class="card-title">Ajouter Chauffeur</h5>
            <a href="/liste/chauffeur" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
      </div>

      
      <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100">
        <a href="/liste/escorte">
        <img class="card-img-top" src="https://media.istockphoto.com/id/512990133/fr/vectoriel/enfants-de-monter-dans-le-bus-scolaire.jpg?s=612x612&w=0&k=20&c=_8TW5KSiWlcFIAysezfAp7kZ61UbI5znDDHINyxTyqU=" alt="Card image cap">
      </a>
        <div class="card-body">
          <h5 class="card-title">Ajouter Escorte</h5>
          <a href="/liste/escorte" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      </div>
      

      <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100">
        <a href="/liste/transport">
        <img class="card-img-top" src="https://us.123rf.com/450wm/vipdesignusa/vipdesignusa1307/vipdesignusa130700071/20920863-un-v%C3%A9hicule-pour-le-transport-des-enfants-bus-scolaire-vector-illustration.jpg" alt="Card image cap">
      </a>    
        <div class="card-body">
            <h5 class="card-title">Transport</h5>
            
            <a href="/liste/transport" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
      </div>
    
        <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100">
          <a href="/liste/reclamation">
            <img class="card-img-top" src="https://img.freepik.com/vecteurs-libre/critique-plat-organique-illustree_23-2148957885.jpg" alt="Card image cap">
            <div class="card-body">
          </a>
            <h5 class="card-title">Ajouter une reclamation</h5>
            
            <a href="/liste/reclamation" class="btn btn-primary">Go somewhere</a>
            </div>
          
        </div>
      </div>


      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100">
          <a href="/liste/arriveedepart">
            <img class="card-img-top" src="https://www.ecolesaintemariepiex.net/wp-content/uploads/2015/06/depart-arrivee-300x300.jpg" alt="Card image cap">
          </a>
            <div class="card-body">
            <h5 class="card-title">Arrivées et départs</h5>
            
            <a href="/liste/arriveedepart" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100">
          <a href="/liste/kilometrage">
            <img class="card-img-top" src="https://static8.depositphotos.com/1113140/887/v/600/depositphotos_8877644-stock-illustration-speedometer.jpg" alt="Card image cap">
          </a>
            <div class="card-body">
            <h5 class="card-title">Situation de kilometrage</h5>
            
            <a href="/liste/kilometrage" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
      </div>
      <!-- WAIT FOR CREATING -->
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100">
          <a href="">
            <img class="card-img-top" src="https://render.fineartamerica.com/images/rendered/default/acrylic-print/8/6/hangingwire/break/images-medium-5/broken-school-bus-jake-jacobs.jpg" alt="Card image cap">
          </a>
            <div class="card-body">
            <h5 class="card-title">Reclamation de voiture</h5>
            
            <a href="/ajouter/chauffeur" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100">
          <a href="">
            <img class="card-img-top" src="https://st3.depositphotos.com/1062085/13155/v/600/depositphotos_131556148-stock-illustration-data-sheet-monoflat-icon.jpg" alt="Card image cap">
          </a>
            <div class="card-body">
            <h5 class="card-title">Fiche Technique</h5>
            
            <a href="/ajouter/chauffeur" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
      </div>

    </div>
    
    


</div>





<!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
            <i class="bi bi-facebook"></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="orange" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/>
            </svg>
        </a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
  
        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
                <strong>Sign up for our newsletter</strong>
              </p>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline form-white mb-4">
                <input type="email" id="form5Example21" class="form-control" />
                <label class="form-label" for="form5Example21">Email address</label>
              </div>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button type="submit" class="btn btn-outline-light mb-4">
                Subscribe
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->
  
      <!-- Section: Text -->
      <section class="mb-4">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
          repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
          eum harum corrupti dicta, aliquam sequi voluptate quas.
        </p>
      </section>
      <!-- Section: Text -->
  
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 2</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 3</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 4</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 2</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 3</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 4</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 2</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 3</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 4</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 2</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 3</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 4</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">A-ssabila Transport</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
    
@endsection
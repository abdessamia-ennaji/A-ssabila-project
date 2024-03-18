<div class="container">
  <div class="row">
    <div class="col-md-6">

      <h1>A-SSABILA TRANSPORT SCOLAIRE</h1>
      <h3 class="text-primary">Détails de la voiture de transport scolaire</h3>
      <p><strong>Chauffeur :</strong> {{ $chauffeur->nomChfr }}</p>
      <p><strong>Assistante :</strong> {{ $escorte->nomEsc }}</p>
      <p><strong>lettre de voiture :</strong> {{ $transport->lettrevoiture }}</p>
      <p><strong>Licence :</strong> {{ $transport->licence }}</p>
      <p><strong>Numero d'immatriculation :</strong> {{ $transport->numMatricule }}</p>
      <p><strong>La visite :</strong> {{ $transport->laVisite }}</p>
      <p><strong>Date debut la visite :</strong> {{ $transport->dateDebutlaVisite }}</p>
      <p><strong>Date fin la visite :</strong> {{ $transport->dateFinlaVisite }}</p>
      <p><strong>Carte grise :</strong> {{ $transport->cartGrise }}</p>
      <p><strong>Date debut la carte grise :</strong> {{ $transport->dateDebutcartGrise }}</p>
      <p><strong>Date fin la carte grise :</strong> {{ $transport->dateFincartGrise }}</p>
      <p><strong>Assurance :</strong></p>
      <p><strong>Date de début d'assurance :</strong> {{ $transport->dateDebutAssurance }}</p>
      <p><strong>Date de fin d'assurance :</strong> {{ $transport->dateFinAssurance }}</p>
      <p><strong>Trajet :</strong> {{ $transport->trajet }}</p>
      <p><strong>nombre de chaises :</strong> {{ $transport->nbrChaises }}</p>
      
      
      
    </div>
  </div>
</div>
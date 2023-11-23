<body>
    <div style="position: relative; width: 100%; z-index:1;">
       
        <img src="{{public_path('images/fulltransport.png')}}" alt="" style=" position: absolute; top: 10px width: 120px; height: 50px; margin-left: 0px;"/>  
        <p style="position: absolute; top: -10px; left: 305px">Numéro du ticket: N° {{$ticket->id_tickets}}</p>
        <p style="position: absolute; top: 10px; left: 305px">Siège : N° {{$ticket->numplace}}</p>
        <p style="position: absolute; top: 75px; left: 170px">Ligne : {{$ticket->depart}} - {{$ticket->arrivee}}</p>
        <p style="position: absolute; top: 110px; left: 0px">Nom : {{$ticket->nom}}</p>
        <p style="position: absolute; top: 135px; left: 0px">Prénom : {{$ticket->prenom}} </p>
        <p style="position: absolute; top: 160px; left: 0px">Téléphone: {{$ticket->telephone}}</p>
        <p style="position: absolute; top: 185px; left: 0px">Date du voyage: {{$ticket->datevoyage}}</p>
        <p style="position: absolute; top: 210px; left: 0px">Heure de départ: {{$ticket->heure_depart}}</p>
        <h3 style="position: absolute; top: 240px; left: 170px">Prix: {{$ticket->prix}} FCFA</h3>
        <p style="font:italic; position: absolute; top: 280px; left: 90px">Merci de nous avoir choisi faîtes un bon voyage.</p>
    </div>
     <div style="position: absolute; top: 125px left:200px; z-index:2;">
            <!-- On affiche le code QR au format SVG -->
            {{ $qrcode }}
    </div>
</body>
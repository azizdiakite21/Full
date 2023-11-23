<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ticket colis</title>
    </head>
    <body>
        <div style="position: relative; width: 100%; z-index:1;">
            <img src="{{public_path('images/fulltransport.png')}}" alt="" style=" position: absolute; top: 10px; width: 220px; height: 70px; margin-left: 0px;"/>  
            <p style="position: absolute; top: 25px; left: 400px">Numéro du colis: </p><h1 style="position: absolute; top: -45px; left: 530px; font-size: 4rem; font: bold;">{{$colis->id_colis}}</h1>
            <p style="position: absolute; top: 130px; left: 275px">Destination : </p><p style="position: absolute; top: 100px; left: 375px; font-size: 2rem; font: bold;">{{$colis->destination}}</p>
            
            <hr style="position: absolute; top: 180px; width: 100%">

            <p style="position: absolute; top: 200px; left: 0px">Nom expéditeur : </p><p style="position: absolute; top: 200px; left: 120px; font: bold">{{$colis->nomcli}}</p>
            <p style="position: absolute; top: 200px; left: 225px">Prenom expéditeur : </p><p style="position: absolute; top: 200px; left: 360px; font: bold">{{$colis->prenomcli}}</p>
            <p style="position: absolute; top: 200px; left: 465px">Telephone expéditeur : </p><p style="position: absolute; top: 200px; left: 615px; font: bold">{{$colis->telephone}}</p>

            <hr style="position: absolute; top: 250px; width: 100%">

            <p style="position: absolute; top: 270px; left: 180px">Date d'envoi: </p><p style="position: absolute; top: 270px; left: 275px; font: bold">{{$colis->datevoyage}}</p>
            <p style="position: absolute; top: 270px; left: 450px">Bus : </p><p style="position: absolute; top: 270px; left: 500px; font: bold">{{$colis->plaque}}</p>
            
            <hr style="position: absolute; top: 320px; width: 100%">

            <p style="position: absolute; top: 340px; left: 0px">Nom destinataire : </p><p style="position: absolute; top: 340px; left: 125px; font: bold">{{$colis->nomdestinataire}}</p>
            <p style="position: absolute; top: 340px; left: 225px">Prenom destinataire : </p><p style="position: absolute; top: 340px; left: 365px; font: bold">{{$colis->prenomdestinataire}}</p>
            <p style="position: absolute; top: 340px; left: 465px">Telephone destinataire : </p><p style="position: absolute; top: 340px; left: 620px; font: bold">{{$colis->telephonedestinataire}}</p>

        </div>
        
        <hr style="position: absolute; top: 450px; width: 100%; border-style: dashed;">

        <div style="position: relative; width: 100%; z-index:1;">
            <img src="{{public_path('images/fulltransport.png')}}" alt="" style=" position: absolute; top: 550px; width: 220px; height: 70px; margin-left: 0px;"/>  
            <p style="position: absolute; top: 545px; left: 400px">Numéro du colis: </p><h1 style="position: absolute; top: 475px; left: 530px; font-size: 4rem; font: bold;">{{$colis->id_colis}}</h1>
            <p style="position: absolute; top: 590px; left: 400px">Identifiant colis : {{$colis->code_colis}} </p>
            <p style="position: absolute; top: 670px; left: 275px">Destination : </p><p style="position: absolute; top: 640px; left: 375px; font-size: 2rem; font: bold;">{{$colis->destination}}</p>
            
            <hr style="position: absolute; top: 720px; width: 100%">

            <p style="position: absolute; top: 740px; left: 0px">Nom expéditeur : </p><p style="position: absolute; top: 740px; left: 120px; font: bold">{{$colis->nomcli}}</p>
            <p style="position: absolute; top: 740px; left: 225px">Prenom expéditeur : </p><p style="position: absolute; top: 740px; left: 360px; font: bold">{{$colis->prenomcli}}</p>
            <p style="position: absolute; top: 740px; left: 465px">Telephone expéditeur : </p><p style="position: absolute; top: 740px; left: 615px; font: bold">{{$colis->telephone}}</p>

            <hr style="position: absolute; top: 790px; width: 100%">

            <p style="position: absolute; top: 810px; left: 180px">Date d'envoi: </p><p style="position: absolute; top: 810px; left: 275px; font: bold">{{$colis->datevoyage}}</p>
            <p style="position: absolute; top: 810px; left: 400px">Poids du colis : </p><p style="position: absolute; top: 810px; left: 500px; font: bold">{{$colis->poids}} kg</p>
            
            <hr style="position: absolute; top: 860px; width: 100%">

            <p style="position: absolute; top: 880px; left: 0px">Nom destinataire : </p><p style="position: absolute; top: 880px; left: 125px; font: bold">{{$colis->nomdestinataire}}</p>
            <p style="position: absolute; top: 880px; left: 225px">Prenom destinataire : </p><p style="position: absolute; top: 880px; left: 365px; font: bold">{{$colis->prenomdestinataire}}</p>
            <p style="position: absolute; top: 880px; left: 465px">Telephone destinataire : </p><p style="position: absolute; top: 880px; left: 620px; font: bold">{{$colis->telephonedestinataire}}</p>

            <h1 style="position: absolute; top: 940px; left: 265px">Prix: {{$colis->taxage}} FCFA</h1>
            <p style="font:italic; position: absolute; top: 1000px; left: 140px">Merci de nous avoir choisi avec nous votre colis est envoyé en toute sûretée.</p>

            <hr style="position: absolute; top: 1030px; width: 100%; border-style: solid;">

            <p style="position: absolute; top: 1035px; left: 0px; font-size: 12px">Date d'enregistrement : {{$colis->date_enregistrement}} </p>
            <p style="position: absolute; top: 1035px; left: 515px; font-size: 12px">Caissier : </p><p style="position: absolute; top: 1035px; left: 565px; font: bold; font-size: 12px">{{$colis->nom}} {{$colis->prenom}}</p>
            

        </div>
    </body>
    </body>
</html>
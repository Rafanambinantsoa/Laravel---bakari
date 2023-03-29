{{-- @component('mail::message')
    <p><strong><u>Objet :</u></strong> Votre achat sur Kim Logement</p>
    <p><strong>Bonjour , </strong>{{$mailData['nom'] .$mailData['prenom'] }}</p>
    <p>Merci d'avoir acheté  sur notre site Web Kim Corporation Immobilier.
        Nous sommes ravis que vous ayez choisi notre entreprise pour votre achat sur  {{$mailData['nom_logement']}}.
    </p>
    <p>Cependant, nous avons besoin que vous vous rendiez à notre entreprise pour finaliser le paiement. Nous sommes situés à Imandry Fianarantsoa
        et notre horaire d'ouverture est de 8H - 22H.</p>
    <p>Veuillez apporter une copie de ce courriel ainsi que votre confirmation d'achat pour nous aider à accélérer le processus de paiement.</p>
    <p>
        Si vous avez des questions ou des préoccupations, n'hésitez pas à me contacter à mon
        adresse email : {{$mailData['email_agent']}}. 
    </p>
    <p>
        Nous attendons avec impatience de vous voir bientôt ! <br>

        Cordialement, {{$mailData['nom_agent']}}
    </p>
    New House Purchase Congratulations. --}}

    

@component('mail::message')

<p> <strong>Objet:</strong>  Félicitations pour l'achat de votre nouvelle maison!</p> 

<p>Cher/Chère {{$mailData['nom']}} , </p>

<p>Nous sommes ravis de vous informer que votre achat de maison a été finalisé avec succès. Au nom de Kim Logement, nous tenons à vous féliciter pour cet investissement important dans votre vie.</p>
<p>Ci-dessous, vous trouverez les informations clés concernant votre nouvelle propriété: </p>
<p>
    <ul>
        <li><i> Adresse:</i> {{$mailData['lieu']}}</li>
        <li><i> Taille de la propriété::</i> {{$mailData['superficie']}} m²</li>
        <li><i> Nombre de lits::</i>{{$mailData['lit']}}</li>
        <li><i> Nombre de salles de bains::</i> {{$mailData['douche']}}</li>
        <li><i> Garage :</i> {{$mailData['garage']}}</li>
        <li><i> Prix de la maison:</i>{{$mailData['prix']}} $</li>
    </ul>
</p>
<p>Nous sommes convaincus que vous allez adorer votre nouvelle maison et nous sommes impatients de voir comment vous allez la personnaliser et en faire un chez-soi confortable. Si vous avez des questions ou des préoccupations, n'hésitez pas à nous contacter.</p>
<p>Encore une fois, félicitations pour votre nouvel achat! Nous espérons que cette maison sera un lieu de bonheur et de merveilleux souvenirs pour les années à venir.</p>
<p>Cordialement,</p>
<p> {{$mailData['nom_agent']}} , <br>
    kim Logement</p>
@endcomponent

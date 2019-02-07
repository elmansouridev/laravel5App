<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 <style type="text/css">
  td{
   width: 250px;
   height: 50px;
   font-family:  DejaVu Sans, sans-serif;
  }
img{
  width: 100%;
}
 </style>

</head>
<body>
<?php $image_path = '/assets/img/image.png';  ?>
<div><img src="{{ public_path() . $image_path }}"></div>

<table>


@foreach($insc as $ins)


 <tr>
  <td>Numéro d'Apogée</td>
  <td>{{ $ins->napogee }}</td>
  <td></td>
 </tr>

 <tr>
  <td>Nom</td>
  <td>{{ $ins->nom }}</td>
  <td>ﻲﻠﺋﺎﻌﻟا ﻢﺳﻻا</td>
 </tr>

 <tr>
  <td>Prénom</td>
  <td>{{ $ins->prenom }}</td>
  <td>ﻲﺼﺨﺸﻟا ﻢﺳﻻا</td>
 </tr>

 <tr>
  <td>Date de Naissance</td>
  <td>{{ $ins->dateNais }}</td>
  <td>ﺩﺎﻳﺩﺯﻻا ﺦﻳﺭﺎﺗ</td>
 </tr>

 <tr>
  <td>Lieu de Naissance</td>
  <td>{{ $ins->lieuNais }}</td>
  <td>ﺩﺎﻳﺩﺯﻻا ﻥﺎﻜﻣ</td>
 </tr>

 <tr>
  <td>Année de réussite en BAC</td>
  <td>{{ $ins->anneeBac }}</td>
  <td>ﻙﺎﺒﻟا ﻕﺎﻘﺤﺘﺳا ﺔﻨﺳ</td>
 </tr>

 <tr>
  <td>Moyen en BAC</td>
  <td>{{ $ins->moyenBac }}</td>
  <td>ﻙﺎﺒﻟا ﺓﺩﺎﻬﺷ ﻲﻓ ﻪﻴﻠﻋ ﻞﺼﺤﻤﻟا ﻝﺪﻌﻤﻟا</td>
 </tr>

 <tr>
  <td>Filière étudie au Lycée</td>
  <td>{{ $ins->filiereLycee }}</td>
  <td>ﺔﻳﻮﻧﺎﺜﻟﺎﺑ ﺔﻴﺳاﺭﺪﻟا ﺔﺒﻌﺸﻟا</td>
 </tr>

 <tr>
  <td>Filière d'insccription à la faq</td>
  <td>{{ $ins->fiiereInscFaq }}</td>
  <td>ﺔﻴﻠﻜﻟﺎﺑ ﺔﻴﺳاﺭﺪﻟا ﺔﺒﻌﺸﻟا</td>
 </tr>

 <tr>
  <td>Année d'insccription à la faq</td>
  <td>{{ $ins->anneeInscFaq }}</td>
  <td>ﺔﻴﻠﻜﻟا ﻲﻓ ﻞﻴﺠﺴﺘﻟا ﺔﻨﺳ</td>
 </tr>

 <tr>
  <td>Modules valides</td>
  <td>{{ $ins->modulesValides }}</td>
  <td>ﺔﻠﺼﺤﻤﻟا ﺕاﺪﺣﻮﻟا ﺩﺪﻋ</td>
 </tr>

 <tr>
  <td>Adresse</td>
  <td>{{ $ins->adresse }}</td>
  <td>ﻥاﻮﻨﻌﻟا</td>
 </tr>

 <tr>
  <td>Travail des parents</td>
  <td>{{ $ins->travailParent }}</td>
  <td>ﻡﻷا ﻭ ﺏﻷا ﺔﻨﻬﻣ</td>
 </tr>

 <tr>
  <td>Boursier</td>
  <td>{{ $ins->boursier }}</td>
  <td>ﺔﺤﻨﻤﻟا ﻰﻠﻋ ﻞﺻﺎﺣ</td>
 </tr>

 <tr>
  <td>Nombre d'enfant de la famille</td>
  <td>{{ $ins->nbrEnfantFamille }}</td>
  <td>ﺔﻠﺋﺎﻌﻟا ﻞﺧاﺩ ﺓﻮﺧﻻا ﺩﺪﻋ</td>
 </tr>

 <tr>
  <td>Marrakech le</td>
  <td>{{ $ins->marrakechLe }}</td>
  <td></td>
 </tr>

@endforeach


</table>


</body>
</html>
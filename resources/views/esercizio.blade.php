<?php
$foods = [
  [
    "id" => 1,
    "nomeCibo" => "Orecchiette alle Cime di Rapa",
    "isPiattoCaldo" => true,
    "tempoPreparazioneMinuti" => 30,
  ],
  [
    "id" => 2,
    "nomeCibo" => "Focaccia Barese",
    "isPiattoCaldo" => true,
    "tempoPreparazioneMinuti" => 120,
  ],
  [
    "id" => 3,
    "nomeCibo" => "Burrata di Andria",
    "isPiattoCaldo" => false,
    "tempoPreparazioneMinuti" => 0,
  ],
  [
    "id" => 4,
    "nomeCibo" => "Pasticciotto Leccese",
    "isPiattoCaldo" => true,
    "tempoPreparazioneMinuti" => 60,
  ],
];
$nameFoods=[];
foreach ($foods as $food) {
    if ($food['isPiattoCaldo']) {
      $nameFoods[]= $food['nomeCibo'];
    }
    
}
dd($nameFoods);
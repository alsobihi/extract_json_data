<?php
/**
 *
 * https://developer.wathq.sa/ar/api/16#/
 * 
 *  */ 

$json_url = "fullinfo.json";
$data = file_get_contents($json_url);
$data = json_decode($data, false);
echo "<br>";
echo $data->crName;
echo "<br>";
echo $data->crNumber;
echo "<br>";
echo $data->crEntityNumber;
echo "<br>";
echo $data->issueDate;
echo "<br>";
echo $data->expiryDate;
echo "<br>";
echo "capital<br>";
echo "<br>";
echo $data->capital->paidAmount;
echo "<br>";
echo $data->capital->subscribedAmount;
echo "<br>";
echo $data->capital->announcedAmount;
echo "<br>";
echo "share<br>";
echo "<br>";
echo $data->capital->share->sharePrice;
echo "<br>";
echo $data->capital->share->sharesCount;
echo "<br>";
echo $data->crMainNumber;
echo "<br>";
echo "parties<br>";
echo "<br>";
$parties = $data->parties;
$alength = count($parties);
for($x = 0; $x < $alength; $x++) {
  echo $parties[$x]->name;
  echo "<br>";
  echo $parties[$x]->birthDate;
  echo "<br>";
  echo $parties[$x]->sharesCount;
  echo "<br>";
  echo $parties[$x]->gross;


  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>identity";
  echo "<br>";
  echo "<br>";
  echo $parties[$x]->identity->id;
  echo "<br>";
  echo $parties[$x]->identity->type;
  echo "<br>";


    echo "<br>";
    echo "<br>";
    echo "<br>relation";
    echo "<br>";
    echo "<br>";
    echo $parties[$x]->relation->id;
    echo "<br>";
    echo $parties[$x]->relation->name;
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>nationality";
    echo "<br>";
    echo "<br>";
    echo $parties[$x]->nationality->id;
    echo "<br>";
    echo $parties[$x]->nationality->name;
    echo "<br>";


}

echo "<br>";
echo "businessType<br>";
echo $data->businessType->id;
echo "<br>";
echo $data->businessType->name;

echo "<br>";
echo "fiscalYear<br>";
    echo $data->fiscalYear->month;
echo "<br>";
    echo $data->fiscalYear->day;
echo "<br>";
    echo $data->fiscalYear->calendarType->id;
    echo $data->fiscalYear->calendarType->name;
echo "<br>";
echo "status<br>";
echo $data->status->id;
echo "<br>";
echo $data->status->name;
echo "<br>";
echo $data->status->nameEn;
echo "<br>";
echo "cancellation<br>";

    echo $data->cancellation->date;
    echo $data->cancellation->reason;
echo "<br>";
echo "address<br>";
      echo $data->address->general->website;
      echo $data->address->general->address;
      echo $data->address->general->email;
      echo $data->address->general->fax1;
      echo $data->address->general->fax2;
      echo $data->address->general->telephone1;
      echo $data->address->general->telephone2;
      echo $data->address->general->postalBox1;
      echo $data->address->general->postalBox2;
echo "<br>";
echo "national<br>";
      echo $data->address->national->buildingNumber;
      echo $data->address->national->additionalNumber;
      echo $data->address->national->streetName;
      echo $data->address->national->city;
      echo $data->address->national->zipcode;
      echo $data->address->national->unitNumber;
      echo $data->address->national->district->id;
      echo $data->address->national->district->name;

echo "<br>";
echo "<br>";

      echo $data->isEcommerce;
      echo "<br>";
      echo "urls<br>";
$urls = $data->urls;
$alength = count($urls);
for($x = 0; $x < $alength; $x++) {
  echo $urls[$x]->name;
  echo "<br>";
  echo $urls[$x]->type;
  echo "<br>";
  echo $urls[$x]->typeId;
  echo "<br>";

}

echo "<br>";
echo "location<br>";
  echo $data->location->id;
  echo $data->location->name;
echo "<br>";
echo "company<br>";


      echo $data->company->period;
      echo $data->company->startDate;
      echo $data->company->endDate;
      
echo "<br>";
echo "activities<br>";
echo $data->activities->description;
echo "<br>isic";
echo "<br>";

$isic = $data->activities->isic;
$alength = count($isic);
for($x = 0; $x < $alength; $x++) {
  echo $isic[$x]->id;
  echo "<br>";
  echo $isic[$x]->name;
  echo "<br>";
  echo $isic[$x]->nameEn;
  echo "<br>";

}

?>

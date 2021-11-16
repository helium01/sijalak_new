<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key:4554a476255f0e3da6f694483e00ec05"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $array_response=json_decode($response,true);
  $data=($array_response["rajaongkir"]["results"]);
  echo "<option value=''>--pilih id--</option>";
  foreach($data as $dt => $data_tiapprov){
      echo("<option value='".$data_tiapprov["province_id"]."'>");
      echo $data_tiapprov ["province_id"];
      echo"</option>";
  }
}
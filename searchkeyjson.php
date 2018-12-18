//Search Key into JSON -> Array, and return Val

$keySearch = 'key_search'; //key that will be searched
$arrLocation = parseVal($json, $keySearch);

//Function recursive, flow very levels to search key
function parseVal($pVal, $pKeySearch){
  if(is_array($pVal)){
    foreach ($pVal as $key => $val) {
      if($key === $pKeySearch){
        return $val;
      } else {
        $ret = parseVal($val, $pKeySearch);
        if($ret) return $ret;  
      }
    }
  }
}

//Print Value
if(is_array($arrLocation)){
  print_r($arrLocation);  
} else {
  echo $arrLocation;
}

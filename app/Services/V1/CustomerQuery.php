<?php
namespace App\Services\V1;

use Illuminate\Http\Request;

class CustomerQuery{
protected $safeParams = [
    "name" => ["eq"],
    "type" => ["eq"],
    "email"=> ["eq"],
    "address"=>["eq"],
    "city" =>["eq"],
    "state"=>["eq"],
    "postalCode" => ["eq", "gt", "lt"]
];


protected $columnMap = [
    "postalCode" => "postal_code"

];


protected $operatorMap = [
"eq" => "=",
 "lt" => "<",
 "lte" => "≤",
 "gt" => ">",
 "gte" =>"≥"
];

# transformiterates over the collection and calls the given callback with each item in the collection.
public function transform(Request $request){
    $eleQuery = [];

    # input request for searcable in query 
    foreach ($this-> safeParams as $parm=> $operators){
    $query = $request-> query($parm);
     
    # if not in query keep moving
    if(!isset($query)){
        continue;
    }
     

    # check the column of postal code equal greater or less then if tenerary say no params then param
    $column = $this-> columnMap[$parm] ?? $parm;

     # another foreach statement for the operator
    foreach($operators as $operator){
      if(isset($query[$operator])){
        $eleQuery[] = [$column, $this->operatorMap[$operator],$query[$operator]];
      }
    }
  }
  return $eleQuery;
}



}
?>
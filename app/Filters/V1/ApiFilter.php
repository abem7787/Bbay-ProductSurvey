<?php
namespace App\Filters\V1;

use Illuminate\Http\Request;

class ApiFilter{
protected $safeParams = [];


protected $columnMap = [];


protected $operatorMap = [];

# transform iterates over the collection and calls the given callback with each item in the collection.
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
     # eleQuery will use an array to format the column, search for the operator , and the query of the selected values that match our operator 
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
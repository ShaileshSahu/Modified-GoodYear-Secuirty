
<?php
class pagination
{
  var $query;
  function __construct($query)
  {
    $this->query=$query;
  }

  function query()
  {
    return $this->query;
  }




}

  $v= new pagination("query");
echo $v->query();
?>

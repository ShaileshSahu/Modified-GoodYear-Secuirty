
<?php
class pagination
{
  var $query;
  var $connect;
  function __construct($connect,$query)
  {
    $this->connect = $connect;
    $this->query=$query;
  }


  function query()
  {

    return $this->query;
  }


    function connect()
    {

      return $this->connect;
    }


  function hello()
  {
    return $this->query;
  }

  function limitation()
  {
         $result =mysqli_query($this->connect,$this->query);
         $number_of_data =mysqli_num_rows($result);
         $limitation = ceil($number_of_data/10);
return $limitation;
  }


  function paged($pa)
{

  $next =$pa*15;
  $init =($pa-1)*15;
  $q =$this->query;
  $quered =$q." limit $init,15";
return $quered;
}







}

?>

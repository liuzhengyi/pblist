<?php
namespace listsub;
class Sub_OrderType extends \PBEnum
{
  const LETTER  = 0;
  const NUM  = 1;
  const ONLINE  = 2;

  public function __construct($reader=null)
  {
   	parent::__construct($reader);
 	$this->names = array(
			0 => "LETTER",
			1 => "NUM",
			2 => "ONLINE");
   }
}
class Sub_SeqType extends \PBEnum
{
  const DESC  = 0;
  const ASC  = 1;

  public function __construct($reader=null)
  {
   	parent::__construct($reader);
 	$this->names = array(
			0 => "DESC",
			1 => "ASC");
   }
}
class Sub extends \PBMessage
{
  var $wired_type = \PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Sub"]["1"] = "\\PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Sub"]["1"] = "id";
    self::$fields["Sub"]["2"] = "\\PBString";
    $this->values["2"] = "";
    self::$fieldNames["Sub"]["2"] = "bigtvg";
    self::$fields["Sub"]["3"] = "\\PBString";
    $this->values["3"] = "";
    self::$fieldNames["Sub"]["3"] = "name";
    self::$fields["Sub"]["4"] = "\\listsub\\Sub_OrderType";
    $this->values["4"] = "";
    self::$fieldNames["Sub"]["4"] = "ord";
    self::$fields["Sub"]["5"] = "\\listsub\\Sub_SeqType";
    $this->values["5"] = "";
    self::$fieldNames["Sub"]["5"] = "seq";
    self::$fields["Sub"]["6"] = "\\PBBool";
    $this->values["6"] = "";
    self::$fieldNames["Sub"]["6"] = "defaultopen";
    self::$fields["Sub"]["7"] = "\\PBString";
    $this->values["7"] = "";
    self::$fieldNames["Sub"]["7"] = "op";
    self::$fields["Sub"]["8"] = "\\PBString";
    $this->values["8"] = "";
    self::$fieldNames["Sub"]["8"] = "TP";
    self::$fields["Sub"]["9"] = "\\PBString";
    $this->values["9"] = "";
    self::$fieldNames["Sub"]["9"] = "search";
    self::$fields["Sub"]["10"] = "\\PBString";
    $this->values["10"] = "";
    self::$fieldNames["Sub"]["10"] = "letter";
    self::$fields["Sub"]["11"] = "\\PBString";
    $this->values["11"] = "";
    self::$fieldNames["Sub"]["11"] = "tags";
    self::$fields["Sub"]["12"] = "\\PBBool";
    $this->values["12"] = "";
    self::$fieldNames["Sub"]["12"] = "isSeries";
    self::$fields["Sub"]["13"] = "\\PBBool";
    $this->values["13"] = "";
    self::$fieldNames["Sub"]["13"] = "enableSearch2";
    self::$fields["Sub"]["14"] = "\\PBString";
    $this->values["14"] = "";
    self::$fieldNames["Sub"]["14"] = "img";
    self::$fields["Sub"]["15"] = "\\PBString";
    $this->values["15"] = "";
    self::$fieldNames["Sub"]["15"] = "fotm";
  }
  function id()
  {
    return $this->_get_value("1");
  }
  function set_id($value)
  {
    return $this->_set_value("1", $value);
  }
  function bigtvg()
  {
    return $this->_get_value("2");
  }
  function set_bigtvg($value)
  {
    return $this->_set_value("2", $value);
  }
  function name()
  {
    return $this->_get_value("3");
  }
  function set_name($value)
  {
    return $this->_set_value("3", $value);
  }
  function ord()
  {
    return $this->_get_value("4");
  }
  function set_ord($value)
  {
    return $this->_set_value("4", $value);
  }
  function ord_string()
  {
    return $this->values["4"]->get_description();
  }
  function seq()
  {
    return $this->_get_value("5");
  }
  function set_seq($value)
  {
    return $this->_set_value("5", $value);
  }
  function seq_string()
  {
    return $this->values["5"]->get_description();
  }
  function defaultopen()
  {
    return $this->_get_value("6");
  }
  function set_defaultopen($value)
  {
    return $this->_set_value("6", $value);
  }
  function op()
  {
    return $this->_get_value("7");
  }
  function set_op($value)
  {
    return $this->_set_value("7", $value);
  }
  function TP()
  {
    return $this->_get_value("8");
  }
  function set_TP($value)
  {
    return $this->_set_value("8", $value);
  }
  function search()
  {
    return $this->_get_value("9");
  }
  function set_search($value)
  {
    return $this->_set_value("9", $value);
  }
  function letter()
  {
    return $this->_get_value("10");
  }
  function set_letter($value)
  {
    return $this->_set_value("10", $value);
  }
  function tags()
  {
    return $this->_get_value("11");
  }
  function set_tags($value)
  {
    return $this->_set_value("11", $value);
  }
  function isSeries()
  {
    return $this->_get_value("12");
  }
  function set_isSeries($value)
  {
    return $this->_set_value("12", $value);
  }
  function enableSearch2()
  {
    return $this->_get_value("13");
  }
  function set_enableSearch2($value)
  {
    return $this->_set_value("13", $value);
  }
  function img()
  {
    return $this->_get_value("14");
  }
  function set_img($value)
  {
    return $this->_set_value("14", $value);
  }
  function fotm()
  {
    return $this->_get_value("15");
  }
  function set_fotm($value)
  {
    return $this->_set_value("15", $value);
  }
}
class Subs extends \PBMessage
{
  var $wired_type = \PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Subs"]["1"] = "\\listsub\\Sub";
    $this->values["1"] = array();
    self::$fieldNames["Subs"]["1"] = "sub";
  }
  function sub($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_sub()
  {
    return $this->_add_arr_value("1");
  }
  function set_sub($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_subs($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_sub()
  {
    $this->_remove_last_arr_value("1");
  }
  function subs_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_subs()
  {
    return $this->_get_value("1");
  }
}
?>
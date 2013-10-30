<?php
namespace listdata;
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
    self::$fields["Sub"]["4"] = "\\listdata\\Sub_OrderType";
    $this->values["4"] = "";
    self::$fieldNames["Sub"]["4"] = "ord";
    self::$fields["Sub"]["5"] = "\\listdata\\Sub_SeqType";
    $this->values["5"] = "";
    self::$fieldNames["Sub"]["5"] = "seq";
    self::$fields["Sub"]["6"] = "\\PBBool";
    $this->values["6"] = "";
    self::$fieldNames["Sub"]["6"] = "defaultopen";
    self::$fields["Sub"]["7"] = "\\PBString";
    $this->values["7"] = "";
    self::$fieldNames["Sub"]["7"] = "playbreak";
    self::$fields["Sub"]["8"] = "\\PBString";
    $this->values["8"] = "";
    self::$fieldNames["Sub"]["8"] = "op";
    self::$fields["Sub"]["9"] = "\\PBString";
    $this->values["9"] = "";
    self::$fieldNames["Sub"]["9"] = "TM";
    self::$fields["Sub"]["10"] = "\\PBString";
    $this->values["10"] = "";
    self::$fieldNames["Sub"]["10"] = "BKID";
    self::$fields["Sub"]["11"] = "\\PBString";
    $this->values["11"] = "";
    self::$fieldNames["Sub"]["11"] = "search";
    self::$fields["Sub"]["12"] = "\\PBString";
    $this->values["12"] = "";
    self::$fieldNames["Sub"]["12"] = "TP";
    self::$fields["Sub"]["13"] = "\\PBString";
    $this->values["13"] = "";
    self::$fieldNames["Sub"]["13"] = "col";
    self::$fields["Sub"]["14"] = "\\PBString";
    $this->values["14"] = "";
    self::$fieldNames["Sub"]["14"] = "pluson";
    self::$fields["Sub"]["15"] = "\\PBString";
    $this->values["15"] = "";
    self::$fieldNames["Sub"]["15"] = "letter";
    self::$fields["Sub"]["16"] = "\\PBString";
    $this->values["16"] = "";
    self::$fieldNames["Sub"]["16"] = "tags";
    self::$fields["Sub"]["17"] = "\\PBBool";
    $this->values["17"] = "";
    self::$fieldNames["Sub"]["17"] = "isSeries";
    self::$fields["Sub"]["18"] = "\\PBBool";
    $this->values["18"] = "";
    self::$fieldNames["Sub"]["18"] = "enableSearch2";
    self::$fields["Sub"]["19"] = "\\PBString";
    $this->values["19"] = "";
    self::$fieldNames["Sub"]["19"] = "image";
    self::$fields["Sub"]["20"] = "\\PBString";
    $this->values["20"] = "";
    self::$fieldNames["Sub"]["20"] = "fotm";
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
  function playbreak()
  {
    return $this->_get_value("7");
  }
  function set_playbreak($value)
  {
    return $this->_set_value("7", $value);
  }
  function op()
  {
    return $this->_get_value("8");
  }
  function set_op($value)
  {
    return $this->_set_value("8", $value);
  }
  function TM()
  {
    return $this->_get_value("9");
  }
  function set_TM($value)
  {
    return $this->_set_value("9", $value);
  }
  function BKID()
  {
    return $this->_get_value("10");
  }
  function set_BKID($value)
  {
    return $this->_set_value("10", $value);
  }
  function search()
  {
    return $this->_get_value("11");
  }
  function set_search($value)
  {
    return $this->_set_value("11", $value);
  }
  function TP()
  {
    return $this->_get_value("12");
  }
  function set_TP($value)
  {
    return $this->_set_value("12", $value);
  }
  function col()
  {
    return $this->_get_value("13");
  }
  function set_col($value)
  {
    return $this->_set_value("13", $value);
  }
  function pluson()
  {
    return $this->_get_value("14");
  }
  function set_pluson($value)
  {
    return $this->_set_value("14", $value);
  }
  function letter()
  {
    return $this->_get_value("15");
  }
  function set_letter($value)
  {
    return $this->_set_value("15", $value);
  }
  function tags()
  {
    return $this->_get_value("16");
  }
  function set_tags($value)
  {
    return $this->_set_value("16", $value);
  }
  function isSeries()
  {
    return $this->_get_value("17");
  }
  function set_isSeries($value)
  {
    return $this->_set_value("17", $value);
  }
  function enableSearch2()
  {
    return $this->_get_value("18");
  }
  function set_enableSearch2($value)
  {
    return $this->_set_value("18", $value);
  }
  function image()
  {
    return $this->_get_value("19");
  }
  function set_image($value)
  {
    return $this->_set_value("19", $value);
  }
  function fotm()
  {
    return $this->_get_value("20");
  }
  function set_fotm($value)
  {
    return $this->_set_value("20", $value);
  }
}
class ID extends \PBMessage
{
  var $wired_type = \PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ID"]["1"] = "\\PBInt";
    $this->values["1"] = "";
    self::$fieldNames["ID"]["1"] = "ID";
    self::$fields["ID"]["2"] = "\\PBString";
    $this->values["2"] = "";
    self::$fieldNames["ID"]["2"] = "GID";
    self::$fields["ID"]["3"] = "\\PBString";
    $this->values["3"] = "";
    self::$fieldNames["ID"]["3"] = "AID";
    self::$fields["ID"]["4"] = "\\PBString";
    $this->values["4"] = "";
    self::$fieldNames["ID"]["4"] = "BKID";
    self::$fields["ID"]["5"] = "\\PBString";
    $this->values["5"] = "";
    self::$fieldNames["ID"]["5"] = "BKNAME";
    self::$fields["ID"]["6"] = "\\PBString";
    $this->values["6"] = "";
    self::$fieldNames["ID"]["6"] = "TM";
    self::$fields["ID"]["7"] = "\\PBString";
    $this->values["7"] = "";
    self::$fieldNames["ID"]["7"] = "VM";
    self::$fields["ID"]["8"] = "\\PBString";
    $this->values["8"] = "";
    self::$fieldNames["ID"]["8"] = "DL";
    self::$fields["ID"]["9"] = "\\PBString";
    $this->values["9"] = "";
    self::$fieldNames["ID"]["9"] = "TP";
    self::$fields["ID"]["10"] = "\\PBString";
    $this->values["10"] = "";
    self::$fieldNames["ID"]["10"] = "search";
    self::$fields["ID"]["11"] = "\\PBString";
    $this->values["11"] = "";
    self::$fieldNames["ID"]["11"] = "fid";
    self::$fields["ID"]["12"] = "\\PBString";
    $this->values["12"] = "";
    self::$fieldNames["ID"]["12"] = "sid";
    self::$fields["ID"]["13"] = "\\PBString";
    $this->values["13"] = "";
    self::$fieldNames["ID"]["13"] = "image";
    self::$fields["ID"]["14"] = "\\PBString";
    $this->values["14"] = "";
    self::$fieldNames["ID"]["14"] = "gens";
  }
  function ID()
  {
    return $this->_get_value("1");
  }
  function set_ID($value)
  {
    return $this->_set_value("1", $value);
  }
  function GID()
  {
    return $this->_get_value("2");
  }
  function set_GID($value)
  {
    return $this->_set_value("2", $value);
  }
  function AID()
  {
    return $this->_get_value("3");
  }
  function set_AID($value)
  {
    return $this->_set_value("3", $value);
  }
  function BKID()
  {
    return $this->_get_value("4");
  }
  function set_BKID($value)
  {
    return $this->_set_value("4", $value);
  }
  function BKNAME()
  {
    return $this->_get_value("5");
  }
  function set_BKNAME($value)
  {
    return $this->_set_value("5", $value);
  }
  function TM()
  {
    return $this->_get_value("6");
  }
  function set_TM($value)
  {
    return $this->_set_value("6", $value);
  }
  function VM()
  {
    return $this->_get_value("7");
  }
  function set_VM($value)
  {
    return $this->_set_value("7", $value);
  }
  function DL()
  {
    return $this->_get_value("8");
  }
  function set_DL($value)
  {
    return $this->_set_value("8", $value);
  }
  function TP()
  {
    return $this->_get_value("9");
  }
  function set_TP($value)
  {
    return $this->_set_value("9", $value);
  }
  function search()
  {
    return $this->_get_value("10");
  }
  function set_search($value)
  {
    return $this->_set_value("10", $value);
  }
  function fid()
  {
    return $this->_get_value("11");
  }
  function set_fid($value)
  {
    return $this->_set_value("11", $value);
  }
  function sid()
  {
    return $this->_get_value("12");
  }
  function set_sid($value)
  {
    return $this->_set_value("12", $value);
  }
  function image()
  {
    return $this->_get_value("13");
  }
  function set_image($value)
  {
    return $this->_set_value("13", $value);
  }
  function gens()
  {
    return $this->_get_value("14");
  }
  function set_gens($value)
  {
    return $this->_set_value("14", $value);
  }
}
class URL extends \PBMessage
{
  var $wired_type = \PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["URL"]["1"] = "\\PBString";
    $this->values["1"] = "";
    self::$fieldNames["URL"]["1"] = "fmt";
    self::$fields["URL"]["2"] = "\\PBString";
    $this->values["2"] = "";
    self::$fieldNames["URL"]["2"] = "GID";
    self::$fields["URL"]["3"] = "\\PBString";
    $this->values["3"] = "";
    self::$fieldNames["URL"]["3"] = "Bit";
    self::$fields["URL"]["4"] = "\\PBString";
    $this->values["4"] = "";
    self::$fieldNames["URL"]["4"] = "Fotm";
    self::$fields["URL"]["5"] = "\\PBString";
    $this->values["5"] = "";
    self::$fieldNames["URL"]["5"] = "defaultplay";
    self::$fields["URL"]["6"] = "\\PBString";
    $this->values["6"] = "";
    self::$fieldNames["URL"]["6"] = "fid";
    self::$fields["URL"]["7"] = "\\PBString";
    $this->values["7"] = "";
    self::$fieldNames["URL"]["7"] = "content";
  }
  function fmt()
  {
    return $this->_get_value("1");
  }
  function set_fmt($value)
  {
    return $this->_set_value("1", $value);
  }
  function GID()
  {
    return $this->_get_value("2");
  }
  function set_GID($value)
  {
    return $this->_set_value("2", $value);
  }
  function Bit()
  {
    return $this->_get_value("3");
  }
  function set_Bit($value)
  {
    return $this->_set_value("3", $value);
  }
  function Fotm()
  {
    return $this->_get_value("4");
  }
  function set_Fotm($value)
  {
    return $this->_set_value("4", $value);
  }
  function defaultplay()
  {
    return $this->_get_value("5");
  }
  function set_defaultplay($value)
  {
    return $this->_set_value("5", $value);
  }
  function fid()
  {
    return $this->_get_value("6");
  }
  function set_fid($value)
  {
    return $this->_set_value("6", $value);
  }
  function content()
  {
    return $this->_get_value("7");
  }
  function set_content($value)
  {
    return $this->_set_value("7", $value);
  }
}
class URLS extends \PBMessage
{
  var $wired_type = \PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["URLS"]["1"] = "\\listdata\\URL";
    $this->values["1"] = array();
    self::$fieldNames["URLS"]["1"] = "url";
  }
  function url($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_url()
  {
    return $this->_add_arr_value("1");
  }
  function set_url($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_urls($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_url()
  {
    $this->_remove_last_arr_value("1");
  }
  function urls_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_urls()
  {
    return $this->_get_value("1");
  }
}
class Media extends \PBMessage
{
  var $wired_type = \PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Media"]["1"] = "\\PBString";
    $this->values["1"] = "";
    self::$fieldNames["Media"]["1"] = "Bit";
    self::$fields["Media"]["2"] = "\\PBString";
    $this->values["2"] = "";
    self::$fieldNames["Media"]["2"] = "CT";
  }
  function Bit()
  {
    return $this->_get_value("1");
  }
  function set_Bit($value)
  {
    return $this->_set_value("1", $value);
  }
  function CT()
  {
    return $this->_get_value("2");
  }
  function set_CT($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Pro extends \PBMessage
{
  var $wired_type = \PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Pro"]["1"] = "\\PBString";
    $this->values["1"] = "";
    self::$fieldNames["Pro"]["1"] = "DisLang4";
    self::$fields["Pro"]["2"] = "\\PBString";
    $this->values["2"] = "";
    self::$fieldNames["Pro"]["2"] = "Vip";
    self::$fields["Pro"]["3"] = "\\PBString";
    $this->values["3"] = "";
    self::$fieldNames["Pro"]["3"] = "Vlook";
    self::$fields["Pro"]["4"] = "\\PBString";
    $this->values["4"] = "";
    self::$fieldNames["Pro"]["4"] = "Vopt";
    self::$fields["Pro"]["5"] = "\\PBString";
    $this->values["5"] = "";
    self::$fieldNames["Pro"]["5"] = "Popt";
    self::$fields["Pro"]["6"] = "\\PBString";
    $this->values["6"] = "";
    self::$fieldNames["Pro"]["6"] = "Vlevel";
  }
  function DisLang4()
  {
    return $this->_get_value("1");
  }
  function set_DisLang4($value)
  {
    return $this->_set_value("1", $value);
  }
  function Vip()
  {
    return $this->_get_value("2");
  }
  function set_Vip($value)
  {
    return $this->_set_value("2", $value);
  }
  function Vlook()
  {
    return $this->_get_value("3");
  }
  function set_Vlook($value)
  {
    return $this->_set_value("3", $value);
  }
  function Vopt()
  {
    return $this->_get_value("4");
  }
  function set_Vopt($value)
  {
    return $this->_set_value("4", $value);
  }
  function Popt()
  {
    return $this->_get_value("5");
  }
  function set_Popt($value)
  {
    return $this->_set_value("5", $value);
  }
  function Vlevel()
  {
    return $this->_get_value("6");
  }
  function set_Vlevel($value)
  {
    return $this->_set_value("6", $value);
  }
}
class Ch extends \PBMessage
{
  var $wired_type = \PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Ch"]["1"] = "\\PBString";
    $this->values["1"] = "";
    self::$fieldNames["Ch"]["1"] = "ON";
    self::$fields["Ch"]["2"] = "\\listdata\\ID";
    $this->values["2"] = array();
    self::$fieldNames["Ch"]["2"] = "id";
    self::$fields["Ch"]["3"] = "\\PBString";
    $this->values["3"] = "";
    self::$fieldNames["Ch"]["3"] = "Name";
    self::$fields["Ch"]["4"] = "\\PBString";
    $this->values["4"] = "";
    self::$fieldNames["Ch"]["4"] = "URL";
    self::$fields["Ch"]["5"] = "\\listdata\\URLS";
    $this->values["5"] = array();
    self::$fieldNames["Ch"]["5"] = "urls";
    self::$fields["Ch"]["6"] = "\\listdata\\Media";
    $this->values["6"] = array();
    self::$fieldNames["Ch"]["6"] = "media";
    self::$fields["Ch"]["7"] = "\\listdata\\Pro";
    $this->values["7"] = array();
    self::$fieldNames["Ch"]["7"] = "pro";
    self::$fields["Ch"]["8"] = "\\PBString";
    $this->values["8"] = "";
    self::$fieldNames["Ch"]["8"] = "WebURL";
  }
  function ON()
  {
    return $this->_get_value("1");
  }
  function set_ON($value)
  {
    return $this->_set_value("1", $value);
  }
  function id($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_id()
  {
    return $this->_add_arr_value("2");
  }
  function set_id($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_ids($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_id()
  {
    $this->_remove_last_arr_value("2");
  }
  function ids_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_ids()
  {
    return $this->_get_value("2");
  }
  function Name()
  {
    return $this->_get_value("3");
  }
  function set_Name($value)
  {
    return $this->_set_value("3", $value);
  }
  function URL()
  {
    return $this->_get_value("4");
  }
  function set_URL($value)
  {
    return $this->_set_value("4", $value);
  }
  function urls($offset)
  {
    return $this->_get_arr_value("5", $offset);
  }
  function add_urls()
  {
    return $this->_add_arr_value("5");
  }
  function set_urls($index, $value)
  {
    $this->_set_arr_value("5", $index, $value);
  }
  function set_all_urlss($values)
  {
    return $this->_set_arr_values("5", $values);
  }
  function remove_last_urls()
  {
    $this->_remove_last_arr_value("5");
  }
  function urlss_size()
  {
    return $this->_get_arr_size("5");
  }
  function get_urlss()
  {
    return $this->_get_value("5");
  }
  function media($offset)
  {
    return $this->_get_arr_value("6", $offset);
  }
  function add_media()
  {
    return $this->_add_arr_value("6");
  }
  function set_media($index, $value)
  {
    $this->_set_arr_value("6", $index, $value);
  }
  function set_all_medias($values)
  {
    return $this->_set_arr_values("6", $values);
  }
  function remove_last_media()
  {
    $this->_remove_last_arr_value("6");
  }
  function medias_size()
  {
    return $this->_get_arr_size("6");
  }
  function get_medias()
  {
    return $this->_get_value("6");
  }
  function pro($offset)
  {
    return $this->_get_arr_value("7", $offset);
  }
  function add_pro()
  {
    return $this->_add_arr_value("7");
  }
  function set_pro($index, $value)
  {
    $this->_set_arr_value("7", $index, $value);
  }
  function set_all_pros($values)
  {
    return $this->_set_arr_values("7", $values);
  }
  function remove_last_pro()
  {
    $this->_remove_last_arr_value("7");
  }
  function pros_size()
  {
    return $this->_get_arr_size("7");
  }
  function get_pros()
  {
    return $this->_get_value("7");
  }
  function WebURL()
  {
    return $this->_get_value("8");
  }
  function set_WebURL($value)
  {
    return $this->_set_value("8", $value);
  }
}
class Subs extends \PBMessage
{
  var $wired_type = \PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Subs"]["1"] = "\\PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Subs"]["1"] = "TM";
    self::$fields["Subs"]["2"] = "\\listdata\\Sub";
    $this->values["2"] = array();
    self::$fieldNames["Subs"]["2"] = "sub";
    self::$fields["Subs"]["3"] = "\\listdata\\Ch";
    $this->values["3"] = array();
    self::$fieldNames["Subs"]["3"] = "ch";
  }
  function TM()
  {
    return $this->_get_value("1");
  }
  function set_TM($value)
  {
    return $this->_set_value("1", $value);
  }
  function sub($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_sub()
  {
    return $this->_add_arr_value("2");
  }
  function set_sub($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_subs($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_sub()
  {
    $this->_remove_last_arr_value("2");
  }
  function subs_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_subs()
  {
    return $this->_get_value("2");
  }
  function ch($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_ch()
  {
    return $this->_add_arr_value("3");
  }
  function set_ch($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_chs($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_ch()
  {
    $this->_remove_last_arr_value("3");
  }
  function chs_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_chs()
  {
    return $this->_get_value("3");
  }
}
?>
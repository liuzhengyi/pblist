<?php
namespace listsub;

require('./pb4php/message/pb_message.php');

require('./pb_proto_listsub_test.php');


$subs = new Subs();

$sub = $subs->add_sub();
$sub->set_id('123456');
$sub->set_bigtvg('bigtvg:vdafsejkbjsaklef');
$sub->set_name('name:kajdflakef');
$sub->set_ord('NUM');
$sub->set_seq('ASC');
$sub->set_defaultopen(TRUE);
$sub->set_op('op:/adfaj;wefk');
$sub->set_TP('TP:/asfkjalwejf');
$sub->set_pluson('pluson:jlkajfeh');
$sub->set_letter('D');
$sub->set_tags('tags:tag1,tagzlsf');
$sub->set_isSeries(FALSE);
$sub->set_enableSearch2(FALSE);
$sub->set_img('img://kajfajsfej');
$sub->set_fotm('fotm:adfjkalj');

$string = $subs->SerializeToString();

file_put_contents('listsub_test.pb', $string);

?>

<?php
namespace listsub;

require('./pb4php/message/pb_message.php');
require('./pb_proto_listsub_test.php');

$pbfile = 'listsub_test.pb';
$string = file_get_contents($pbfile);

$pb_subs = new Subs();
$pb_subs->parseFromString($string);

$subs = $pb_subs->get_subs();

foreach ( $subs as $sub ) {
    echo $sub->id();
    echo $sub->bigtvg();
    echo $sub->name('');
    echo $sub->ord('');
    echo $sub->seq('');
    echo $sub->defaultopen();
    echo $sub->op('');
    echo $sub->TP('');
    echo $sub->search('');
    echo $sub->letter('');
    echo $sub->tags('');
    echo $sub->isSeries();
    echo $sub->enableSearch2();
    echo $sub->img('');
    echo $sub->fotm('');
    echo "\n";
}


//$string = $subs->SerializeToString();

//file_put_contents('listsub_test.pb', $string);

?>

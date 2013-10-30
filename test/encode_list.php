<?php
namespace listsub;

$src_dir = './listdata/classxmls/';
$dst_dir = './listdata/classpbs/';

require('./pb4php/message/pb_message.php');
require('./pb_proto_listsub_test.php');


$file_glob = $src_dir. '/95.xml';
foreach ( glob($file_glob) as $xmlfile ) {

    $subs = new Subs();

    $xml = simplexml_load_file($xmlfile);
    foreach ( $xml as $k => $v ) {
        echo 'k:'. $k. "\n";
        $attr = $v->attributes();
        foreach ( $attr as $k => $v ) {
            //echo $k. ' -- '. $v. "\n";
            //echo $k. "\n";
        }

        $sub = $subs->add_sub();
        $sub->set_id((string)$attr['id']);
        $sub->set_bigtvg((string)$attr['bigtvg']);
        $sub->set_name((string)$attr['name']);
        $sub->set_ord((string)$attr['ord']);
        $sub->set_seq((string)$attr['seq']);
        $sub->set_defaultopen((bool)$attr['defaultopen']);
        $sub->set_op((string)$attr['op']);
        $sub->set_TP((string)$attr['TP']);
        $sub->set_search((string)$attr['search']);
        $sub->set_letter((string)$attr['letter']);
        $sub->set_tags((string)$attr['tags']);
        $sub->set_isSeries((bool)$attr['isSeries']);
        $sub->set_enableSearch2((bool)$attr['enableSearch2']);
        $sub->set_img((string)$attr['image']);
        $sub->set_fotm((string)$attr['fotm']);
    }



    /*
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
    */

    //var_dump($subs); exit();


    $string = $subs->SerializeToString();

    file_put_contents('listsub_test.pb', $string);
}

?>

<?php
namespace listdata;

$src_dir = '../listdata/classxmls/';
$dst_dir = '../listdata/classpbs/';

require('../pb4php/message/pb_message.php');
require('./pb_proto_class.php');


$file_glob = $src_dir. '/*.xml';

foreach ( glob($file_glob) as $xmlfile ) {

    $subs = new Subs();

    $xml = simplexml_load_file($xmlfile);
    $attr = $xml->attributes();

    $subs->set_TM( (int) $attr['TM'] );

    foreach ( $xml as $k => $v ) {
        if ( 'Sub' == $k ) {
            $attr = $v->attributes();
            $sub = $subs->add_sub();

            $sub->set_id((string)$attr['id']);
            $sub->set_bigtvg((string)$attr['bigtvg']);
            $sub->set_name((string)$attr['name']);
            $sub->set_ord((string)$attr['ord']);
            $sub->set_seq((string)$attr['seq']);
            $sub->set_defaultopen((bool)$attr['defaultopen']);
            $sub->set_playbreak((bool)$attr['playbreak']);
            $sub->set_op((string)$attr['op']);
            $sub->set_TM((string)$attr['TM']);
            $sub->set_BKID((string)$attr['BKID']);
            $sub->set_search((string)$attr['search']);
            $sub->set_TP((string)$attr['TP']);
            $sub->set_col((string)$attr['col']);
            $sub->set_pluson((string)$attr['pluson']);
            $sub->set_letter((string)$attr['letter']);
            $sub->set_tags((string)$attr['tags']);
            $sub->set_isSeries((bool)$attr['isSeries']);
            $sub->set_enableSearch2((bool)$attr['enableSearch2']);
            $sub->set_image((string)$attr['image']);
            $sub->set_fotm((string)$attr['fotm']);
        } else if ( 'Ch' == $k ){
            $ch = $subs->add_ch();
            $attr = $v->attributes();
            $ch->set_ON( (string)$attr['ON'] );

            foreach ( $v as $kk => $vv ) {
                if ( 'ID' == $kk ) {
                    $attr   = $vv->attributes();
                    $ID     = $ch->add_id();
                    $ID->set_ID( (int)$attr['ID'] );
                    $ID->set_GID( (string)$attr['GID'] );
                    $ID->set_AID( (string)$attr['AID'] );
                    $ID->set_BKID( (string)$attr['BKID'] );
                    $ID->set_BKNAME( (string)$attr['BKNAME'] );
                    $ID->set_TM( (string)$attr['TM'] );
                    $ID->set_VM( (string)$attr['VM'] );
                    $ID->set_DL( (string)$attr['DL'] );
                    $ID->set_TP( (string)$attr['TP'] );
                    $ID->set_search( (string)$attr['search'] );
                    $ID->set_fid( (string)$attr['fid'] );
                    $ID->set_sid( (string)$attr['sid'] );
                    $ID->set_image( (string)$attr['image'] );
                    $ID->set_gens( (string)$attr['gens'] );
                } else if ( 'Name' == $kk ) {
                    $ch->set_Name( (string)$vv );
                } else if ( 'URL' == $kk ) {
                    $ch->set_URL( (string)$vv );
                } else if ( 'URLS' == $kk ) {
                    $URLS = $ch->add_urls();
                    foreach ( $vv as $kkk => $vvv ) {
                        $URL = $URLS->add_url();
                        $attr = $vvv->attributes();
                        $URL->set_fmt( (string)$attr['fmt'] );
                        $URL->set_GID( (string)$attr['GID'] );
                        $URL->set_Bit( (string)$attr['Bit'] );
                        $URL->set_Fotm( (string)$attr['Fotm'] );
                        $URL->set_defaultplay( (string)$attr['defaultplay'] );
                        $URL->set_fid( (string)$attr['fid'] );
                        $URL->set_content( (string)$vvv );  // 节点的文本内容，ppsURL
                    }
                } else if ( 'Media' == $kk ) {
                    $Media = $ch->add_media();
                    $attr = $vv->attributes();
                    $Media->set_Bit( (string)$attr['Bit'] );
                    $Media->set_CT( (string)$attr['CT'] );
                } else if ( 'Pro' == $kk ) {
                    $Pro = $ch->add_pro();
                    $attr = $vv->attributes();
                    $Pro->set_DisLang4( (string)$attr['DisLang4'] );
                    $Pro->set_Vip( (string)$attr['Vip'] );
                    $Pro->set_Vlook( (string)$attr['Vlook'] );
                    $Pro->set_Vopt( (string)$attr['Vopt'] );
                    $Pro->set_Popt( (string)$attr['Popt'] );
                    $Pro->set_Vlevel( (string)$attr['Vlevel'] );
                } else if ( 'WebURL' == $kk ) {
                    $ch->set_WebURL( (string)$vv );
                }
            }
            echo $k."\n";   // debug todo del
        } else {
            echo "Notice: unknow node: $k \n";
        }
    }

    $string = $subs->SerializeToString();
    $dst_file = '../listdata/classpbs/'. basename($xmlfile, '.xml'). '.pb';
    echo '$dst_file: '. $dst_file;
    file_put_contents($dst_file, $string);
    echo "One record in. \n";
}

?>

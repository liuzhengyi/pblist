<?php
namespace listdata;

$src_dir    = '../listdata/classxmls/';
$file_glob = $src_dir. '/*.xml';

$fp = fopen("./time_decode_xml", 'a');
//foreach ( glob($file_glob) as $xmlfile ) {

    if ( $argc != 2 ) {
        echo "Usage: php $argv[0] xmlfile \n";
        exit(1);
    }
    $xmlfile = trim($argv[1]);
    $time_start = microtime(true);

    $xml = simplexml_load_file($xmlfile);
    $attr = $xml->attributes();

    echo 'Subs TM: '. $attr['TM'];

    $sub_count = 0;
    $ch_count = 0;
    foreach ( $xml as $k => $v ) {
        if ( 'Sub' == $k ) {

            echo "  sub $sub_count \n";
            echo "\t id:\t\t". $attr['id']. "\n";
            echo "\t bigtvg:\t". $attr['bigtvg']. "\n";
            echo "\t name:\t\t". $attr['name']. "\n";
            echo "\t ord:\t\t". $attr['ord']. "\n";
            echo "\t seq:\t\t". $attr['seq']. "\n";
            echo "\t defaultopen:\t". $attr['defaultopen']. "\n";
            echo "\t palybreak:\t". $attr['playbreak']. "\n";
            echo "\t op:\t\t". $attr['op']. "\n";
            echo "\t TM:\t\t". $attr['TM']. "\n";
            echo "\t BKID:\t\t". $attr['BKID']. "\n";
            echo "\t search:\t". $attr['search']. "\n";
            echo "\t TP:\t\t". $attr['TP']. "\n";
            echo "\t col:\t\t". $attr['col']. "\n";
            echo "\t pluson:\t". $attr['pluson']. "\n";
            echo "\t letter:\t". $attr['letter']. "\n";
            echo "\t tags:\t\t". $attr['tags']. "\n";
            //echo "\t isSeries:\t". $attr['isSeries']. "\n";
            echo "\t enableSearch2:\t". $attr['enableSearch2']. "\n";
            echo "\t image:\t\t". $attr['image']. "\n";
            //echo "\t fotm:\t\t". $attr['fotm']. "\n";
            echo "\n";
            $sub_count++;

        } else if ( 'Ch' == $k ){
            $attr = $v->attributes();

            echo " ch $ch_count \n";
            foreach ( $v as $kk => $vv ) {
                if ( 'ID' == $kk ) {
                    $attr   = $vv->attributes();

                    echo "\tID \n";
                    echo "\t\t ID:\t\t". $attr['ID']. "\n";
                    echo "\t\t GID:\t\t". $attr['GID']. "\n";
                    echo "\t\t AID:\t\t". $attr['AID']. "\n";
                    echo "\t\t BKID:\t\t". $attr['BKID']. "\n";
                    echo "\t\t BKNAME:\t\t". $attr['BKNAME']. "\n";
                    echo "\t\t TM:\t\t". $attr['TM']. "\n";
                    echo "\t\t VM:\t\t". $attr['VM']. "\n";
                    echo "\t\t DL:\t\t". $attr['DL']. "\n";
                    echo "\t\t TP:\t\t". $attr['TP']. "\n";
                    echo "\t\t search:\t\t". $attr['search']. "\n";
                    echo "\t\t fid:\t\t". $attr['fid']. "\n";
                    echo "\t\t sid:\t\t". $attr['sid']. "\n";
                    echo "\t\t image:\t\t". $attr['image']. "\n";
                    echo "\t\t gens:\t\t". $attr['gens']. "\n";


                } else if ( 'Name' == $kk ) {
                    echo "\t Name:\t\t". $vv. "\n";
                } else if ( 'URL' == $kk ) {
                    echo "\t URL:\t\t". $vv. "\n";
                } else if ( 'URLS' == $kk ) {
                    echo "\t URLS:\n";
                    foreach ( $vv as $kkk => $vvv ) {
                        $attr = $vvv->attributes();

                        echo "\t\t\tfmt:". $attr['fmt']. "\n";
                        echo "\t\t\tGID:". $attr['GID']. "\n";
                        echo "\t\t\tBit:". $attr['Bit']. "\n";
                        echo "\t\t\tFotm:". $attr['Fotm']. "\n";
                        echo "\t\t\tDefaultPlay:". $attr['DefaultPlay']. "\n";
                        echo "\t\t\tfid:". $attr['fid']. "\n";
                        echo "\t\t\tcontent:". $attr['content']. "\n";
                    }
                } else if ( 'Media' == $kk ) {
                    $attr = $vv->attributes();
                    echo "\t\t Bit:". $attr['Bit']. "\n";
                    echo "\t\t CT:". $attr['CT']. "\n";
                } else if ( 'Pro' == $kk ) {
                    $attr = $vv->attributes();

                    echo "\t\t DisLang4:". $attr['DisLang4']. "\n";
                    echo "\t\t Vip:". $attr['Vip']. "\n";
                    echo "\t\t Vlook:". $attr['Vlook']. "\n";
                    echo "\t\t Vopt:". $attr['Vopt']. "\n";
                    echo "\t\t Popt:". $attr['Popt']. "\n";
                    echo "\t\t Vlevel:". $attr['Vlevel']. "\n";

                } else if ( 'WebURL' == $kk ) {
                    echo "\t WebURL:". $attr['WebURL']. "\n";
                }
            }
            echo $k."\n";   // debug todo del

            $ch_count++;
        } else {
            echo "Notice: unknow node: $k \n";
        }
    }

    echo "\n";
    $time_end = microtime(true);
    $time_used = round($time_end - $time_start, 4);

    $time_record =  basename($xmlfile). "\t".  $time_used. "\n";

    fwrite(STDERR, $time_record);
    echo $time_record;
    fwrite($fp, $time_record);
//}
fclose($fp);

?>

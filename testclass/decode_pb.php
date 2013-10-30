<?php
namespace listdata;

// include 解析基本库
require('../pb4php/message/pb_message.php');
// include 解析类文件
require('./pb_proto_class.php');

if ( $argc != 2 ) {
    echo "Usage: php $argv[0] pbfile \n";
    exit(1);
}
$pbfile = trim($argv[1]);

//$src_dir    = '../listdata/classpbs/';
//$file_glob = $src_dir. '/*.pb';

$fp = fopen("./time_decode_pb", 'a');
//foreach ( glob($file_glob) as $pbfile ) {

    $time_start = microtime(true);

    $string = file_get_contents($pbfile);

    $pb_subs = new Subs();
    $pb_subs->parseFromString($string);

    echo 'Subs TM: '. $pb_subs->TM(). "\n";

    echo $pb_subs->chs_size();
    if ( $pb_subs->subs_size() > 0 ) {
        $subs = $pb_subs->get_subs();
        $count = 0;
        foreach ( $subs as $sub ) {
            echo "  sub $count \n";
            echo "\t id:\t\t". $sub->id(). "\n";
            echo "\t bigtvg:\t". $sub->bigtvg(). "\n";
            echo "\t name:\t\t". $sub->name(). "\n";
            echo "\t ord:\t\t". $sub->ord(). "\n";
            echo "\t seq:\t\t". $sub->seq(). "\n";
            echo "\t default:\t". $sub->defaultopen(). "\n";
            echo "\t palyback:\t". $sub->playbreak(). "\n";
            echo "\t op:\t\t". $sub->op(). "\n";
            echo "\t TM:\t\t". $sub->TM(). "\n";
            echo "\t BKID:\t\t". $sub->BKID(). "\n";
            echo "\t search:\t". $sub->search(). "\n";
            echo "\t TP:\t\t". $sub->TP(). "\n";
            echo "\t col:\t\t". $sub->col(). "\n";
            echo "\t pluson:\t". $sub->pluson(). "\n";
            echo "\t letter:\t". $sub->letter(). "\n";
            echo "\t tags:\t\t". $sub->tags(). "\n";
            echo "\t isSeries:\t". $sub->isSeries(). "\n";
            echo "\t enableSearch2:\t". $sub->enableSearch2(). "\n";
            echo "\t image:\t\t". $sub->image(). "\n";
            echo "\t fotm:\t\t". $sub->fotm(). "\n";
            echo "\n";
            $count++;
        }
    }

    if ( $pb_subs->chs_size() > 0 ) {
        $chs = $pb_subs->get_chs();
        $count = 0;
        foreach ( $chs as $ch ) {
            echo " ch $count \n";
            $IDS = $ch->get_ids();
            foreach ( $IDS as $ID ) {
                echo "\tID \n";
                echo "\t\t ID:\t\t". $ID->ID(). "\n";
                echo "\t\t GID:\t\t". $ID->GID(). "\n";
                echo "\t\t AID:\t\t". $ID->AID(). "\n";
                echo "\t\t BKID:\t\t". $ID->BKID(). "\n";
                echo "\t\t BKNAME:\t\t". $ID->BKNAME(). "\n";
                echo "\t\t TM:\t\t". $ID->TM(). "\n";
                echo "\t\t VM:\t\t". $ID->VM(). "\n";
                echo "\t\t DL:\t\t". $ID->DL(). "\n";
                echo "\t\t TP:\t\t". $ID->TP(). "\n";
                echo "\t\t search:\t\t". $ID->search(). "\n";
                echo "\t\t fid:\t\t". $ID->fid(). "\n";
                echo "\t\t sid:\t\t". $ID->sid(). "\n";
                echo "\t\t image:\t\t". $ID->image(). "\n";
                echo "\t\t gens:\t\t". $ID->gens(). "\n";
            }
            echo "\t Name:\t\t". $ch->Name(). "\n";
            echo "\t URL:\t\t". $ch->URL(). "\n";
            echo "\t URLS:\n";
            $URLSs = $ch->get_urlss();
            foreach ( $URLSs as $v ) {
                echo "\t\tURL \n";
                $URLS = $v->get_urls();
                foreach ( $URLS as $URL ) {
                    echo "\t\t\tfmt:". $URL->fmt(). "\n";
                    echo "\t\t\tGID:". $URL->GID(). "\n";
                    echo "\t\t\tBit:". $URL->Bit(). "\n";
                    echo "\t\t\tFotm:". $URL->Fotm(). "\n";
                    echo "\t\t\tDefaultPlay:". $URL->DefaultPlay(). "\n";
                    echo "\t\t\tfid:". $URL->fid(). "\n";
                    echo "\t\t\tcontent:". $URL->content(). "\n";
                }
            }

            echo "\t Media: \n";
            $Medias = $ch->get_medias();
            foreach( $Medias as $Media ) {
                echo "\t\t Bit:". $Media->Bit(). "\n";
                echo "\t\t CT:". $Media->CT(). "\n";
            }

            echo "\t Pro: \n";
            $Pros = $ch->get_pros();
            foreach ( $Pros as $Pro ) {
                echo "\t\t DisLang4:". $Pro->DisLang4(). "\n";
                echo "\t\t Vip:". $Pro->Vip(). "\n";
                echo "\t\t Vlook:". $Pro->Vlook(). "\n";
                echo "\t\t Vopt:". $Pro->Vopt(). "\n";
                echo "\t\t Popt:". $Pro->Popt(). "\n";
                echo "\t\t Vlevel:". $Pro->Vlevel(). "\n";
            }

            echo "\t WebURL:". $ch->WebURL(). "\n";


            $count++;
        }
    }

    echo "\n";
    $time_end = microtime(true);
    $time_used = round( $time_end - $time_start, 4);

    $time_record =  basename($pbfile). "\t".  $time_used. "\n";

    echo $time_record;
    fwrite($fp, $time_record);
//}
fclose($fp);
?>

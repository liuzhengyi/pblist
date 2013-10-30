#! /bin/bash -

> ./data/time_decode_xml_cpp
for i in `find ../listdata/classxmls/ -type f | xargs ls`; do
`./decode_xml_class.out "$i" > /dev/null 2>> ./data/time_decode_xml_cpp`
done

> ./data/time_decode_pb_cpp
for i in `find ../listdata/classpbs/ -type f | xargs ls`; do
`./decode_pb_class.out "$i" > /dev/null 2>> ./data/time_decode_pb_cpp`
done


cat ./data/time_decode_xml_cpp | awk '{print NR "\t" $1 "\t" $2}' > ./data/time_xml.tmp
cat ./data/time_decode_pb_cpp | awk '{print NR "\t" $1 "\t" $2}' > ./data/time_pb.tmp

#join time_xml.tmp time_pb.tmp | awk '{ print NR "\t" $2 "\t" $3 "\t\t" $4 "\t" $5 "\t\t\t\t" $3/$5 }'
#printf "%-5s%-13s%-16s%-13s%-16s%s\n" "n.o." "file1" "time1" "file2" "time2" "t1/t2"
join ./data/time_xml.tmp ./data/time_pb.tmp | awk '{ printf("%-5d%-13s%-16.5f%-13s%-16.5f%-3.2f\n", NR, $2, $3, $4, $5, $3/$5)}'

rm ./data/time_xml.tmp ./data/time_pb.tmp



#> ./data/time_decode_xml_php
#for i in `find ../listdata/classxmls/ -type f | xargs ls`; do
#`php ./decode_xml.php "$i" > /dev/null 2>> ./data/time_decode_xml_php`
#done
#
#> ./data/time_decode_pb_php
#for i in `find ../listdata/classpbs/ -type f | xargs ls`; do
#`php ./decode_pb.php "$i" > /dev/null 2>> ./data/time_decode_pb_php`
#done
#
#
#cat ./data/time_decode_xml_php | awk '{print NR "\t" $1 "\t" $2}' > ./data/time_xml.tmp
#cat ./data/time_decode_pb_php | awk '{print NR "\t" $1 "\t" $2}' > ./data/time_pb.tmp
#
##join time_xml.tmp time_pb.tmp | awk '{ print NR "\t" $2 "\t" $3 "\t\t" $4 "\t" $5 "\t\t\t\t" $3/$5 }'
##printf "%-5s%-13s%-16s%-13s%-16s%s\n" "n.o." "file1" "time1" "file2" "time2" "t1/t2"
#join ./data/time_xml.tmp ./data/time_pb.tmp | awk '{ printf("%-5d%-13s%-16.5f%-13s%-16.5f%-3.2f\n", NR, $2, $3, $4, $5, $3/$5)}'
#
#rm ./data/time_xml.tmp ./data/time_pb.tmp

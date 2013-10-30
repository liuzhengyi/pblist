#! /bin/bash -

cat ./time_decode_xml | awk '{print NR "\t" $1 "\t" $2}' > time_xml.tmp
cat ./time_decode_pb_cpp | awk '{print NR "\t" $1 "\t" $2}' > time_pb.tmp

join time_xml.tmp time_pb.tmp | awk '{ print NR "\t" $2 "\t\t" $3 "\t" $4 "\t" $5 "\t\t\t\t" $3/$5 }'

rm time_xml.tmp time_pb.tmp

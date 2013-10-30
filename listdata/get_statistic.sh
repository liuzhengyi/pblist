#! /bin/bash -

#XMLDIR="./classxmls/"
#PBDIR="./classpbs"

#XMLDIR="./classxmlszip/"
#PBDIR="./classpbszip/"

XMLDIR="./classxmlsgzip/"
PBDIR="./classpbsgzip/"

ls -l "$XMLDIR" | awk '{print NR "\t" $9 "\t" $5}' > xml_tmp

ls -l "$PBDIR" | awk '{print NR "\t" $9 "\t" $5}' > pb_tmp

join xml_tmp pb_tmp |
awk '{ print NR $2 "\t" $3 "\t\t" $4 "\t" $5 "\t\t" ($3-$5) "\t" ($5/$3)*100 "%"}'

rm xml_tmp pb_tmp

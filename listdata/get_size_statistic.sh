#! /bin/bash -

#XMLDIR="./classxmls/"
#PBDIR="./classpbs"

#XMLDIR="./classxmlszip/"
#PBDIR="./classpbszip/"

XMLDIR="./classxmlsgzip/"
PBDIR="./classpbsgzip/"

ls -l "$XMLDIR" | awk '{print NR "\t" $9 "\t" $5}' > xml_tmp

ls -l "$PBDIR" | awk '{print NR "\t" $9 "\t" $5}' > pb_tmp

>./size_data
join xml_tmp pb_tmp |
#awk '{ print NR $2 "\t" $3 "\t\t" $4 "\t" $5 "\t\t" ($3-$5) "\t" ($5/$3)*100 "%"}'
awk '{ printf("%-5d%-16s%-16d%-16s%-16d%-9d%-6.2f%%\n", NR, $2, $3, $4, $5, ($3-$5), $5/$3*100 )}' >> ./size_data
cat ./size_data | awk '{sum+=$7} END {printf( "avg: %78.1f%%", sum/(NR-1))}' >> ./size_data
#awk '{ printf("%-5d%-13s%-16.5f%-13s%-16.5f%-3.2f\n", NR, $2, $3, $4, $5, $3/$5)}'

#rm xml_tmp pb_tmp

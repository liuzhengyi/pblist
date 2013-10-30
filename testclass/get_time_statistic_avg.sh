#! /bin/bash -

if [ -n "$1" -a "$1" -ge 0 -a "$1" -lt 1001 ] ; then
    TIMES="$1"
else 
    TIMES="10"
fi

> ./data/cpp_decode_avg.tmp3
> ./data/cpp_decode_avg.tmp1
sh get_time_statistic.sh > ./data/cpp_decode_avg.tmp1
for i in `seq 2 "$TIMES"`; do
    > ./data/cpp_decode_avg.tmp2
    sh get_time_statistic.sh > ./data/cpp_decode_avg.tmp2
    join ./data/cpp_decode_avg.tmp1 ./data/cpp_decode_avg.tmp2 |
#        printf "%-5s%-13s%-16s%-13s%-16s%s\n" "n.o." "file1" "time1" "file2" "time2" "t1/t2"
        awk '{ printf("%-5d%-13s%-16.5f%-13s%-16.5f%-3.2f\n", NR, $2, ($3+$8), $4, ($5+$10), ($6+$11) )}' > ./data/cpp_decode_avg.tmp3
    cp ./data/cpp_decode_avg.tmp3 ./data/cpp_decode_avg.tmp1
    echo "$i : "
done
> ./data/cpp_decode_avg
printf "%-5s%-13s%-16s%-13s%-16s%s\n" "n.o." "file1" "time1" "file2" "time2" "t1/t2" >> ./data/cpp_decode_avg
cat ./data/cpp_decode_avg.tmp3 | awk '{ printf("%-5d%-13s%-16.5f%-13s%-16.5f%-3.1f%%\n", NR, $2, $3/'"$TIMES"', $4, $5/'"$TIMES"', $5/$3*100 )}' >> ./data/cpp_decode_avg
#cat ./data/cpp_decode_avg.tmp3 | awk '{ printf("%-5d%-13s%-16.5f%-13s%-16.5f%-3.1f\n",  )}' >> ./data/cpp_decode_avg
cat ./data/cpp_decode_avg | awk '{sum+=$6} END {printf( "avg: %62.1f%%", sum/(NR-1))}' >> ./data/cpp_decode_avg

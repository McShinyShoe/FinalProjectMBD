#!/bin/bash

declare -a numbers

for num in {0..1999}; do
    nums[num]=$num
done
for i in $(shuf -e "${nums[@]}"); do
    numbers+=("$i")
done

declare -i i=0

echo -n "" > ITEMS
for num in "${numbers[@]}"; do
    echo "(${i}," $((RANDOM%5 + 1))"," $((RANDOM%3))"," "$num)," >> ITEMS
    ((i++))
done


for i in {1..200}; do
    echo "($(("$i" + 1999))," $((RANDOM % 2 + 1))"," $((RANDOM % 6 + 3))"," $((RANDOM % 2000))")," >> ITEMS
done
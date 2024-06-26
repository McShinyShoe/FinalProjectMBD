#!/bin/bash

generate_unique_numbers() {
    local num
    local count=0

    while [ $count -lt 2000 ]; do
        num=$((RANDOM%2000))
        
        if [[ ! " ${numbers[*]} " = ~$num ]]; then
            numbers+=("$num")
            echo "generated $num ($count/2000)"
            ((count++))
        fi
    done
}

declare -i i=0
generate_unique_numbers

echo -n "" > ITEMS
for num in "${numbers[@]}"; do
    echo "(${i}," $((RANDOM%5 + 1))"," $((RANDOM%3))"," "$num)," >> ITEMS
    ((i++))
done


for i in {1..200}; do
    echo "($(("$i" + 1999))," $((RANDOM % 2 + 1))"," $((RANDOM % 6 + 3))"," $((RANDOM % 2000))")," >> ITEMS
done
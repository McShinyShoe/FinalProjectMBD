#!/bin/bash

generate_dates() {
    random_month=$((RANDOM%12 + 1))
    random_day=$((RANDOM%28 + 1))

    random_month=$(printf "%02d" $random_month)
    random_day=$(printf "%02d" $random_day)
    
    random_date="2024-$random_month-$random_day"

    days=$((RANDOM%2 + 1))
    after_date=$(date -d "$random_date + $days days" +"%Y-%m-%d")

    echo "$days, '$random_date', '$after_date'"
}

declare -a numbers

for num in {0..1999}; do
    nums[num]=$num
done
for i in $(shuf -e "${nums[@]}"); do
    numbers+=("$i")
done

declare -i i=0

echo -n "" > ORDERS

for num in "${numbers[@]}"; do
    echo "(${i}," "$(generate_dates)", "$num"")," | awk -F ',' '{if(substr($3, 3, 7) == "2024-12" && substr($4, 11, 2) > 15 && substr($3, 11, 2) <= 15) $4 = " NULL"; printf "%s,%s,%s,%s,%s,\n", $1, $2, $3, $4, $5}' | awk -F ',' '{if(substr($3, 3, 7) == "2024-12" && substr($3, 11, 2) > 15) {$3 = substr($3, 0, 10)substr($3, 11, 2)-15"'\''"; $4 = substr($4, 0, 10)substr($4, 11, 2)-15"'\''"}; printf "%s,%s,%s,%s,%s,\n", $1, $2, $3, $4, $5}' >> ORDERS
    ((i++))
done
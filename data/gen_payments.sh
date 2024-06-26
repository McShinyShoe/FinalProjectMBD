#!/bin/bash

service_prices["0,1"]=7000
service_prices["0,2"]=10000
service_prices["1,1"]=8000
service_prices["1,2"]=11000
service_prices["2,1"]=5500
service_prices["2,2"]=8500
service_prices["3,1"]=7000
service_prices["3,2"]=8000
service_prices["4,1"]=10000
service_prices["4,2"]=13000
service_prices["5,1"]=13000
service_prices["5,2"]=15000
service_prices["6,1"]=15000
service_prices["6,2"]=17500
service_prices["7,1"]=30000
service_prices["7,2"]=35000
service_prices["8,1"]=35000
service_prices["8,2"]=50000

declare -a numbers

for num in {0..1999}; do
    nums[num]=$num
done
for i in $(shuf -e "${nums[@]}"); do
    numbers+=("$i")
done


echo -n "" > PAYMENTS

while read -r order_id days; do
    order_days["$order_id"]="$days"
done <<< "$(awk -F ',' '{print substr($1, 2)" "substr($2, 2)}' < ORDERS)"

while read -r units service_id order_id; do
    # echo "$order_id"
    total_price[order_id]=$((${service_prices[$service_id,${order_days[$order_id]}]} * units + total_price[order_id]))
done <<< "$(awk -F ',' '{print substr($2, 2)" "substr($3, 2)" "substr($4, 2, length($4)-2)}' < ITEMS)"

# echo "${service_prices["0,1"]}"

declare -i i=0

for num in "${numbers[@]}"; do
    echo "(${i}," "${total_price[$num]}", "$num)," >> PAYMENTS
    ((i++))
done

# awk -F ',' '{print substr($4, 2, length($4) - 2)","substr($3, 2)}' < ITEMS
# generate_unique_numbers
# declare -i i=1t

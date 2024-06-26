generate_dates() {
    random_month=$((RANDOM%12 + 1))
    random_day=$((RANDOM%28 + 1))

    random_month=$(printf "%02d" $random_month)
    random_day=$(printf "%02d" $random_day)
    
    random_date="2024-$random_month-$random_day"

    days=$((RANDOM%5 + 1))
    after_date=$(date -d "$random_date + $days days" +"%Y-%m-%d")

    echo "$days, '$random_date', '$after_date'"
}

declare -a numbers

generate_unique_numbers() {
    local num
    local count=0

    while [ $count -lt 2000 ]; do
        # Generate a random number between 1 and 2000
        num=$((RANDOM%2000 + 1))
        
        # Check if the number is already in the array
        if [[ ! " ${numbers[@]} " =~ " $num " ]]; then
            # Add the number to the array if it's unique
            numbers+=($num)
            ((count++))w
        fi
    done
}

declare -i i=1

echo -n "" > ORDERS
# Call the function to generate unique numbers
# generate_unique_numbers

# (5, 1, '2024-04-06', '2024-04-07', 5),

# Print the unique numbers
for num in "${numbers[@]}"; do
    echo "(${i}," $(generate_dates), $num")," | awk -F ',' '{if(substr($3, 3, 7) == "2024-12" && substr($4, 11, 2) > 15 && substr($3, 11, 2) <= 15) $4 = " NULL"; printf "%s,%s,%s,%s,%s,\n", $1, $2, $3, $4, $5}' | awk -F ',' '{if(substr($3, 3, 7) == "2024-12" && substr($3, 11, 2) > 15) {$3 = substr($3, 0, 10)substr($3, 11, 2)-15"'\''"; $4 = substr($4, 0, 10)substr($4, 11, 2)-15"'\''"}; printf "%s,%s,%s,%s,%s,\n", $1, $2, $3, $4, $5}' >> ORDERS
    ((i++))
done
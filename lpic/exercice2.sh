while :
do
    read -p 'indiquez un nombre (zéro pour quitter) : ' n
    if ((n))
    then
        for ((i=0;i<=10;i++))
        do
            printf '%d × %d = %d\n' $n $i $((i*n))
        done
    else
        exit
    fi
done

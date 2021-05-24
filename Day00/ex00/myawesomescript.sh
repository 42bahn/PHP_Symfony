#https://bit.ly/3oKyx6v

domain=""
domain=$(curl -I $1 | grep 'Location:' | cut -d" " -f2)
echo $domain

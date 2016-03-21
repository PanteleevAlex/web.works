j=0;
for i in *.jpg;
do let j+=1;
mv $i lion_s$j.jpg;
done

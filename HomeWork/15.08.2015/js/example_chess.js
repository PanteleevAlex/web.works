var letters = ['','A','B','C','D','E','F','G','H'];

var markup = "";

for(i=0; i<9; i++){
	markup += "<ul>";
	for(j=0; j<9; j++){
		//первая строка - буквы
		if(i==0) {
			markup+="<li class='letter'>" + letters[j] + "</li>";
		}
		//первая колонка каждой строки, кроме первой - цифры
		else if (i!=0 && j==0){
			markup+="<li class='number'>" + (9-i) + "</li>";
		}
		//чёрная пешка
		else if(i==2){
			if((i%2==0 && j%2==0) || (i%2!=0 && j%2!=0)) {
				markup+="<li class='figure b_spawn'></li>";
			} else {
				markup+="<li class='dark figure b_spawn'></li>";
			}
		}
		//белая пешка
		else if(i==7){
			if((i%2==0 && j%2==0) || (i%2!=0 && j%2!=0)) {
				markup+="<li class='figure w_spawn'></li>";
			} else {
				markup+="<li class='dark figure w_spawn'></li>";
			}
		}
		//чёрный слон
		else if(i==1 && (j==3 || j==6)){
			if((i%2==0 && j%2==0) || (i%2!=0 && j%2!=0)) {
				markup+="<li class='figure b_bishop'></li>";
			} else {
				markup+="<li class='dark figure b_bishop'></li>";
			}
		}
		//белый слон
		else if(i==8 && (j==3 || j==6)){
			if((i%2==0 && j%2==0) || (i%2!=0 && j%2!=0)) {
				markup+="<li class='figure w_bishop'></li>";
			} else {
				markup+="<li class='dark figure w_bishop'></li>";
			}
		}
		//чёрный конь
		else if(i==1 && (j==2 || j==7)){
			if((i%2==0 && j%2==0) || (i%2!=0 && j%2!=0)) {
				markup+="<li class='figure b_knight'></li>";
			} else {
				markup+="<li class='dark figure b_knight'></li>";
			}
		}
		//белый конь
		else if(i==8 && (j==2 || j==7)){
			if((i%2==0 && j%2==0) || (i%2!=0 && j%2!=0)) {
				markup+="<li class='figure w_knight'></li>";
			} else {
				markup+="<li class='dark figure w_knight'></li>";
			}
		}
		//чёрная ладья
		else if(i==1 && (j==1 || j==8)){
			if((i%2==0 && j%2==0) || (i%2!=0 && j%2!=0)) {
				markup+="<li class='figure b_tower'></li>";
			} else {
				markup+="<li class='dark figure b_tower'></li>";
			}
		}
		//белая ладья
		else if(i==8 && (j==1 || j==8)){
			if((i%2==0 && j%2==0) || (i%2!=0 && j%2!=0)) {
				markup+="<li class='figure w_tower'></li>";
			} else {
				markup+="<li class='dark figure w_tower'></li>";
			}
		}
		//чёрная королева
		else if(i==1 && j==4){
			if((i%2==0 && j%2==0) || (i%2!=0 && j%2!=0)) {
				markup+="<li class='figure b_quin'></li>";
			} else {
				markup+="<li class='dark figure b_quin'></li>";
			}
		}
		//чёрный король
		else if(i==1 && j==5){
			if((i%2==0 && j%2==0) || (i%2!=0 && j%2!=0)) {
				markup+="<li class='figure b_king'></li>";
			} else {
				markup+="<li class='dark figure b_king'></li>";
			}
		}
		//белая королева
		else if(i==8 && j==4){
			if((i%2==0 && j%2==0) || (i%2!=0 && j%2!=0)) {
				markup+="<li class='figure w_quin'></li>";
			} else {
				markup+="<li class='dark figure w_quin'></li>";
			}
		}
		//белый король
		else if(i==8 && j==5){
			if((i%2==0 && j%2==0) || (i%2!=0 && j%2!=0)) {
				markup+="<li class='figure w_king'></li>";
			} else {
				markup+="<li class='dark figure w_king'></li>";
			}
		}
		//пустые ячейки
		else {
			if((i%2==0 && j%2==0) || (i%2!=0 && j%2!=0)) {
				markup+="<li></li>";
			} else {
				markup+="<li class='dark'></li>";
			}
		}
	}
	markup += "</ul>";
}

document.write(markup);

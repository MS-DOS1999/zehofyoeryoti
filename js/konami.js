let k = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65],
n = 0;
let bool = true;
let alertswitch = true;
let path='';
let audio = new Audio('');
let random = 0;
$(document).keydown(function (e) {
    if (e.keyCode === k[n++]) {
        if (n === k.length) {
		if(alertswitch){
		    alert("Bien jou\351 tu as trouv\351 le konami code !!! Refais le pour \351teindre la musique ;)");
		    alertswitch = false;
		}
		if(bool){
			random = Math.floor((Math.random() * 6) + 1);
		
		
			if(random ===1)
			path = 'sound/DuckTales(NES).ogg';
			
			
			if(random === 2)
			path = 'sound/GuileTheme(SNES).ogg';
			
			
			if(random === 3)
			path = 'sound/Megaman3Title(NES).ogg';
			
		
			if(random === 4)
			path = 'sound/Probotector(NES).ogg';
			
			
			if(random === 5)
			path = 'sound/whirlwind.ogg';
			
			
			if(random === 6)
			path = 'sound/Sonic2ChemicalPlantZone(Genesis).ogg';
			
			audio = new Audio(path);
			audio.play();
			audio.addEventListener('ended', function() {
					this.currentTime = 0;
					this.play();
			}, false);
			bool = false;
		}
		else{
			audio.pause();
			bool = true;
		}

		n = 0;
		return false;
        }
    }
    else {
        n = 0;
    }
});
	

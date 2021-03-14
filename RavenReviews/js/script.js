
var randomq = [
	["Get away from her you bitch!", "~ Ripley from Aliens"],
	["I know Kung Fu.","~ Neo from The Matrix"],
	["This IS the end, friend.","~ Andy from Childs Play"],
	["Ora! Ora! Ora! Ora!","~ Jotaro Kujo from JoJo's Bizarre Adventure"],
	["Ah, You think darkness is your ally.","~ Bane from The Dark Knight Rises"]];

var lengt = Math.floor(Math.random() * randomq.length);
block = document.getElementById("block");
cite = document.getElementById("cite");

block.innerHTML = randomq[lengt][0];
cite.innerHTML = randomq[lengt][1];


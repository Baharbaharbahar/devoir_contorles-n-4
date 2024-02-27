function alphab(ch) {
    ch = ch.toUpperCase();
    for (let i = 0; i < ch.length; i++) {
        if (ch[i] < "A" || ch[i] > "Z" & ch[i] !="") {
            return false;
        }
    } return true;
}
function Num(ch) {
    for (let i = 0; i < ch.length; i++) {
        if (ch[i] < "0" || ch[i] > "9") {
            return false;
        }
    } return true;
}




function test() {
    date = document.getElementById("date").value;
    expediteur = document.getElementById("expediteur").value;
    destinatatire = document.getElementById("destinatatire").value;
    de = document.getElementById("de").selectedIndex;
    vers = document.getElementById("vers").selectedIndex;
    poids = document.getElementById("poids").value;
    tel = document.getElementById("tel").value;


    if (date == "") {
        alert("date invallide ");
        return false;
    } else if (expediteur == destinatatire) {
        alert("Expediteur ou destinateur invallide !");
        return false;
    } else if (!alphab(expediteur) || !alphab(destinatatire)) {
        alert("Expediteur ou destinateur invallide !!");
        return false;
    } 
    else if (de == vers) {
        alert("ville de dapart et d'arrivée doivent etre differentes invallide ");
        return false;
    } 
    else if (Number(poids)<1 ) {
        alert("poids invallide");
        return false;
    } else if (tel == "" || tel[0] != 9 & tel[0] != 5 & tel[0] != 2 & tel[0] != 4 || !Num(tel)) {
        alert("telphonne invallide");
        return false;
    }

}

function winkelwagenGeladen() {
    var geladen_lijst = sessionStorage.getItem("lijst_winkelwagen")
    var lijst_string = JSON.parse(geladen_lijst);
    console.log(lijst_string);

  if (winkelwagen.length == 0) {
       document.getElementsByTagName("Table").visibility = "hidden";
       var title_none = document.createElement("H1");
       var text_none = document.createNode("SHOPPINGCART IS");
       title_none.appendChild(text_none);
       document.getElementById("leeg").appendChild(title_none);
}  else{
     var i;
     for (i = 0; i < winkelwagen.length; i = i + 3){
           document.getElementById("shoppingcart-table").visibility = "visible";
           var table = document.getElementById("shoppingcart-table");
           var row = table.insertRow(1);
           var cel_prijs = row.insertCell(0);
           var cel_aantal = row.insertCell(1);
           var cel_maat = row.insertCell(2);
           var cel_naam_product = row.insertCell(3);
           var cel_button_delete = row.insertCell(4);
           cell_prijs.innerHTML = "€" + winkelwagen[i+3].toString();
           cel_aantal.innerText = winkelwagen[i+2].toString().toUpperCase();
           cel_maat.innerHTML = winkelwagen[i+1].toString();
           cel_naam_product.innerHTML = winkelwagen[i];
           cel_naam_product.innerHTML = "<button><i class="fa fa-trash" font-size = "30 px"></i>";
     }

  }
}


    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("date_reservation");
        filter = input.value.toUpperCase();
        table = document.getElementById("tableData");
        tr = table.getElementsByTagName("tr");
        // if(input != txtValue) {document.getElementById("errorMessageDate").innerHTML = "Er is geen reserveringsinformatie beschikbaar voor deze geselecteerde datum te zien";}
        // else {document.getElementById("errorMessageDate").innerHTML = "Er is een reservering";}
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[3];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

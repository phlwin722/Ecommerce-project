/*$(document).ready(function () {
    fetchData();
});

function fetchData() {
    $.ajax({
        url: 'Message_fetch.php',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            populateTable(data);
        },
        error: function (xhr, status, error) {
            console.error('Error fetching data:', error);
        }
    });
}

function populateTable(data) {
    const tableBody = $('#messageTable tbody');
    tableBody.empty();
    data.forEach(message => {
        const row = `<tr>
                        <td>${message.Full_name}</td>
                        <td>${message.Email}</td>
                        <td>${message.Code}</td>
                        <td>${message.Product}</td>
                        <td>${message.Message}</td>
                        <td class="text-center"> 
                            <button class="btn btn-sm edit-data"><i class="fa-solid fa-pen-to-square" style="color: green;"></i></button>
                            <button class="btn btn-sm delete-data"><i class="fa-solid fa-trash" style="color: red;"></i></button>
                        </td>
                    </tr>`;
        tableBody.append(row);
    });
}*/

//dropdown menu
let acc = document.getElementsByClassName("accordion");
let i ;
    for(i = 0; i < acc.length; i++){
        acc[i].addEventListener("click",function (){
            this.classList.toggle("active");
            let panel = this.nextElementSibling;
            if (panel.style.maxHeight){
                panel.style.maxHeight = null;
            }else{
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
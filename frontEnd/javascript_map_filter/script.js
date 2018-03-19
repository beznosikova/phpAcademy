var personList = [
{
    name: 'kate',
    age: 23,
    surname: 'sparrow'
},
{
    name: 'lesya',
    age: 24,
    surname: 'valev'
},
{
    name: 'regina',
    age: 24,
    surname: 'todareko'
},
{
    name: 'Vasya',
    age: 24,
    surname: 'Manyunya'
},
{
    name: 'Petro',
    age: 24,
    surname: 'Kotig'
},
{
    name: 'Dusya',
    age: 24,
    surname: 'Smart'
},
]

function createTable(data){
    // обнуляем старые значения
    var oldTable = document.getElementsByTagName("table");
    if (oldTable[0])
        oldTable[0].outerHTML = "";

    // создаем таблицу
    var table = document.createElement("TABLE");
    table.setAttribute("border",1);
    table.setAttribute("width", "400px");

    // создание хедера
    var headers = ["name", "age", "surname"],
        trHeader = document.createElement("TR");
    headers.map(function(header){
        let td = document.createElement("TD");
        td.innerText = header;
        trHeader.style.fontWeight = "bold";
        trHeader.appendChild(td);
    });
    table.appendChild(trHeader);

    // создаем строки
    data.map(function(item){
        let tr = document.createElement("TR");
        for (key in item) {
            let td = document.createElement("TD");
            td.innerText = item[key];
            tr.appendChild(td);
        }
        table.appendChild(tr);
    });

    var tableDiv = document.getElementById("tableContainer");
    
    tableDiv.appendChild(table);
}

window.addEventListener("load", function(){
    createTable(personList);

    var input = document.getElementById("searching");
    input.addEventListener("keyup", function(e){

        var searchText = this.value.trim(),
            pattern = new RegExp(searchText, 'gi'),
            newPersonList = personList.filter(function(item){
                return pattern.test(item.name) || pattern.test(item.surname)
            });
        createTable(newPersonList);
    });
});
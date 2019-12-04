function confirmDelete(url) {

    document.getElementById("btnConfirmDel").setAttribute("href",url);
}

function getHistorico(url) {
    if (url.length == 0) {
        document.getElementById("ulModal").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {

                var myObj = JSON.parse(this.responseText);
                var ulMoldal = document.getElementById("ulModal").innerHTML = "";
                console.log(myObj);
                if(myObj.length != 0){
                    for (var i = 0; i < myObj.length; i++){
                        if(i == 0){
                            $("#ulModal").append(
                                '<li>' +
                                '<p href="#" class="float-right"> Criação da Disciplina </p>'+
                                '<p class="container-fluid row">Nome: ' + myObj[i].nome_old + '</p>'+
                                '<p class="container-fluid row">Quantidade de Aulas: ' + myObj[i].qtd_aulas_old + '</p>'+
                                '<p class="container-fluid row">Professor: ' + myObj[i].id_professor_old.nome + '</p>'+
                                '</li>'
                            );
                        }
                        var data = new Date(myObj[i].data_modificacao);
                        data = data.toLocaleDateString('pt-BR');
                        $("#ulModal").append(
                            '<li>' +
                            '<p href="#" class="float-right">' + data + '</p>'+
                            '<p class="container-fluid row">Nome: ' + myObj[i].nome_new + '</p>'+
                            '<p class="container-fluid row">Quantidade de Aulas: ' + myObj[i].qtd_aulas_new + '</p>'+
                            '<p class="container-fluid row">Professor: ' + myObj[i].id_professor_new.nome + '</p>'+
                            '</li>'
                        );
                    }
                }else{
                    $("#ulModal").append(
                        '<li> Não há modificações</li>'
                    );
                }


            }
        }
        xmlhttp.open("GET", "historicoDisciplina?id="+url, true);
        xmlhttp.send();
    }
}

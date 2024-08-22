const ul = document.querySelector('#apitopicos');
const ulCategorias = document.querySelector('#categoriasMaisUsadas'); // Adicione um novo elemento UL no seu HTML para isso

const getPosts = async () => {
    const response = await fetch(`http://localhost/mona/forum/apirest.php/mona/topicos`);
    return response.json();
}

const getCategoriasMaisUsadas = async () => {
    const response = await fetch(`http://localhost/mona/forum/apirest.php/mona/categoriasMaisUsadas`);
    return response.json();
}

const cardDisciplina = disciplina => disciplina.map(card => `
  <li class="list-group-item"><a href="#" ><i class="${card.icone}"></i> ${card.titulo}</a></li>
`).join('')

const cardCategoria = categoria => categoria.map(card => `
  <li class="list-group-item"> <a href="#" >${card.categoria}</li>
`).join('')

const cargaDados = async () => {
    const data = await getPosts();
    const categoriasData = await getCategoriasMaisUsadas(); // Recupera as categorias mais usadas
    const postTemplate = cardDisciplina(data);
    const categoriasTemplate = cardCategoria(categoriasData); // Cria o template para categorias
    ul.innerHTML = postTemplate;
    ulCategorias.innerHTML = categoriasTemplate; // Atualiza o UL de categorias
}

cargaDados();

document.addEventListener("DOMContentLoaded", function () {
    const selectElement = document.getElementById("iconeTopico");
    const iconElement = document.getElementById("selectIcon");
    const salvarTopicoBtn = document.getElementById("salvarTopico");

    selectElement.addEventListener("change", function () {
        const selectedValue = selectElement.value;
        iconElement.className = selectedValue || "fas fa-question-circle";
    });

    salvarTopicoBtn.addEventListener("click", function () {
        const titulo = document.getElementById("tituloTopico").value;
        const categoria = document.getElementById("categoriaTopico").value;
        const icone = selectElement.value;

        // Envia dados ao PHP via AJAX
        fetch('inserir.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({
                titulo: titulo,
                categoria: categoria,
                icone: icone
            })
        })
        .then(response => {
            // Check if response is JSON
            return response.text().then(text => {
                try {
                    return JSON.parse(text);
                } catch {
                    throw new Error("Resposta inválida do servidor: " + text);
                }
            });
        })
        .then(data => {
            if (data.success) {
                alert(data.message);
                // Aqui você pode atualizar a lista de tópicos na página
                location.reload();  // Recarrega a página para mostrar o novo tópico
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            alert('Erro: ' + error.message);
            console.error('Erro:', error);
        });
    });
});

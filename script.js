document.addEventListener("DOMContentLoaded", () => {
  const listaAulas = document.getElementById("lista-aulas");

  // Mapeamento manual das aulas e arquivos (baseado na sua estrutura)
  const aulas = {
    "aula02": ["hello.php"],
    "aula03": [
      "aritmeticos.php", "aspas.php", "atribuicao.php", "comentarios.php",
      "concatenar.php", "constante.php", "get.php", "logico.php",
      "relacionais.php", "tipo.php", "variaveis.php"
    ],
    "aula04": ["form1.html", "form2.html", "idade.php", "valor.php"],
    "aula05": ["if_else.html", "if_else.php", "media.html", "media.php"],
    "aula06": ["calculadora.html", "calculadora.php", "switch.html", "switch.php"],
    "aula07": [
      "contador.php", "contador_mostra.php", "while.php",
      "while_dinamico.php", "while_dinamico_mostra.php"
    ],
    "aula08": ["dowhile.php", "tabuada.php", "tabuada_mostra.php"],
    "aula09": ["for.php", "primo.html", "primo.php"],
    "aula10": [
      "funcao_com_par.php", "funcao_com_retorno.php", "funcao_mostra.php",
      "funcao_multiplos.php", "funcao_ref.php", "funcao_sem_par.php",
      "funcao_sem_retorno.php", "funcoes.php"
    ],
    "aula11": [
      "exe01.php", "exe01_mostra.php", "exe02.php", "exe02_mostra.php",
      "vetor1.php", "vetor2.php", "vetor3.php", "vetor4.php", "vetor5.php", "vetor6.php"
    ],
    "aula13": ["index.php", "Veiculo.php"],
    "aula14": ["index.php", "Veiculo.php"],
    "aula15": ["index.php", "Veiculo.php"]
  };

  // Criação visual
  Object.entries(aulas).forEach(([aula, arquivos]) => {
    const accordion = document.createElement("div");
    accordion.className = "accordion";

    const header = document.createElement("div");
    header.className = "accordion-header";
    header.textContent = aula.toUpperCase();
    header.onclick = () => {
      const content = accordion.querySelector(".accordion-content");
      content.style.display = content.style.display === "block" ? "none" : "block";
    };

    const content = document.createElement("div");
    content.className = "accordion-content";

    arquivos.forEach(arquivo => {
      const link = document.createElement("a");
      link.href = `./${aula}/${arquivo}`;
      link.target = "_blank";
      link.textContent = arquivo;
      content.appendChild(link);
    });

    accordion.appendChild(header);
    accordion.appendChild(content);
    listaAulas.appendChild(accordion);
  });
});

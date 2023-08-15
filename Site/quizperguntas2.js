
const questions = [
    {
      question: "Quem é esse personagem? (fácil)",
      difficulty: "fácil",
      options: ["Sonny", "Kenickie", "Danny Zuko", "Doody", "Balmudo"],
      answer: 1
    },
    {
      question: "Quem é essa personagem? (fácil)",
      difficulty: "fácil",
      options: ["Sandy", "Frenchy", "Rizzo", "Marty", "Patty"],
      answer: 2
    },
    {
      question: " Quem é esse personagem? (fácil)",
      difficulty: "fácil",
      options: ["Doody", "Balmudo", "Treinador Calhoun", "Tom", "Kenickie"],
      answer: 3
    },
    {
      question: " Quem é esse personagem? (Médio)",
      difficulty: "médio",
      options: ["Balmudo", "Andy", "Treinador Calhoun", "Vince Fontaine", "Eugene"],
      answer: 4
    },
    {
      question: " Quem é esse personagem? (Médio)",
      difficulty: "médio",
      options: ["Diretora McGee", "Charlene", "Jan Martin", "Sandy", "Frenchy"],
      answer: 1
    },
    {
      question: " Qual o nome da escola onde se passa o filme? (Fácil)",
      difficulty: "fácil",
      options: ["ETEC de Franco da Rocha", "Colégio Corleone", "Havard", "School of Rock", "Rydell High"],
      answer: 4
    },
    {
      question: " Quais personagens fazem parte do grupo dos meninos? (Médio)",
      difficulty: "médio",
      options: ["Putzie, Danny Zuko, Kenickie, Doody, Sonny", "Danny Zuko, Eugene, Doody, Balmudo, Andy", "Kenickie, Andy, Danny Zuko, Sonny, Johnny Casino", "Putzie, Danny Zuko, Kenickie, Andy, Sonny", "Eugene, Balmudo, Andy, Danny Zuko, Doody"],
      answer: 0
    },
    {
      question: " Quais personagens fazem parte do grupo das meninas? (Médio)",
      difficulty: "médio",
      options: ["Betty, Frenchy, Marty, Sandy e Jan", "Patty, McGee, Blanche, Sandy e Putzie", "Betty, Sandy, Frenchy, Jan e Murdokk", "Sandy, Jan, McGee, Vince e Marty", "Putzie, Sandy, Doody, Patty e Betty"],
      answer: 0
    },
    {
      question: " Qual o nome do carro dos Scorpion? (Difícil)",
      difficulty: "difícil",
      options: ["Hot Rod", "Mercury of the death", "Hell's Chariot", "Hells car", "Scorpions chariot"],
      answer: 2
    },
    {
      question: "Por que Kenickie Williams não pode dirigir o carro na corrida? (Fácil)",
      difficulty: "fácil",
      options: [
        "Porque ele estava doente",
        "Porque a Martin bate sem querer a porta na cabeça dele",
        "Porque ele estava bêbado",
        "Porque ele foi desqualificado por não ter carteira de motorista",
        "Porque ele esqueceu como se dirige"
      ],
      answer: 1
    },
    {
      question: "Qual foi o par que ganhou o baile? (Médio)",
      difficulty: "médio",
      options: [
        "Danny Zuko e Sandy",
        "Kenickie e Sandy",
        "Doody e Charlene",
        "Danny Zuko e Charlene",
        "Tom e Sandy"
      ],
      answer: 3
    },
    {
      question: "Qual foi a emissora que gravou o baile? (Muito difícil)",
      difficulty: "muito difícil",
      options: ["Fox", "CBS", "SBT", "Kzaz", "NBC"],
      answer: 3
    },
    {
      question: "Em qual ano foi lançado o filme? (Fácil)",
      difficulty: "fácil",
      options: ["1980", "1979", "1975", "1978", "1977"],
      answer: 3
    },
    {
      question: "Qual o casal principal do filme? (Fácil)",
      difficulty: "fácil",
      options: [
        "Sandy e Sonny",
        "Danny Zuko e Sandy",
        "Kenickie e Betty",
        "Doody e Sandy",
        "Danny Zuko e Charlene"
      ],
      answer: 1
    },
    {
      question: "Quem é o melhor amigo do Danny Zuko? (Médio)",
      difficulty: "médio",
      options: ["Sonny", "Doody", "Putzie", "Kenickie", "Eugene"],
      answer: 3
    },
    {
      question: "Qual o nome da gangue de Danny Zuko? (Fácil)",
      difficulty: "fácil",
      options: [
        "Filhos da anarquia",
        "B-Birds",
        "Scorpions",
        "Bad Boys",
        "T-Birds"
      ],
      answer: 4
    },
    {
      question: "Qual o lugar que Sandy e Danny se encontram pela primeira vez? (Fácil)",
      difficulty: "fácil",
      options: ["Baile", "Parque", "Escola", "Cinema", "Praia"],
      answer: 4
    },
    {
      question: "Qual gangue Danny e seus amigos apostaram corrida? (Médio)",
      difficulty: "médio",
      options: ["Bad Boys", "Insanos", "Scorpion", "T-Birds", "B-Birds"],
      answer: 2
    },
    {
      question: "Esse filme é baseado em um musical de 1971, feito por: (Muito difícil)",
      difficulty: "muito difícil",
      options: ["Seth Rogen e Guillermo del Toro", "Dave Grohl e Stewart Copeland", "John Bonham e Keith Moon", "Jim Jacobs e Warren Casey", "Dan Schneider e Bill Meléndez"],
      answer: 3
    },
    {
      question: "De onde Sandy é? (Facíl)",
      difficulty: "fácil",
      options: ["Canadá", "Estados Unidos", "Inglaterra", "Austrália", "Brasil"],
      answer: 3
    },
    {
      question: "Para onde Danny leva Sandy no encontro? (Médio)",
      difficulty: "médio",
      options: ["Lanchonete", "Cinema", "Shopping", "DRIVE-IN", "Parque de diversão"],
      answer: 0
    },
    {
      question: "Quantas integrantes tem o grupo Pink Ladies? (Fácil)",
      difficulty: "fácil",
      options: ["5", "6", "4", "7", "3"],
      answer: 0
    },
    {
      question: "Por que Frenchy queria sair da escola? (Muito difiícil)",
      difficulty: "muito difícil",
      options: ["Ela estava cansada de estudar.", "Ela queria seguir seu sonho de ser uma estilista.", "Ela tinha problemas de relacionamento com os colegas.", "Ela não gostava dos professores.", "Ela queria se juntar a uma gangue de rua."],
      answer: 1
    },
    {
      question: "Qual personagem desses não faz parte dos T-Birds? (Fácio)",
      difficulty: "fácil",
      options: ["Sonny", "Kenickie", "Danny Zuko", "Doody", "Balmudo"],
      answer: 4
    },
    {
      question: "Qual personagem ganhou a corrida contra a gangue rival? (Média)",
      difficulty: "média",
      options: ["Sonny", "Doody", "Kenickie", "Danny Zuko", "Kenickie"],
      answer: 3
    },
    {
      question: "Qual a música final do filme? (Muito difícil)",
      difficulty: "muito difícil",
      options: ["Summer Nights", "Greased Lightnin'", "You're the One That I Want", "We Go Together", "Hopelessly Devoted to You"],
      answer: 2
    },
    {
      question: "Qual personagem canta 'Summer Nights'? (Difícil)",
      difficulty: "difícil",
      options: ["Danny Zuko e Sandy", "Sandy Olsson e Tom", "Rizzo e Sandy", "Kenickie e Danny", "Frenchy e Xandão"],
      answer: 0
    },
    {
      question: "Qual personagem canta 'Greased Lightnin''? (Muito difícil)",
      difficulty: "muito difícil",
      options: ["Danny Zuko", "Kenickie", "Doody", "Sonny", "Roger"],
      answer: 0
    },
    {
      question: "Qual personagem canta 'Hopelessly Devoted to You'? (Muito difícil)",
      difficulty: "muito difícil",
      options: ["Jan", "Frenchy", "Rizzo", "Sandy Olsson", "Marty"],
      answer: 3
    },
    
      {
        question: "Qual personagem canta 'You're the One That I Want'? (Muito difícil)",
        difficulty: "muito difícil",
        options: ["Kenickie", "Sandy Olsson", "Rizzo", "Danny Zuko", "Marty"],
        answer: 3
      },
      {
        question: "Qual personagem canta 'Beauty School Dropout'? (Muito difícil)",
        difficulty: "muito difícil",
        options: ["Teen Angel", "Frenchy", "Rizzo", "Marty", "Jan"],
        answer: 0
      },
      {
        question: "Qual casal que se casa no final do filme? (Difícil)",
        difficulty: "difícil",
        options: ["Danny e Sandy", "Kenickie e Betty", "Doody e Jan", "Putzie e Frenchy", "Patty e Eugene"],
        answer: 1
      },
      {
        question: "Qual a personagem que ficou grávida durante o filme? (Difícil)",
        difficulty: "difícil",
        options: ["Frenchy", "Sandy", "Jan", "Betty", "Patty"],
        answer: 3
      },
      {
        question: "Quando se passa o filme? (Difícil)",
        difficulty: "difícil",
        options: ["1960", "1954", "1959", "1950", "1957"],
        answer: 2
      },
      {
        question: "Qual era o trabalho de Frenchy? (Médio)",
        difficulty: "médio",
        options: ["Modelo", "Atendente", "Cabeleireira", "Garçonete", "Atriz"],
        answer: 3
      },
      {
        question: "Qual casal não fica juntos no filme? (Médio)",
        difficulty: "médio",
        options: ["Sandy e Zuko", "Betty e Kenickie", "Sonny e Marty", "Frenchy e Doody", "Jan e Putzie"],
        answer: 2
      },
      {
        question: "Qual o nome da gangue rival dos T-Birds? (Facíl)",
        difficulty: "fácil",
        options: ["Bad Boys", "Insanos", "Scorpion", "Sub-Bird", "B-Bird"],
        answer: 2
      },
      {
        question: "Quem é o líder da gangue rival? (Facíl)",
        difficulty: "fácil",
        options: ["Balmudo", "Tom Chisum", "Sonny", "Willians", "Calhoun"],
        answer: 0
      },
      {
        question: "Quantos membros tem a gangue rival? (Facío)",
        difficulty: "fácil",
        options: ["7", "3", "5", "6", "4"],
        answer: 2
      },
      {
        question: "Quais personagens abaixam a calça durante a transmissão do baile? (Difícil)",
        difficulty: "difícil",
        options: ["Danny e Sandy", "Kenickie e Rizzo", "Vince Fontaine e Cha Cha", "Sonny e Jan", "Doody e Frenchy"],
        answer: 3
      },
      {
        question: "Qual personagem não faz parte dos t-Birds? (Fácil)",
        difficulty: "fácil",
        options: ["Danny Zuko", "Kenickie", "Doody", "Calhoun", "Putzie"],
        answer: 3
      },
      {
        question: "Qual personagem não faz parte dos t-Birds? (Fácil)",
        difficulty: "fácil",
        options: ["Doody", "Kenickie", "Putzie", "Danny Zuko", "Tom Chisum"],
        answer: 4
      },
      {
        question: "Qual personagem não faz parte das Pink Ladies? (Médio)",
        difficulty: "média",
        options: ["Rizzo", "Frenchy", "Marty", "Jan", "Sandy"],
        answer: 4
      },
      {
        question: "Qual personagem não faz parte das Pink Ladies? (Médio)",
        difficulty: "média",
        options: ["Cha-Cha", "Marty", "Jan", "Rizzo", "Frenchy"],
        answer: 0
      },
      {
        question: "Quais esportes Danny tentou participar antes de ir para a corrida? (Difícil)",
        difficulty: "difícil",
        options: ["Futebol americano, Basquete, Esgrima, Beisebol e Atletismo", "Basquete, Beisebol, Atletismo, Futebol americano e Luta livre", "Beisebol, Futebol, Basquete, Karâte e Luta livre", "Atletismo, Beisebol, Futebol, Basquete e Karâte", "Luta livre, Atletismo, Futebol, Basquete e Karâte"],
        answer: 1
      },
      {
        question: "Por que Danny começou a praticar esportes? (Médio)",
        difficulty: "média",
        options: ["Para impressionar seus amigos", "Para melhorar sua forma física", "Para se destacar no colégio", "Para conquistar uma garota", "Porque seus pais o incentivaram"],
        answer: 3
      },
      {
        question: "Com quem Sandy começou a sair depois de brigar com o Danny? (Difícil)",
        difficulty: "difícil",
        options: ["Doody", "Eugene", "Danny", "Tom Chisum", "Kenickie"],
        answer: 3
      },
      {
        question: "Como é o figurino dos T-birds? (Facíl)",
        difficulty: "fácil",
        options: ["Jaquetas de couro preto e calças jeans", "Camisetas brancas e calças pretas", "Blazers xadrez e calças sociais", "Camisas listradas e shorts coloridos", "Ternos elegantes e gravatas borboleta"],
        answer: 0
      },
      {
        question: "Como é o figurino das Pink Ladies? (Facíl)",
        difficulty: "fácil",
        options: ["Jaquetas de couro rosa e saias rodadas", "Vestidos longos e luvas de renda", "Blusas de seda rosa e calças de alfaiataria", "Camisas de flanela xadrez e jeans rasgados", "Uniformes de líderes de torcida cor-de-rosa"],
        answer: 0
      },
      {
        question: "Qual o nome do treinador da Ryndell High School? (Muito Difícil)",
        difficulty: "muito difícil",
        options: ["Calhoun", "Johnny Casino", "Teen Angel", "Doody", "Vince Fontaine"],
        answer: 0
      }  
    
  ];
  
  function selectRandomQuestions() {
    const easyQuestions = questions.filter(question => question.difficulty === "fácil");
    const mediumQuestions = questions.filter(question => question.difficulty === "médio");
    const hardQuestions = questions.filter(question => question.difficulty === "difícil");
    const veryHardQuestions = questions.filter(question => question.difficulty === "muito difícil");
  
    const selectedQuestions = [];
  
    selectedQuestions.push(...getRandomItemsFromArray(easyQuestions, 3));

    selectedQuestions.push(...getRandomItemsFromArray(mediumQuestions, 3));
  
    selectedQuestions.push(...getRandomItemsFromArray(hardQuestions, 3));
  
    selectedQuestions.push(...getRandomItemsFromArray(veryHardQuestions, 1));
  
    return selectedQuestions;
  }
  
  function getRandomItemsFromArray(array, count) {
    const shuffledArray = array.sort(() => Math.random() - 0.5);
    return shuffledArray.slice(0, count);
  }
  
  function generateQuizHTML() {
    const selectedQuestions = selectRandomQuestions();
    minhasq =selectedQuestions;
    const quizContainer = document.getElementById("quiz-container");
  
    selectedQuestions.forEach((question, index) => {
      const questionHTML = `
        <div>
          <h3>Pergunta ${index + 1}</h3>
          <p>${question.question}</p>
          <ul>
            ${question.options.map((option, optionIndex) => `
              <li>
                <label>
                  <input type="radio" name="question-${index}" value="${optionIndex}">
                  ${option}
                </label>
              </li>
            `).join("")}
          </ul>
        </div>
      `;
  
      quizContainer.innerHTML += questionHTML;
    });
  }
  function checkAnswers() {
    const selectedQuestions = minhasq;
    const resultContainer = document.getElementById("result-container");
    let score = 0;
  
    selectedQuestions.forEach((question, index) => {
      const selectedOption = document.querySelector(`input[name="question-${index}"]:checked`);
  
      if (selectedOption) {
        const selectedOptionIndex = parseInt(selectedOption.value);
  
        if (selectedOptionIndex === question.answer) {
          score++;
        }
      }
    });
  
    const resultHTML = `<p>Você acertou ${score} de ${selectedQuestions.length} perguntas.</p>`;
    resultContainer.innerHTML = resultHTML;
  }
  
  var minhasq;

  window.onload = generateQuizHTML;
  

  
#Sistema de Provas Online

##Problemática

Criar um sistema que gerencia provas online e ranqueia os pontos que os alunos tiram nas atividades. Nesse sistema os administradores incluem perguntas em determinadas categorias. Então os alunos e solicitam a geração de uma prova para que respondam. O sistema corrige as questões na hora e mostra a pontuação obtida pelo aluno.

Cada resposta certa dá ao aluno (10 x fator) pontos . Se a pergunta ja foi respondida pelo aluno anteriormente então os pontos não serão creditados novamente.

Os administradores controlam o sistema cadastrando temas e perguntas. Quanto aos temas, será cadastrado o nome e o fator multiplicador para os pontos. Esse fator é como se fosse o nível de dificuldade: 0.8 para fácil, 1 para médio e 1.2 para difícil. O fator é utilizado no cálculo de pontos.

O cadastro da pergunta inclui o enunciado, o tema e 5 respostas possíveis. Também deve ser informado qual das respostas é a correta para correção automática.

Quando um aluno entra no sistema usando seu login e senha, ele pode gerar provas com tema específico ou geral, informando o número de questões que deseja responder (o mínimo será 5 questões). Sua pontuação ficará registrada. Também terá acesso ao ranking de alunos mostrando o top 10 dos alunos com mais pontuação.

Sempre que o fator de multiplicação de um tema for alterado, a pontuação já obtida de todos os participantes também deve ser recalculada e informar a todos por e-mail.

#Sobre o projeto

- Nome do sistema: SysProva
- Equipe de desenvolvimento: Aline Oliveira, Ender Mattos, Wesley Rocha.
- Linguagem de programação: PHP, HTML, CSS e JavaScript.
- Ferramentas: NetBeans IDE, Sublime Text 3, Google Chrome, Mozilla Firefox, FireBug (extenção do Mozilla), XAMPP.
- Frameworks e Dependências: CakePHP, Composer.
- Descrição do processo de desenvolvimento: Primeiramente, chegamos ao acordo sobre qual framework utilizar - tendo em vista a necessidade de um rápido desenvolvimento e também de uma curva de aprendizado curta -, escolhemos o CakePHP. Depois, precisamos aprender a desenvolver com a ferramenta, cada framework funciona de uma forma diferente e não havíamos tido contato com ferramentas como o Composer ou sequer algum framework robusto como o Cake. Após escolhidas as ferramentas, dividimos tarefas, dando preferência às afinidades de cada integrante, por exemplo, encarregamos o Wesley Rocha como responsável pelo banco de dados. Todavia, mesmo com esse método de divisão de funções, cada um teve de aprender sozinho a resolver a sua parte do projeto. Podemos citar novamente o trabalho com o banco de dados, que envolveu adaptações ao framework, como todos os os campos de código nomeados como "id".
- Descrição do processo de compilação/implantação/execução do sistema a partir do código-fonte no repositório

##Observações

- O nome da base de dados deve ser obrigatoriamente 'prova' para que a conexão seja estabelecida.

# ProjetoFinal-4A2016
Projeto final da disciplina de Desenvolvimento de Sistemas do 4° A do curso Técnico em Informática em 2016


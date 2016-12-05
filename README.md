#Sistema de Blog

##Problemática

Criar um sistema de blog para múltiplos autores, onde cada autor pode escrever postagens que vão para a página inicial. Ou seja, será um blog comunitário (não haverá um dono ou autor com mais destaque que outros). Cada autor terá login e senha para entrar no sistema.

Na página inicial deverá constar uma lista com todas categorias de postagens, bem como os títulos, data, autor e resumos das últimas 20 postagens. No fim da página, deve ser dado ao público paginações por onde poderão navegar por postagens anteriores. A lista de categorias apresentarão links para listas de postagens dessas mesmas categorias específicas seguindo as regras da página inicial.

No cadastro das postagens deverá conter título, resumo, texto completo, categoria a qual pertence e data de criação. O texto completo consistirá apenas de palavras, sem imagens, porém será necessário permitir o autor deixar partes do texto em negrito, itálico ou sublinhado, pelo menos.

Por ser o blog comunitário, qualquer autor poderá editar a postagens de outros autores, sabendo que ficará registrada a última pessoa que fez alteração na postagem e a data. O mesmo se aplica à deleção de postagens, porém nenhuma postagem será completamente apagada, somente não mais aparecerá para o público. Deverá ficar registrado o autor que desativou a publicação.

+
+- Nome do sistema

blog.com


+- Equipe de desenvolvimento

Jeferson Loose, Mateus viera e Michael Jackson.


+- Linguagem de programação (todos as linguagens utilizadas)
C#, banco de dados NOsql, link, HTML, CSS e JavaScript.


+- Ferramentas (IDE, compiladores, debuggers, editores, testadores, navegadores, etc).

Visual Studio 2015 e Google Chrome.


+- Frameworks e Dependências

asp .net 4.5, MVC, BootStrap, JQuery e drive mongodb.


+- Descrição do processo de desenvolvimento (explicar detalhes de planejamento, execução e testes do sistema)

A princípio, foi feito um levantamento de pré-requisitos, em seguida, um levantamento de pontos de funções, modelagem do banco de dados, então partimos para a programação em si. Os testes do sistema foi feito pela própria equipe de desenvolvimento, levando em consideração a acessibilidade, usabilidade e confiabilidade do sistema.


+- Descrição do processo de compilação/implantação/execução do sistema a partir do código-fonte no repositório.

Para compilar essa aplicação faz necessãrio a IDE Visual Studio 2013 ou superior. A implantação só pode ser feito em um servidor IIS 7 ou superior. Não é possível executar esta aplicação através do código-fonte, pois o C# é uma linguagem compilada e não interpretada.
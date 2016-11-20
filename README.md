#Sistema de Lista de Desejos

##Problemática

Criar um sistema de lista de desejos para uma loja de informática. Consiste em um catálogo de produtos em que o usuário fará pesquisas e indicará vários produtos que deseja comprar. No final o usuário pede para salvar a lista informando seu e-mail. O sistema então enviará um e-mail para o usuário contendo dos os itens da lista e o valor, além de salvar os dados da lista no banco de dados para que o lojista entre em contato com o usuário posteriormente.

Para que isto seja possível, será necessário criar (a) **cadastro de categorias**, contendo seu nome, porém uma categoria pode ter sub-categorias; (b) **cadastro de produtos**, contendo nome, valor, descrição, categoria e fotos; (c) **cadastro de listas de desejos** contendo os dados do usuário e os itens marcados por ele, sendo os dados do usuário o nome, telefone e e-mail.

Na página inicial deve constar as categorias para que o usuário possa navegar pelo produtos desta categoria, e um campo de busca para que a pesquisa seja iniciada pelo nome desse produto, além de alguns produtos selecionados aleatoriamente do banco de dados.

Além dos cadastros, o lojista poderá visualizar a qualquer momento um relatório dos 10 itens mais desejados do mês e os 10 mais desejados de sempre. Esse sistema de administração de cadastro e relatório deve ser protegido por senha ao cadastrar administradores no sistema.

**A função de e-mail deverá funcionar de verdade na correção desse sistema!**
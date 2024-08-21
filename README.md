### Universidade Federal do Tocantins
### Bacharelado em Ciência da Computação, 4º semestre
### Professor: Edeilson Milhomem da Silva
### Alunos: Lauro, Henrique Noronha, André Victor, Vicente,José Borges

O projeto consiste em um formulário para cadastro de usuários, incluindo uma tela de administração. Na tela de administração, são realizadas operações CRUD (Criar, Ler, Atualizar e Deletar) para gerenciar os cadastros.
### Email e senha para fazer login:
admin.@mail.com
12345678
### Features
- Formulário: para adicionar novos usuários, inserindo-os no banco de dados
- admin: tela de admin que recupera os dados dos usuários cadastrados e os exibe
- delete-user: funcionalidade de deletar usuário na tela de admin
- login: autentica o admin para que possa seguir para a tela de admin
- edit-user: funcionalidade de editar dados de um usuário já cadastrado 
### Instruções:
- Comando: php --ini
- Abra o arquivo php.ini, digite: code "local_do_arquivo\php.ini" (caso esteja no VS code)
- Habilite: extension=pdo_sqlite e extension=sqlite3 (apenas exclua o ";" do início da extensão)
- php -S localhost:8000
 - recomenda-se usar a extensão SQLite Viewer caso esteja usando VS code

| Integrantes                                                                                                         | Features                |
| ------------------------------------------------------------------------------------------------------------------- | ----------------------- |
| Lauro Oliveira Mota                                                                                                 | Formulario              |
| André Victor                                                                                                        | login                   |
| Henrique Noronha                                                                                                    | função: deletar usuário |
| Borges Costta                                                                                                       | admin painel            |
| Vicente Gregório                                                                                                    | função: editar usuários |
| [Link do video de apresentação](https://drive.google.com/file/d/17AomQv2ETJzIQV7igAo18BLW5PmywiZL/view?usp=sharing) |                         |


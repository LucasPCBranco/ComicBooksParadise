
INSERT INTO tbCategorias(Desc_Categoria)VALUES("Álbum de Luxo"); /* Dúvida: O que exatamente viria aqui? Seria
"Batman", "Heróis", "DC", "Edições Únicas" ? */
INSERT INTO tbEditoraO (Nome_EditoraO)VALUES("DC Comics");
INSERT INTO tbEditoraN (Nome_EditoraN)VALUES("Panini");
INSERT INTO tbEdicao(TipoEdicao)VALUES("Única"); /* Outro que eu tenho dúvida se é mesmo necessário. Qual que é a diferença 
disso no final de tudo?*/
INSERT INTO tbprodutos(Nome_Produto,kappa,  Desc_Produto, PrecoVenda_Produto, QteEstoque_Produto, idCategoria, idEditoraO, idEditoraN,idEdicao)
VALUES('Batman: Silêncio','IMG\\BatmanHush.jpg', 'Alguém está fazendo a vida de Bruce Wayne um inferno. Uma torrente de vilões querem sua cabeça. Qual o seu
objetivo? Quem é Silêncio? Descubra hoje, nessas aventuras eletrizantes do Cruzado Encapuzado.', 1.99, 10, 1, 1, 1, 1);

INSERT INTO tbEstado(Estado)
VALUES('São Paulo'),
('Rio de Janeiro');

INSERT INTO tbCidade(Cidade, idEstado)
VALUES 
('São Paulo', 1),
('Santo André',1),
('Guarulhos',1),
('Rio de Janeiro',2),
('Lapa',2),
('Niterói',2);



INSERT INTO tbCliente(Nome_Cliente, Data_Nascimento, CPF, idEstado, idCidade, endereco_Cliente, email, senha)
VALUES('Tiago Souza Pedroso', '2015-12-01', 00000000000, 1, 1, 'Rua Marcial, 25', 
'tiago.souza.pedroso@gmail.com', '12fd5311017d4b8faf7abc6d7fa13d182f519a13'),
('Lucas Pereira Castelo Branco', '1999-08-19', 1111111111, 1, 1, 'Rua da Mooca, 12', 
'lucas.pcbranco@hotmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

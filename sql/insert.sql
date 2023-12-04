-- Inserir membros
INSERT INTO membros(nome, idade, endereco, telefone)
VALUES
    ('Garibaldo', 25, 'Rua A, 123', '(11) 1234-5678'),
    ('Genefra', 30, 'Avenida B, 456', '(11) 9876-5432');
    
-- Inserir esportes
INSERT INTO esportes(nome)
VALUES
	('futebol'),
    ('basquete');
   
-- Inserir equipes
INSERT INTO Equipes (nome, esporte_id)
VALUES
    ('equipe 1', 1),
    ('equipe 2', 1),
    ('equipe 3', 1);

-- Inserir eventos
INSERT INTO eventos (nome, data, local)
VALUES
    ('Torneio de futebol', '2023-11-15', 'Estádio 1'),
    ('Torneio de basquete', '2023-12-10', 'Ginásio 2');
    
-- Inserir inscrições
INSERT INTO inscricoes (membro_id, equipe_id, evento_id, data_inscricao)
VALUES
    (1, 1, 1, '2023-11-01'),
    (2, 1, 1, '2023-11-02'),
    (1, 3, 2, '2023-11-03');
    
INSERT INTO usuarios (nome, email, senha)
VALUES
	('admin', 'admin@admin.com', 'admin');
    
    INSERT INTO usuarios (nome, email, senha)
VALUES
	('teste', 'teste@teste.com', 'teste');
    
    
select * from equipes;
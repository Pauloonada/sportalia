-- Inserir membros
INSERT INTO membros(id, nome, idade, endereco, telefone)
VALUES
    (1, 'Garibaldo', 25, 'Rua A, 123', '(11) 1234-5678'),
    (2, 'Genefra', 30, 'Avenida B, 456', '(11) 9876-5432');
    
-- Inserir esportes
INSERT INTO esportes(id, nome)
VALUES
	(1, 'futebol'),
    (2, 'basquete');
   
-- Inserir equipes
INSERT INTO Equipes (id, nome, esporte_id)
VALUES
    (1, 'equipe 1', 1),
    (2, 'equipe 2', 1),
    (3, 'equipe 3', 1);

-- Inserir eventos
INSERT INTO eventos (id, nome, data, local)
VALUES
    (1, 'Torneio de futebol', '2023-11-15', 'Estádio 1'),
    (2, 'Torneio de basquete', '2023-12-10', 'Ginásio 2');
    
-- Inserir inscrições
INSERT INTO inscricoes (id, membro_id, equipe_id, evento_id, data_inscricao)
VALUES
    (1, 1, 1, 1, '2023-11-01'),
    (2, 2, 1, 1, '2023-11-02'),
    (3, 1, 3, 2, '2023-11-03');
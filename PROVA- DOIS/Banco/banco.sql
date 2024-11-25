CREATE TABLE imovel (
    id INT AUTO_INCREMENT PRIMARY KEY,
    endereco VARCHAR(255) NOT NULL,
    cep VARCHAR(9) NOT NULL,
    valor_aluguel DECIMAL(10,2) NOT NULL,
    nome_proprietario VARCHAR(100) NOT NULL
);

CREATE TABLE inquilino (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(11) NOT NULL UNIQUE,
    telefone VARCHAR(15) NOT NULL,
    data_nascimento DATE NOT NULL,
    imovel_id INT NOT NULL,
    FOREIGN KEY (imovel_id) REFERENCES imovel(id) ON DELETE CASCADE
);

-- Creación de la base de datos
CREATE DATABASE Automatizar;

-- Uso de la base de datos
USE Automatizar;

-- Tabla de Clientes
CREATE TABLE Cliente (
    IdCliente INT AUTO_INCREMENT PRIMARY KEY,
    NomCliente VARCHAR(50) NOT NULL,
    ApeCliente VARCHAR(50) NOT NULL,
    CedCliente INT(15) NOT NULL,
	DepCliente	VARCHAR(50) NOT NULL
	CiuCliente VARCHAR(50) NOT NULL,
	DirCliente VARCHAR(50) NOT NULL
	);

-- Tabla de Tickets
CREATE TABLE Ticket (
    IdTicket INT AUTO_INCREMENT PRIMARY KEY,
    DepTicket VARCHAR(150) NOT NULL,
    DesTicket TEXT,
    CatTicket VARCHAR(50) NOT NULL,
    
    FOREIGN KEY (IdCliente) REFERENCES Cliente(IdCliente)
);

-- Tabla de Analistas
CREATE TABLE Analista (
    CedAnalista INT AUTO_INCREMENT PRIMARY KEY,
    NomAnalista VARCHAR(50) NOT NULL,
    DedAnalista VARCHAR(50) NOT NULL,
	DirAnalista VARCHAR(50) NOT NULL,
	CiuAnalista VARCHAR(50) NOT NULL,
	ZonaResponsabilidad VARCHAR(50) NOT NULL,
	 
    FOREIGN KEY (DepTicket) REFERENCES Ticket(DepTicket)
);
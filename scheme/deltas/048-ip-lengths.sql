ALTER TABLE ProxyUsers CHANGE ip ip VARCHAR(50) DEFAULT NULL;
ALTER TABLE ProxyTrunks CHANGE ip ip VARCHAR(50) NOT NULL;
ALTER TABLE ApplicationServers CHANGE ip ip VARCHAR(50) NOT NULL;

select * from tipo
select * from fabricante
select * from produto
select * from compra

CREATE OR REPLACE FUNCTION retiraEstoque()
RETURNS trigger as $$

BEGIN
	UPDATE produto SET qtde_estoque = qtde_estoque - (SELECT SUM(quantidade) FROM compra WHERE id = NEW.id)
	WHERE id = NEW.produto_id;

RETURN NEW;
END
$$
LANGUAGE plpgsql;



CREATE OR REPLACE FUNCTION colocaEstoque()
RETURNS trigger as $$
DECLARE
qnt INTEGER;
BEGIN
	SELECT SUM(quantidade)  FROM compra WHERE id = OLD.id INTO qnt;
	UPDATE produto SET qtde_estoque = qtde_estoque + qnt
	WHERE id = OLD.produto_id;

RETURN OLD;
END
$$
LANGUAGE plpgsql;


CREATE OR REPLACE FUNCTION atualizaEstoque()
RETURNS trigger as $$
DECLARE
    nova INTEGER;
    antiga INTEGER;
BEGIN
	SELECT SUM(quantidade) FROM compra WHERE id = OLD.id INTO antiga;
    SELECT SUM(quantidade) FROM compra WHERE id = NEW.id INTO nova;

    UPDATE produto SET qtde_estoque = qtde_estoque - (antiga + nova)
    WHERE id = OLD.produto_id;

    RETURN OLD;
END
$$
LANGUAGE plpgsql;

CREATE TRIGGER atualizaEstoque AFTER UPDATE ON compra
FOR EACH ROW EXECUTE PROCEDURE atualizaEstoque();

CREATE TRIGGER quantidade AFTER INSERT ON compra
FOR EACH ROW EXECUTE PROCEDURE retiraEstoque();

CREATE TRIGGER quantidade1 BEFORE DELETE ON compra
FOR EACH ROW EXECUTE PROCEDURE colocaEstoque();




INSERT INTO compra(quantidade,produto_id)
VALUES (2, 11);
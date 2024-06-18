--CRIANDO A TABELA TIME A

CREATE TABLE TimeA(
    id integer primary key  NOT NULL,
    timeA character varying(100),
    golstimeA integer NOT NULL
    );



--CRIANDO A TABELA TIME B

CREATE TABLE TimeB(
    id integer primary key  NOT NULL,
    timeB character varying(100),
    golstimeB integer NOT NULL
    );
--CRIANDO A TABELA PARTIDA

-- Table: public.partida

-- DROP TABLE IF EXISTS public.partida;

CREATE TABLE IF NOT EXISTS public.partida
(
    id integer NOT NULL DEFAULT nextval('partida_id_seq'::regclass),
    "timeA" character varying(100) COLLATE pg_catalog."default",
    "timeB" character varying(100) COLLATE pg_catalog."default",
    "golstimeA" integer,
    "golstimeB" integer,
    "horaP" time without time zone,
    "dataP" date,
    "rodadaP" integer,
    CONSTRAINT partida_pkey PRIMARY KEY (id)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.partida
    OWNER to postgres;

--SELECT    

SELECT id, "timeA", "timeB", "golstimeA", "golstimeB", "horaP", "dataP", "rodadaP"
	FROM public.partida;
	

--vai ser um select, em que eu vou juntar as tabelas dos TIMES atrás dos ID.
--ver a contagem de gols e etc

--quero descobrir o resultado da partida
--através do resultado da partida quero poder dizer se o time ganhou, perdeu ou empatou a partida
create function test01 ()
returns trigger
language plpgsql as $$
declare
    time_venceu text;
begin	
    time_venceu := ( 
	select timeA.timea as nomeTimA
	from partida pa
	  join timeA ta
	  on pa.timeA = ta.id
	  join timeB tb
	  on pa.timeB = tb.id);
	  
	  if ta.golstimea > tb.golstimeb then
	       raise exception 'timea venceu';
	  elsif ta.golstimea == tb.golstimeb then
	       raise exception 'empate';
	  elsif ta.golstimea < tb.golstimeb then
	       raise exception'timeb venceu';	   
	  end if;
	  return new;
end; 
$$	  
	  
--quantidade de gols de cada time

--TIMEA
create function test02 ()
returns trigger
language plpgsql as $$
declare
       quantidade_gols_timea integer;
begin
     quantidade_gols_timea :=(
		 select count(ta.golstimea)
		 from partida pa
		 join timeA ta
		   on ta.id = pa.timeA
	     );
end;	 
$$	 

--TIMEB

create function test03 ()
returns trigger
language plpgsql as $$
declare
       quantidade_gols_timeb integer;
begin
     quantidade_gols_timeb :=(
		 select count(tb.golstimeb)
		 from partida pa
		 join timeB tb
		   on tb.id = pa.timeB
	 );
end;	 
$$	
	 
--junção das colunas, para ter um "atributo" que liste todos os times
SELECT id, "time" AS time
FROM public.partida
UNION ALL
SELECT id, "timeB" AS time
FROM public.partida
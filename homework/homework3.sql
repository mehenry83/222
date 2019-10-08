create table if not exists mehenry.h3_teams
(
	team_id bigint auto_increment
		primary key,
	name varchar(150) not null,
	date_created datetime null,
	date_updated datetime null,
	date_deleted datetime null
);

create table if not exists mehenry.hw3_members
(
    member_id    bigint auto_increment
        primary key,
    team_id      int          not null,
    name         varchar(150) not null,
    date_created datetime     null,
    date_updated datetime     null,
    date_deleted datetime     null
);

INSERT into h3_teams (team_id, name, date_created, date_updated, date_deleted)
VALUES (1, 'blues', now(), now(),NULL)

SELECT team_id FROM h3_teams
where team_id=1

UPDATE h3_teams
SET date_created=now()
WHERE date_created=now()

DELETE FROM h3_teams WHERE team_id=3

SELECT * FROM hw3_members
WHERE name='mary';

SELECT * FROM hw3_members
WHERE team_id='1'
ORDER BY name



DROP TABLE complainment;
DROP TABLE customer_log;
DROP TABLE cleaning;
DROP TABLE task_log;
DROP TABLE reservation;
DROP TABLE reservation_log;
DROP TABLE staff;
DROP TABLE customer;
DROP TABLE room;
DROP TABLE room_type;


CREATE TABLE complainment (
	code			INTEGER 		AUTO_INCREMENT,
	ttime			DATETIME		NOT NULL,
	rnumber			INTEGER 		NOT NULL,
	staff_id		VARCHAR(20) 	NOT NULL,
	complainment 	VARCHAR(20) 	NOT NULL,
	detail 			TEXT			NOT NULL,
	recept	 		TINYINT			NOT NULL,
	PRIMARY KEY(code)
);

CREATE TABLE customer_log (
	logSeq		INTEGER			AUTO_INCREMENT,
	code 		INTEGER 		NOT NULL,
	id 			VARCHAR(20)		NOT NULL,
	cname 		VARCHAR(20)		NOT NULL,
	rnumber 	INTEGER			NOT NULL,
	phone 		VARCHAR(20)		NOT NULL,
	checkIn 	DATE 			NOT NULL,
	checkOut 	DATE			NOT NULL,
	PRIMARY KEY(logSeq)
);

CREATE TABLE cleaning (
	code 		INTEGER		AUTO_INCREMENT,
	ttime 		DATETIME	NOT NULL,
	rnumber		INTEGER 	NOT NULL,
	staff_id 	VARCHAR(20)	NOT NULL,
	PRIMARY KEY(code)
);

CREATE TABLE task_log (
	code 		INTEGER 		AUTO_INCREMENT,
	ttime 		DATETIME		NOT NULL,
	rnumber 	INTEGER 		NOT NULL,
	staff_id 	VARCHAR(20) 	NOT NULL,
	tstatus 	VARCHAR(20) 	NOT NULL,
	PRIMARY KEY(code)
);

CREATE TABLE staff (
	id 			VARCHAR(20),
	pw 			VARCHAR(20)		NOT NULL,
	sname 		VARCHAR(20)		NOT NULL,
	phone 		VARCHAR(20)		NOT NULL,
	department 	VARCHAR(20) 	NOT NULL,
	attendance	TINYINT 		NOT NULL,
	accept 		TINYINT 		NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE customer (
	id 			VARCHAR(20) 	PRIMARY KEY,
	password	VARCHAR(20)		NOT NULL,
	cname 		VARCHAR(20)		NOT NULL,
	phone 		VARCHAR(20)		NOT NULL
);

CREATE TABLE room_type (
	rtype 			VARCHAR(20) 	PRIMARY KEY,
	price 			INTEGER 		NOT NULL,
	personnelLimit 	INTEGER 		NOT NULL,
	bed 			INTEGER 		NOT NULL,
	view 			VARCHAR(20) 	NOT NULL,
	pc 				INTEGER 		NOT NULL
);

CREATE TABLE room (
	rnumber	 	INTEGER 		PRIMARY KEY,
	rtype 		VARCHAR(20) 	NOT NULL,
	isEmpty 	TINYINT 		NOT NULL,
	clean 		TINYINT 		NOT NULL,
	FOREIGN KEY(rtype) REFERENCES room_type(rtype)
);

CREATE TABLE reservation (
	code		INTEGER			AUTO_INCREMENT,
	id 			VARCHAR(20) 	NOT NULL,
	rnumber 	INTEGER 		NOT NULL,
	num_guests 	INTEGER 		NOT NULL,
	checkIn 	DATE 			NOT NULL,
	checkOut 	DATE 			NOT NULL,
	PRIMARY KEY(code),
	FOREIGN KEY(id) REFERENCES customer(id),
	FOREIGN KEY(rnumber) REFERENCES room(rnumber)
);

CREATE TABLE reservation_log (
	rnumber 	INTEGER,
	use_date 	DATE,
	code 		INTEGER,
	PRIMARY KEY(rnumber, use_date)
);


INSERT INTO staff VALUES ('admin', 'admin', '관리자', '01036464406', 'master', 0, 1);

INSERT INTO room_type VALUES ('STANDARD', 120000, 2, 1, 'CITY', 0);
INSERT INTO room_type VALUES ('DELUX', 180000, 2, 1, 'OCEAN', 1);
INSERT INTO room_type VALUES ('FAMILY', 270000, 4, 3, 'CITY', 2);

INSERT INTO room VALUES (201, 'FAMILY', 1, 1);
INSERT INTO room VALUES (202, 'FAMILY', 1, 1);
INSERT INTO room VALUES (203, 'STANDARD', 1, 1);
INSERT INTO room VALUES (204, 'STANDARD', 1, 1);
INSERT INTO room VALUES (205, 'FAMILY', 1, 1);
INSERT INTO room VALUES (206, 'FAMILY', 1, 1);
INSERT INTO room VALUES (207, 'STANDARD', 1, 1);
INSERT INTO room VALUES (208, 'STANDARD', 1, 1);
INSERT INTO room VALUES (301, 'FAMILY', 1, 1);
INSERT INTO room VALUES (302, 'FAMILY', 1, 1);
INSERT INTO room VALUES (303, 'STANDARD', 1, 1);
INSERT INTO room VALUES (304, 'STANDARD', 1, 1);
INSERT INTO room VALUES (305, 'FAMILY', 1, 1);
INSERT INTO room VALUES (306, 'FAMILY', 1, 1);
INSERT INTO room VALUES (307, 'STANDARD', 1, 1);
INSERT INTO room VALUES (308, 'STANDARD', 1, 1);
INSERT INTO room VALUES (401, 'FAMILY', 1, 1);
INSERT INTO room VALUES (402, 'FAMILY', 1, 1);
INSERT INTO room VALUES (403, 'STANDARD', 1, 1);
INSERT INTO room VALUES (404, 'STANDARD', 1, 1);
INSERT INTO room VALUES (405, 'FAMILY', 1, 1);
INSERT INTO room VALUES (406, 'FAMILY', 1, 1);
INSERT INTO room VALUES (407, 'STANDARD', 1, 1);
INSERT INTO room VALUES (408, 'STANDARD', 1, 1);
INSERT INTO room VALUES (501, 'FAMILY', 1, 1);
INSERT INTO room VALUES (502, 'FAMILY', 1, 1);
INSERT INTO room VALUES (503, 'STANDARD', 1, 1);
INSERT INTO room VALUES (504, 'STANDARD', 1, 1);
INSERT INTO room VALUES (505, 'FAMILY', 1, 1);
INSERT INTO room VALUES (506, 'FAMILY', 1, 1);
INSERT INTO room VALUES (507, 'STANDARD', 1, 1);
INSERT INTO room VALUES (508, 'STANDARD', 1, 1);
INSERT INTO room VALUES (601, 'FAMILY', 1, 1);
INSERT INTO room VALUES (602, 'FAMILY', 1, 1);
INSERT INTO room VALUES (603, 'STANDARD', 1, 1);
INSERT INTO room VALUES (604, 'STANDARD', 1, 1);
INSERT INTO room VALUES (605, 'FAMILY', 1, 1);
INSERT INTO room VALUES (606, 'FAMILY', 1, 1);
INSERT INTO room VALUES (607, 'STANDARD', 1, 1);
INSERT INTO room VALUES (608, 'STANDARD', 1, 1);
INSERT INTO room VALUES (701, 'DELUX', 1, 1);
INSERT INTO room VALUES (702, 'DELUX', 1, 1);
INSERT INTO room VALUES (703, 'DELUX', 1, 1);
INSERT INTO room VALUES (704, 'DELUX', 1, 1);
INSERT INTO room VALUES (705, 'DELUX', 1, 1);
INSERT INTO room VALUES (706, 'DELUX', 1, 1);
INSERT INTO room VALUES (707, 'DELUX', 1, 1);
INSERT INTO room VALUES (708, 'DELUX', 1, 1);
INSERT INTO room VALUES (801, 'DELUX', 1, 1);
INSERT INTO room VALUES (802, 'DELUX', 1, 1);
INSERT INTO room VALUES (803, 'DELUX', 1, 1);
INSERT INTO room VALUES (804, 'DELUX', 1, 1);
INSERT INTO room VALUES (805, 'DELUX', 1, 1);
INSERT INTO room VALUES (806, 'DELUX', 1, 1);
INSERT INTO room VALUES (807, 'DELUX', 1, 1);
INSERT INTO room VALUES (808, 'DELUX', 1, 1);

-- INSERT INTO customer VALUES ('c1', '1234', '손님1', '01022223333');
-- INSERT INTO customer VALUES ('c2', '1234', '손님2', '01033331111');
-- INSERT INTO customer VALUES ('c3', '1234', '손님3', '01031231111');
-- INSERT INTO customer VALUES ('c4', '1234', '손님4', '01033356111');
-- INSERT INTO customer VALUES ('c5', '1234', '손님5', '01033331113');
-- INSERT INTO customer VALUES ('c6', '1234', '손님6', '01031331111');

-- INSERT INTO reservation VALUES (1111111, 'c1', 201, 2, '2020-11-25', '2020-11-26');
-- INSERT INTO reservation VALUES (1111112, 'c2', 202, 1, '2020-11-26', '2020-11-27');
-- INSERT INTO reservation VALUES (1111113, 'c3', 602, 4, '2020-11-25', '2020-11-27');
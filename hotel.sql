-- 해당 파일이 존재하는 경로(Desktop)으로 이동하여 mysql실행 -> source hotel.sql

DROP TABLE reservation;

DROP TABLE reservation_room;

DROP TABLE reservation_date;

DROP TABLE room;

DROP TABLE customer;

CREATE TABLE reservation (
	id 			INTEGER AUTO_INCREMENT PRIMARY KEY,
	customer_id VARCHAR(30) NOT NULL,
	num_guests 	INTEGER NOT NULL
);

CREATE TABLE reservation_room (
	room_number 	INTEGER,
	reservation_id 	INTEGER,
	PRIMARY KEY(room_number, reservation_id)
);

CREATE TABLE reservation_date (
	use_date		 DATE,
	reservation_id	 INTEGER,
	PRIMARY KEY(use_date, reservation_id)
);

CREATE TABLE room (
	room_number	INTEGER PRIMARY KEY,
	type 		VARCHAR(20) NOT NULL,
	isAvailable	BOOLEAN NOT NULL, 
	isEmpty 	BOOLEAN NOT NULL
);

CREATE TABLE customer (
	id 			VARCHAR(20) PRIMARY KEY,
	password	VARCHAR(20) NOT NULL,
	name 		VARCHAR(20) NOT NULL,
	phone 		VARCHAR(20) NOT NULL
);

-- SELECT rr.reservation_id, rr.room_number, rd.use_date
-- FROM reservation_room rr 
-- CROSS JOIN reservation_date rd;

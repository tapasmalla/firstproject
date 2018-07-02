create table pro_users(
	us_id int auto_increment primary key,
	us_name varchar(100),
	us_mobile bigint,
	us_email varchar(100),
	us_password varchar(100),
	us_status tinyint default 0,
	us_type tinyint default 1,
	us_otp smallint,
	us_photo text
);

create table pro_hotel(
	ho_id int auto_increment primary key,
	ho_name varchar(100),
	ho_userid int
);

create table pro_hotel_branch(
	br_id int auto_increment primary key,
	br_name varchar(100),
	br_hotel_id int
);

create table pro_hotel_room(
	ro_id int auto_increment primary key,
	ro_no int,
	ro_photo text,
	ro_brid int
);

create table pro_room_book(
	book_id int auto_increment primary key,
	book_ro_id int,
	book_ro_uid int,
	book_date date,
	book_date_time timestamp
);

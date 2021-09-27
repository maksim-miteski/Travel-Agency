create table bookInfo(
    first_name varchar(30) not null,
    last_name varchar(30) not null,
    mail varchar(50) not null,
    birth_date date not null,
    passport_number int(7) PRIMARY KEY,
    tel int(9) not null
);

create table cardInfo(
    card_holder varchar(30) not null,
    card_number int(9) not null,
    pin int(3) not null,
    expiry_date date not null,
    card_select varchar(20) not null,
    billing_address varchar(60) not null,
    post_code int(4) not null,
    state varchar(30) not null,
    origin_city varchar(30) not null
);

create table travelInfo(
    select_city varchar(30) not null,
    departure_day date not null,
    arrival_day date not null
);

create table ratingInfo(
   rating varchar(150) not null
);

CREATE TABLE IF NOT EXISTS users (
 id int(11) NOT NULL AUTO_INCREMENT,
 username varchar(50) NOT NULL,
 email varchar(50) NOT NULL,
 password varchar(50) NOT NULL,
 create_datetime datetime NOT NULL,
 PRIMARY KEY (id)
);

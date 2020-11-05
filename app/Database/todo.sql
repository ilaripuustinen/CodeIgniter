drop database if exists todo;

create database todo;

use todo;

create table  user (
    id int primary key auto_increment,
    username VARCHAR (30) NOT NULL unique,
    password VARCHAR (255) not null,
    firstname VARCHAR (100),
    lastname VARCHAR (100)
);

create table task (
    id int primary key AUTO_INCREMENT,
    title VARCHAR (255) not null,
    added TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    description text,
    user_id int not null,
    index (user_id),
    foreign key (user_id) references user(id)
    on delete restrict
)
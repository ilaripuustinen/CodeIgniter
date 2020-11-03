drop database if exists todo;
create database todo;
use todo;

create table task (
    id int primary key AUTO_INCREMENT,
    title VARCHAR (255) not null,
    added TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    description text
)
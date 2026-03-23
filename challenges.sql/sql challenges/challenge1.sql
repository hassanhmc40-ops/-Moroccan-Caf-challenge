create database challege;
use challege;

create table library_books(
id int primary key,
title varchar (150) not null,
author varchar (100),
published_year year,
 status enum ('Available', 'Borrowed', 'Lost'),
 price double 

);
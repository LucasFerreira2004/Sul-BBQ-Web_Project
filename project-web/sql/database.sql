create database `storage_service`;
use `storage_service`;

create table `comments` (
  user_email varchar(255) not null primary key,
  user_name varchar(45) not null,
  comment_type varchar(7) not null,
  user_comment text not null
);

create table `admins` (
  id int not null auto_increment primary key,
  adm_email varchar(255) unique not null,
  adm_pass varchar(12) not null,
  adm_name varchar(15) not null
);

create table `employee` (
  emp_email varchar(255) not null primary key,
  emp_pass varchar(12) not null,
  emp_name varchar(15) not null,
  emp_func varchar(20) not null,
  emp_wage float(2) not null
); 

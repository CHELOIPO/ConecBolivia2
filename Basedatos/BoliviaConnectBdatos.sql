/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     01/07/2024 22:35:22                          */
/*==============================================================*/



/*==============================================================*/
/* Table: CARRITO                                               */
/*==============================================================*/
create table CARRITO
(
   ID_CARRITO           int(100) not null auto_increment  comment '',
   CANTIDAD_CARRITO     int  comment '',
   primary key (ID_CARRITO)
);

/*==============================================================*/
/* Table: CATEGORIA                                             */
/*==============================================================*/
create table CATEGORIA
(
   ID_CATEGORIA         int(100) not null auto_increment  comment '',
   NOMBRE_CATEGORIA     char(100)  comment '',
   primary key (ID_CATEGORIA)
);

/*==============================================================*/
/* Table: PEDIDOS                                               */
/*==============================================================*/
create table PEDIDOS
(
   ID_CARRITO           int not null  comment '',
   ID_PEDIDOS           int(100) not null auto_increment  comment '',
   ID_USUARIO           int  comment '',
   LOCALIDAD_PEDIDO     char(100)  comment '',
   FECHA_HORA_PEDIDO    datetime  comment '',
   primary key (ID_PEDIDOS)
);

/*==============================================================*/
/* Table: PRODUCTO                                              */
/*==============================================================*/
create table PRODUCTO
(
   ID_CARRITO           int not null  comment '',
   ID_PEDIDOS           int not null  comment '',
   ID_PRODUCTO          int(50) not null auto_increment  comment '',
   ID_CATEGORIA         int  comment '',
   NOMBRE_PRODUCTO      char(100)  comment '',
   DESCRIPCION_PRODUCTO text  comment '',
   PRECIO_PRODUCTO      int  comment '',
   OFERTA_PRODUCTO      bool  comment '',
   FECHA_CREACION_PRODUCTO date  comment '',
   IMAGEN_PRODUCTO      text  comment '',
   ESTADO_PRODUCTO      bool  comment '',
   primary key (ID_PRODUCTO)
);

/*==============================================================*/
/* Table: USUARIO                                               */
/*==============================================================*/
create table USUARIO
(
   ID_USUARIO           int(50) not null auto_increment  comment '',
   NOMBRE_USUARIO       char(100)  comment '',
   APELLIDO_USUARIO     char(100)  comment '',
   EMAIL_USUARIO        char(100)  comment '',
   PASSWORD_USUARIO     char(100)  comment '',
   ROL_USUARIO          char(50)  comment '',
   IMAGEN_USUARIO       text  comment '',
   ESTADO_USUARIO       bool  comment '',
   primary key (ID_USUARIO)
);

alter table PEDIDOS add constraint FK_PEDIDOS_RELATIONS_USUARIO foreign key (ID_USUARIO)
      references USUARIO (ID_USUARIO) on delete restrict on update restrict;

alter table PEDIDOS add constraint FK_PEDIDOS_RELATIONS_CARRITO foreign key (ID_CARRITO)
      references CARRITO (ID_CARRITO) on delete restrict on update restrict;

alter table PRODUCTO add constraint FK_PRODUCTO_RELATIONS_CATEGORI foreign key (ID_CATEGORIA)
      references CATEGORIA (ID_CATEGORIA) on delete restrict on update restrict;

alter table PRODUCTO add constraint FK_PRODUCTO_RELATIONS_PEDIDOS foreign key (ID_PEDIDOS)
      references PEDIDOS (ID_PEDIDOS) on delete restrict on update restrict;


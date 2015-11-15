<<<<<<< HEAD
CREATE TABLE `compra` (
`id_compra` int(11) NOT NULL,
`id_proveedor` int(11) NULL DEFAULT NULL,
`id_usuario` int(11) NULL DEFAULT NULL,
`total_compra` float NULL DEFAULT NULL,
`fecha_compra` date NULL DEFAULT NULL,
`observaciones` varchar(255) CHARACTER SET latin1 NULL DEFAULT NULL,
PRIMARY KEY (`id_compra`) ,
INDEX `FK_compra_proveedor` (`id_proveedor`),
INDEX `FK_compra_usuario` (`id_usuario`)
);

CREATE TABLE `detalle_compra` (
`id_detalle` int(11) NOT NULL,
`id_compra` int(11) NULL DEFAULT NULL,
`id_producto` int(11) NULL DEFAULT NULL,
`valor_unidad` float NULL DEFAULT NULL,
`cantidad` int(11) NULL DEFAULT NULL,
`valor_total` float NULL DEFAULT NULL,
PRIMARY KEY (`id_detalle`) ,
INDEX `FK_detalle_compra` (`id_compra`),
INDEX `FK_detalle_producto` (`id_producto`)
);

CREATE TABLE `producto` (
`id_producto` int(11) NOT NULL,
`nombre_producto` varchar(50) CHARACTER SET latin1 NOT NULL,
`stock` int(11) NULL DEFAULT NULL,
`costo_actual` float NULL DEFAULT NULL,
`precio` float NULL DEFAULT NULL,
`presentacion` varchar(50) CHARACTER SET latin1 NULL DEFAULT NULL,
PRIMARY KEY (`id_producto`) 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `proveedor` (
`id_proveedor` int(11) NOT NULL,
`nombre_proveedor` varchar(50) CHARACTER SET latin1 NULL DEFAULT NULL,
`empresa_proveedor` varchar(50) CHARACTER SET latin1 NULL DEFAULT NULL,
`telefono` varchar(30) CHARACTER SET latin1 NULL DEFAULT NULL,
`email` varchar(60) CHARACTER SET latin1 NULL DEFAULT NULL,
PRIMARY KEY (`id_proveedor`) 
);

CREATE TABLE `publicacion` (
`id_publicacion` int(11) NOT NULL DEFAULT 0,
`nombre_publicacion` varchar(50) CHARACTER SET latin1 NULL DEFAULT NULL,
`titulo_publicacion` varchar(255) CHARACTER SET latin1 NULL DEFAULT NULL,
`descripcion_publicacion` varchar(255) CHARACTER SET latin1 NULL DEFAULT NULL,
`id_producto` int(11) NULL DEFAULT NULL,
`precio_publicacion` varchar(255) CHARACTER SET latin1 NULL DEFAULT NULL,
`imagen` varchar(100) CHARACTER SET latin1 NULL DEFAULT NULL,
PRIMARY KEY (`id_publicacion`) 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `usuario` (
`id_usuario` int(11) NOT NULL,
`nombre_usuario` varchar(50) CHARACTER SET latin1 NOT NULL,
`username_usuario` varchar(50) CHARACTER SET latin1 NOT NULL,
`clave_usuario` varchar(50) CHARACTER SET latin1 NOT NULL,
`email_usuario` varchar(50) CHARACTER SET latin1 NULL DEFAULT NULL,
`nombre_tienda` varchar(255) CHARACTER SET latin1 NULL DEFAULT NULL,
`informacion_tienda` varchar(255) CHARACTER SET latin1 NULL DEFAULT NULL,
`tipo_usuario` int(11) NULL DEFAULT NULL,
PRIMARY KEY (`id_usuario`) 
);


ALTER TABLE `compra` ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
ALTER TABLE `compra` ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`);
ALTER TABLE `detalle_compra` ADD CONSTRAINT `detalle_compra_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);
ALTER TABLE `detalle_compra` ADD CONSTRAINT `detalle_compra_ibfk_1` FOREIGN KEY (`id_compra`) REFERENCES `compra` (`id_compra`);
ALTER TABLE `publicacion` ADD CONSTRAINT `fk_publicacion_producto_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

=======
CREATE TABLE `compra` (`id_compra` int(11) NOT NULL,`id_proveedor` int(11) NULL DEFAULT NULL,`id_usuario` int(11) NULL DEFAULT NULL,`total_compra` float NULL DEFAULT NULL,`fecha_compra` date NULL DEFAULT NULL,`observaciones` varchar(255) CHARACTER SET latin1 NULL DEFAULT NULL,PRIMARY KEY (`id_compra`) ,INDEX `FK_compra_proveedor` (`id_proveedor`),INDEX `FK_compra_usuario` (`id_usuario`))ENGINE=InnoDB;CREATE TABLE `detalle_compra` (`id_detalle` int(11) NOT NULL,`id_compra` int(11) NULL DEFAULT NULL,`id_producto` int(11) NULL DEFAULT NULL,`valor_unidad` float NULL DEFAULT NULL,`cantidad` int(11) NULL DEFAULT NULL,`valor_total` float NULL DEFAULT NULL,PRIMARY KEY (`id_detalle`) ,INDEX `FK_detalle_compra` (`id_compra`),INDEX `FK_detalle_producto` (`id_producto`))ENGINE=InnoDB;CREATE TABLE `producto` (`id_producto` int(11) NOT NULL,`nombre_producto` varchar(50) CHARACTER SET latin1 NOT NULL,`stock` int(11) NULL DEFAULT NULL,`costo_actual` float NULL DEFAULT NULL,`precio` float NULL DEFAULT NULL,`presentacion` varchar(50) CHARACTER SET latin1 NULL DEFAULT NULL,PRIMARY KEY (`id_producto`) )ENGINE=InnoDB;CREATE TABLE `proveedor` (`id_proveedor` int(11) NOT NULL,`nombre_proveedor` varchar(50) CHARACTER SET latin1 NULL DEFAULT NULL,`empresa_proveedor` varchar(50) CHARACTER SET latin1 NULL DEFAULT NULL,`telefono` varchar(30) CHARACTER SET latin1 NULL DEFAULT NULL,`email` varchar(60) CHARACTER SET latin1 NULL DEFAULT NULL,PRIMARY KEY (`id_proveedor`) )ENGINE=InnoDB;CREATE TABLE `usuario` (`id_usuario` int(11) NOT NULL,`nombre_usuario` varchar(50) CHARACTER SET latin1 NOT NULL,`username_usuario` varchar(50) CHARACTER SET latin1 NOT NULL,`clave_usuario` varchar(50) CHARACTER SET latin1 NOT NULL,`email_usuario` varchar(50) CHARACTER SET latin1 NULL DEFAULT NULL,`nombre_tienda` varchar(255) CHARACTER SET latin1 NULL DEFAULT NULL,`informacion_tienda` varchar(255) CHARACTER SET latin1 NULL DEFAULT NULL,`tipo_usuario` int(11) NULL DEFAULT NULL,PRIMARY KEY (`id_usuario`) )ENGINE=InnoDBDEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci;CREATE TABLE `publicacion` (`id_publicacion` int NULL,`nombre_publicacion` varchar(50) NULL,`titulo_publicacion` varchar(255) NULL,`descripcion_publicacion` text NULL,`id_producto` int NULL,`precio_publicacion` varchar(255) NULL,`imagen` varchar(100) NULL,PRIMARY key (id_publicacion))ENGINE=InnoDB;ALTER TABLE `compra` ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`);ALTER TABLE `compra` ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);ALTER TABLE `detalle_compra` ADD CONSTRAINT `detalle_compra_ibfk_1` FOREIGN KEY (`id_compra`) REFERENCES `compra` (`id_compra`);ALTER TABLE `detalle_compra` ADD CONSTRAINT `detalle_compra_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);ALTER TABLE `producto` ADD CONSTRAINT `fk_producto_publicacion_1` FOREIGN KEY (`id_producto`) REFERENCES `publicacion` (`id_producto`);ALTER TABLE `publicacion` ADD CONSTRAINT `fk_producto_publi` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE RESTRICT ON UPDATE RESTRICT;
>>>>>>> 88ac25eaf56a344cc4ce36d6dcd5ce7b6669ac07

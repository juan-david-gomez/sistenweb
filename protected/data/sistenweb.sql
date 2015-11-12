/*
Navicat MySQL Data Transfer

Source Server         : LocalHost
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : sistenweb

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2015-06-02 00:18:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for compra
-- ----------------------------
DROP TABLE IF EXISTS `compra`;
CREATE TABLE `compra` (
`id_compra`  int(11) NOT NULL AUTO_INCREMENT ,
`id_proveedor`  int(11) NULL DEFAULT NULL ,
`id_usuario`  int(11) NULL DEFAULT NULL ,
`total_compra`  float NULL DEFAULT NULL ,
`fecha_compra`  date NULL DEFAULT NULL ,
`observaciones`  text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL ,
PRIMARY KEY (`id_compra`),
FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE RESTRICT ON UPDATE RESTRICT,
FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE RESTRICT ON UPDATE RESTRICT,
INDEX `FK_compra_proveedor` (`id_proveedor`) USING BTREE ,
INDEX `FK_compra_usuario` (`id_usuario`) USING BTREE 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=7

;

-- ----------------------------
-- Records of compra
-- ----------------------------
BEGIN;
INSERT INTO `compra` VALUES ('1', '1', '1', '10000', '0000-00-00', 'as'), ('2', '1', '1', '123112', '0000-00-00', null), ('3', '1', '2', null, '0000-00-00', null), ('4', '1', '2', null, null, null), ('5', '1', '1', null, null, null), ('6', '1', '1', null, null, null);
COMMIT;

-- ----------------------------
-- Table structure for detalle_compra
-- ----------------------------
DROP TABLE IF EXISTS `detalle_compra`;
CREATE TABLE `detalle_compra` (
`id_detalle`  int(11) NOT NULL AUTO_INCREMENT ,
`id_compra`  int(11) NULL DEFAULT NULL ,
`id_producto`  int(11) NULL DEFAULT NULL ,
`valor_unidad`  float NULL DEFAULT NULL ,
`cantidad`  int(11) NULL DEFAULT NULL ,
`valor_total`  float NULL DEFAULT NULL ,
PRIMARY KEY (`id_detalle`),
FOREIGN KEY (`id_compra`) REFERENCES `compra` (`id_compra`) ON DELETE RESTRICT ON UPDATE RESTRICT,
FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE RESTRICT ON UPDATE RESTRICT,
INDEX `FK_detalle_compra` (`id_compra`) USING BTREE ,
INDEX `FK_detalle_producto` (`id_producto`) USING BTREE 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=16

;

-- ----------------------------
-- Records of detalle_compra
-- ----------------------------
BEGIN;
INSERT INTO `detalle_compra` VALUES ('8', '1', '1', '100000000000', '2', null), ('9', '1', '1', '233', '1', null), ('10', '1', '1', '8000', '97', null), ('11', '3', '1', '2000', '23324', '333'), ('12', '3', '3', '10000', '100', '100000'), ('13', '4', null, null, null, null), ('14', '6', '1', '34567', '1000', '34567'), ('15', '6', '3', '34657', '12399', '234');
COMMIT;

-- ----------------------------
-- Table structure for producto
-- ----------------------------
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
`id_producto`  int(11) NOT NULL AUTO_INCREMENT ,
`nombre_producto`  varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`stock`  int(11) NULL DEFAULT NULL ,
`costo_actual`  float NULL DEFAULT NULL ,
`precio`  float NULL DEFAULT NULL ,
`presentacion`  varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
PRIMARY KEY (`id_producto`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=6

;

-- ----------------------------
-- Records of producto
-- ----------------------------
BEGIN;
INSERT INTO `producto` VALUES ('1', 'Prueba', '24424', '34567', null, null), ('2', 'Prueba 2', null, '1222', null, null), ('3', 'Producto de Arroyave', null, '34657', null, null), ('4', '', null, null, null, null), ('5', 'drfv', null, null, null, null);
COMMIT;

-- ----------------------------
-- Table structure for proveedor
-- ----------------------------
DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE `proveedor` (
`id_proveedor`  int(11) NOT NULL AUTO_INCREMENT ,
`nombre_proveedor`  varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`empresa_proveedor`  varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`telefono`  varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`email`  varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
PRIMARY KEY (`id_proveedor`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=7

;

-- ----------------------------
-- Records of proveedor
-- ----------------------------
BEGIN;
INSERT INTO `proveedor` VALUES ('1', 'Arroyave', 'Arroyaves Company', null, null), ('4', 'Nombre', 'empresa', 'telefono', 'emaiñ'), ('5', 'Jhon', 'Empresa Privee', '2332', 'email'), ('6', 'Proveedor de prueba', 'Empresa de prueba', '23456789', 'email@rmail.com');
COMMIT;

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
`id_usuario`  int(11) NOT NULL AUTO_INCREMENT ,
`nombre_usuario`  varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`username_usuario`  varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`clave_usuario`  varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`email_usuario`  varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`nombre_tienda`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`informacion_tienda`  text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL ,
PRIMARY KEY (`id_usuario`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=3

;

-- ----------------------------
-- Records of usuario
-- ----------------------------
BEGIN;
INSERT INTO `usuario` VALUES ('1', 'juan', 'admin', 'admin', 'email@emaiol.com', 'Tienda 1', 'Informacion de la tienda Informacion de la tiendaInformacion de la tiendaInformacion de la tiendaInformacion de la tiendaInformacion de la tiendaInformacion de la tiendaInformacion de la tiendaInformacion de la tiendaInformacion de la tiendaInformacion de la tiendaInformacion de la tiendaInformacion de la tienda'), ('2', 'Prueba', 'demo', 'demo', 'Preuba', 'Tienda Nueva', 'Hola esta es la informqcion de la tienda\r\nTelefono 45723\'023');
COMMIT;

-- ----------------------------
-- Auto increment value for compra
-- ----------------------------
ALTER TABLE `compra` AUTO_INCREMENT=7;
DROP TRIGGER IF EXISTS `tr_detalle`;
DELIMITER ;;
CREATE TRIGGER `tr_detalle` AFTER INSERT ON `detalle_compra` FOR EACH ROW update producto set costo_actual = NEW.valor_unidad , stock = (NEW.cantidad + stock) where id_producto = NEW.id_producto
;;
DELIMITER ;

-- ----------------------------
-- Auto increment value for detalle_compra
-- ----------------------------
ALTER TABLE `detalle_compra` AUTO_INCREMENT=16;

-- ----------------------------
-- Auto increment value for producto
-- ----------------------------
ALTER TABLE `producto` AUTO_INCREMENT=6;

-- ----------------------------
-- Auto increment value for proveedor
-- ----------------------------
ALTER TABLE `proveedor` AUTO_INCREMENT=7;

-- ----------------------------
-- Auto increment value for usuario
-- ----------------------------
ALTER TABLE `usuario` AUTO_INCREMENT=3;

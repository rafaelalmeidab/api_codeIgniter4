/*
 Navicat Premium Data Transfer

 Source Server         : localhost2
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : codeigniter4_api

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 05/07/2023 16:47:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for produtos
-- ----------------------------
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos`  (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `VALOR` double NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of produtos
-- ----------------------------
INSERT INTO `produtos` VALUES (1, 'Notebook Acer Nitro 5', 4500);
INSERT INTO `produtos` VALUES (2, 'Celular Samsung S20', 1500);
INSERT INTO `produtos` VALUES (3, 'Mouse C3 Tech', 50);
INSERT INTO `produtos` VALUES (4, 'Teclado T-Dagger Bora', 200);
INSERT INTO `produtos` VALUES (5, 'Acer Aspire 3', 3500);

SET FOREIGN_KEY_CHECKS = 1;

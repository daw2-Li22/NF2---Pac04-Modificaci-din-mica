/*
 Navicat Premium Data Transfer

 Source Server         : 11
 Source Server Type    : PostgreSQL
 Source Server Version : 100020
 Source Host           : localhost:5432
 Source Catalog        : foods
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 100020
 File Encoding         : 65001

 Date: 04/05/2022 20:42:33
*/


-- ----------------------------
-- Table structure for word
-- ----------------------------
DROP TABLE IF EXISTS "public"."word";
CREATE TABLE "public"."word" (
  "id" int4 NOT NULL,
  "word" varchar(255) COLLATE "pg_catalog"."default",
  "total" varchar(255) COLLATE "pg_catalog"."default",
    ultimavisita timestamp
);

-- ----------------------------
-- Records of word
-- ----------------------------
INSERT INTO "public"."word" VALUES (1, 'a', '4', '1651538017');
INSERT INTO "public"."word" VALUES (3, 'bb', '2', '1651538348');
INSERT INTO "public"."word" VALUES (2, 'b', '3', '1651538333');
INSERT INTO "public"."word" VALUES (4, '', '2', '1651538709');
INSERT INTO "public"."word" VALUES (6, '333', '9', '1651539140');
INSERT INTO "public"."word" VALUES (7, '3333', '4', '1651539310');
INSERT INTO "public"."word" VALUES (8, '33333', '3', '1651539328');
INSERT INTO "public"."word" VALUES (9, '333333', '4', '1651539331');
INSERT INTO "public"."word" VALUES (10, '3332', '2', '1651539364');
INSERT INTO "public"."word" VALUES (5, '231', '2', '1651538755');
INSERT INTO "public"."word" VALUES (11, '44', '3', '1651539452');
INSERT INTO "public"."word" VALUES (12, '4432', '2', '1651539460');

-- ----------------------------
-- Primary Key structure for table word
-- ----------------------------
ALTER TABLE "public"."word" ADD CONSTRAINT "word_pkey" PRIMARY KEY ("id");

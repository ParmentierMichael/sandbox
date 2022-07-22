#                          M@gistère 

#       Documentation des statistiques de la plateforme de pilotage 

#                          10/06/2022



# Sommaire
- [M@gistère](#mgistère)
- [Documentation des statistiques de la plateforme de pilotage](#documentation-des-statistiques-de-la-plateforme-de-pilotage)
- [10/06/2022](#10062022)
- [Sommaire](#sommaire)
- [Introduction](#introduction)
- [Vue globale - Répartition des formations par domaines](#vue-globale---répartition-des-formations-par-domaines)
	- [Description](#description)
	- [Vues](#vues)
	- [Récupération d'information](#récupération-dinformation)
		- [Tables](#tables)
		- [Requête SQL](#requête-sql)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire)
- [Vue globale - Répartition des formations par origines](#vue-globale---répartition-des-formations-par-origines)
	- [Description](#description-1)
	- [Vues](#vues-1)
	- [Récupération d'information](#récupération-dinformation-1)
		- [Tables](#tables-1)
		- [Requête SQL](#requête-sql-1)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-1)
- [Vue globale - Evolution de l'offre de formation](#vue-globale---evolution-de-loffre-de-formation)
	- [Description](#description-2)
	- [Vues](#vues-2)
	- [Récupération d'information](#récupération-dinformation-2)
		- [Tables](#tables-2)
		- [Requête SQL](#requête-sql-2)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-2)
- [Vue globale - Nouvelles formations publiées durant l'année en cours (à partir du 1er septembre)](#vue-globale---nouvelles-formations-publiées-durant-lannée-en-cours-à-partir-du-1er-septembre)
	- [Description](#description-3)
	- [Vues](#vues-3)
	- [Récupération d'information](#récupération-dinformation-3)
		- [Tables](#tables-3)
		- [Requête SQL](#requête-sql-3)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-3)
- [Vue globale - Formations publiées, modifiées durant l'année scolaire en cours (à partir du 1er septembre)](#vue-globale---formations-publiées-modifiées-durant-lannée-scolaire-en-cours-à-partir-du-1er-septembre)
	- [Description](#description-4)
	- [Vues](#vues-4)
	- [Récupération d'information](#récupération-dinformation-4)
		- [Tables](#tables-4)
		- [Requête SQL](#requête-sql-4)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-4)
- [Vue globale \- Formations publiées au total](#vue-globale---formations-publiées-au-total)
	- [Description](#description-5)
	- [Vues](#vues-5)
	- [Récupération d'information](#récupération-dinformation-5)
		- [Tables](#tables-5)
		- [Requête SQL](#requête-sql-5)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-5)
- [Statistiques de l'offre - engagement des formés](#statistiques-de-loffre---engagement-des-formés)
	- [Description](#description-6)
	- [Vues](#vues-6)
	- [Récupération d'information](#récupération-dinformation-6)
		- [Tables](#tables-6)
		- [Requête SQL](#requête-sql-6)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-6)
- [Statistiques de l'offre - performance des offres](#statistiques-de-loffre---performance-des-offres)
	- [Description](#description-7)
	- [Vues](#vues-7)
	- [Récupération d'information](#récupération-dinformation-7)
		- [Tables](#tables-7)
		- [Requête SQL](#requête-sql-7)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-7)
- [Vue globale - Export CSV - Nom du parcours](#vue-globale---export-csv---nom-du-parcours)
	- [Description](#description-8)
	- [Vues](#vues-8)
	- [Récupération d'information](#récupération-dinformation-8)
		- [Tables](#tables-8)
		- [Requête SQL](#requête-sql-8)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-8)
- [Vue globale - Export CSV - Date de création](#vue-globale---export-csv---date-de-création)
	- [Description](#description-9)
	- [Vues](#vues-9)
	- [Récupération d'information](#récupération-dinformation-9)
		- [Tables](#tables-9)
		- [Requête SQL](#requête-sql-9)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-9)
- [Vue globale - Export CSV - Date de première publication](#vue-globale---export-csv---date-de-première-publication)
	- [Description](#description-10)
	- [Vues](#vues-10)
	- [Récupération d'information](#récupération-dinformation-10)
		- [Tables](#tables-10)
		- [Requête SQL](#requête-sql-10)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-10)
- [Vue globale - Export CSV - Date de dernière publication](#vue-globale---export-csv---date-de-dernière-publication)
	- [Description](#description-11)
	- [Vues](#vues-11)
	- [Récupération d'information](#récupération-dinformation-11)
		- [Tables](#tables-11)
		- [Requête SQL](#requête-sql-11)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-11)
- [Vue globale - Export CSV - Durée de la formation](#vue-globale---export-csv---durée-de-la-formation)
	- [Description](#description-12)
	- [Vues](#vues-12)
	- [Récupération d'information](#récupération-dinformation-12)
		- [Tables](#tables-12)
		- [Requête SQL](#requête-sql-12)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-12)
- [Vue globale - Export CSV - Temps en présentiel](#vue-globale---export-csv---temps-en-présentiel)
	- [Description](#description-13)
	- [Vues](#vues-13)
	- [Récupération d'information](#récupération-dinformation-13)
		- [Tables](#tables-13)
		- [Requête SQL](#requête-sql-13)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-13)
- [Vue globale - Export CSV - Temps à distance](#vue-globale---export-csv---temps-à-distance)
	- [Description](#description-14)
	- [Vues](#vues-14)
	- [Récupération d'information](#récupération-dinformation-14)
		- [Tables](#tables-14)
		- [Requête SQL](#requête-sql-14)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-14)
- [Vue globale - Export CSV - Déroulé de la formation](#vue-globale---export-csv---déroulé-de-la-formation)
	- [Description](#description-15)
	- [Vues](#vues-15)
	- [Récupération d'information](#récupération-dinformation-15)
		- [Tables](#tables-15)
		- [Requête SQL](#requête-sql-15)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-15)
- [Vue globale - Export CSV - Modalités d'accès à la formation](#vue-globale---export-csv---modalités-daccès-à-la-formation)
	- [Description](#description-16)
	- [Vues](#vues-16)
	- [Récupération d'information](#récupération-dinformation-16)
		- [Tables](#tables-16)
		- [Requête SQL](#requête-sql-16)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-16)
	- [Description](#description-17)
	- [Vues](#vues-17)
	- [Récupération d'information](#récupération-dinformation-17)
		- [Tables](#tables-17)
		- [Requête SQL](#requête-sql-17)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-17)
- [Vue globale - Répartition des formations par domaines](#vue-globale---répartition-des-formations-par-domaines-1)
	- [Description](#description-18)
	- [Vues](#vues-18)
	- [Récupération d'information](#récupération-dinformation-18)
		- [Tables](#tables-18)
		- [Requête SQL](#requête-sql-18)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-18)
- [Vue globale - Export CSV - Origine](#vue-globale---export-csv---origine)
	- [Description](#description-19)
	- [Vues](#vues-19)
	- [Récupération d'information](#récupération-dinformation-19)
		- [Tables](#tables-19)
		- [Requête SQL](#requête-sql-19)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-19)
- [Vue globale - Export CSV - Public cible](#vue-globale---export-csv---public-cible)
	- [Description](#description-20)
	- [Vues](#vues-20)
	- [Récupération d'information](#récupération-dinformation-20)
		- [Tables](#tables-20)
		- [Requête SQL](#requête-sql-20)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-20)
- [Vue globale - Export CSV - Mots clés](#vue-globale---export-csv---mots-clés)
	- [Description](#description-21)
	- [Vues](#vues-21)
	- [Récupération d'information](#récupération-dinformation-21)
		- [Tables](#tables-21)
		- [Requête SQL](#requête-sql-21)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-21)
- [Vue globale - Export CSV - Achèvement global activé](#vue-globale---export-csv---achèvement-global-activé)
	- [Description](#description-22)
	- [Vues](#vues-22)
	- [Récupération d'information](#récupération-dinformation-22)
		- [Tables](#tables-22)
		- [Requête SQL](#requête-sql-22)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-22)
- [Vue globale - Export CSV - Achèvement global](#vue-globale---export-csv---achèvement-global)
	- [Description](#description-23)
	- [Vues](#vues-23)
	- [Récupération d'information](#récupération-dinformation-23)
		- [Tables](#tables-23)
		- [Requête SQL](#requête-sql-23)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-23)
- [Vue globale - Export CSV - Activités](#vue-globale---export-csv---activités)
	- [Description](#description-24)
	- [Vues](#vues-24)
	- [Récupération d'information](#récupération-dinformation-24)
		- [Tables](#tables-24)
		- [Requête SQL](#requête-sql-24)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-24)
- [Vue globale - Export CSV - Activités interactives](#vue-globale---export-csv---activités-interactives)
	- [Description](#description-25)
	- [Vues](#vues-25)
	- [Récupération d'information](#récupération-dinformation-25)
		- [Tables](#tables-25)
		- [Requête SQL](#requête-sql-25)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-25)
- [Vue globale - Export CSV - Activités participatives](#vue-globale---export-csv---activités-participatives)
	- [Description](#description-26)
	- [Vues](#vues-26)
	- [Récupération d'information](#récupération-dinformation-26)
		- [Tables](#tables-26)
		- [Requête SQL](#requête-sql-26)
		- [Consolidation/calcul supplémentaire](#consolidationcalcul-supplémentaire-26)
- [Annexe 1 - Requête complète de récupération des parcours de l’offre de formation](#annexe-1---requête-complète-de-récupération-des-parcours-de-loffre-de-formation)
- [Annexe 2 - Requête complète de récupération des informations de chaque parcours de l’offre de formation sur son instance](#annexe-2---requête-complète-de-récupération-des-informations-de-chaque-parcours-de-loffre-de-formation-sur-son-instance)




<div style="page-break-after: always;"></div>

# Introduction

Ce document établit une liste des données présentes sur la partie statistique de la plateforme de pilotage de M@gistère. 
Pour chaque donnée on présente : 

* l'identité de la donnée 
* les vues ou elle est utilisée 
* les tables de M@gistère permettant de récupérer/construire cette requête et les instances sur lesquelles se trouvent ces tables 
* les requêtes SQL utilisées pour la récupération de ces données 
* les calculs/requêtes utilisés pour afficher ces données

L'annexe 1 contient la requête complète de récupération des parcours de l'offre de formation. 

L'annexe 2 contient la requête complète de récupération des informations de chaque parcours de l'offre de formation sur son instance

<div style="page-break-after: always;"></div>

# Vue globale - Répartition des formations par domaines 



## Description 

Répartition des formations en libre accès selon le domaine renseigné dans l'indexation. 



## Vues

* Vue globale des formations en libre accès 



## Récupération d'information

### Tables

Sur la base de données de dgesco : 

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

Sur la base centralisée 

* local_indexation_domains



### Requête SQL

La requête exécutée uniquement sur dgesco 

```sql
SELECT 	
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	[...]
	IFNULL((SELECT lid.name FROM [[[DB_CENTRAL]]].local_indexation_domains lid
WHERE id = lci.domainid),'') AS 'domaines',
	[...]
FROM {local_coursehub_course} lcc
	INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
	INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
	WHERE lcc.deleted = 0
	AND lcc.publish = 0AND lcc.isalocalsession = 0
```

### Consolidation/calcul supplémentaire 

Requête utilisée pour l’affichage du graphique et se basant sur les données récupérées précédemment.

``` sql
SELECT 
	offer.domaines as domaine, 
    COUNT(offer.id) as nbcourses 
FROM {centraladmindata_offer} offer 
INNER JOIN {centraladmin_slave} slave ON offer.slaveid = slave.id
WHERE slave.disabled = 0 AND slave.deleted = 0
GROUP BY domaines
```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage” (pour déterminer quelles instances lui sont accessibles).

<div style="page-break-after: always;"></div>

# Vue globale - Répartition des formations par origines



## Description 

Répartition des formations en libre accès selon l’instance d’origine de la formation.



## Vues

* Vue globale des formations en libre accès 



## Récupération d'information

### Tables

Sur la base de données de dgesco : 

* local_coursehub_course 
* local_coursehub_index 
* local_coursehub_slave 
* t_academie 
* t_origine_espe

### Requête SQL

La requête est exécutée uniquement sur dgesco.

```sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	[...]
	UPPER(IF(lci.origin != 'espe' AND lci.origin != 'academie',lci.origin,IF(lci.origin = 'academie',(SELECT ta.libelle FROM {t_academie} ta WHERE ta.id = lci.academyid),(SELECT toe.name FROM {t_origine_espe} toe WHERE toe.id = lci.originespeid)))) AS 'origine',
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0
```



### Consolidation/calcul supplémentaire 

```sql
SELECT 
	slave.name as origine, 
	COUNT(offer.id) as nbcourses
FROM {centraladmindata_offer} offer
INNER JOIN {centraladmin_slave} slave ON offer.slaveid = slave.id
WHERE slave.disabled = 0 AND slave.deleted = 0
GROUP BY origine ORDER BY nbcourses DESC
```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage” (pour déterminer quelles instances lui sont accessibles).

<div style="page-break-after: always;"></div>

---

# Vue globale - Evolution de l'offre de formation



## Description 

Nombre de formations créées et nombre de formations mises à jour selon les années.



## Vues

* Vue globale des formations en libre accès



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave



### Requête SQL

La requête est exécutée uniquement sur dgesco.

``` sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
    lcc.timemodified AS 'lastpublish',
	lcc.timecreated AS 'firstpublish',
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0
```



### Consolidation/calcul supplémentaire 

Requête utilisée pour l’affichage du graphique et se basant sur les données récupérées précédemment.

```SQL
SELECT 
	offer.firstpublish, 
	offer.lastpublish
FROM {centraladmindata_offer} offer
INNER JOIN {centraladmin_slave} slave ON offer.slaveid = slave.id
WHERE slave.disabled = 0 AND slave.deleted = 0
```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage” (pour déterminer quelles instances lui sont accessibles). Un calcul est ensuite fait pour regrouper les formations créées et modifiées par année afin de pouvoir les afficher dans le graphique.



<div style="page-break-after: always;"></div>

---

# Vue globale - Nouvelles formations publiées durant l'année en cours (à partir du 1er septembre)





## Description 

Nombre de formations publiées durant l'année en cours.



## Vues

* Vue globale des formations en libre accès (partie des tuiles)



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

### Requête SQL

La requête est exécutée uniquement sur dgesco.

``` sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	lcc.timemodified AS 'lastpublish',
	lcc.timecreated AS 'firstpublish',
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0
```



### Consolidation/calcul supplémentaire 

La requête pour afficher la valeur de la tuile est la suivante :

```SQL
SELECT 
	count(co.id) 
FROM {centraladmindata_offer} co 
INNER JOIN{centraladmin_slave} cs ON co.slaveid = cs.id WHERE cs.disabled = 0 AND cs.deleted = 0 
AND firstpublish > [YEARSTARTDATE]) as nb_firstpublish
```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage” (pour déterminer quelles instances lui sont accessibles). Le paramètre [YEARSTARTDATE] est le début de l’année en cours (le 1er septembre).



<div style="page-break-after: always;"></div>

---

# Vue globale - Formations publiées, modifiées durant l'année scolaire en cours (à partir du 1er septembre)



## Description 

Nombre de formations publiées et/ou modifiées durant l'année en cours.



## Vues

*  Vue globale des formations en libre accès (partie des tuiles)



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

### Requête SQL

La requête est exécutée uniquement sur dgesco.

``` sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	lcc.timemodified AS 'lastpublish',
	lcc.timecreated AS 'firstpublish',
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0
```



### Consolidation/calcul supplémentaire 

Requête utilisée pour l’affichage du graphique et se basant sur les données récupérées précédemment.

```SQL
SELECT 
	count(co.id) 
FROM {centraladmindata_offer} co
INNER JOIN {centraladmin_slave} cs ON co.slaveid = cs.id WHERE cs.disabled = 0 AND cs.deleted = 0 
AND lastpublish > [YEARSTARTDATE]

```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage”. Le paramètre [YEARSTARTDATE] est le début de l’année en cours (le 1er septembre).



<div style="page-break-after: always;"></div>

---

# Vue globale \- Formations publiées au total 



## Description 

Nombre de formations publiées.



## Vues

* Vue globale des formations en libre accès



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

### Requête SQL

La requête est exécutée uniquement sur dgesco.

``` sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	lcc.timemodified AS 'lastpublish',
    lcc.timecreated AS 'firstpublish',
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0

```



### Consolidation/calcul supplémentaire 

Requête utilisée pour l’affichage du graphique et se basant sur les données récupérées précédemment.

```SQL
SELECT 
	offer.firstpublish, 
	offer.lastpublish
FROM {centraladmindata_offer} offer
INNER JOIN mdl_centraladmin_slave cs ON co.slaveid = cs.id WHERE cs.disabled = 0
AND cs.deleted = 0

```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage”.



<div style="page-break-after: always;"></div>

---

# Statistiques de l'offre - engagement des formés



## Description 

Nombre de participants (utilisateur inscrit ou ayant été inscrit avec un rôle équivalent à l’archétype “student” et s’étant connecté au moins une fois au parcours avec le bon rôle) dans les formations en libre accès. Les participants sont regroupés selon leur degré. Nombre d’inscrits (utilisateur actuellement inscrit avec un rôle équivalent à l’archétype “student”). Les inscrits sont regroupés selon leur degré.



## Vues

* Statistiques de l'offre > indicateur “engagement des formés”



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

Sur les instances : 

* centraladmin_agent_dayacces -> table spécifique à M@gistère enregistrer les accès des utilisateurs à un parcours. Les rôles attribués à l’utilisateur, via l’inscription au parcours, sont aussi enregistrés dans cette table.
* role
* user_info_data
* user_info_field
* context
* role_assignments

### Requête SQL

La première requête est exécutée uniquement sur dgesco afin de récupérer les formations de l’offre.

``` sql
SELECT
	lcc.courseid,
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0
```

La seconde requête est exécutée sur les instances pour récupérer les informations de participation à ces formations.

```sql
[...]
(
SELECT COUNT(DISTINCT cad.userid)
FROM {centraladmin_agent_dayacces} cad
INNER JOIN {role} r ON r.id = cad.roleid
INNER JOIN {user_info_data} uidata ON uidata.userid = cad.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cad.courseid = c.id AND r.archetype = 'student' AND uif.shortname = 'degre'
AND uidata.data = 'Premier degré'
) AS 'nbparticipants1d',
(
SELECT COUNT(*) FROM {role_assignments} ra
INNER JOIN {context} cx ON (cx.id = ra.contextid)
INNER JOIN {role} r ON (r.id = ra.roleid)
INNER JOIN {user_info_data} uidata ON uidata.userid = ra.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cx.instanceid = c.id AND cx.contextlevel = 50 AND r.archetype = 'student' AND
uif.shortname = 'degre' AND uidata.data = 'Premier degré'
) AS 'nbstudents1d',
(
SELECT COUNT(DISTINCT cad.userid)
FROM {centraladmin_agent_dayacces} cad
INNER JOIN {role} r ON r.id = cad.roleid
INNER JOIN {user_info_data} uidata ON uidata.userid = cad.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cad.courseid = c.id AND r.archetype = 'student' AND uif.shortname = 'degre'
AND uidata.data = 'Second degré'
) AS 'nbparticipants2d',
(
SELECT COUNT(*) FROM {role_assignments} ra
INNER JOIN {context} cx ON (cx.id = ra.contextid)
INNER JOIN {role} r ON (r.id = ra.roleid)
INNER JOIN {user_info_data} uidata ON uidata.userid = ra.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cx.instanceid = c.id AND cx.contextlevel = 50 AND r.archetype = 'student' AND
uif.shortname = 'degre' AND uidata.data = 'Second degré'
) AS 'nbstudents2d',
(
SELECT COUNT(DISTINCT cad.userid)
FROM {centraladmin_agent_dayacces} cad
INNER JOIN {role} r ON r.id = cad.roleid
LEFT JOIN {user_info_data} uidata ON uidata.userid = cad.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cad.courseid = c.id AND r.archetype = 'student' AND uif.shortname = 'degre'
AND (uidata.data IS NULL OR uidata.data NOT IN ('Premier degré','Second degré'))
) AS 'nbparticipantsndef',
(
SELECT COUNT(*) FROM {role_assignments} ra
INNER JOIN {context} cx ON (cx.id = ra.contextid)
INNER JOIN {role} r ON (r.id = ra.roleid)
LEFT JOIN {user_info_data} uidata ON uidata.userid = ra.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cx.instanceid = c.id AND cx.contextlevel = 50 AND r.archetype = 'student' AND
uif.shortname = 'degre' AND (uidata.data IS NULL OR uidata.data NOT IN ('Premier
degré','Second degré'))
) AS 'nbstudentsndef',
[...]
FROM {course} c
WHERE c.id IN [COURSEIDS]
```



### Consolidation/calcul supplémentaire 

La requête suivante est utilisée pour l’affichage du graphique et se base sur les données récupérées précédemment. Les cours sont d’abord filtrés pour tenir compte des filtres sélectionnés dans l’interface.

```SQL
SELECT
SUM(a.nbparticipants1d) as 'nbparticipants_1d',
SUM(a.nbparticipants2d) as 'nbparticipants_2d',
SUM(a.nbparticipantsndef) as 'nbparticipants_nondefini',
SUM(a.nbstudents1d) as 'nbstudents_1d',
SUM(a.nbstudents2d) as 'nbstudents_2d',
SUM(a.nbstudentsndef) as 'nbstudents_nondefini'
FROM {centraladmindata_attendance} a
INNER JOIN {centraladmindata_offer} offer ON offer.slaveid = a.slaveid AND
offer.courseid = a.courseid
WHERE offer.id IN [COURSEIDS]
```





<div style="page-break-after: always;"></div>

---

# Statistiques de l'offre - performance des offres 



## Description 

Top 20 des formations de l’offre comptabilisant le plus de participants (utilisateur inscrit ou ayant été inscrit avec un rôle possédant l’archétype “student” et s’étant connecté au moins une fois au parcours avec le bon rôle) dans les formations en libre accès



## Vues

* Statistiques de l'offre > indicateur “performance des offres”



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

Sur les instances :

* centraladmin_agent_dayacces -> table spécifique à M@gistère enregistrer les accès des utilisateurs à un parcours. Les rôles attribués à l’utilisateur via l’inscription au parcours sont aussi enregistrés dans cette table.
* role

### Requête SQL

La première requête est exécutée uniquement sur dgesco afin de récupérer les formations de l’offre.

``` sql
SELECT
	lcc.courseid,
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0
```

La seconde requête est exécutée sur les instances pour récupérer les informations de participation à ces formations.

```sql
[...]
(
SELECT COUNT(DISTINCT cad.userid)
FROM {centraladmin_agent_dayacces} cad
INNER JOIN {role} r ON r.id = cad.roleid
WHERE cad.courseid = c.id AND r.archetype = 'student'
) AS 'nbparticipants',
[...]
FROM {course} c
WHERE c.id IN [COURSEIDS]
```



### Consolidation/calcul supplémentaire 

La requête suivante est utilisée pour l’affichage du graphique et se base sur les données récupérées précédemment. Les cours sont d’abord filtrés pour tenir compte des filtres sélectionnés dans l’interface.

```SQL
SELECT 
	offer.publishid, 
    offer.name as coursename, 
    nbparticipants as nbparticipant
FROM {centraladmindata_offer} offer
WHERE id IN COURSEIDS
ORDER BY nbparticipant DESC
LIMIT 20
```

<div style="page-break-after: always;"></div>

---

# Vue globale - Export CSV - Nom du parcours



## Description 

La colonne “Nom” dans l’export CSV de la vue globale.



## Vues

* Export CSV de la Vue globale des formations en libre accès
* Export CSV des statistiques de l’offre



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

### Requête SQL

La requête est exécutée uniquement sur dgesco.

``` sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	[...]
	lcc.name AS 'name',
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0
```



### Consolidation/calcul supplémentaire 

Requête utilisée pour la construction de l’export CSV et se basant sur les données récupérées précédemment.

```SQL
SELECT co.name, [...]
FROM {centraladmindata_offer} co
INNER JOIN mdl_centraladmin_slave cs ON co.slaveid = cs.id
WHERE cs.disabled = 0 AND cs.deleted = 0
ORDER BY lastpublish DESC
```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage”.



<div style="page-break-after: always;"></div>

---

# Vue globale - Export CSV - Date de création



## Description 

La colonne “Date de création” dans l’export CSV.



## Vues

* Export CSV de la Vue globale des formations en libre accès
*  Export CSV des statistiques de l’offre



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

Sur la base de données de l’instance du parcours : 

* course

### Requête SQL

``` sql
SELECT
	lcc.id AS 'publishid',
    lcs.identifiant,
	lcc.courseid,
	[...]
	lcc.timemodified AS 'lastpublish',
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0
```



La deuxième requête est exécutée sur l’instance sur lequel se trouve le parcours.

```sql
SELECT
	c.id AS 'courseid',
    c.timecreated AS 'timecreated',
	[...]
FROM {course} c
WHERE c.id = [COURSEID]
```



### Consolidation/calcul supplémentaire 

Requête utilisée pour la construction de l’export CSV et se basant sur les données récupérées précédemment.

```SQL
SELECT co.timecreated, [...]
FROM {centraladmindata_offer} co
INNER JOIN mdl_centraladmin_slave cs ON co.slaveid = cs.id
WHERE cs.disabled = 0 AND cs.deleted = 0
ORDER BY lastpublish DESC
```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage”.



<div style="page-break-after: always;"></div>

---

# Vue globale - Export CSV - Date de première publication



## Description 

La colonne “Date de première publication” dans l’export CSV



## Vues

* Export CSV de la Vue globale des formations en libre accès
* Export CSV des statistiques de l’offre



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

### Requête SQL

La requête est exécutée uniquement sur dgesco

``` sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	[...]
	lcc.timecreated AS 'firstpublish',
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0

```



### Consolidation/calcul supplémentaire 

Requête utilisée pour la construction de l’export CSV et se basant sur les données récupérées précédemment.

```SQL
SELECT co.firstpublish [...]
FROM {centraladmindata_offer} co
INNER JOIN mdl_centraladmin_slave cs ON co.slaveid = cs.id
WHERE cs.disabled = 0 AND cs.deleted = 0
ORDER BY lastpublish DESC
```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage”.



<div style="page-break-after: always;"></div>

---

# Vue globale - Export CSV - Date de dernière publication





## Description 

La colonne “Date de dernière publication” dans l’export CSV.



## Vues

*  Export CSV de la Vue globale des formations en libre accès
* Export CSV des statistiques de l’offre



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

### Requête SQL

La requête est exécutée uniquement sur dgesco.

``` sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	[...]
	lcc.timemodified AS 'lastpublish',
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0
```



### Consolidation/calcul supplémentaire 

Requête utilisée pour la construction de l’export CSV et se basant sur les données récupérées précédemment.

```SQL
SELECT co.lastpublish, [...]
FROM {centraladmindata_offer} co
INNER JOIN mdl_centraladmin_slave cs ON co.slaveid = cs.id
WHERE cs.disabled = 0 AND cs.deleted = 0
ORDER BY lastpublish DESC
```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage”.



<div style="page-break-after: always;"></div>

# Vue globale - Export CSV - Durée de la formation

## Description 

La colonne “Durée de la formation” dans l’export CSV



## Vues

* Export CSV de la Vue globale des formations en libre accès
*  Export CSV des statistiques de l’offre



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

### Requête SQL

La requête est exécutée uniquement sur dgesco.

``` sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	[...]
	IFNULL(lci.tps_a_distance,0)+IFNULL(lci.tps_en_presence,0) AS 'duration',
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0

```



### Consolidation/calcul supplémentaire 

Requête utilisée pour la construction de l’export CSV et se basant sur les données récupérées précédemment.

```SQL
SELECT co.duration [...]
FROM {centraladmindata_offer} co
INNER JOIN mdl_centraladmin_slave cs ON co.slaveid = cs.id
WHERE cs.disabled = 0 AND cs.deleted = 0
ORDER BY lastpublish DESC
```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage”.

<div style="page-break-after: always;"></div>

# Vue globale - Export CSV - Temps en présentiel 



## Description 

La colonne “Temps en présentiel” dans l’export CSV



## Vues

* Export CSV de la Vue globale des formations en libre accès
*  Export CSV des statistiques de l’offre



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

### Requête SQL

La requête est exécutée uniquement sur dgesco.

``` sql
SELECT
	lcc.id AS 'publishid',
    lcs.identifiant,
	lcc.courseid,
	[...]
	IFNULL(lci.tps_en_presence,0) AS 'durationlocal',
[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0

```



### Consolidation/calcul supplémentaire 

Requête utilisée pour la construction de l’export CSV et se basant sur les données récupérées précédemment.

```SQL
SELECT co.durationlocal [...]
FROM {centraladmindata_offer} co
INNER JOIN mdl_centraladmin_slave cs ON co.slaveid = cs.id
WHERE cs.disabled = 0 AND cs.deleted = 0
ORDER BY lastpublish DESC
```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage”.



<div style="page-break-after: always;"></div>

# Vue globale - Export CSV - Temps à distance



## Description 

La colonne “Temps à distance” dans l’export CSV



## Vues

* Export CSV de la Vue globale des formations en libre accès
*  Export CSV des statistiques de l’offre



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

### Requête SQL

La requête est exécutée uniquement sur dgesco.

``` sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	[...]
	IFNULL(lci.tps_a_distance,0) AS 'durationremote',
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0
```



### Consolidation/calcul supplémentaire 

Requête utilisée pour la construction de l’export CSV et se basant sur les données récupérées précédemment.

```SQL
SELECT co.durationremote [...]
FROM {centraladmindata_offer} co
INNER JOIN mdl_centraladmin_slave cs ON co.slaveid = cs.id
WHERE cs.disabled = 0 AND cs.deleted = 0
ORDER BY lastpublish DESC
```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage”.



<div style="page-break-after: always;"></div>

# Vue globale - Export CSV - Déroulé de la formation



## Description 

La colonne “Date de création” dans l’export CSV.



## Vues

* Export CSV de la Vue globale des formations en libre accès
*  Export CSV des statistiques de l’offre



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

### Requête SQL

La requête est exécutée uniquement sur dgesco.

``` sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	[...]
    IFNULL(lci.tps_en_presence,0) AS 'durationlocal',
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0
```



### Consolidation/calcul supplémentaire 

Requête utilisée pour la construction de l’export CSV et se basant sur les données récupérées précédemment.

```SQL
SELECT co.durationlocal [...]
FROM {centraladmindata_offer} co
INNER JOIN mdl_centraladmin_slave cs ON co.slaveid = cs.id
WHERE cs.disabled = 0 AND cs.deleted = 0
ORDER BY lastpublish DESC
```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage”. Un traitement PHP est fait ensuite pour déterminer la valeur de cette colonne. Si la durée de formation en présentiel est de 0, alors la valeur de la colonne sera “Distanciel” dans le cas contraire sa valeur sera “Hybride”.



<div style="page-break-after: always;"></div>

# Vue globale - Export CSV - Modalités d'accès à la formation



## Description 

La colonne “Modalités d'accès à la formation” dans l’export CSV.



## Vues

* Export CSV de la Vue globale des formations en libre accès 
* Export CSV des statistiques de l’offre



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

Sur la base centralisée 

* local_indexation_domains

Sur la base de données de l'instance du parcours : 

* course
* enrol
* user_enrolments



### Requête SQL

La requête est exécutée uniquement sur dgesco.

``` sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	[...]
	lcc.name AS 'name',
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0

```

La deuxième requête est exécutée sur l’instance sur lequel se trouve le parcours.

```sql
SELECT
c.id AS 'courseid',
(SELECT COUNT(*) FROM {user_enrolments} ue INNER JOIN {enrol} e ON (e.id =
ue.enrolid) WHERE e.courseid = c.id AND e.enrol = 'self' AND e.name LIKE 'GAIA%') AS
'gaiausers'
[...]
FROM {course} c
WHERE c.id = [COURSEID]
```



### Consolidation/calcul supplémentaire 

Requête utilisée pour la construction de l’export CSV et se basant sur les données récupérées précédemment.

```SQL
SELECT co.gaiausers [...]
FROM {centraladmindata_offer} co
INNER JOIN mdl_centraladmin_slave cs ON co.slaveid = cs.id
WHERE cs.disabled = 0 AND cs.deleted = 0
ORDER BY lastpublish DESC
```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage”. 

Un traitement PHP est fait ensuite pour déterminer la valeur de cette colonne. Si le nombre d’utilisateur GAIA du parcours est de 0, alors la valeur de la colonne sera “Prescription” dans le cas contraire sa valeur sera “Autoformation”.



<div style="page-break-after: always;"></div>

#Vue globale - Export CSV - Nombre de participants

## Description 

La colonne “Nombre de participants” dans l’export CSV.



## Vues

* Export CSV de la Vue globale des formations en libre accès
* Export CSV des statistiques de l’offre



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

Sur la base centralisée 

* local_indexation_domains

Sur la base de données de l'instance du parcours : 

* course
* role_assignments
* context
* role

### Requête SQL

La requête est exécutée uniquement sur dgesco.

``` sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0
```



La deuxième requête est exécutée sur l’instance sur lequel se trouve le parcours.

```sql
SELECT
	c.id AS 'courseid',
	(SELECT COUNT(*) FROM {role_assignments} ra
	INNER JOIN {context} cx ON (cx.id = ra.contextid)
	INNER JOIN {role} r ON (r.id = ra.roleid)
	WHERE cx.instanceid = c.id AND cx.contextlevel = 50 AND r.archetype = 'student'
	) AS 'nbstudents',
	[...]
FROM {course} c
WHERE c.id = [COURSEID]
```



### Consolidation/calcul supplémentaire 

Requête utilisée pour la construction de l’export CSV et se basant sur les données récupérées précédemment.

```SQL
SELECT co.nbstudents [...]
FROM {centraladmindata_offer} co
INNER JOIN mdl_centraladmin_slave cs ON co.slaveid = cs.id
WHERE cs.disabled = 0 AND cs.deleted = 0
ORDER BY lastpublish DESC
```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage”.



<div style="page-break-after: always;"></div>

# Vue globale - Répartition des formations par domaines 



## Description 

La colonne “Domaines” dans l’export CSV.



## Vues

* Export CSV de la Vue globale des formations en libre accès
* Export CSV des statistiques de l’offre



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

Sur la base centralisée 

* local_indexation_domains



### Requête SQL

La requête est exécutée uniquement sur dgesco.

``` sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	[...]
	IFNULL((SELECT lid.name FROM [[[DB_CENTRAL]]].local_indexation_domains lid
	WHERE id = lci.domainid),'') AS 'domaines',
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0
```



### Consolidation/calcul supplémentaire 

Requête utilisée pour la construction de l’export CSV et se basant sur les données récupérées précédemment.

```SQL
SELECT co.domaines [...]
FROM {centraladmindata_offer} co
INNER JOIN mdl_centraladmin_slave cs ON co.slaveid = cs.id
WHERE cs.disabled = 0 AND cs.deleted = 0
ORDER BY lastpublish DESC
```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage”.



<div style="page-break-after: always;"></div>

# Vue globale - Export CSV - Origine



## Description 

La colonne “Origine” dans l’export CSV.



## Vues

* Export CSV de la Vue globale des formations en libre accès
* Export CSV des statistiques de l’offre



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave
* t_academie
* t_origine_espe

### Requête SQL

La requête est exécutée uniquement sur dgesco.

``` sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	[...]
	UPPER(IF(lci.origin != 'espe' AND lci.origin != 'academie',lci.origin,IF(lci.origin =
	'academie',(SELECT ta.libelle FROM {t_academie} ta WHERE ta.id =
	lci.academyid),(SELECT toe.name FROM {t_origine_espe} toe WHERE toe.id =
	lci.originespeid)))) AS 'origine',
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0
```



### Consolidation/calcul supplémentaire 

Requête utilisée pour la construction de l’export CSV et se basant sur les données récupérées précédemment.

```SQL
SELECT cs.name as origine [...]
FROM {centraladmindata_offer} co
INNER JOIN mdl_centraladmin_slave cs ON co.slaveid = cs.id
WHERE cs.disabled = 0 AND cs.deleted = 0
ORDER BY lastpublish DESC
```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage”.



<div style="page-break-after: always;"></div>

# Vue globale - Export CSV - Public cible 



## Description 

La colonne “Public cible” dans l’export CSV.



## Vues

* Export CSV de la Vue globale des formations en libre accès
* Export CSV des statistiques de l’offre



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave
* local_coursehub_index_pub

Sur la base centralisée : 

*  local_indexation_publics

### Requête SQL

La requête est exécutée uniquement sur dgesco.

``` sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	[...]
	IFNULL((SELECT GROUP_CONCAT(lip.name SEPARATOR ', ') FROM
	[[[DB_CENTRAL]]].local_indexation_publics lip WHERE lip.id IN (SELECT lcip.publicid
	FROM {local_coursehub_index_pub} lcip WHERE lcip.indexationid = lci.id )),'Tout le
	monde') AS 'publics',
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0

```



### Consolidation/calcul supplémentaire 

Requête utilisée pour la construction de l’export CSV et se basant sur les données récupérées précédemment.

```SQL
SELECT co.publics [...]
FROM {centraladmindata_offer} co
INNER JOIN mdl_centraladmin_slave cs ON co.slaveid = cs.id
WHERE cs.disabled = 0 AND cs.deleted = 0
ORDER BY lastpublish DESC
```



Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage”.

<div style="page-break-after: always;"></div>

# Vue globale - Export CSV - Mots clés 



## Description 

La colonne “Mots clés” dans l’export CSV



## Vues

* Export CSV de la Vue globale des formations en libre accès
* Export CSV des statistiques de l’offre



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave
* local_coursehub_index_key

### Requête SQL

La requête est exécutée uniquement sur dgesco.

``` sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	[...]
	IFNULL((SELECT GROUP_CONCAT(lcik.keyword SEPARATOR ', ') FROM
	{local_coursehub_index_key} lcik WHERE lcik.indexationid = lci.id ),'') AS 'keywords'
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0
```



### Consolidation/calcul supplémentaire 

Requête utilisée pour la construction de l’export CSV et se basant sur les données récupérées précédemment.

```SQL
SELECT co.keywords [...]
FROM {centraladmindata_offer} co
INNER JOIN mdl_centraladmin_slave cs ON co.slaveid = cs.id
WHERE cs.disabled = 0 AND cs.deleted = 0
ORDER BY lastpublish DESC
```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage”.



<div style="page-break-after: always;"></div>

# Vue globale - Export CSV - Achèvement global activé

## Description 

La colonne “Achèvement global activé” dans l’export CSV



## Vues

* Export CSV de la Vue globale des formations en libre accès
* Export CSV des statistiques de l’offre



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

Sur la base de données de l'instance du parcours : 

* course

### Requête SQL

La requête est exécutée uniquement sur dgesco

``` sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0	
```



La deuxième requête est exécutée sur l’instance sur lequel se trouve le parcours.

```sql
SELECT
c.id AS 'courseid'
c.enablecompletion AS 'courseachievement',
[...]
FROM {course} c
WHERE c.id = [COURSEID]
```





### Consolidation/calcul supplémentaire 

Requête utilisée pour la construction de l’export CSV et se basant sur les données récupérées précédemment.

```SQL
SELECT co.courseachievement [...]
FROM {centraladmindata_offer} co
INNER JOIN mdl_centraladmin_slave cs ON co.slaveid = cs.id
WHERE cs.disabled = 0 AND cs.deleted = 0
ORDER BY lastpublish DESC
```



Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage”. 

Un traitement PHP est fait ensuite pour déterminer la valeur de cette colonne. Si la valeur du champ courseachievement du parcours est de 1, alors la valeur de la colonne sera “oui” dans le cas contraire sa valeur sera “non”



<div style="page-break-after: always;"></div>

# Vue globale - Export CSV - Achèvement global 



## Description 

La colonne “Achèvement global” dans l’export CSV



## Vues

* Export CSV de la Vue globale des formations en libre accès
* Export CSV des statistiques de l’offre



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

Sur la base de données de l'instance du parcours : 

* course
* course_completions

### Requête SQL

La requête est exécutée uniquement sur dgesco

``` sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0
```



La deuxième requête est exécutée sur l’instance sur lequel se trouve le parcours.

```sql
SELECT
c.id AS 'courseid',
(SELECT COUNT(*) FROM {course_completions} cc WHERE cc.course=c.id AND
timecompleted > 0) AS 'courseachievements',
[...]
FROM {course} c
WHERE c.id = [COURSEID]
```



### Consolidation/calcul supplémentaire 

Requête utilisée pour la construction de l’export CSV et se basant sur les données récupérées précédemment.

```SQL
SELECT co.courseachievements [...]
FROM {centraladmindata_offer} co
INNER JOIN mdl_centraladmin_slave cs ON co.slaveid = cs.id
WHERE cs.disabled = 0 AND cs.deleted = 0
ORDER BY lastpublish DESC
```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage”.



<div style="page-break-after: always;"></div>

# Vue globale - Export CSV - Activités 



## Description 

La colonne “Activités” dans l’export CSV.



## Vues

* Export CSV de la Vue globale des formations en libre accès
* Export CSV des statistiques de l’offre



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

Sur la base de données de l'instance du parcours : 

* course
* course_modules

### Requête SQL

La requête est exécutée uniquement sur dgesco

``` sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0
```



La deuxième requête est exécutée sur l’instance sur lequel se trouve le parcours

```sql
SELECT
c.id AS 'courseid',
(SELECT COUNT(*) FROM {course_modules} cm WHERE cm.course = c.id) AS
'nbactivities',
[...]
FROM {course} c
WHERE c.id = [COURSEID]
```



### Consolidation/calcul supplémentaire 

Requête utilisée pour la construction de l’export CSV et se basant sur les données récupérées précédemment.

```SQL
SELECT co.nbactivities [...]
FROM {centraladmindata_offer} co
INNER JOIN mdl_centraladmin_slave cs ON co.slaveid = cs.id
WHERE cs.disabled = 0 AND cs.deleted = 0
ORDER BY lastpublish DESC
```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage”.



<div style="page-break-after: always;"></div>

# Vue globale - Export CSV - Activités interactives 



## Description 

La colonne “Activités interactives” dans l’export CSV. Les activités interactives sont hvp, wordcloud, questionnaire, choice et quiz



## Vues

* Export CSV de la Vue globale des formations en libre accès
* Export CSV des statistiques de l’offre



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

Sur la base de données de l'instance du parcours : 

* course
* course_modules
* modules

### Requête SQL

La requête est exécutée uniquement sur dgesco

``` sql
SELECT
lcc.id AS 'publishid',
lcs.identifiant,
lcc.courseid,
[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0
```

La deuxième requête est exécutée sur l’instance sur lequel se trouve le parcours.

```sql
SELECT
	c.id AS 'courseid',
	(SELECT COUNT(*) FROM {course_modules} cm WHERE cm.course = c.id AND
     cm.module IN (SELECT m.id FROM {modules} m WHERE m.name
	IN('hvp','wordcloud','questionnaire','choice','quiz'))) AS 'nbinteractiveactivities',
	[...]
FROM {course} c
WHERE c.id = [COURSEID]
```



### Consolidation/calcul supplémentaire 

Requête utilisée pour la construction de l’export CSV et se basant sur les données récupérées précédemment.

```SQL
SELECT co.nbinteractiveactivities [...]
FROM {centraladmindata_offer} co
INNER JOIN mdl_centraladmin_slave cs ON co.slaveid = cs.id
WHERE cs.disabled = 0 AND cs.deleted = 0
ORDER BY lastpublish DESC
```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage”.



<div style="page-break-after: always;"></div>

# Vue globale - Export CSV - Activités participatives 



## Description 

La colonne “Activités participatives” dans l’export CSV. Les activités participatives sont workshop, data, bigbluebuttonbn, chat, etherpadlite, forum, via et wiki.

## Vues

* Export CSV de la Vue globale des formations en libre accès
* Export CSV des statistiques de l’offre



## Récupération d'information

### Tables

Sur la base de données de dgesco :

* local_coursehub_course
* local_coursehub_index
* local_coursehub_slave

Sur la base de données de l'instance du parcours : 

* course
* course_modules
* modules

### Requête SQL

La requête est exécutée uniquement sur dgesco

``` sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	[...]
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0
```

La deuxième requête est exécutée sur l’instance sur lequel se trouve le parcours.

```sql
SELECT 
	c.id AS 'courseid',
	(SELECT COUNT(*) FROM {course_modules} cm WHERE cm.course = c.id AND
	cm.module IN (SELECT m.id FROM {modules} m WHERE m.name
	IN('workshop','data','bigbluebuttonbn','chat','etherpadlite','forum','via','wiki'))) AS
	'nbcollaborativeactivities',
	[...]
FROM {course} c
WHERE c.id = [COURSEID]


```



### Consolidation/calcul supplémentaire 

Requête utilisée pour la construction de l’export CSV et se basant sur les données récupérées précédemment.

```SQL
SELECT co.nbcollaborativeactivities [...]
FROM {centraladmindata_offer} co
INNER JOIN mdl_centraladmin_slave cs ON co.slaveid = cs.id
WHERE cs.disabled = 0 AND cs.deleted = 0
ORDER BY lastpublish DESC
```

Cette requête est filtrée selon les permissions dont dispose l’utilisateur accédant à la plateforme “pilotage”.

<div style="page-break-after: always;"></div>

# Annexe 1 - Requête complète de récupération des parcours de l’offre de formation

```sql
SELECT
	lcc.id AS 'publishid',
	lcs.identifiant,
	lcc.courseid,
	lcc.name AS 'name',
	lcc.timemodified AS 'lastpublish',
	lcc.timecreated AS 'firstpublish',
	IFNULL(lci.tps_a_distance,0)+IFNULL(lci.tps_en_presence,0) AS 'duration',
	IFNULL(lci.tps_en_presence,0) AS 'durationlocal',
	IFNULL(lci.tps_a_distance,0) AS 'durationremote',
	IFNULL((SELECT lid.name FROM [[[DB_CENTRAL]]].local_indexation_domains lid
		WHERE id = lci.domainid),'') AS 'domaines',
	UPPER(IF(lci.origin != 'espe' AND lci.origin != 'academie',lci.origin,IF(lci.origin =
	'academie',(SELECT ta.libelle FROM {t_academie} ta WHERE ta.id =
	lci.academyid),(SELECT toe.name FROM {t_origine_espe} toe WHERE toe.id =
	lci.originespeid)))) AS 'origine',
	IFNULL((SELECT lic.name FROM [[[DB_CENTRAL]]].local_indexation_collections lic
		WHERE lic.id = lci.collectionid),'') AS 'nature',
	IFNULL((SELECT GROUP_CONCAT(lip.name SEPARATOR ', ') FROM
		[[[DB_CENTRAL]]].local_indexation_publics lip WHERE lip.id IN (SELECT lcip.publicid
		FROM {local_coursehub_index_pub} lcip WHERE lcip.indexationid = lci.id )),'Tout le monde') AS 'publics',
	IFNULL((SELECT GROUP_CONCAT(lcik.keyword SEPARATOR ', ') FROM {local_coursehub_index_key} lcik 
            WHERE lcik.indexationid = lci.id ),'') AS 'keywords'
FROM {local_coursehub_course} lcc
INNER JOIN {local_coursehub_index} lci ON (lci.publishid = lcc.id)
INNER JOIN {local_coursehub_slave} lcs ON (lcs.id = lcc.slaveid)
WHERE lcc.deleted = 0
AND lcc.publish = 0
AND lcc.isalocalsession = 0
```





# Annexe 2 - Requête complète de récupération des informations de chaque parcours de l’offre de formation sur son instance



```sql
SELECT
c.id AS 'courseid',
c.timecreated AS 'timecreated',
c.enablecompletion AS 'courseachievement',
(SELECT COUNT(*) FROM {course_completions} cc WHERE cc.course=c.id AND
timecompleted > 0) AS 'courseachievements',
(SELECT COUNT(*) FROM {role_assignments} ra
INNER JOIN {context} cx ON (cx.id = ra.contextid)
INNER JOIN {role} r ON (r.id = ra.roleid)
WHERE cx.instanceid = c.id AND cx.contextlevel = 50 AND r.archetype = 'student'
) AS 'nbstudents',
(
SELECT COUNT(DISTINCT cad.userid)
FROM {centraladmin_agent_dayacces} cad
INNER JOIN {role} r ON r.id = cad.roleid
WHERE cad.courseid = c.id AND r.archetype = 'student'
) AS 'nbparticipants',
(
SELECT COUNT(DISTINCT cad.userid)
FROM {centraladmin_agent_dayacces} cad
INNER JOIN {role} r ON r.id = cad.roleid
WHERE cad.courseid = c.id AND r.archetype = 'student' AND (cad.daytime >
:currentyearstart1)
) AS 'nbparticipantscurrentyear',
(
SELECT COUNT(DISTINCT cad.userid)
FROM {centraladmin_agent_dayacces} cad
INNER JOIN {role} r ON r.id = cad.roleid
WHERE cad.courseid = c.id AND r.archetype = 'student' AND (cad.daytime BETWEEN
:lastyearstart1 AND :currentyearstart2)
) AS 'nbparticipantslastyear',
(
SELECT COUNT(DISTINCT cad.userid)
FROM {centraladmin_agent_dayacces} cad
INNER JOIN {role} r ON r.id = cad.roleid
INNER JOIN {user_info_data} uidata ON uidata.userid = cad.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cad.courseid = c.id AND r.archetype = 'student' AND uif.shortname = 'degre'
AND uidata.data = 'Premier degré'
) AS 'nbparticipants1d',
(
SELECT COUNT(DISTINCT cad.userid)
FROM {centraladmin_agent_dayacces} cad
INNER JOIN {role} r ON r.id = cad.roleid
INNER JOIN {user_info_data} uidata ON uidata.userid = cad.userid
    INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cad.courseid = c.id AND r.archetype = 'student' AND uif.shortname = 'degre'
AND uidata.data = 'Premier degré' AND (cad.daytime > :currentyearstart3)
) AS 'nbparticipantscurrentyear1d',
(
SELECT COUNT(DISTINCT cad.userid)
FROM {centraladmin_agent_dayacces} cad
INNER JOIN {role} r ON r.id = cad.roleid
INNER JOIN {user_info_data} uidata ON uidata.userid = cad.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cad.courseid = c.id AND r.archetype = 'student' AND uif.shortname = 'degre'
AND uidata.data = 'Premier degré' AND (cad.daytime BETWEEN :lastyearstart2 AND
:currentyearstart4)
) AS 'nbparticipantslastyear1d',
(
SELECT COUNT(*) FROM {role_assignments} ra
INNER JOIN {context} cx ON (cx.id = ra.contextid)
INNER JOIN {role} r ON (r.id = ra.roleid)
INNER JOIN {user_info_data} uidata ON uidata.userid = ra.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cx.instanceid = c.id AND cx.contextlevel = 50 AND r.archetype = 'student' AND
uif.shortname = 'degre' AND uidata.data = 'Premier degré'
) AS 'nbstudents1d',
(
SELECT COUNT(*) FROM {role_assignments} ra
INNER JOIN {context} cx ON (cx.id = ra.contextid)
INNER JOIN {role} r ON (r.id = ra.roleid)
INNER JOIN {user_info_data} uidata ON uidata.userid = ra.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cx.instanceid = c.id AND cx.contextlevel = 50 AND r.archetype = 'student' AND
uif.shortname = 'degre' AND uidata.data = 'Premier degré'
) AS 'nbstudentscurrentyear1d',
(
SELECT COUNT(*) FROM {role_assignments} ra
INNER JOIN {context} cx ON (cx.id = ra.contextid)
INNER JOIN {role} r ON (r.id = ra.roleid)
INNER JOIN {user_info_data} uidata ON uidata.userid = ra.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cx.instanceid = c.id AND cx.contextlevel = 50 AND r.archetype = 'student' AND
uif.shortname = 'degre' AND uidata.data = 'Premier degré' AND (ra.timemodified <
:currentyearstart5)
) AS 'nbstudentslastyear1d',
(
SELECT COUNT(DISTINCT cad.userid)
FROM {centraladmin_agent_dayacces} cad
INNER JOIN {role} r ON r.id = cad.roleid
INNER JOIN {user_info_data} uidata ON uidata.userid = cad.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cad.courseid = c.id AND r.archetype = 'student' AND uif.shortname = 'degre'
AND uidata.data = 'Second degré'
) AS 'nbparticipants2d',
(
SELECT COUNT(DISTINCT cad.userid)
FROM {centraladmin_agent_dayacces} cad
    INNER JOIN {role} r ON r.id = cad.roleid
INNER JOIN {user_info_data} uidata ON uidata.userid = cad.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cad.courseid = c.id AND r.archetype = 'student' AND uif.shortname = 'degre'
AND uidata.data = 'Second degré' AND (cad.daytime > :currentyearstart6)
) AS 'nbparticipantscurrentyear2d',
(
SELECT COUNT(DISTINCT cad.userid)
FROM {centraladmin_agent_dayacces} cad
INNER JOIN {role} r ON r.id = cad.roleid
INNER JOIN {user_info_data} uidata ON uidata.userid = cad.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cad.courseid = c.id AND r.archetype = 'student' AND uif.shortname = 'degre'
AND uidata.data = 'Second degré' AND (cad.daytime BETWEEN :lastyearstart3 AND
:currentyearstart7)
) AS 'nbparticipantslastyear2d',
(
SELECT COUNT(*) FROM {role_assignments} ra
INNER JOIN {context} cx ON (cx.id = ra.contextid)
INNER JOIN {role} r ON (r.id = ra.roleid)
INNER JOIN {user_info_data} uidata ON uidata.userid = ra.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cx.instanceid = c.id AND cx.contextlevel = 50 AND r.archetype = 'student' AND
uif.shortname = 'degre' AND uidata.data = 'Second degré'
) AS 'nbstudents2d',
(
SELECT COUNT(*) FROM {role_assignments} ra
INNER JOIN {context} cx ON (cx.id = ra.contextid)
INNER JOIN {role} r ON (r.id = ra.roleid)
INNER JOIN {user_info_data} uidata ON uidata.userid = ra.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cx.instanceid = c.id AND cx.contextlevel = 50 AND r.archetype = 'student' AND
uif.shortname = 'degre' AND uidata.data = 'Second degré'
) AS 'nbstudentscurrentyear2d',
(
SELECT COUNT(*) FROM {role_assignments} ra
INNER JOIN {context} cx ON (cx.id = ra.contextid)
INNER JOIN {role} r ON (r.id = ra.roleid)
INNER JOIN {user_info_data} uidata ON uidata.userid = ra.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cx.instanceid = c.id AND cx.contextlevel = 50 AND r.archetype = 'student'
AND uif.shortname = 'degre' AND uidata.data = 'Second degré' AND (ra.timemodified <
:currentyearstart8)
) AS 'nbstudentslastyear2d',
(
SELECT COUNT(DISTINCT cad.userid)
FROM {centraladmin_agent_dayacces} cad
INNER JOIN {role} r ON r.id = cad.roleid
LEFT JOIN {user_info_data} uidata ON uidata.userid = cad.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cad.courseid = c.id AND r.archetype = 'student' AND uif.shortname = 'degre'
AND (uidata.data IS NULL OR uidata.data NOT IN ('Premier degré','Second degré'))
) AS 'nbparticipantsndef',
(SELECT COUNT(DISTINCT cad.userid)
FROM {centraladmin_agent_dayacces} cad
INNER JOIN {role} r ON r.id = cad.roleid
LEFT JOIN {user_info_data} uidata ON uidata.userid = cad.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cad.courseid = c.id AND r.archetype = 'student' AND uif.shortname = 'degre'
AND (uidata.data IS NULL OR uidata.data NOT IN ('Premier degré','Second degré')) AND
(cad.daytime > :currentyearstart9)
) AS 'nbparticipantscurrentyearndef',
(
SELECT COUNT(DISTINCT cad.userid)
FROM {centraladmin_agent_dayacces} cad
INNER JOIN {role} r ON r.id = cad.roleid
LEFT JOIN {user_info_data} uidata ON uidata.userid = cad.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cad.courseid = c.id AND r.archetype = 'student' AND uif.shortname = 'degre'
AND (uidata.data IS NULL OR uidata.data NOT IN ('Premier degré','Second degré')) AND
(cad.daytime BETWEEN :lastyearstart4 AND :currentyearstart10)
) AS 'nbparticipantslastyearndef',
(
SELECT COUNT(*) FROM {role_assignments} ra
INNER JOIN {context} cx ON (cx.id = ra.contextid)
INNER JOIN {role} r ON (r.id = ra.roleid)
LEFT JOIN {user_info_data} uidata ON uidata.userid = ra.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cx.instanceid = c.id AND cx.contextlevel = 50 AND r.archetype = 'student' AND
uif.shortname = 'degre' AND (uidata.data IS NULL OR uidata.data NOT IN ('Premier
degré','Second degré'))
) AS 'nbstudentsndef',
(
SELECT COUNT(*) FROM {role_assignments} ra
INNER JOIN {context} cx ON (cx.id = ra.contextid)
INNER JOIN {role} r ON (r.id = ra.roleid)
LEFT JOIN {user_info_data} uidata ON uidata.userid = ra.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cx.instanceid = c.id AND cx.contextlevel = 50 AND r.archetype = 'student' AND
uif.shortname = 'degre' AND (uidata.data IS NULL OR uidata.data NOT IN ('Premier
degré','Second degré'))
) AS 'nbstudentscurrentyearndef',
(
SELECT COUNT(*) FROM {role_assignments} ra
INNER JOIN {context} cx ON (cx.id = ra.contextid)
INNER JOIN {role} r ON (r.id = ra.roleid)
LEFT JOIN {user_info_data} uidata ON uidata.userid = ra.userid
INNER JOIN {user_info_field} uif ON uidata.fieldid = uif.id
WHERE cx.instanceid = c.id AND cx.contextlevel = 50 AND r.archetype = 'student' AND
uif.shortname = 'degre' AND (uidata.data IS NULL OR uidata.data NOT IN ('Premier
degré','Second degré')) AND (ra.timemodified < :currentyearstart11)
) AS 'nbstudentslastyearndef',
(SELECT COUNT(*) FROM {course_modules} cm WHERE cm.course = c.id) AS
'nbactivities',
(SELECT COUNT(*) FROM {course_modules} cm WHERE cm.course = c.id AND
cm.module IN (SELECT m.id FROM {modules} m WHERE m.name
IN('hvp','wordcloud','questionnaire','choice','quiz'))) AS 'nbinteractiveactivities',
(SELECT COUNT(*) FROM {course_modules} cm WHERE cm.course = c.id AND
cm.module IN (SELECT m.id FROM {modules} m WHERE m.name
IN('workshop','data','bigbluebuttonbn','chat','etherpadlite','forum','via','wiki'))) AS
'nbcollaborativeactivities',
(SELECT COUNT(*) FROM {badge} b WHERE b.courseid = c.id) AS 'nbbadges',
(SELECT COUNT(*) FROM {badge} b INNER JOIN {badge_issued} bi
ON(bi.badgeid=b.id) WHERE b.courseid = c.id) AS 'nbdeliveredbadges',
(SELECT COUNT(*) FROM {user_enrolments} ue INNER JOIN {enrol} e ON (e.id =
ue.enrolid) WHERE e.courseid = c.id AND e.enrol = 'self' AND e.name LIKE 'GAIA%') AS
'gaiausers'
FROM {course} c
WHERE c.id = [COURSEID]
```


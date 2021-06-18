
# <strong style="color:blue; opacity: 0.80">Projet TP COMMERCE ELECTRONIQUE</strong>:mortar_board::computer: 
# <span style="color:green "> 1.Présentation du Projet</span>
 * <strong style="color:dark">ce projet est un site de commerce électronique.
 Les clients pourront chercher les produits qu’ils désirent et les ajouter dans leur panier. S’ils
souhaitent finaliser leurs achats, ils devront s’inscrire pour valider leur commande.
* <strong style="color:dark">Le but de ce TP est de mettre en œuvre les notions de sessions pour affecter un panier à chaque visiteur, puis dans le cas d’un achat d’enregistrer la commande de l’utilisateur. Du côté du client web, nous tiendrons à faciliter la tâche de recherche, de sélection de produits et de validation de la commande.

# <span style="color:green "> 2. La conception de la Base de données</span>
## <span style="color:#66ff66"> Entités et règles de gestion : :label:</span>
Les entités utilisées dans l’application sont : 
* * * 
>●	User, (id, username, email, password) 
●	Commande, (id, nom, produits, quantité, total,doneAt)
●	Produit, (id, nom, quantité, description, image)
●	Catégorie (id, nom)


## <span style="color:#66ff66"> Les règles et associations :label: </span>
### 1. <span style="color:#001a33">Un utilisateur (User) peut demander plusieurs commandes (Une commande est associé à un seul utilisateur).</span>
### 2. <span style="color:#001a33"> Un utilisateur peut chercher un ou plusieurs produits.</span>
### 3. <span style="color:#001a33"> un produit peut avoir une et une seule catégorie.</span>
### 4. <span style="color:#001a33"> Une catégorie peut contenir un ou plusieurs produits.</span>

# <span style="color:green">3.Les Technologies utilisées</span>
 #### <span style="color:#0036ad"> 1.HTML5</span>
 * <strong style="color:dark">Le HyperText Markup Language, généralement abrégé HTML ou dans sa dernière version HTML5, est le langage de balisage conçu pour représenter les pages web.

*voir également à propos [HTML5](https://developer.mozilla.org/fr/docs/Web/HTML) :link: 

 #### <span style="color:#0036ad"> 2.CSS3</span>
 * <strong style="color:dark">Les feuilles de style en cascade, généralement appelées CSS de l'anglais Cascading Style Sheets, forment un langage informatique qui décrit la présentation des documents HTML et XML.

*voir également à propos [HTML5]* [CSS3](https://devdocs.io/css/) :link: 

 #### <span style="color:#0036ad"> 3.BootsTrap</span>
 * <strong style="color:dark">Bootstrap est une collection d'outils utiles à la création du design de sites et d'applications web. 
* <strong style="color:dark">C'est un ensemble qui contient des codes HTML et CSS, des formulaires, boutons, outils de navigation et autres éléments interactifs, ainsi que des extensions JavaScript en option.

*voir également à propos [Bootstrap](https://getbootstrap.com/) :link: 

#### <span style="color:#0036ad"> 4.MySQL</span>
 * <strong style="color:dark">est un système de gestion de base de données relationnelle (SGBDR) open source. Son nom est une combinaison de "My", le nom de la fille du co-fondateur Michael Widenius, et de "SQL", l'abréviation de Structured Query Language. Une base de données relationnelle organise les données en une ou plusieurs tables de données dans lesquelles les types de données peuvent être liés les uns aux autres ; ces relations aident à structurer les données. SQL est un langage utilisé par les programmeurs pour créer, modifier et extraire des données de la base de données relationnelle, ainsi que pour contrôler l'accès des utilisateurs à la base de données.
*voir également à propos* [MySQL](https://devdocs.io/css/) :link: 

#### <span style="color:#0036ad"> 5.JavaScript</span>
 * <strong style="color:dark">JavaScript est un langage de programmation de scripts principalement employé dans les pages web interactives et à ce titre est une partie essentielle des applications web. Avec les technologies HTML et CSS, JavaScript est parfois considéré comme l'une des technologies cœur du World Wide Web.
 
*voir également à propos* [JavaScript](https://developer.mozilla.org/fr/docs/Web/JavaScript) :link: 

#### <span style="color:#0036ad"> 5.PHP</span>
 * <strong style="color:dark">Hypertext Preprocessor, plus connu sous son sigle PHP, est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP, mais pouvant également fonctionner comme n'importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet.
 
*voir également à propos* [PHP](https://www.php.net/) :link:
 

 ## <span style="color:green ">4.CONCEPTION & ANALYSES</span>
 * ###### <strong style="color:red; opacity: 0.80">MCD</strong>

 ![](https://i.imgur.com/mUKhF72.png)


 > Modéle Conceptuel de Données [color=#fd837b]
  ---
  
   * ###### <strong style="color:red; opacity: 0.80">MLD</strong>

 ![](https://i.imgur.com/LGzBFBI.png)


 > Modéle Logique de Données [color=#fd837b]
  ---

 * ###### <strong style="color:red; opacity: 0.80">MPD</strong>

![](https://i.imgur.com/QxQ5Vee.png)


 > Modéle Physique de Données [color=#fd837b]
  ---

 ## <strong style="color: green; opacity: 0.80" >5.comment ça marche ?</strong>
 
:::success
c'est comme ça :white_check_mark: 
:::

![](https://i.imgur.com/gHU0ewg.png)
```
formulaire d'inscription
```
![](https://i.imgur.com/oR8TdQx.png)
```
formualire d'inscription
```
![](https://i.imgur.com/oVMbNL3.png)
![](https://i.imgur.com/Gu0JHzI.png)
![](https://i.imgur.com/ZTN61RD.png)
```
la page home
```
![](https://i.imgur.com/8eU2RzZ.png)
```
la page de consultation de chaque élément 
```
![](https://i.imgur.com/ULHwIEm.png)
```
la page du panier
```
![](https://i.imgur.com/Bgwv211.png)
```
la page de paiment par PayPal
```
![](https://i.imgur.com/RBYArH8.png)
```
la page de paiment par carte bancaire
```
![](https://i.imgur.com/9xrcaeD.png)
```
si l'utilisateur n'est pas connecté, il doit s'inscrire ou se connecter
```


* <strong style="color: dark ; opacity: 0.80">Enfin nous tenons à remercier le seul et unique, notre professeur Mr DAAIF AZIZ *Docteur & professeur à l'ENSET MEDIA* pour son soutien et son encouragement envers nous, aussi pour nous avoir donné cette opportunité d'améliorer nos compétences et de connaître les nouvelles technologies comme celles qui nous avons travaillé.

*voir également à propos* Mr [DAAIF AZIZ](https://www.linkedin.com/in/aziz-daaif-5a6ab090/?originalSubdomain=ma)
</strong>

> Created by :[name=ELMAJNI KHAOULA]
[time=Fri,2021,06,18][color=#EF0101]
>*voir également à propos de moi* [ELMAJNI Khaoula](https://www.linkedin.com/in/khaoula-elmajni/)
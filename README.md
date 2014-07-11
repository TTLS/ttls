Symfony Standard Edition
========================

@Autors: Leger Aurélien, Monneraye Jerôme, Cavanna Christophe
@Project: TTLS - CMS
@Creation Date: 11/07/2014

Installation
----------------------------------

1) Installation de WAMP/Git

La première chose à faire est d'installer WAMP.
A la fin de l'installation, deux choses:
  - Mettre le lien du dossier où se trouve php.exe
  dans les variables d'environnement Windows.
    (Taper 'variable environnement' dans la barre de recherche Windows,
    cliquer sur Variable d'environnement...,
    changer le path en ajoutant ';C:\wamp\bin\php\php5.4.12;')

  - Après avoir installer http://git-scm.com/download/win
  Ajouter également 'C:\Program Files (x86)\Git\bin' aux variables
  d'environnements windows.

2) Récupérer le dépôt sur GitHub

Vous devez d'abord lancez Gitbash,
Vous placez dans le dossier wamp/www ('cd ../../wamp/www'),
Vous lancez le clônage de git ('git clone https://github.com/TTLS/ttls.git')
Voila, vous disposez du dépôt Git sur votre localhost.

3) Mettre à jour le dossier

Grâce à mon intelligence sur-developpée. J'ai fais en sorte que juste le
stricte nécessaire du projet soit disponible sur GitHub.
Vous DEVEZ mettre à jour le dossier avec composer.phar sur votre dossier directement.

Lancez une invite de commande dans votre projet fraichement cloné.
Entrez la commande ('php composer.phar install')

Il se peut qu'à la fin du traitement de la commande, on vous demande des
informations liés à la base. Vous avez juste à changer le nom de la base
en 'ttls' et c'est tout.

Si jamais contactez votre maké adoré.

I) Documentation Fonctionnelle
----------------------------------


II) Documentation Technique
----------------------------------


III) Conclusion
----------------------------------

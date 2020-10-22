# DOCUMENTATION : 

`   ...   ` => sert à colorer le texte 

### GIT : 
//-----------------------   git clone    --------------------

Sert pour cloner depuis github vers sont répertoire courant dans VS Code

`git clone` https://github.com/Spirulineman/__TICKET__.git 

//-----------------------   git status   &&      git add . --------------------

Sert à afficher les fichiers qui ont été créés et/ou modifier dans le projet courant.

EXEMPLE :
    git status
        On branch master

        No commits yet

        Untracked files:
        (use "git add <file>..." to include in what will be committed)

                Doc.md    //  --> en rouge ne sont pas encore traité !! 
                readme.md  //  --> en rouge ne sont pas encore traité !! 

        nothing added to commit but untracked files present (use "git add" to track)


La commande permettant de les déposer est : git add .

résultat de la commande git status ensuite de git add .   : 

    Changes to be committed:

    (use "git rm --cached <file>..." to unstage)

            new file:   Doc.md  //  --> en vert sont indexés mais pas encore sauvegardés pour être envoyés sur github !!
            new file:   readme.md   //  --> en vert sont  indexés mais pas encore sauvegardés pour être envoyés sur github !!

//  -----------------------------    git commit -m ""   -----------------------------

Sert à finaliser l'indexation et la sauvegarde avant de l'envoyer sur le serveur distant de github (les "" permette d'accompagner le commit d'un message pertinent)

Exemple et résultat :

    git commit -m " dépot documentation initiale"
        [master (root-commit) 24ade54]  dépot documentation initiale
        2 files changed, 69 insertions(+)
        create mode 100644 Doc.md
        create mode 100644 readme.md


//  ------------------   git push origin master   --------------------

Sert à envoyer sur le serveur distant

Exemple et résultat :

    git push origin master
        Enumerating objects: 4, done.
        Counting objects: 100% (4/4), done.
        Delta compression using up to 2 threads
        Compressing objects: 100% (4/4), done.
        Writing objects: 100% (4/4), 1.45 KiB | 1.46 MiB/s, done.
        Total 4 (delta 0), reused 0 (delta 0), pack-reused 0
        To https://github.com/Spirulineman/__TICKET__.git
        * [new branch]      master -> master














### Ligne de commande : 

`cd` : déplacer dans l'arborescence (ici serveur eds) (tabulation possible.)


